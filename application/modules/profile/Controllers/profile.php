<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends MX_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function Profile_sets()
	{ $this->load->view('/vws_profile'); }

	public function After_log()
	{ $this->load->view('/vws_alog'); }

	public function Subscription()
	{ $this->load->view('/vws_subscription'); }

	public function DataList()
	{ $this->load->view('/vws_data_list'); }
}

