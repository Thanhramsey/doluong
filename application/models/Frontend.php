<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'Model.php';

class Frontend extends Model {

    public function __construct() {
        parent::__construct();
    }

    public static $information;
    public static $getmenu = '';
    public static $getproductFE;
    public static $getlistproductFE;
    public static $getnewsFE;
    public static $gallery;



 

 

//===========================================Get thông tin cá nhân============================================
    public function getInfomation() {
        if (self::$information == null) {
            self::$information = parent::getInfo('1', 'configuration');
        }

        return self::$information;
    }

//===============================================Get Menu=====================================================
    public function getMenu() {
        $condition = array(
            'status' => 1,
            'parent' => 0
        );
        $menus = parent::getList('menu', $condition,'asc');
        if (count($menus) > 0) {

            foreach ($menus as $menu) {
                self::$getmenu = self::$getmenu . "<li>";
                self::$getmenu = self::$getmenu . "<a href='" . base_url($menu['url']) . "' title='" . $menu['menu'] . "'>" . $menu['menu'] . "</a>";
                $this->getSubmenu($menu['id']);
                self::$getmenu = self::$getmenu . "</li>";
            }
        }
        return self::$getmenu;
    }

    public function getSubmenu($parent) {
        $condition = array(
            'status' => 1,
            'parent' => $parent
        );
        $submenus = parent::getList('menu', $condition,'asc');
        if (count($submenus) > 0) {
            self::$getmenu = self::$getmenu . "<ul>";
            foreach ($submenus as $submenu) {
                self::$getmenu = self::$getmenu . "<li><a href='" . base_url($submenu['url']) . "' title='" . $submenu['menu'] . "'>" . $submenu['menu'] . "</a>";
                self::$getmenu = self::$getmenu . "</li>";
            }
            self::$getmenu = self::$getmenu . "</ul>";
        }
    }

    public function getMenus() {
        if (self::$getmenu == '') {
            self::$getmenu = $this->getMenu();
            return self::$getmenu;
        }
        return self::$getmenu;
    }

//=================================Get thông tin cho Trang chủ====================================================


}


