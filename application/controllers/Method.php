<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Method extends CI_Controller {

    public static $namecontroller = "Method";
    public static $title = "Năng lực thử nghiệm";
	public static $table = "method";
	public static $permission = 'D';

    public function __construct() {
        parent::__construct();
        $this->load->model("model");
        $this->load->library("session");
        $this->load->library('form_validation');
     
     
    }

    public function index($category=0) {
        if (!$this->session->userdata('login')) {
            redirect(base_url('Home/login'));
        } else {
                $login = $this->session->userdata('login');
               
               
                if($this->model->checkpermission($this::$permission,$login)==true){
                    $data['load'] = $this::$namecontroller;
               
                    $data['title_page'] = "Danh sách ".self::$title;
                    $data['controllername'] = $this::$namecontroller;
                    $data['template_content'] = $this::$namecontroller.'/list';
                    $data['category'] = $category;
                    if($category!=0){
                        $data['detail']= $this->model->getInfo($category,'category');
                    }
                    $this->load->view("index", $data);
                 } else {
                    redirect(base_url());
                 }
        }
    }

    public function index_ajax($offset=null)
	{
            $search = array(
                'name' => trim($this->input->post('search_name')),
                'id' => trim($this->input->post('search_id')),
                'category' =>  $this->input->post('search_category')
                
            );
     
            $this->load->library('pagination');
         
            $limit = 30;
      
            //$offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
      
            $config['base_url'] = site_url($this::$namecontroller.'/index_ajax/');
            $config['total_rows'] = $this->model->get_list_method($limit, $offset, $search, $count=true,$this::$table);
            $config['per_page'] = $limit;
            $config['uri_segment'] = 3;
            $config['num_links'] = 3;
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li><a href="" class="current_page">';
            $config['cur_tag_close'] = '</a></li>';
            $config['next_link'] = 'Next';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';
            $config['prev_link'] = 'Previous';
            $config['prev_tag_open'] = '<li>';
            $config['prev_tag_close'] = '</li>';
            $config['first_link'] = 'First';
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';
            $config['last_link'] = 'Last';
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';
            
            $this->pagination->initialize($config);

            $data['list'] = $this->model->get_list_method($limit, $offset, $search, $count=false,$this::$table);
   
            $data['pagelinks'] = $this->pagination->create_links();
            $data['controllername'] = $this::$namecontroller;
            $this->load->view($this::$namecontroller.'/list_ajax', $data);
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
                $data['category'] = $this->model->getData('category');
                $this->form_validation->set_rules('name', 'Tên phép thử', 'trim|required');
               /* $this->form_validation->set_rules('conditions', 'Điều kiện Lưu mẫu', 'trim|required');
                $this->form_validation->set_rules('method', 'Phương pháp thử', 'trim|required');
                $this->form_validation->set_rules('price', 'Giá', 'trim|required');
                $this->form_validation->set_rules('mass', 'Khối lượng mẫu yêu cầu', 'trim|required');*/
                if ($this->form_validation->run() == true) {
                    $insert = array(
                        'name' => $this->input->post('name'),
                        'conditions' => $this->input->post('conditions'),
                        'method' => $this->input->post('method'),
                        'mass' => $this->input->post('mass'),
                        'price'=>$this->input->post('price'),
                        'status' => $this->input->post('status'),
                        'note' => $this->input->post('note'),
                        'category'=> $this->input->post('category'),
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
                $this->form_validation->set_rules('name', 'Tên phép thử', 'trim|required');
               /* $this->form_validation->set_rules('conditions', 'Điều kiện Lưu mẫu', 'trim|required');
                $this->form_validation->set_rules('method', 'Phương pháp thử', 'trim|required');
                $this->form_validation->set_rules('price', 'Giá', 'trim|required');
                $this->form_validation->set_rules('mass', 'Khối lượng mẫu yêu cầu', 'trim|required');*/
                $data['category'] = $this->model->getData('category');
                $data['info'] = $this->model->getInfo($id, $this::$table);
                if ($this->form_validation->run() == true) {
                    $update = array(
                        'name' => $this->input->post('name'),
                        'conditions' => $this->input->post('conditions'),
                        'method' => $this->input->post('method'),
                        'mass' => $this->input->post('mass'),
                        'price'=>$this->input->post('price'),
                        'status' => $this->input->post('status'),
                        'note' => $this->input->post('note'),
                        'category'=> $this->input->post('category'),
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
