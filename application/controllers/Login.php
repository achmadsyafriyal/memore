<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{

		parent::__construct();

		//load model
		$this->load->model('Login_model');
	}


	public function index()
	{
		$this->form_validation->set_rules('uname', 'Uname', 'required', [
			'required' => 'Data required'
		]);
		$this->form_validation->set_rules('password', 'Pass', 'required', [
			'required' => 'Data required'
		]);
		if ($this->form_validation->run() == false) {
			$data['judul'] = "Login | Memore";
			$this->load->view('template/header', $data);
			$this->load->view('login/login');
			$this->load->view('template/footer');
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$name = $this->input->post('uname');
		$pass = $this->input->post('password');
		$var = $this->db->get_where('users', ['username' => $name])->row();
		if ($var) {
			if ($var->password == $pass) {
				$data['judul'] = "Dashboard | Memore";
				$this->load->view('template/header', $data);
				$this->load->view('dashboard/owner', $var);
				$this->load->view('template/footer');
				$_SESSION['username'] = "$name";
				// $this->session->set_userdata($var);
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                                invalid password!
                                </div>');
				$data['judul'] = "Login Gagal | Memore";
				$this->load->view('template/header', $data);
				$this->load->view('login/login');
				$this->load->view('template/footer');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                                invalid username!
                                </div>');
			$data['judul'] = "Login Gagal | Memore";
			$this->load->view('template/header', $data);
			$this->load->view('login/login');
			$this->load->view('template/footer');
		}
	}

	public function dashboard()
	{
		$data = array(

			'judul'		=> 'Dashboard | Memore',
			'username' => $_SESSION['username'],
			'jumlah' => $this->Login_model->get_jumlah(),
		);
		$this->load->view('template/header', $data);
		$this->load->view('dashboard/owner', $data);
		$this->load->view('template/footer');
	}

	public function pemasukan()
	{
		// $var = ['username' => $_SESSION['username']];
		$data = array(

			'judul'		=> 'Pemasukan | Memore',
			'username' => $_SESSION['username'],
			'data_pemasukan' => $this->Login_model->get_all(),
		);
		$this->load->view('template/header', $data);
		$this->load->view('dashboard/pemasukan', $data);
		$this->load->view('template/footer');
	}

	public function pengeluaran()
	{
		$var = ['username' => $_SESSION['username']];
		$data['judul'] = "Pengeluaran | Memore";
		$this->load->view('template/header', $data);
		$this->load->view('dashboard/pengeluaran', $var);
		$this->load->view('template/footer');
	}

	public function tambahpemasukan()
	{
		$var = ['username' => $_SESSION['username']];
		$data['judul'] = "Tambah Pemasukan | Memore";
		$this->load->view('template/header', $data);
		$this->load->view('dashboard/tambahpemasukan', $var);
		$this->load->view('template/footer');
	}

	public function simpan()
	{
		$data = array(

			'nama'       => $this->input->post("nama"),
			'jumlah'         => $this->input->post("jumlah"),
			'tanggal'    => $this->input->post("tanggal"),


		);

		$this->Login_model->simpan("pemasukan", $data);

		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');

		//redirect
		redirect('pemasukan/');
	}


	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
