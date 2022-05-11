<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_barang');
	}

	public function index()
	{
		$recBarang = $this->M_barang->getDataProduk();
		$data = [
			'data_barang' => $recBarang
		];
		$this->load->view('home', $data);
	}

	public function formInput()
	{
		$this->load->view('form_input');
	}
	
	public function formEdit($id)
	{
		$recProduk = $this->M_barang->getDataEdit($id);
		$data = [
			'data_produk' => $recProduk
		];
		$this->load->view('form_edit', $data);
	}
	
	public function insertProduk()
	{
		$nama_produk = $this->input->post('nama_produk');
		$ket = $this->input->post('ket');
		$harga = $this->input->post('harga');
		$jumlah = $this->input->post('jumlah');

		$data_insert = [
			'nama_produk' => $nama_produk,
			'keterangan' => $ket,
			'harga' => $harga,
			'jumlah' => $jumlah
		];
		$this->M_barang->insertdata($data_insert);
		redirect(base_url('welcome'));
	}

	public function editproduk(){
		$nama_produk = $this->input->post('nama_produk');
		$ket = $this->input->post('ket');
		$harga = $this->input->post('harga');
		$jumlah = $this->input->post('jumlah');
		$id_produk = $this->input->post('id_produk');

		$data_update = [
			'nama_produk' => $nama_produk,
			'keterangan' => $ket,
			'harga' => $harga,
			'jumlah' => $jumlah
		];
		$this->M_barang->editData($data_update, $id_produk);
		redirect(base_url('welcome'));
	}

	public function delete($id){
		$this->M_barang->deleteData($id);
		redirect(base_url('welcome'));
	}
}
