<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$data['title'] = 'CV. Mitra Sembada Tehnik | Contact Person';
		$data['deskripsi_halaman'] = 'Kontraktor mekanikal elektrikal, kontraktor sipil, jasa perawatan air conditioning';
		$data['keyword_pencarian'] = 'Service ac jabodetabek, kontraktor sipil jabodetabek, kontraktor mekanikal elektrikal jabodetabek';
		$data['judul_page'] = 'Contact Person';

		$this->load->view('tamplates/head',$data);
		$this->load->view('page/contact',$data);
		$this->load->view('tamplates/footer',$data);
	}
}