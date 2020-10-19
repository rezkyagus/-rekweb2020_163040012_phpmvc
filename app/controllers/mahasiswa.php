<?php

class Mahasiswa extends Controller {

	public function index()
	{
		$data['judul'] = 'Daftar Mahasiswa';
		$data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
		$this->view('templates/header', $data);
		$this->view('templates/index', $data);
		$this->view('templates/footer');
	}

	public function detail($id)
	{
		$data['judul'] = 'Detail Mahasiswa';
		$data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaId($id);
		$this->view('templates/header', $data);
		$this->view('templates/detail', $data);
		$this->view('templates/footer');
	}
}