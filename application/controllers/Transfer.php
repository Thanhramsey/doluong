<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Transfer extends CI_Controller {

    public static $namecontroller = "Transfer";
    public static $title = "Phiếu chuyển mẫu";
	public static $table = "mauthunghiem";
	public static $permission = 'B';

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
                
                    $data['title_page'] = "Danh sách ".self::$title;
                    $data['controllername'] = $this::$namecontroller;
                    $data['template_content'] = $this::$namecontroller.'/list';
                    $this->load->view("index", $data);
                 } else {
                    redirect(base_url());
                 }
        }
    }

    
    public function index_ajax($offset=null)
	{
            $search = array(
                'name' => trim($this->input->post('name')),
                'id' => trim($this->input->post('id')), 
                'status'=>1       
            );
     
            $this->load->library('pagination');
         
            $limit = 2;
      
            //$offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
      
            $config['base_url'] = site_url($this::$namecontroller.'/index_ajax/');
            $config['total_rows'] = $this->model->get_list($limit, $offset, $search, $count=true,$this::$table);
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

            $data['list'] = $this->model->get_list($limit, $offset, $search, $count=false,$this::$table);
   
            $data['pagelinks'] = $this->pagination->create_links();
            $data['controllername'] = $this::$namecontroller;
            $this->load->view($this::$namecontroller.'/list_ajax', $data);
	}


    public function create($id) {
        if (!$this->session->userdata('login')) {
            redirect(base_url('Home/login'));
        } else {
            $login = $this->session->userdata('login');
            if($this->model->checkpermission($this::$permission,$login)==true){
                $select = "SELECT c.id,c.name,t.code,c.mass,c.result,c.method,c.note,t.statusmau,t.name as ghichu,t.id as mamau FROM chitieu c, tenmau t";
                $where = "WHERE t.id = c.tenmau AND t.mathunghiem=".$id  ;
                $sql = $select." ".$where;
                $data['load'] = $this::$namecontroller;
                $data['categorys'] = $this->model->getData('category');
                $data['controllername'] = $this::$namecontroller;
                $data['title_page'] = "Danh sách ".self::$title;
                $data['id'] = $id;
                $data['info'] = $this->model->getInfo($id, $this::$table);
                $data['list']= $this->model->query($sql);
                $update = array(
                     'nguoinhanmau'=>$login[0]['fullname']
                 );
                $this->model->update($this::$table, $update,$id);
                $data['template_content'] = $this::$namecontroller.'/create';
                $this->load->view("index", $data);
            } else {
                redirect(base_url());
            }
         }
    }

    public function changestatus($id,$status){
        if (!$this->session->userdata('login')) {
            redirect(base_url('Home/login'));
        } else {
            $login = $this->session->userdata('login');
            if($this->model->checkpermission($this::$permission,$login)==true){
               
                    $update = array(
                       'status'=>$status,
                        
                    );
                    $this->model->update('mauthunghiem', $update,$id);
                    redirect(base_url($this::$namecontroller));
                }
            else {
                redirect(base_url());
            }
        }
    }

    public function saveresult(){
        $id = $this->input->post('id');
        $result = $this->input->post('result');
        $name= $this->input->post('name');
        $note= $this->input->post('note');
        $method = $this->input->post('method');
        $mass= $this->input->post('mass');
        $update = array(
            'name' =>$name,
            'method' => $method,
            'mass' =>$mass,
            'result'=>$result,
            'note'=>$note
        );
        $this->model->update('chitieu', $update,$id);
       
    }

    public function luuthongtin($id){
      
            $ngaychuyenmau = explode("/",$this->input->post('ngaychuyenmau'));
            $ngaychuyenmau1= date("Y-m-d",strtotime($ngaychuyenmau[1]."/".$ngaychuyenmau[0]."/".$ngaychuyenmau[2]));

            $ngaytrakqnt= explode("/",$this->input->post('ngaytrakqnt'));
  
            $ngaytrakqnt1= date("Y-m-d",strtotime($ngaytrakqnt[1]."/".$ngaytrakqnt[0]."/".$ngaytrakqnt[2]));
         
            $ngaychuyenketqua= explode("/",$this->input->post('ngaychuyenketqua'));
            $ngaychuyenketqua1= date("Y-m-d",strtotime($ngaychuyenketqua[1]."/".$ngaychuyenketqua[0]."/".$ngaychuyenketqua[2]));
       
            $ngaynhanketqua= explode("/",$this->input->post('ngaynhanketqua'));
            $ngaynhanketqua1= date("Y-m-d",strtotime($ngaynhanketqua[1]."/".$ngaynhanketqua[0]."/".$ngaynhanketqua[2]));
     
           $update = array(
                'ngaychuyenmau' => $ngaychuyenmau1,
                'nguoichuyenmau'=> $this->input->post('nguoichuyenmau'),
                'nguoinhanmau'=> $this->input->post('nguoinhanmau'),
                'ngaytrakqnt'=> $ngaytrakqnt1,
                'tinhtrangmau'=>$this->input->post('tinhtrangmau'),
                'ghichu'=>$this->input->post('ghichu'),
                'tailieukemtheo'=>$this->input->post('tailieukemtheo'),
                'ngaychuyenketqua'=>$ngaychuyenketqua1,
                'ngaynhanketqua'=>$ngaynhanketqua1,
                'nguoinhanketqua'=>$this->input->post('nguoinhanketqua'),
            
            );
          
      
            $this->model->update($this::$table,$update,$id);
            redirect(base_url($this::$namecontroller.'/create/'.$id));
        
    
       
    }


    public function phieuchuyenmau($id){
        $select = "SELECT c.id,c.name,t.code,c.note,t.id as ma, c.mass,c.result,c.method FROM chitieu c, tenmau t";
        $where = "WHERE t.id = c.tenmau AND t.mathunghiem=".$id  ;
        $sql = $select." ".$where;

    
        $array = array(
            'mathunghiem' => $id 
        ); 

        $data['load'] = $this::$namecontroller;
        $data['id'] = $id;
        $data['info'] = $this->model->getInfo($id, $this::$table);
        $data['listmau'] = $this->model->getList('tenmau',$array,'desc');
        $data['listchitieu']= $this->model->query($sql);
      
        $data['template_content'] = $this::$namecontroller.'/phieuchuyenmau';
        $this->load->view($data['template_content'], $data);
    }
    

   
    public function loaddetailchitieu(){
        $id = $this->input->post('id');
        
        $array = array(
            'category' => $id 
        );
        $data = $this->model->getList('method',$array,'desc');
        echo json_encode($data);

    }
    

    public function LoadTransferChiTieu(){
        $id = $this->input->post('id');
        $info = $this->model->getInfo($id,'method');
        echo json_encode($info);;

    }

}
