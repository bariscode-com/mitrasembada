<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client_list extends CI_Controller {

	public function index()
	{
		$data['title'] = 'CV. Mitra Sembada Tehnik | Client List';
		$data['deskripsi_halaman'] = 'Kontraktor mekanikal elektrikal, kontraktor sipil, jasa perawatan air conditioning';
		$data['keyword_pencarian'] = 'Service ac jabodetabek, kontraktor sipil jabodetabek, kontraktor mekanikal elektrikal jabodetabek';
		$data['judul_page'] = 'Client List';

		$this->load->view('tamplates/head',$data);
		$this->load->view('page/client_list',$data);
		$this->load->view('tamplates/footer',$data);
	}
}