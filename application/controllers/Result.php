<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Result extends CI_Controller {

    public static $namecontroller = "Result";
    public static $title = "Trả kết quả thử nghiệm";
	public static $table = "tenmau";
	public static $permission = 'C';

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
                'mst' => trim($this->input->post('mst')),
                'status'=>2     
            );
     
            $this->load->library('pagination');
         
            $limit = 3;
      
            //$offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
      
            $config['base_url'] = site_url($this::$namecontroller.'/index_ajax/');
            $config['total_rows'] = $this->model->get_list($limit, $offset, $search, $count=true,"mauthunghiem");
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

            $data['list'] = $this->model->get_list($limit, $offset, $search, $count=false,"mauthunghiem");
   
            $data['pagelinks'] = $this->pagination->create_links();
            $data['controllername'] = $this::$namecontroller;
            $this->load->view($this::$namecontroller.'/list_ajax', $data);
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


    public function view($id) {
        if (!$this->session->userdata('login')) {
            redirect(base_url('Home/login'));
        } else {
            $login = $this->session->userdata('login');
            if($this->model->checkpermission($this::$permission,$login)==true){
                $data['load'] = $this::$namecontroller;
                $array = array(
                    'mathunghiem' => $id 
                );
                $data['title_page'] = "Danh sách ".self::$title;
                $data['controllername'] = $this::$namecontroller;
                $data['list'] = $this->model->getList('tenmau',$array,'desc');
                $data['template_content'] = $this::$namecontroller.'/view';
                $this->load->view("index", $data);
            } else {
                redirect(base_url());
            }
         }
    }

    public function create($id) {
        if (!$this->session->userdata('login')) {
            redirect(base_url('Home/login'));
        } else {
            $login = $this->session->userdata('login');
            if($this->model->checkpermission($this::$permission,$login)==true){
                $data['load'] = $this::$namecontroller;
                $array = array(
                    'tenmau' => $id 
                );
                $data['title_page'] = self::$title;
                $data['id'] = $id;
                $data['controllername'] = $this::$namecontroller;
                $data['list'] = $this->model->getList('chitieu',$array,'desc');
                $data['codes'] =  $this->model->getData('code');;
                $data['info'] = $this->model->getInfo($id, 'tenmau');
                $data['mauthunghiem'] = $this->model->getInfo($data['info']['mathunghiem'], 'mauthunghiem');
              
                $data['template_content'] = $this::$namecontroller.'/create';
                $this->load->view("index", $data);
            } else {
                redirect(base_url());
            }
         }
    }

    public function saveketqua($id) {
        if (!$this->session->userdata('login')) {
            redirect(base_url('Home/login'));
        } else {
            $login = $this->session->userdata('login');
            if($this->model->checkpermission($this::$permission,$login)==true){
                $ngaylaymau = explode("/",$this->input->post('ngaylaymau'));
                $ngaylaymau1= date("Y-m-d",strtotime($ngaylaymau[1]."/".$ngaylaymau[0]."/".$ngaylaymau[2]));


                $ngaynhanmau= explode("/",$this->input->post('ngaynhanmau'));
                $ngaynhanmau1= date("Y-m-d",strtotime($ngaynhanmau[1]."/".$ngaynhanmau[0]."/".$ngaynhanmau[2]));
                $update = array(
                    'ngaylaymau' => $ngaylaymau1,
                    'mota'=> $this->input->post('mota'),
                    'thoigiankiemnghiem'=> $this->input->post('thoigiankiemnghiem'),
                    'thoigianluumau'=>$this->input->post('thoigianluumau'),
                    'noiguimau'=>$this->input->post('noiguimau'),
                    'tailieudinhkem'=>$this->input->post('tailieudinhkem'),
                    'ngaynhanmau'=>$ngaynhanmau1,
                 );
                 $this->model->update($this::$table,$update,$id);
                 redirect(base_url($this::$namecontroller.'/create/'.$id));
            } else {
                redirect(base_url());
            }
         }
    }

    public function luuketluan($id) {
        if (!$this->session->userdata('login')) {
            redirect(base_url('Home/login'));
        } else {
            $login = $this->session->userdata('login');
            if($this->model->checkpermission($this::$permission,$login)==true){
             
                $update = array(
        
                    'ketluan'=> $this->input->post('ketluan'),
               
                 );
                 $this->model->update($this::$table,$update,$id);
                 redirect(base_url($this::$namecontroller.'/create/'.$id));
            } else {
                redirect(base_url());
            }
         }
    }

    public function saveresult(){
        $id = $this->input->post('id');
        $result = $this->input->post('result');
    
        $update = array(
            'result' => $result,
          
        );
        $this->model->update('chitieu', $update,$id);
       
    }

    public function EditChitieu(){
        $id = $this->input->post('id');
        $name= $this->input->post('name');
        $method = $this->input->post('method');
        $mass= $this->input->post('massmau');
        $quydinh = $this->input->post('phi');
        $result = $this->input->post('result');
        $this->model->editchitieu1($id,$name,$method,$mass,$result,$quydinh);
       // $this->model->savetenmau($id,$name,$method,$statusmau,$mass,$code);
        $update = array(
            'name' =>$name,
            'method' => $method,
            'mass' =>$mass,
            'result'=>$result,
            'quydinh'=>$quydinh
        );
        echo json_encode($update);
    }

    public function Changechiso(){
        $id = $this->input->post('id');
   
        $array = array(
            'code' => $id 
        );
        $data = $this->model->getList('chiso',$array,'desc');
        echo json_encode($data);
       
       
    }

    public function Changechisocon(){
        $id = $this->input->post('id');
   
        $data['info'] = $this->model->getInfo($id, 'chiso');
       
        echo json_encode($data['info']);
       
    }

    public function Savechiso(){
        $id = $this->input->post('id');
        $result = $this->input->post('result');
        $update = array(
            'quydinh' => $result,
          
        );
        $this->model->update('chitieu',$update,$id);
       
    }
    

   

    public function xuatphieutraketqua($id){
        if (!$this->session->userdata('login')) {
            redirect(base_url('Home/login'));
        } else {
            $login = $this->session->userdata('login');
            if($this->model->checkpermission($this::$permission,$login)==true){
                $data['load'] = $this::$namecontroller;
                $array = array(
                    'tenmau' => $id 
                );
                $data['title_page'] = "Danh sách ".self::$title;
                $data['controllername'] = $this::$namecontroller;
                $data['list'] = $this->model->getList('chitieu',$array,'desc');
                $data['codes'] =  $this->model->getData('code');;
                $data['info'] = $this->model->getInfo($id, 'tenmau');
                $data['mauthunghiem'] = $this->model->getInfo($data['info']['mathunghiem'], 'mauthunghiem');
                $data['template_content'] = $this::$namecontroller.'/phieutraketqua';
                $this->load->view($data['template_content'], $data);
            } else {
                redirect(base_url());
            }
         }
      
     
    }


    public function Xacnhan() {
                $id = $this->input->post('id');
                $update = array(
                    'status' => 2,
                    'ngayxacnhan'=>date("Y-m-d"),
                 );
                 echo $this->model->update($this::$table,$update,$id);
                 
        
    }

}
