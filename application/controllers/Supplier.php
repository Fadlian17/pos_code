<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
		check_admin();
		$this->load->model('supplier_m');
		$this->load->library('form_validation');
	}
	
	public function index()
	{
		$data['row'] = $this->supplier_m->get();
		$this->template->load('template','supplier/supplier_data',$data);
	}

	public function add()
	{
		$supplier = new stdClass();
		$supplier->supplier_id = null;
		$supplier->name = null;
		$data = array (
			'page' => 'add',
			'row' => $supplier
		);
		$this->template->load('template','supplier/supplier_form');
	}

	public function delete($id)
	{
		$this->supplier_m->delete($id);
		if ($this->db->affected_rows() >0) {
			echo "<script>alert('Data berhasil dihapus')</script>";
		}
		echo "<script>window.location='".site_url('supplier')."';</script>";
	}
}
