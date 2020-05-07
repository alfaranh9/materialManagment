
<?php 
Class AdminModel extends CI_Model {
	
	protected  $table = 'user_master';	
	protected  $userId = 'id';           // PK
	protected  $userType = 'user_type'; 
	protected  $userName = 'username';	
	protected  $password = 'password';
	protected  $email = 'email';
	protected  $mobile = 'mobile';
	protected  $createdAt = 'created_at';
	protected  $status = 'status';
	protected  $isDeletedStatus = 'is_deleted_status';
	

	public function adminInsert($adminData = null) {
		$insertResult = 0;
		if (!empty($adminData)) {
			$insertResult = $this->db->insert($this->table, $adminData);
		}	
		return $insertResult;
	}


	public function alreadyExists($email = null) {
		$emailresult = 0;
		if (!empty($email)) {
			$condition = "".$this->email." ='".$email."'";
			$this->db->select($this->email);
			$this->db->from($this->table);
			$this->db->where($condition);
			$query = $this->db->get();
			if ($query->num_rows() > 0) {
				return $query->num_rows();
        	}
		}	
		return $emailresult;
	}


	public function adminLogin($adminLoginData = NULL) {
		$getLoginData = [];
		if (!empty($adminLoginData)) {
			$this->db->select('*');
			$this->db->from($this->table);
			$this->db->where($this->email,$adminLoginData['email']);
			$this->db->where($this->password,$adminLoginData['password']);
			$this->db->where($this->status,'Yes');
			$this->db->where($this->isDeletedStatus,0);
			$query = $this->db->get();
			


			if ($query->num_rows() > 0) {
				$getLoginData = $query->row_array();
        	} 
		}
		return $getLoginData;
	}


	public function updateProfile($profileData = NULL,$userId = 0) {
		$updateResult = 0;
		if (!empty($profileData) && !(empty($userId))) {
			$this->db->where($this->userId,$userId);
			$updateResult = $this->db->update($this->table,$profileData);
		}
		return $updateResult;
	}
	

	public function updatePassword($newPassword = null,$userId = 0) {
		$updateResult = 0;
		if (!empty($newPassword) && !empty($userId)) {
			$this->db->where($this->userId,$userId);
			$newPwdData = [$this->password => base64_encode($newPassword)];
			$updateResult = $this->db->update($this->table,$newPwdData);
		}
		return $updateResult;
	}


	public function checkEmailByDB($email = null) {
		$getPassword = [];
		if (!empty($email)) {
			$condition = "".$this->email."=" . "'" . $email. "'";
			$this->db->select($this->password);
			$this->db->from($this->table);
			$this->db->where($condition);
			$this->db->limit(1);
			$query = $this->db->get();
			if ($query->num_rows() > 0) {
        		$getPassword = $query->row_array();
        	}
		}
		return $getPassword;
	}

	public function checkPasswordByDB($oldPassword = null,$userId= 0) {
		$checkPwdResult = 0;
		if (!empty($oldPassword) && !empty($userId)) {
			$this->db->select('*');
			$this->db->from($this->table);
			$this->db->where($this->password,$oldPassword);
			$this->db->where($this->userId,$userId);
			$query = $this->db->get();
			$sql = $this->db->last_query();
			if ($query->num_rows() > 0) {
				$checkPwdResult = $query->num_rows();
			}
		}
		return $checkPwdResult;
	}

}

?>
