<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends MX_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('mdl_api');
	}

	public function register(){
		if($this->input->post('status') == 0){
			$data = array('attr_cstmr_fname' => $this->input->post('reg_firstname'), 
						  'attr_cstmr_lname' => $this->input->post('reg_lastname'), 
						  'attr_cstmr_usrnm' => $this->input->post('reg_email'), 
						  'attr_cstmr_psswrd' => $this->input->post('reg_password'), 
						  'attr_cstmr_addrss' => $this->input->post('reg_address'), 
						  'attr_cstmr_cntct_no' => $this->input->post('reg_contact_no'));
			$tbl_name = "tbl_cstmr";	
		}else{
			$data = array('attr_ownr_fname' => $this->input->post('reg_firstname'), 
						  'attr_ownr_lname' => $this->input->post('reg_lastname'), 
						  'attr_ownr_usrnm' => $this->input->post('reg_email'), 
						  'attr_ownr_psswrd' => $this->input->post('reg_password'), 
						  'attr_ownr_addrss' => $this->input->post('reg_address'), 
						  'attr_ownr_cntct_no' => $this->input->post('reg_contact_no'));		
			$tbl_name = "tbl_prn_shop_ownr";	
		}

		$email = $this->input->post('reg_email');

		if(!$this->mdl_api->email_check($email)){
			if($this->mdl_api->register_db($data, $tbl_name)){
				echo "success";
			}else{
				echo "failed";
			}
		}else{
			echo "Email is Used.";
		}
	}

	public function login(){
		$data = array('attr_cstmr_usrnm' => $this->input->post('lg_email'), 
					  'attr_cstmr_psswrd' => $this->input->post('lg_password'));
		$data2 = array('attr_ownr_usrnm' => $this->input->post('lg_email'), 
					  'attr_ownr_psswrd' => $this->input->post('lg_password'));
		if($this->mdl_api->login_db($data, $data2)){
			echo "success";
		}else{
			echo "failed";
		}
	}

	public function update_user(){
		if($this->session->userdata('status') == 'customer'){
			$data = array('attr_cstmr_fname' => $this->input->post('profile_data_fnm'), 
						  'attr_cstmr_lname' => $this->input->post('profile_data_lnm'), 
						  'attr_cstmr_addrss' => $this->input->post('profile_data_add'), 
						  'attr_cstmr_cntct_no' => $this->input->post('profile_data_cn	'));
			$tbl_name = "tbl_cstmr";	
			$where = array('attr_cstmr_usrnm' =>  $this->session->userdata('email'));
		}else{
			$data = array('attr_ownr_fname' => $this->input->post('profile_data_fnm'), 
						  'attr_ownr_lname' => $this->input->post('profile_data_lnm'),  
						  'attr_ownr_addrss' => $this->input->post('profile_data_add'), 
						  'attr_ownr_cntct_no' => $this->input->post('profile_data_cn'));		
			$tbl_name = "tbl_prn_shop_ownr";	
			$where = array('attr_ownr_usrnm' =>  $this->session->userdata('email'));
		}
		if($this->mdl_api->update_current_user($tbl_name, $data, $where)){
			echo "success";
		}else{
			echo "failed";
		}
	}

	public function getPrnShp(){
		$data = $this->mdl_api->prn_shop();
		$response['success'] = true;
		$response['aaData'] = $data->result();
		echo json_encode($response);
	}

	public function getPrintShops(){
		$cred = $this->mdl_api->printing_shop();
		$this->output->set_header('Content-Type: application/json;charset=utf-8');
		echo json_encode($cred);
	}

	public function current_user(){
		$data = array('attr_cstmr_usrnm' => $this->input->post('email') );
		$data2 = array('attr_ownr_usrnm' => $this->input->post('email') );
		$cred = $this->mdl_api->Get_Current_user($data, $data2);
		$this->output->set_header('Content-Type: application/json;charset=utf-8');
		echo json_encode($cred);
	}

	public function insert_new_shop(){
		$id = $this->mdl_api->for_current_user_shop();

		$data = array('attr_ps_contact' => $this->input->post('shop_cn'),
					  'attr_ps_lat' => $this->input->post('shop_latitude'), 
					  'attr_prntng_shp_name' => $this->input->post('shop_name'),
					  'attr_ps_long' => $this->input->post('shop_longitude'),
					  'attr_prntng_shp_addrss' => $this->input->post('shop_Address'),
					  'attr_prn_shp_ownr_id' => $id);

		if($this->mdl_api->insert_shop($data)){
			$path = 'uploads/'.$this->session->userdata('email');
			if(!is_dir($path)) //create the folder if it's not already exists
			{
			  mkdir($path,0777,TRUE);	 
			}
			 echo "success";
		}else{
			echo "failed";
		}
	}

	public function update_shop(){
		$data = array('attr_ps_contact' => $this->input->post('e_shop_cn'),
					  'attr_ps_lat' => $this->input->post('e_shop_latitude'), 
					  'attr_prntng_shp_name' => $this->input->post('e_shop_name'),
					  'attr_ps_long' => $this->input->post('e_shop_longitude'),
					  'attr_prntng_shp_addrss' => $this->input->post('e_shop_Address'));

		$where = array('attr_prn_shp_id' => $this->input->post('e_shop_id'));
		if($this->mdl_api->update_shop($data, $where)){
			echo "success";
		}else{
			echo "failed";
		}
	}

	public function delete_shop(){
		$data = array('attr_prn_shp_id' => $this->input->post('d_shop_id'));
		if($this->mdl_api->delete_shop($data)){
			echo "success";
		}else{
			echo "failed";
		}
	}

	public function data(){
		$data = $this->mdl_api->transaction();
		$response['success'] = true;
		$response['aaData'] = $data->result();

		$this->output->set_header('Content-Type: application/json;charset=utf-8');
		echo json_encode($response);
	}

	public function ChangeProfilePic(){
		$config['upload_path'] = "./uploads/".$this->input->post('path');
		$config['allowed_types'] = "gif|jpg|png|mp4|ogv|pptx|ppt|doc|docx|xls|xml|html|psd";

		$cleanName = str_replace(' ', '-', $_FILES['file']['name']);
		$new_name =	time().preg_replace('/[^A-Za-z0-9\-.]/', '', $cleanName);

		$config['file_name'] = $new_name;
		$this->load->library('upload', $config);

		if($this->upload->do_upload("file")){
			$sourceFile = array('attr_fl_attch_nm' => $new_name);
			$attc_id = $this->mdl_api->upload_attachment($sourceFile);
			if($attc_id > 0){
				$jobdetail = array('attr_cstmr_id' => $this->mdl_api->for_current_user_shop_cstmr(),
				 				   'attr_fl_attch_id' => $attc_id,
				 				   'attr_prntng_shp_id' => $this->input->post('prntng_shp_id'),
				 				   'attr_jb_date' => date('Y-m-d'));
				$jb_id = $this->mdl_api->order($jobdetail);
				if($jb_id > 0){
					$jb_ordr = array('tbl_jb_ordr.attr_jb_id' =>  $jb_id,
									 'tbl_cstmr.attr_cstmr_usrnm' => $this->session->userdata('email'));
					$data = $this->mdl_api->transaction2($jb_ordr);
					$page = array('success' => true ,
        				  'stats' => $data);	
				}else{
					$page = array('success' => false ,
        				          'stats' => 'Error Jb_id' );
				}
			}else{
				$page = array('success' => false ,
        				      'stats' => 'Error attc_id' );
			}
		}else{
			$page = array('success' => false ,
        				  'stats' => $this->upload->display_errors() );
		}
		
		$this->output->set_header('Content-Type: application/json;charset=utf-8');
		echo json_encode($page);
	}

	public function sign_out(){			
		$this->session->sess_destroy();
		redirect('/');
	}



}

