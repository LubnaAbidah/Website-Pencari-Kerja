<?php
class Daftar extends CI_Controller {
	public function index(){
		$this->load->model("pendaftar");
		$data = array();

		//aksi setelah submit
		if($this->input->method() == "post"){
			$dataPost = array(
				'nama' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'pekerjaan' => $this->input->post('pekerjaan'),
				'alamat' => $this->input->post('alamat'),
				'resume' => $this->input->post('resume'),
			);
			//jika pendaftaran berhasil
			if($this->pendaftar->insert($dataPost)){
				$data["status"] = "success";
				$data["message"] = "Selamat, data anda berhasil disimpan";

			}else{
				//jika pendaftaran gagal
				$data["status"] = "danger";
				$data["message"] = "Maaf, data anda gagal disimpan";
			}
		}
		$this->load->view("template/header");
		$this->load->view("daftar",$data);
		$this->load->view("template/footer");
	}
}