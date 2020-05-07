<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller 
{

    public function __construct() 
    {
		parent::__construct();
		$this->load->model('wxpcontrol/AdminModel');
	}


	public function index()
  	{
  		$this->load->view('wxpcontrol/login');
  	}


	public function checkSession()
  	{	
  		$userId = $this->session->userdata('id');
  		if (empty($userId)) {
			redirect('admin/login');
		}	
  	}
 function get($API=null,$param = null)
  //API="http://localhost/codeigniterapi/index.php/api";
      {
          if($param == null)
          {
              $curl_handle = curl_init();
              curl_setopt($curl_handle, CURLOPT_URL, $API);
              curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
              $buffer = curl_exec($curl_handle);
              return $buffer;
          }else{
             $params = '?';
              foreach ($param as $key => $value){
                 $params .= $key.'='.$value.'&';
             }
             $curl_handle = curl_init();
             curl_setopt($curl_handle, CURLOPT_URL,  $API.$params);
             curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
             $buffer = curl_exec($curl_handle);
             return $buffer;
         }
     }

  	public function callApi($phone = null)
        {
            $json = $this->get('http://localhost:3000/users/api/get_id_proof');
            echo $json;die;
        }

  	/*public function callApi($phone = null)
    {
		$your_url = "http://localhost:3000/users/api/get_id_proof"; //put your url here
		 $result = json_decode (file_get_contents($your_url));
		  echo $result;die;

        /*$curl_handle = curl_init();
        curl_setopt($curl_handle, CURLOPT_URL, 'http://localhost:3000/users/api/get_id_proof');
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl_handle, CURLOPT_POST, 1);
        curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
            'phone' => $phone
        ));

        // Optional, delete this line if your API is open
       // curl_setopt($curl_handle, CURLOPT_USERPWD, $username . ':' . $password);

        $buffer = curl_exec($curl_handle);
        curl_close($curl_handle);

        $result = json_decode ($buffer);
        echo $result;die;

        if(isset($result->status) && $result->status == 'success')
        {
            echo 'Record inserted successfully...';
        }

        else
        {
            echo 'Something has gone wrong';
        }
    }*/


 /* public function register()
  	{		
		$data = [];
		$this->checkSession();
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('confirm_password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('wxpcontrol/register');
			return;
		} else {
			$emailResult = 0;
			if ($this->input->post('password') == $this->input->post('confirm_password')) {
				$newPassword  = base64_encode($this->input->post('password'));
				$adminData = [
					'username' => $this->input->post('username'),
					'email' => $this->input->post('email'),
					'password' => $newPassword
				];
				if (!empty($adminData['email'])) {
					$emailResult = $this->AdminModel->alreadyExists($adminData['email']);
					if (!empty($emailResult)) {
						$data['errorMsg'] = "Your Email Already Exists.";
						$this->load->view('wxpcontrol/register',$data);	
						return;
					} else {
						$result = $this->AdminModel->adminInsert($adminData);
						if (!empty($result)) {
							$data['successMsg'] = "New Admin Register Successfully.";
							$this->load->view('wxpcontrol/login',$data);
							return;
						}
					}
				} 
			}
			$data['errorMsg'] = "'password' and 'confirm password' do not match";
		}
		$this->load->view('wxpcontrol/register',$data);		
	}
*/

public function login(){
$this->form_validation->set_rules('phone', 'Phone', 'required');
if ($this->form_validation->run() == FALSE) {
			$this->load->view('wxpcontrol/login');
			return;
		} else {
		$this->load->view('wxpcontrol/verify_otp');
		//$this->callApi($this->input->post('phone'));
        	}

}

public function verifyOTP(){
$this->form_validation->set_rules('otp', 'otp', 'required');
if ($this->form_validation->run() == FALSE) {
			$this->load->view('wxpcontrol/verify_otp');
			return;
		} else {
			//call api of verify otp
			$this->session->set_userdata(array(	
					'id' => "4",
					'user_type' => "3",
					'username' => "nidhi",
					'email' =>"",
					'password' => ""					
				));
		redirect('admin/dashboard');
        	}

}


    public function dashboard()
  	{
  		$this->checkSession();
  		$this->load->view('wxpcontrol/dashboard');
	}

	public function projects()
    {
        $this->checkSession();
        $this->load->view('wxpcontrol/projects');
    }

    public function employees()
        {
            $this->checkSession();
            $this->load->view('wxpcontrol/employees');
        }

    public function vendors()
    {
            $this->checkSession();
            $this->load->view('wxpcontrol/vendors');
    }


    public function AvailableStoke()
    {
            $this->checkSession();
            $this->load->view('wxpcontrol/available_stoke');
    }

    public function RequiredMaterial()
    {
            $this->checkSession();
            $this->load->view('wxpcontrol/required_material');
    }

    public function FollowUp()
    {
            $this->checkSession();
            $this->load->view('wxpcontrol/follow_up');
    }

    public function AddVendor()
    {
            $this->checkSession();
            $this->load->view('wxpcontrol/add_vendor');
    }

    public function AddCategory()
    {
            $this->checkSession();
            $this->load->view('wxpcontrol/add_category');
    }

    public function AddQtyUnit()
    {
            $this->checkSession();
            $this->load->view('wxpcontrol/add_qty_unit');
    }

    public function AddItem()
    {
            $this->checkSession();
            $this->load->view('wxpcontrol/add_item');
    }



  /*	public function login()
  	{	
  		$data = [];
  		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('wxpcontrol/login');
			return;
		} else {
			$newPassword  = base64_encode($this->input->post('password'));
			$adminLoginData = [
				'email' => $this->input->post('email'),
				'password' => $newPassword
			];
			$getLoginData = $this->AdminModel->adminLogin($adminLoginData);
			if (!empty(count($getLoginData))) {
				$this->session->set_userdata(array(	
					'id' => $getLoginData['id'],
					'user_type' => $getLoginData['user_type'],
					'username' => $getLoginData['username'],
					'email' => $getLoginData['email'],
					'password' => $getLoginData['password']					
				));
				redirect('admin/dashboard');
			} else {
				$data['errorMsg'] = 'Invalid Email and Password.';				
			}
		}
		$this->load->view('wxpcontrol/login',$data);
	}
*/

  	public function logout()
  	{	 
  		$getSessionData = $this->session->all_userdata();
  		$this->session->unset_userdata($getSessionData['__ci_last_regenerate']);
        $this->session->sess_destroy();
        $this->load->view('wxpcontrol/login');				
	}


  	public function profile()
  	{		
  		$this->checkSession();
  		$this->load->view('wxpcontrol/profile');
	}

  	public function editProfile()
  	{		
  		$data = [];
  		$updateResult = 0;
  		$this->checkSession();
		$this->form_validation->set_rules('username', 'Full Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('wxpcontrol/profile');
			return;
		} else {
			$profileData = [
	  			'username' => $this->input->post('username'),
	  			'email' => $this->input->post('email')
	  		];
	  		$updateResult = $this->AdminModel->updateProfile($profileData,$this->input->post('userId'));
	  		if (!empty($updateResult)) {
				$data['successMsg'] = 'Admin Profile Update Successfully.';
			}
		}
		$this->load->view('wxpcontrol/profile',$data);
	}


  	public function changePassword()
  	{
		$data = [];
		$this->checkSession();
  		$this->form_validation->set_rules('oldPassword', 'old Password', 'required');
		$this->form_validation->set_rules('newPassword', 'new Password', 'required');
		$this->form_validation->set_rules('confirmPassword', 'confirm Password', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('wxpcontrol/changePassword');
			return;
		} else {
			$oldPassword = base64_encode($this->input->post('oldPassword'));
			$userId = $this->session->userdata('id');
			$checkPwdResult = $this->AdminModel->checkPasswordByDB($oldPassword,$userId);
			if (!empty($checkPwdResult)) {
				$newPassword = $this->input->post('newPassword');
				$confirmPassword = $this->input->post('confirmPassword');
				if ($newPassword == $confirmPassword) {
	            	$updatePwd = $this->AdminModel->updatePassword($newPassword,$this->session->userdata('id'));
					$data['successMsg'] = 'Admin Password Update Successfully.';
	        	} else {
					$data['errorMsg'] = "'password' and 'confirm password' do not match";
				}
			} else {
				$data['errorMsg'] = 'Current Password does not match.';
			}
			/*$sessionPwd =  $this->session->userdata('password');
			$currentPassword = base64_encode($this->input->post('oldPassword'));
			if ($sessionPwd == $currentPassword) {
				$newPassword = $this->input->post('newPassword');
				$confirmPassword = $this->input->post('confirmPassword');
				if ($newPassword == $confirmPassword) {
	            	$updatePwd = $this->AdminModel->updatePassword($newPassword,$this->session->userdata('id'));
					$data['successMsg'] = 'Admin Password Update Successfully.';
	        	} else {
					$data['errorMsg'] = "'password' and 'confirm password' do not match";
				}
			} else {
				$data['errorMsg'] = 'Current Password does not match.';
			}*/
		}
		$this->load->view('wxpcontrol/changePassword',$data);
	}


  	public function recoverPassword()
  	{
  		$data = [];
  		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('wxpcontrol/forgotPassword');
			return;
		} else {
			$email = $this->input->post('email');
			$getPasswordByEmail =  $this->AdminModel->checkEmailByDB($email);
			if (!empty($getPasswordByEmail) && is_array($getPasswordByEmail)) {
				$data['successMsg'] = "Your Password is : ".base64_decode($getPasswordByEmail['password'])."";
			} else {
				$data['errorMsg'] = "Wrong Email Address.";
			}
		}
		$this->load->view('wxpcontrol/forgotPassword',$data);
	}	
}
