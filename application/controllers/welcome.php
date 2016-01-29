<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
		{
			parent::__construct();
			//load model

			$this->load->model('billing_model');
			$this->load->helper('url');
			$this->load->library('cart');
			//$this->load->library("pagination");
		}

	public function index()
	{
		$data['title'] = "Featured Items";
		$data['products'] = $this->billing_model->get_all();
		$data['latests'] = $this->billing_model->get_all_latest();
		$data['header'] = $this->load->view('header');
		$this->load->view('home',$data);
	}
	public function collection(){
	/*
		$data['title'] = "Collection";
		$data['products'] = $this->billing_model->get_all();
            //$data['pagination'] = $this->billing_model->get_all($pagination['per_page']);
		$this->load->view('collections',$data);
	*/
    $this->load->library('pagination');
    $config['base_url'] = site_url().'welcome/collection/';
    $config['total_rows'] = $this->db->count_all('property');
    $config['per_page'] = '6';
    $config['full_tag_open'] = '<p>';
    $config['full_tag_close'] = '</p>';

    $this->pagination->initialize($config);
		
    //load the model and get results
    $this->load->model('billing_model');
    $data['results'] = $this->billing_model->get_books($config['per_page'],$this->uri->segment(3));
		
    // load the HTML Table Class
    $this->load->library('table');
    $this->table->set_heading('ID', 'Title', 'Author', 'Description');
		
    // load the view
    //$this->load->view('books_view', $data);
    //$data['products'] = $this->billing_model->get_all();
                $data['header'] = $this->load->view('header');
		$this->load->view('collections',$data);			
	}


	public function mycart(){
		$data['header'] = $this->load->view('header');
		$this->load->view('my-cart',$data);

	}

	public function registering(){
		$data['countries'] = $this->billing_model->get_country();
		$data['getmembers'] = $this->billing_model->get_catmember();
		$this->load->view('create-account',$data);
	}

	public function myaccount(){
		$this->load->view('my-account');
	}


	public function insert_register(){
		$email_address = $this->input->post('email');
		//$this->db->where('user_name', $this->input->post('username'));
		$this->db->where('email_address', $email_address);
		$query = $this->db->get('membership');
		//$query = $this->db->get('tb_checkout');

        if($query->num_rows > 0){
        	echo '<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>';
			  echo "Email already taken";	
			echo '</strong></div>';       		
			redirect('register');
		}else{

			$inserting = array(
				'first_name' => $this->input->post('fname'),
				'last_name' => $this->input->post('lname'),
				'email_address' => $this->input->post('email'),			
				'user_name' => $this->input->post('email'),
				'pass_word' => md5($this->input->post('password')),
				'category' => $this->input->post('category')						
			);
			//$insert = $this->db->insert('membership', $inserting);

			$save_customer = array(
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password')						
			);

			$checkout = array(
				'country' => $this->input->post('country'),
				'first_name' => $this->input->post('fname'),
				'last_name' => $this->input->post('lname'),
				'companyname' => $this->input->post('company'),
				'address' => $this->input->post('address'),
				'city' => $this->input->post('city'),
				'state' => $this->input->post('state'),
				'zip' => $this->input->post('postcode'),
				'phone' => $this->input->post('phone'),
				'email_address' => $this->input->post('email'),
				'email2' => $this->input->post('email'),
				'address2' => $this->input->post('address'),
				'status' => "1"
			);


			$shipping = array(
				'country' => $this->input->post('s_country'),
				'first_name' => $this->input->post('s_fname'),
				'last_name' => $this->input->post('s_lname'),
				'companyname' => $this->input->post('s_company'),
				'address' => $this->input->post('s_address'),
				'city' => $this->input->post('s_city'),
				'state' => $this->input->post('s_state'),
				'zip' => $this->input->post('s_zip'),
				'email_address' => $this->input->post('s_email'),
				'phone' => $this->input->post('s_phone'),
				'email2' => $this->input->post('s_email'),
				'address2' => $this->input->post('s_address')
			);

    $this->load->view('recaptchalib');
    $secret = "6Ld7mxITAAAAAFN_ldjgHJ01_NbamZX4GeUtQcEy";     
    // empty response
    $response = null;     
    // check secret key
    $reCaptcha = new ReCaptcha($secret);
	 if (isset($_POST['g-recaptcha-response']) && $_POST['g-recaptcha-response'])  {
	    $response = $reCaptcha->verifyResponse(
	        $_SERVER["REMOTE_ADDR"],
	        $_POST["g-recaptcha-response"]
	    );
	}
	if ($response != null && $response->success) {
	    //echo "Hi " . $_POST["fname"] . " (" . $_POST["lname"] . "), thanks for submitting the form!";
	    $data['members'] = $this->billing_model->register_member($inserting);
	    $checkout_form = $this->billing_model->form_checkout($checkout);
	    $shipping_form = $this->billing_model->form_shipping($shipping);
	    $customersave = $this->billing_model->save_customer($save_customer);

	    redirect (base_url());
	  } else {
	?>

	<script>
	alert ('You have forget to captcha ');
	window.location.href = "http://localhost/jewelofequator_ci/register";
	</script>

	<?php
		//redirect('register');
	  	//redirect(base_url());

	} 
			//$data['members'] = $this->billing_model->register_member($inserting);
		    //redirect (base_url());
		}

	}

// for function about us

	public function aboutus(){
		$data['header'] = $this->load->view('header');
		$this->load->view('about-us',$data);
	}

	public function contacto(){
		$data['header'] = $this->load->view('header');
		$this->load->view('contacto');
	}

    public function Send_Mail() {
        
            
            // Storing submitted values
            //$sender_email = $this->input->post('user_email');
            //$user_password = $this->input->post('user_password');
            $receiver_email = $this->input->post('to_email');
            $username = $this->input->post('name');
            //$subject = $this->input->post('subject');
            $message = $this->input->post('message');
            
            // Configure email library
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'ssl://smtp.googlemail.com';
            $config['smtp_port'] = 465;
            $config['smtp_user'] = 'pisakakris@gmail.com';
            $config['smtp_pass'] = 'adm1n1234';

            // Load email library and passing configured values to email library 
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            
            // Sender email address
            $this->email->from('admin@teot.com', $username);
            // Receiver email address
            $this->email->to($receiver_email);
            // Subject of email
            $this->email->subject('Contact Form');
            // Message in email
	
	        $receiver = $receiver_email;
		    $message = $receiver."\n".$message."\n";
		    $message .= " New line ... ";

            $this->email->message($message);

            if ($this->email->send()) {
                $data['message_display'] = 'Email Successfully Send !';
            } else {
                $data['message_display'] = '<p class="error_msg">Invalid Gmail Account or Password !</p>';
            }
            //$this->load->view('contacto', $data);
            //redirect('index');
            echo '
            	<script>
            	alert("Please check your email, thank you");
            	</script>
            ';
            redirect(site_url());
        
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */