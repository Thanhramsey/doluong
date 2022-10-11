<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Chiso extends CI_Controller {

    public static $namecontroller = "Chiso";
    public static $title = "Chỉ số";
	public static $table = "chiso";
    public static $permission = 'D';
    public static $parenttable = "Code";

    public function __construct() {
        parent::__construct();
        $this->load->model("model");
        $this->load->library("session");
        $this->load->library('form_validation');
     
     
    }

    public function index($id) {
        if (!$this->session->userdata('login')) {
            redirect(base_url('Home/login'));
        } else {
                $login = $this->session->userdata('login');
                if($this->model->checkpermission($this::$permission,$login)==true){
                    $data['load'] = $this::$namecontroller;
                    $data['info'] = $this->model->getInfo($id,$this::$parenttable);
                    $array = array(
                        'code' => $id 
                    );
                    $data['list'] = $this->model->getList($this::$table,$array,'desc');
                    $data['title_page'] = "Danh sách ".self::$title;
                    $data['controllername'] = $this::$namecontroller;
                    $data['template_content'] = $this::$namecontroller.'/list';
                    $this->load->view("index", $data);
                 } else {
                    redirect(base_url());
                 }
        }
    }

    public function savechiso(){
        $code = $this->input->post('code');
        $chiso= $this->input->post('chiso');
        $chisodau = $this->input->post('chisodau');
        $chisocuoi = $this->input->post('chisocuoi');
        $chisoba = $this->input->post('chisoba');
        $this->model->savechiso($chiso,$chisodau,$chisocuoi,$chisoba,$code);
        $array = array(
            'code' => $code
        );
        $data = $this->model->getList($this::$table,$array,'desc');
        echo json_encode($data);
    }

    
    public function editchiso(){
        $id = $this->input->post('id');
        $code = $this->input->post('code');
        $chiso= $this->input->post('chiso');
        $chisodau = $this->input->post('chisodau');
        $chisocuoi = $this->input->post('chisocuoi');
        $chisoba = $this->input->post('chisoba');
        $update = array(
            'chiso' => $chiso,
            'chisodau' => $chisodau,
            'chisocuoi' => $chisocuoi,
            'chisoba' => $chisoba,
        );
        $this->model->update($this::$table, $update,$id);
        $array = array(
            'code' => $code
        );
        
        $data = $this->model->getList($this::$table,$array,'desc');
        echo json_encode($data);
    }


    public function deletechiso(){
        $id = $this->input->post('id');
        $code = $this->input->post('code');
        $this->model->del($this::$table, $id);
        $array = array(
            'code' => $code
        );
        
        $data = $this->model->getList($this::$table,$array,'desc');
        echo json_encode($data);
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
                        'ten' => $this->input->post('ten'),
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

  
}
