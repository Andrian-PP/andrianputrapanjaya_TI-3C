<?php 
/**
 * summary
 */
class Beranda extends CI_Controller
{
	public function index()
	{
		 $data['judul']= 'PMK STMIK PLK 2023-2024';
		$this->load->view('templates/header',$data);
		$this->load->view('Beranda/index',$data);
		$this->load->view('templates/footer');




	}
}
 ?>