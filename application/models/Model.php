<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Get thông tin đối tượng
    public function getData($table) {
        $query = $this->db->get($table);
        $result = $query->result_array();
        return $result;
    }

    public function get_list($limit, $offset, $search, $count,$table)
	{
		$this->db->select('*');
		$this->db->from($table);
		if($search){
			$name= $search['name'];
			$id = $search['id'];
            if(isset($search['status'])){
                $status = $search['status'];
                if($status){
                    $this->db->where('status',$status);
                }
            }

			if($name){
				$this->db->where("name LIKE '%$name%'");
			}
			if($id){
				$this->db->where('id',$id);
            }

            $this->db->order_by("id", 'desc');
		}
		if($count){
			return $this->db->count_all_results();
		}
		else {
			$this->db->limit($limit, $offset);
			$query = $this->db->get();

			if($query->num_rows() > 0) {
				return $query->result();
			}
		}

		return array();
    }


    public function get_list_method($limit, $offset, $search, $count,$table)
	{
		$this->db->select('*');
		$this->db->from($table);
		if($search){
			$name= $search['name'];
			$id = $search['id'];
            $category = $search['category'];
            if(isset($search['category'])){
                $category = $search['category'];
                if($category!=0){
                    $this->db->where('category',$category);
                }
            }

			if($name){
				$this->db->where("name LIKE '%$name%'");
			}
			if($id){
				$this->db->where('id',$id);
            }

            $this->db->order_by("id", 'desc');
		}
		if($count){
			return $this->db->count_all_results();
		}
		else {
			$this->db->limit($limit, $offset);
			$query = $this->db->get();

			if($query->num_rows() > 0) {
				return $query->result();
			}
		}

		return array();
    }




    public function get_current_page_records($limit, $start,$table,$array)
    {


        $query = $this->db->where($array)->from($table)->limit($limit, $start)->get();

        if ($query->num_rows() > 0)
        {
            foreach ($query->result_array() as $row)
            {
                $data[] = $row;
            }

            return $data;
        }

        return false;

    }


    public function get_total($array,$table)
    {
      return  $this->db->where($array)->from($table)->count_all_results();;
    }

    public function getListLimit($table,$array,$order,$limit) {
        $query = $this->db->where($array);
        $query = $this->db->order_by("id", $order);
        $query = $this->db->limit($limit);
        $query = $this->db->get($table);
        $result = $query->result_array();
        return $result;
    }


    public function selectData($table,$select) {
        $query = $this->db->select($select);
        $query = $this->db->from($table);
        $query = $this->db->get();
        $result = $query->row_array();
        return $result;
    }

    public function getListCourse($table,$order,$select) {
        $query = $this->db->select($select);
        $query = $this->db->from($table);
        $query = $this->db->join('class', 'course.id = class.course');
        $query = $this->db->order_by($table.".id", $order);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }



    public function getJoin($table,$order,$select,$join) {
        $query = $this->db->select($select);
        $query = $this->db->from($table);
        foreach ( $join as $key => $value ) {
            $query = $this->db->join($key, $value);
        }


        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }


    public function query($sql){
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function selectinfo($sql){
        $query = $this->db->query($sql);
        $result = $query->row_array();
    }


    public function getJoinCondition($table,$select,$join,$array) {
        $query = $this->db->select($select);
        $query = $this->db->from($table);
        foreach ($join as $key => $value ) {
            $query = $this->db->join($key, $value);
        }

        $query = $this->db->where($array);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }


    public function getInfodetail($condition,$id, $table,$order,$select,$join) {
        $query = $this->db->from($table);
        foreach ( $join as $key => $value ) {
            $query = $this->db->join($key, $value);
        }
        $query = $this->db->where($condition, $id);
        $query = $this->db->get();
        $result = $query->row_array();
        return $result;
    }


    public function getList($table,$array,$order) {
        $query = $this->db->where($array);
        $query = $this->db->order_by("id", $order);
        $query = $this->db->get($table);
        $result = $query->result_array();
        return $result;
    }

    public function getInfo($id, $table) {
        $query = $this->db->where('id', $id);
        $query = $this->db->get($table);
        $result = $query->row_array();
        return $result;
    }

    public function getdetail($array, $table) {
        $query = $this->db->where($array);
        $query = $this->db->get($table);
        $result = $query->row_array();
        return $result;
    }

    //Plugin thêm sửa xóa
    public function insert($table, $insert) {
        $this->db->insert($table, $insert);
        return $this->db->insert_id();
    }

    public function update($table, $update, $id) {
        $this->db->where('id', $id);
        $this->db->update($table, $update);
        return $this->db->affected_rows();
    }

    public function del($table, $id) {
        $this->db->where('id', $id);
        $this->db->delete($table);
        return $this->db->affected_rows();
    }


    function savetenmau($id,$name,$method,$statusmau,$mass,$code)
	{
        $date = date("Y-m-d", time());
		$query="INSERT INTO `tenmau`( `name`, `method`, `statusmau`, `mass`,`code`,`mathunghiem`,`date`)
		VALUES ('$name','$method','$statusmau','$mass','$code','$id','$date')";
		$this->db->query($query);
    }


    function edittenmau($id,$name,$method,$statusmau,$mass,$code)
	{
        $update = array(
            'name' =>$name,
            'method' => $method,
            'statusmau' => $statusmau,
            'mass' =>$mass,
            'code' =>$code,

        );
        $this->model->update("tenmau", $update,$id);

    }



    function editchitieu1($id,$name,$method,$mass,$result,$quydinh)
	{
        $update = array(
            'name' =>$name,
            'method' => $method,
            'mass' =>$mass,
            'result'=>$result,
            'quydinh'=>$quydinh
        );
        $this->model->update("chitieu", $update,$id);

    }


    function savechitieu($id,$name,$mass,$price,$method,$note,$machitieu)
	{
        $date = date("Y-m-d", time());
		$query="INSERT INTO `chitieu`( `name`, `mass`,`price`,`method`, `tenmau`,`note`,`status`,`result`,`machitieu`)
		VALUES ('$name','$mass','$price','$method','$id','$note',0,'bình thường','$machitieu')";
        $this->db->query($query);

    }

    function savechitieumau($name,$dschitieumau)
	{
        $data = array(
            'name' => $name,
        );
        $id = $this->db->insert('mauchitieu', $data);
        $idmauchitieu = $this->db->insert_id();
        foreach(json_decode($dschitieumau) as $value) {
            $name =$value->name;
            $note = $value->note;
            $method = $value->method;
            $id = $value->id;
            $mass = $value->mass;
            $price = $value->price;
            $tenmau = $value->tenmau;
            $query="INSERT INTO `mauchitietchitieu`( `name`, `mass`,`price`,`method`, `tenmau`,`note`,`status`,`result`,`machitieu`,`mamau`)
            VALUES ('$name','$mass','$price','$method','$id','$note',0,'bình thường','$tenmau','$idmauchitieu')";
            $this->db->query($query);
        }
     return $idmauchitieu;
    }
    function savedsmau($id,$dsmauthuongdung){
        $query="DELETE FROM `chitieu` WHERE `tenmau`=".$id;
		$this->db->query($query);
        foreach($dsmauthuongdung as $value) {
            $name =$value['name'];
            $note = $value['note'];
            $method = $value['method'];
            $mass = $value['mass'];
            $price = $value['price'];
            $tenmau = $value['tenmau'];
            $query="INSERT INTO `chitieu`( `name`, `mass`,`price`,`method`, `tenmau`,`note`,`status`,`result`,`machitieu`)
            VALUES ('$name','$mass','$price','$method','$id','$note',0,'bình thường','$tenmau')";
            $this->db->query($query);
        }
        return $id;
    }

    function savechiso($chiso,$chisodau,$chisocuoi,$chisoba,$code)
	{
        $date = date("Y-m-d", time());
		$query="INSERT INTO `chiso`( `chiso`, `chisodau`, `chisocuoi`, `chisoba`,`code`)
		VALUES ('$chiso','$chisodau','$chisocuoi','$chisoba','$code')";
		$this->db->query($query);
    }

    function editchiso($chiso,$chisodau,$chisocuoi,$chisoba,$code)
	{

		$query="UPDATE `chiso` SET chiso= ".$chiso." chisodau= ".$chisodau." chisocuoi= ".$chisocuoi." chisoba= ".$chisoba."
		WHERE id= ".$code;
		$this->db->query($query);
    }

    function calculate($id,$sum,$chitieu)
	{

        return $query;

    }



    public function delchitieu($table, $id,$dieukien) {
        $this->db->where($dieukien, $id);
        $this->db->delete($table);
        return $this->db->affected_rows();
    }
    //Plugin upload File img
    public function uploadFile($link, $status, $fileimage = '') {
        $image = '';
        if (!empty($_FILES['picture']['name'])) {
            $config['upload_path'] = $link;
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($status == 1) {
                if ($fileimage != '') {
                    $path = realpath(base_url($link . '/' . $fileimage));
                    unlink($path);
                }
            }
            if ($this->upload->do_upload("picture")) {
                $uploadData = $this->upload->data();
                $image = $uploadData['file_name'];
            } else {
                $image = '';
            }
        } else {
            $image = '';
        }
        return $image;
    }



    public function login_user($username, $password) {

        $query = $this->db->select("u.id,u.username, u.password, p.permission,u.fullname,u.group_id");
        $query = $this->db->from('user u');
        $query = $this->db->join('permission p','u.group_id = p.id', 'inner');
        $query = $this->db->where('u.username', $username);
        $query = $this->db->where('u.password', $password);
        $query = $this->db->where('u.status', '1');
        $query = $this->db->get();

        $result = $query->result_array();


        return $result;
    }


    public function checkpermission($permission,$login) {
        $mypermission = $login[0]['permission'];
        if($login[0]['permission']=='0'||is_numeric(strpos($mypermission, $permission))){
            return true;
        } else {
            return false;
        }

    }

}
