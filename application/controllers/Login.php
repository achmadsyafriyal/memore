<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

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

        private function _login() {
                $name = $this->input->post('uname');
                $pass = $this->input->post('password');
                $var = $this->db->get_where('users', ['username' => $name])->row();
                if($var) {
                        if($var->password == $pass) {
                                $data['judul'] = "Dashboard | Memore";
                                $this->load->view('template/header', $data);
                                $this->load->view('dashboard/owner', $var);
                                $this->load->view('template/footer');
                                //$this->session->set_userdata($var);
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

        public function logout() {
                //$this->session->sess_destroy();
                //redirect(base_url());
        }

}
