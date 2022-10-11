<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public static $namecontroller = "Home";
    public static $title = "Trang chu";
    public static $class = "home ";
    public function __construct() {
        parent::__construct();
        $this->load->model("model");
        $this->load->helper('security');
        $this->load->library("session");
    }

    public function index() {
        if (!$this->session->userdata('login')) {
            redirect(base_url('Home/login'));
        } else {
           
            $data['load'] = $this::$namecontroller;
            $data['title_page'] = "Danh sách Trang chủ";
            $data['template_content'] = "Home/index";
        }
        $this->load->view('index',$data);
    }

    public function login() {
        $data['title_page'] = "Đăng nhập";
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'username', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        if ($this->form_validation->run() == true) {
            $username = $this->security->xss_clean($this->input->post('username'));
            $password = md5($this->security->xss_clean($this->input->post('password')));
        
      
            $datalogin = $this->model->login_user($username, $password);
            if (count($datalogin) == 1) {
                $this->session->set_userdata('login', $datalogin);
                redirect(base_url());
            } else {
                $data['error'] = "Thông tin người dùng, mật khẩu có thể bị sai!";
            }
        }
        $this->load->view("login", $data);
    }

    public function logout() {

        $this->session->sess_destroy();
        redirect(base_url('Home/login'));
    }

    public function change($id) {
        if (!$this->session->userdata('login')) {
            redirect(base_url('Home/login'));
        } else {
            if($this->session->userdata('login')[0]['id']!=$id){
                redirect(base_url('Home/login'));
            } else {
            $data['title_page'] = "Đổi mật khẩu";
            $data['load'] = $this::$namecontroller;
            $data['template_content'] = $this::$namecontroller."/change";
            $data['id'] = $id;
            $this->load->library('form_validation');
            $this->form_validation->set_rules('old', 'Mật khẩu cũ', 'required');
            $this->form_validation->set_rules('new', 'Mật khẩu mới', 'required');
            $this->form_validation->set_rules('renew', 'Nhập lại mật khẩu mới', 'required');
            if ($this->form_validation->run() == true) {
                $new = $this->security->xss_clean($this->input->post('new'));
                $old = $this->security->xss_clean($this->input->post('old'));
                $renew = $this->security->xss_clean($this->input->post('renew'));
                if ($new == $old || $new != $renew|| $id!=$this->session->userdata('login')[0]['id']) {
                    $data['error'] = "Thông tin không chính xác mong bạn nhập lại";
                } else {
                    $update = array(
                        'password' => md5($this->input->post('new')),
                    );
                    $this->model->update('user', $update, $id);
                    $data['error'] = "Thay đổi mật khẩu thanh cong";
                }
            } else {
                
            }
            $this->load->view("index", $data);
        }
        }
    }

}
