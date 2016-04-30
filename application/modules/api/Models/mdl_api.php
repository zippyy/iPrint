<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_api extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	function register_db($data, $tbl_name){
		$this->db->insert($tbl_name, $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		return false;
	}

	function login_db($data, $data2){
		$checker = false;
		$this->db->select('*')->from('tbl_cstmr')->where($data);
		$query = $this->db->get();
		if($query->num_rows() > 0){
			foreach ($query->result() as $key) {
				$credentials = array('email' => $key->attr_cstmr_usrnm,
									 'status' => 'customer');
			}
			$checker = true;
		}else{
			$this->db->select('*')->from('tbl_prn_shop_ownr')->where($data2);
			$query = $this->db->get();
			if($query->num_rows() > 0 && $checker == false){
				foreach ($query->result() as $key) {
					$credentials = array('email' => $key->attr_ownr_usrnm,
										 'status' => 'owner');
				}
				$checker = true;
			}
		}
		if($checker){
			$this->session->set_userdata($credentials);	
			return true;
		}
		return false;
	}

	function Get_Current_user($data, $data2){
		$this->db->select('attr_cstmr_fname as fname, attr_cstmr_lname as lname, attr_cstmr_addrss as address, attr_cstmr_cntct_no as contact_no')->from('tbl_cstmr')->where($data);
		$query = $this->db->get();
		if($query->num_rows() > 0){
			$returnData = $query->result();
		}else{
			$this->db->select('attr_ownr_fname as fname, attr_ownr_lname as lname, attr_ownr_addrss as address, attr_ownr_cntct_no as contact_no')->from('tbl_prn_shop_ownr')->where($data2);
			$query = $this->db->get();		
			if($query->num_rows() > 0){
				$returnData = $query->result();
			}	
		}
		return $returnData;
	}

	function prn_shop(){
		$this->db->select('tbl_prn_shop_ownr.*, tbl_prntng_shp.*');
		$this->db->from('tbl_prn_shop_ownr');
		$this->db->join('tbl_prntng_shp', 'tbl_prn_shop_ownr.attr_prn_shop_ownr_id = tbl_prntng_shp.attr_prn_shp_ownr_id');
		$this->db->where('tbl_prn_shop_ownr.attr_ownr_usrnm', $this->session->userdata('email'));
		$query = $this->db->get();
		return $query;
	}

	function update_current_user($tbl_name, $data, $cred){
		$this->db->where($cred);
		$query = $this->db->update($tbl_name, $data);
		if($query){
			return true;
		}
		return false;
	}

	function email_check($email){
		$checker = false;
		$condition = array('attr_cstmr_usrnm' => $email);
		$this->db->select('*')->from('tbl_cstmr')->where($condition);
		$query = $this->db->get();
		if($query->num_rows() > 0){
			$checker = true;
		}else{
			$condition = array('attr_ownr_usrnm' => $email);
			$this->db->select('*')->from('tbl_prn_shop_ownr')->where($condition);
			$query = $this->db->get();	
			if($query->num_rows() > 0 && $checker == false){
				$checker = true;
			}	
		}
		if($checker){
			return true;
		}
		return false;
	}

	function printing_shop(){
		$this->db->select('tbl_prntng_shp.*, tbl_prn_shop_ownr.attr_ownr_fname,  tbl_prn_shop_ownr.attr_ownr_lname, tbl_prn_shop_ownr.attr_ownr_addrss');
		$this->db->from('tbl_prntng_shp');
		$this->db->join('tbl_prn_shop_ownr', 'tbl_prntng_shp.attr_prn_shp_ownr_id = tbl_prn_shop_ownr.attr_prn_shop_ownr_id');
		$query = $this->db->get();
		return $query->result();
	}

	function for_current_user_shop(){
		$this->db->select('*')->from('tbl_prn_shop_ownr')->where('attr_ownr_usrnm', $this->session->userdata('email'));
		$query = $this->db->get();
		$ahm = 0;
		foreach ($query->result() as $key) {
			$ahm = $key->attr_prn_shop_ownr_id;
		}
		return $ahm;
	}

	function update_shop($data, $where){
		$this->db->where($where);
		$this->db->update('tbl_prntng_shp', $data);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	function insert_shop($data){
		$this->db->insert('tbl_prntng_shp', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}else{
			return false;
		}
	}

	function delete_shop($data){
		$this->db->where($data);
		$this->db->delete('tbl_prntng_shp');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	function upload_attachment($data){
		$this->db->insert('tbl_fl_attch', $data);
		if ($this->db->affected_rows() > 0) {
			return $this->db->insert_id();
		}else{
			return $this->db->insert_id();
		}
	}

	function order($data){
		$this->db->insert('tbl_jb_ordr', $data);
		if($this->db->affected_rows() > 0){
			return $this->db->insert_id();
		}else{
			return $this->db->insert_id();
		}
	}


	function for_current_user_shop_cstmr(){
		$this->db->select('*')->from('tbl_cstmr')->where('attr_cstmr_usrnm', $this->session->userdata('email'));
		$query = $this->db->get();
		$ahm = 0;
		foreach ($query->result() as $key) {
			$ahm = $key->attr_cstmr_id;
		}
		return $ahm;
	}

	function transaction(){
		$this->db->select('tbl_jb_ordr.*, tbl_fl_attch.*, tbl_cstmr.attr_cstmr_fname, tbl_cstmr.attr_cstmr_lname, tbl_cstmr.attr_cstmr_cntct_no, tbl_cstmr.attr_cstmr_addrss, tbl_cstmr.attr_cstmr_usrnm , tbl_prn_shop_ownr.*');
		$this->db->from('tbl_jb_ordr');
		$this->db->join('tbl_fl_attch', 'tbl_jb_ordr.attr_fl_attch_id = tbl_fl_attch.attr_fl_attch_id');
		$this->db->join('tbl_cstmr', 'tbl_jb_ordr.attr_cstmr_id = tbl_cstmr.attr_cstmr_id');
		$this->db->join('tbl_prn_shop_ownr', 'tbl_jb_ordr.attr_prntng_shp_id = tbl_prn_shop_ownr.attr_prn_shop_ownr_id');
		$this->db->where('tbl_prn_shop_ownr.attr_ownr_usrnm', $this->session->userdata('email'));
		$query = $this->db->get();
		return $query;
	}

	function transaction2($where){
		$this->db->select('tbl_jb_ordr.*, tbl_fl_attch.*, tbl_cstmr.*, tbl_prn_shop_ownr.*');
		$this->db->from('tbl_jb_ordr');
		$this->db->join('tbl_fl_attch', 'tbl_jb_ordr.attr_fl_attch_id = tbl_fl_attch.attr_fl_attch_id');
		$this->db->join('tbl_cstmr', 'tbl_jb_ordr.attr_cstmr_id = tbl_cstmr.attr_cstmr_id');
		$this->db->join('tbl_prn_shop_ownr', 'tbl_jb_ordr.attr_prntng_shp_id = tbl_prn_shop_ownr.attr_prn_shop_ownr_id');
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
	}

}