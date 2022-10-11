<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Required extends CI_Controller {

    public static $namecontroller = "Required";
    public static $title = "Giấy biên nhận mẫu thử nghiệm";
	public static $table = "mauthunghiem";
	public static $permission = 'A';

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
                    $search = [];
                    $id = $this->input->post('id');
                    $name = $this->input->post('name');
                    $mst =  $this->input->post('mst');
                  
                   // $data['list'] = $this->model->getList("mauthunghiem",$search,'desc');
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
                'mst' => trim($this->input->post('mst'))
                  
            );
     
            $this->load->library('pagination');
         
            $limit = 5;
      
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
                $this->form_validation->set_rules('com', 'Tên đơn vị', 'trim|required');
                $this->form_validation->set_rules('macode', 'Mã code', 'trim|required');
                $this->form_validation->set_rules('address', 'Địa chỉ', 'trim|required');
                $this->form_validation->set_rules('tax', 'Mã số thuế', 'trim');
                $this->form_validation->set_rules('buyer', 'Giá', 'trim');
                $this->form_validation->set_rules('role', 'Chức vụ', 'trim');
                $this->form_validation->set_rules('phone', 'Điện thoại', 'trim');
                $this->form_validation->set_rules('fax', 'fax', 'trim');
                $this->form_validation->set_rules('email', 'email', 'trim');
                if ($this->form_validation->run() == true) {
                    $start = explode("/",$this->input->post('date'));
                    $startdate = $start[1]."/".$start[0]."/".$start[2];
                    echo $startdate;
                    $insert = array(
                        'com' => $this->input->post('com'),
                        'macode' => $this->input->post('macode'),
                        'address' => $this->input->post('address'),
                        'tax' => $this->input->post('tax'),
                        'role' => $this->input->post('role'),
                        'buyer'=>$this->input->post('buyer'),
                        'phone' => $this->input->post('phone'),
                        'fax' => $this->input->post('fax'),
                        'email'=> $this->input->post('email'),
                        'date'=> date("Y-m-d",strtotime($startdate)),
                        'createdate'=> date("Y-m-d",time()),
                        'ngaytraketqua' =>date("Y-m-d",time()),
                        'ngaydukien'=> date("Y-m-d",time()),
                        'status' => 0,
                    );

                    $id = $this->model->insert($this::$table, $insert);
                   redirect(base_url($this::$namecontroller.'/edit/'.$id));
                }
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
                $data['id'] = $id;
                $data['title_page'] = "Xem ".self::$title;
               // $data['template_content'] = $this::$namecontroller.'/nhapmau';
                $array = array(
                    'mathunghiem' => $id 
                );
                $data['list'] = $this->model->getList('tenmau',$array,'asc');
                $data['categorys'] = $this->model->getData('category');
                $this->form_validation->set_rules('com', 'Tên đơn vị', 'trim|required');
                $this->form_validation->set_rules('macode', 'Mã code', 'trim|required');
                $this->form_validation->set_rules('address', 'Địa chỉ', 'trim|required');
                $this->form_validation->set_rules('tax', 'Mã số thuế', 'trim');
                $this->form_validation->set_rules('buyer', 'Giá', 'trim');
                $this->form_validation->set_rules('role', 'Chức vụ', 'trim');
                $this->form_validation->set_rules('phone', 'Điện thoại', 'trim');
                $this->form_validation->set_rules('fax', 'fax', 'trim');
                $this->form_validation->set_rules('email', 'email', 'trim');
            
                $data['info'] = $this->model->getInfo($id, $this::$table);
                $data['listmau'] = $this->model->getList('mauchitieu',[],'asc');
            
                if ($this->form_validation->run() == true) {
                    $start = explode("/",$this->input->post('date'));

                    $startdate = $start[1]."/".$start[0]."/".$start[2];
                    $update = array(
                        'com' => $this->input->post('com'),
                        'macode' => $this->input->post('macode'),
                        'address' => $this->input->post('address'),
                        'tax' => $this->input->post('tax'),
                        'role' => $this->input->post('role'),
                        'buyer'=>$this->input->post('buyer'),
                        'phone' => $this->input->post('phone'),
                        'fax' => $this->input->post('fax'),
                        'email'=> $this->input->post('email'),
                        'date'=> date("Y-m-d",strtotime($startdate)),
                        'ngaytraketqua' =>date("Y-m-d",time()),
                        'ngaydukien'=> date("Y-m-d",time()),
                    );
                    $this->model->update($this::$table, $update,$id);
                    redirect(base_url($this::$namecontroller.'/edit/'.$id));
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

    public function changestatus($id){
        if (!$this->session->userdata('login')) {
            redirect(base_url('Home/login'));
        } else {
            $login = $this->session->userdata('login');
            if($this->model->checkpermission($this::$permission,$login)==true){
               
                    $update = array(
                       'status'=>1,
                       'nguoichuyenmau'=>$login[0]['fullname']
                    );
                    $this->model->update($this::$table, $update,$id);
                    redirect(base_url($this::$namecontroller));
                }
            else {
                redirect(base_url());
            }
        }
    }
// Nhập mẫu thử nghiệm
    public function nhapmau($id){
        if (!$this->session->userdata('login')) {
            redirect(base_url('Home/login'));
        } else {
            $login = $this->session->userdata('login');
            if($this->model->checkpermission($this::$permission,$login)==true){
                $data['controllername'] = $this::$namecontroller;
                $data['load'] = $this::$namecontroller;
                $data['id'] = $id;
                $data['title_page'] = "Xem ".self::$title;
                $data['template_content'] = $this::$namecontroller.'/nhapmau';
                $array = array(
                    'mathunghiem' => $id 
                );
                $data['list'] = $this->model->getList('tenmau',$array,'desc');
                $data['categorys'] = $this->model->getData('category');
                $this->load->view("index", $data);
            } else {
                redirect(base_url());
            }
        }
    }

    public function luumau(){
        $id = $this->input->post('id');
        $macode = $this->input->post('macode');
        $name= $this->input->post('name');
        $method = $this->input->post('method');
        $statusmau = $this->input->post('statusmau');
        $mass= $this->input->post('massmau');
        $stt =$this->input->post('stt');
        $code = 'M'.$macode.'.'.$stt.'.'.date("Y");
        $this->model->savetenmau($id,$name,$method,$statusmau,$mass,$code);
        $array = array(
            'mathunghiem' => $id 
        );
        $data = $this->model->getList('tenmau',$array,'asc');
        echo json_encode($data);
    }

    
    public function Editmau(){
        $id = $this->input->post('id');
        $name= $this->input->post('name');
        $method = $this->input->post('method');
        $statusmau = $this->input->post('statusmau');
        $mass= $this->input->post('massmau');
        $idmau = $this->input->post('idmau');
        $code = $this->input->post('code');
        $this->model->edittenmau($id,$name,$method,$statusmau,$mass,$code);
       // $this->model->savetenmau($id,$name,$method,$statusmau,$mass,$code);
        $array = array(
            'mathunghiem' => $idmau
        );
        $data = $this->model->getList('tenmau',$array,'desc');
        echo json_encode($data);
    }



    public function deletemau(){
        $id = $this->input->post('id');
        $idmau = $this->input->post('idmau');
        $this->model->del('tenmau', $id);
        $this->model->delchitieu('chitieu', $id,'tenmau');
        $array = array(
            'mathunghiem' => $idmau 
        );
        $data= $this->model->getList('tenmau',$array,'desc');
        echo json_encode($data);
    }

    public function loadchitieu(){
        $id = $this->input->post('id');
      
        $array = array(
            'tenmau' => $id 
        );

        $data = $this->model->getList('chitieu',$array,'desc');
        echo json_encode($data);
    }

    public function loaddetailchitieu(){
        $id = $this->input->post('id');
        
        $array = array(
            'category' => $id 
        );
        $data = $this->model->getList('method',$array,'desc');
        echo json_encode($data);

    }

// Bổ sung chỉ tiêu
    public function bosungchitieu(){
      //  $id = $this->input->post('id');
        //$chitieu = $this->input->post('chitieu');
        $id = $this->input->post('id');
        $chitieu = $this->input->post('chitieumau');
        $info = $this->model->getInfo($chitieu,'method');
        $listchitieu = explode(",", trim($chitieu));
       // foreach($listchitieu as $chitieucon){
            //if($chitieucon!=""){
                //$this->model->savechitieu($id,$chitieucon,"","","","");
            //}
        //}
        $this->model->savechitieu($id,$info['name'],$info['mass'],$info['price'],$info['method'],$info['note'],$info['id']);
        $array = array(
            'tenmau' => $id 
        );
        $data = $this->model->getList('chitieu',$array,'asc');
        echo json_encode($data);


    }
    public function luuchitieumau(){
        $tenmau = $this->input->post('tenmau');
        $dschitieu = $this->input->post('dschitiet');
        $this->model->savechitieumau($tenmau,$dschitieu);
    
        $data = $this->model->getList('mauchitieu',[],'asc');
        echo json_encode($data);

    }
    public function loaddsmaucosan(){
        $id = $this->input->post('id');
        $mauthuongdung = $this->input->post('mauthuongdung');
        $array = array(
            'mamau' => $mauthuongdung
        );
        $dsmauthuongdung = $this->model->getList('mauchitietchitieu',$array,'asc');
        $this->model->savedsmau($id,$dsmauthuongdung);
        $array1 = array(
            'tenmau' => $id 
        );
        $data = $this->model->getList('chitieu',$array1,'desc');
        echo json_encode($data);
    }

    public function calculate(){
        $id = $this->input->post('id');
        $tongtienchitieu = $this->input->post('tongtienchitieu');
        $chitieu = $this->input->post('listchitiet');
        $biennhan = $this->input->post('listbiennhan');
       
        $update = array(
            'chitieu' => $chitieu,
            'sum' => $tongtienchitieu,
            'biennhan'=>$biennhan
        );
        $this->model->update('tenmau', $update,$id);
        echo json_encode($id);
    }

   /* public function deletechitieu(){
        $id = $this->input->post('id');
        $idmau= $this->input->post('idmau');
        $array = array(
            'tenmau' => $idmau 
        );
        $this->model->del('chitieu', $id);
        $data = $this->model->getList('chitieu',$array,'desc');
        echo json_encode($data);

    }*/

    public function deletechitieu(){
        $id = $this->input->post('id');
        $idmau = $this->input->post('idmau');
        $array = array(
            'tenmau'=> $idmau
        );
        $this->model->del('chitieu', $id);
        $data = $this->model->getList('chitieu',$array,'desc');
        echo json_encode($data);
    }

    //Đối chiếu kết quả
    public function addketqua($id){
        if (!$this->session->userdata('login')) {
            redirect(base_url('Home/login'));
        } else {
            $login = $this->session->userdata('login');
            if($this->model->checkpermission($this::$permission,$login)==true){
                $data['load'] = $this::$namecontroller;
                $data['template_content'] = $this::$namecontroller.'/ketqua';
                $data['title_page'] = "Chỉnh sửa ".self::$title;
                $data['controllername'] = $this::$namecontroller;
            
                $data['info'] = $this->model->getInfo($id, $this::$table);
                $this->form_validation->set_rules('ketluan', 'Kết luận', 'trim|required');
                if ($this->form_validation->run() == true) {
                    $ngaytraketqua = explode("/",$this->input->post('ngaytraketqua'));
                    $ngaytraketquas = $ngaytraketqua[1]."/".$ngaytraketqua[0]."/".$ngaytraketqua[2];

                    $ngaydukien = explode("/",$this->input->post('ngaydukien'));
                    $ngaydukiens = $ngaydukien[1]."/".$ngaydukien[0]."/".$ngaydukien[2];
                    $update = array(
                        'ketluan' => $this->input->post('ketluan'),
                        'tentieuchuan' => $this->input->post('tentieuchuan'),
                        'ngaytraketqua' =>  date("Y-m-d",strtotime($ngaytraketquas)),
                        'sobankq' =>$this->input->post('sobankq'),
                        'nhanketqua'=>$this->input->post('nhanketqua'),
                        'giaonhanmau'=>$this->input->post('giaonhanmau'),
                        'khachhangtratruoc'=>$this->input->post('khachhangtratruoc'),
                       // 'phithunghiem' => $this->input->post('phithunghiem'),
                        'sum'=> $this->input->post('sum'),
                        'ngaydukien'=>date("Y-m-d",strtotime($ngaydukiens)),
                    );
                    $this->model->update("mauthunghiem", $update,$id);
                  
                    redirect(base_url($this::$namecontroller.'/edit/'.$id));
                }
        
               $this->load->view("index", $data);
            } else {
                redirect(base_url());
            }
        }
    }
// Xem giấy biên nhận
    public function Xembiennhan($id){
        $data['info'] = $this->model->getInfo($id, 'mauthunghiem');
        $array = array(
            'mathunghiem' => $id
        );
        $data['listhunghiem'] = $this->model->getList('tenmau',$array,'ASC');
        $data['template_content'] = $this::$namecontroller.'/giaybiennhan';
        $this->load->view($data['template_content'], $data);
    }

   
    //Search chỉ tiêu
    public function Search(){
        $search = [];
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $mst =  $this->input->post('mst');
        if($id!=""){
            $search += [ "id" => $id ];
        } else if($name!=""){
            $search += [ "com" => $name ];
        } else if($mst!=""){
            $search += [ "mst" => $mst ];
        }
        $list = $this->model->getList("mauthunghiem",$search,'desc');
        redirect(base_url($this::$namecontroller));

    }




}
