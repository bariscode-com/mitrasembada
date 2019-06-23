<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_service extends CI_Controller {

	public function index()
	{
		$data['title'] = 'CV. Mitra Sembada Tehnik | Product & service';
		$data['deskripsi_halaman'] = 'Kontraktor mekanikal elektrikal, kontraktor sipil, jasa perawatan air conditioning';
		$data['keyword_pencarian'] = 'Service ac jabodetabek, kontraktor sipil jabodetabek, kontraktor mekanikal elektrikal jabodetabek';
		$data['judul_page'] = 'Product & service';

		$this->load->view('tamplates/head',$data);
		$this->load->view('page/product_service',$data);
		$this->load->view('tamplates/footer',$data);
	}
}