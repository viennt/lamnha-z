<?php

App::uses('Helper', 'View');

/**
 * Application helper
 *
 * Add your application-wide methods in the class below, your helpers
 * will inherit them.
 *
 * @package       app.View.Helper
 */
class MenuHelper extends AppHelper {

/**
 * Helper dependencies
 *
 * @var array
 */
    public $helpers = array('Html');

    // Hàm tạo menu
    function admin_sidebar(){
        $menu  = "<ul>";
        $menu .= "<li>".$this->link("CodeIgniter", array(
                                          "controller"=>"templates",
                                          "action"=>"view",
                                          1))."</li>"; 
        $menu .= "</ul>";
        return $menu;
      }
}
?>