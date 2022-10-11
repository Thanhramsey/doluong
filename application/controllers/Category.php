<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

    public static $namecontroller = "Category";
    public static $title = "Loại thử nghiệm";
	public static $table = "category";
	public static $permission = 'D';

    public function __construct() {
        parent::__construct();
        $this->load->model("model");
        $this->load->library("session");
        $this->load->library('form_validation');
     
     
    }

    public function index() {
        if (!$this->session->userdata('login')) {
            redirect(base_url('Home/login'));
        } else {
                $login = $this->session->userdata('login');
               
               
                if($this->model->checkpermission($this::$permission,$login)==true){
                    $data['load'] = $this::$namecontroller;
                    $data['list'] = $this->model->getData($this::$table);
                    $data['title_page'] = "Danh sách ".self::$title;
                    $data['controllername'] = $this::$namecontroller;
                    $data['template_content'] = $this::$namecontroller.'/list';
                    $this->load->view("index", $data);
                 } else {
                    redirect(base_url());
                 }
        }
    }

    public function create(){
        if (!$this->session->userdata('login')) {
            redirect(base_url('Home/login'));
        } else {
            $login = $this->session->userdata('login');
            if($this->model->checkpermission($this::$permission,$login)==true){
                $data['load'] = $this::$namecontroller;
                $data['template_content'] = $this::$namecontroller.'/create';
                $data['title_page'] = "Tạo mới ".self::$title;
                $data['controllername'] = $this::$namecontroller;
                $this->form_validation->set_rules('name', 'Tên', 'trim|required');
                
                if ($this->form_validation->run() == true) {
                    $insert = array(
                        'name' => $this->input->post('name'),
                         'status' => $this->input->post('status'),
                    );
                    $id = $this->model->insert($this::$table, $insert);
                    redirect(base_url($this::$namecontroller.'/view/'.$id));
                }
                $this->load->view("index", $data);
            } else {
                redirect(base_url());
            }
         }
    }

    public function view($id){
        if (!$this->session->userdata('login')) {
            redirect(base_url('Home/login'));
        } else {
            $login = $this->session->userdata('login');
            if($this->model->checkpermission($this::$permission,$login)==true){
                $data['controllername'] = $this::$namecontroller;
                $data['load'] = $this::$namecontroller;
                $data['title_page'] = "Xem ".self::$title;
                $data['template_content'] = $this::$namecontroller.'/view';
                $data['info'] = $this->model->getInfo($id, $this::$table);
                $this->load->view("index", $data);
            } else {
                redirect(base_url());
            }
        }
    }


    public function edit($id){
        if (!$this->session->userdata('login')) {
            redirect(base_url('Home/login'));
        } else {
            $login = $this->session->userdata('login');
            if($this->model->checkpermission($this::$permission,$login)==true){
                $data['load'] = $this::$namecontroller;
                $data['template_content'] = $this::$namecontroller.'/edit';
                $data['title_page'] = "Chỉnh sửa ".self::$title;
                $data['controllername'] = $this::$namecontroller;
                $this->form_validation->set_rules('name', 'Tên', 'trim|required');
      
                $data['info'] = $this->model->getInfo($id, $this::$table);
                if ($this->form_validation->run() == true) {
                    $update = array(
                        'name' => $this->input->post('name'),
                        'status' => $this->input->post('status'),
                    );
                    $this->model->update($this::$table, $update,$id);
                    redirect(base_url($this::$namecontroller));
                }
                $this->load->view("index", $data);
            } else {
                redirect(base_url());
            }
        }
    }

    public function delete($id){
        if (!$this->session->userdata('login')) {
            redirect(base_url('Home/login'));
        } else {
            $login = $this->session->userdata('login');
                if($this->model->checkpermission($this::$permission,$login)==true){
                $this->model->del($this::$table, $id);
                redirect(base_url($this::$namecontroller));
            } else {
                redirect(base_url());
            }
        }
    }

    


}
