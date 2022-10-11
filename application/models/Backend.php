<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'model.php';

class Backend extends model {

    public function __construct() {
        parent::__construct();
    }

    public static $recursive ;

    //Load Menu
    
    public function loadMenu(){
        $menu = parent::getData('menu');
        $this->recursive($menu,0,'');
        
    }

    public function recursive($source, $parent =0, $step='') {
          if(count($source)>0){
              foreach ($source as $key => $value) {
                  if($value['parent']==$parent){
                      $value['menu'] = $step.$value['menu'];
                      self::$recursive[]= $value; 
                      $newparent = $value['id'];
                      unset($source[$key]);
                       $this->recursive($source, $value['id'],$step.'--->');
                      
                  } 
                  
              }
          }
    }
    
    public function getrecursive(){
        if(self::$recursive==null){
           $this->loadMenu(); 
        }
        return self::$recursive;
    }

}

