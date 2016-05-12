<?php
class CommonHelper extends AppHelper {

    var $helpers = array("Html", "Number");

///////////////////////////////////////////////////////////////////////////////////////////

    // Ham tao menu
    function create_menu($data = null, $parent = 0, $model = null, $controller = null, $action = null, $liclass = 'has-sub') {
        $str = '';
        $str .= '<ul>';
        foreach($data as $key => $rs) {
            if($rs['parent_id'] == $parent) {
                unset($data[$key]);
                $rs['rght'] - $rs['lft'] == 1 ? $str .= '<li>' : $str .= '<li class="'.$liclass.'">';
                $str .= $this->Html->link(
                        $rs['name'],
                        array(
                            'controller' => $controller, 
                            'action' => $action,
                            'id' => $rs['id'],
                            'slug' => $this->convertViToEn($rs['name'], true)
                        )
                    );
                $rs['rght'] - $rs['lft'] == 1 ?  : $str .= $this->create_menu($data, $rs['id'], $model, $controller, $action, $liclass);
                $str .= '</li>';
            }
        }
        $str .= '</ul>';
        return $str;
    }

    function create_adminlte_menu($data = null, $parent = 0, $model = null, $controller = null, $action = null, $liclass = 'has-sub', $ulclass = 'treeview-menu') {
        $str = '';
        $str .= '<ul class="'.$ulclass.'">';
        foreach($data as $key => $rs) {
            if($rs['parent_id'] == $parent) {
                unset($data[$key]);
                $str .= '<li>';
                $str .= $this->Html->link(
                        '<span class="glyphicon glyphicon-menu-right"></span> '. $rs['name'],
                        array(
                            'controller' => $controller, 
                            'action' => $action,
                            'id' => $rs['id'],
                            'slug' => $this->convertViToEn($rs['name'], true)
                        ),
                        array('escape' => false)
                    );
                $rs['rght'] - $rs['lft'] == 1 ?  : $str .= $this->create_adminlte_menu($data, $rs['id'], $model, $controller, $action, $liclass, $ulclass);
                $str .= '</li>';
            }
        }
        $str .= '</ul>';
        return $str;
    }

///////////////////////////////////////////////////////////////////////////////////////////

    function convertViToEn($str, $tolink = false) {
        $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
        $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
        $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
        $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
        $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
        $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
        $str = preg_replace("/(đ)/", 'd', $str);
        $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
        $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
        $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
        $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
        $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
        $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
        $str = preg_replace("/(Đ)/", 'D', $str);
        if($tolink) {
            $str = str_replace("&*#39", "", $str);
            $str = str_replace(",", "", $str);
            $str = str_replace(".", "", $str);
            $str = str_replace("(", "", $str);
            $str = str_replace(")", "", $str);
            $str = str_replace("/", "-", $str);
            $str = str_replace(" ", "-", $str);
        }
        return strtolower($str);
    }

///////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////

    function galleryView($product, $onCart) {
        $str = '';
        $str .= '<div class="galleryView col-xs-12 col-sm-6 col-md-3 col-lg-3" style="position: relative;">';
        $str .= '<div class="block">';
        $str .= '<div class="picture_main" align="center">';
        $str .= $this->Html->link(
                    $this->Html->image('product/'.$product['Product']['ProductImg'], array('alt'=>$product['Product']['ProductName'])),
                    array('controller'=>'products', 'action'=>'view', 'parent_id'=>$product['Product']['Id_Category'],'id'=>$product['Product']['Id_Product'], 'slug'=>$this->convertViToEn($product['Product']['ProductName'], true)),
                    array('escape'=>false)
                );
        $str .= '</div><div class="name" align="center">';
        $str .= $this->Html->link($product['Product']['ProductName'],
                    array('controller'=>'products', 'action'=>'view', 'parent_id'=>$product['Product']['Id_Category'],'id'=>$product['Product']['Id_Product'], 'slug'=>Inflector::slug($product['Product']['ProductName'])),
                    array('escape'=>false)
                );
        $str .= '</div>';
        if($onCart != NULL) {
            $str .= '<br/><div style="position: absolute;top: 0;">';
                foreach ($onCart as $idOnCart) {
                    if($idOnCart == $product['Product']['Id_Product'])
                        $str .= $this->Html->image('control/checked.png', array('alt'=>'checked'));
                }
            $str .= '</div>';
        }
        $str .= '<div class="quantities">';
        if(isset($product['UnitpriceProduct'][0]['PricePerHour']))
            $str .= $this->Number->currency($product['UnitpriceProduct'][0]['PricePerHour'], '', array('wholeSymbol'=>'₫', 'wholePosition'=>'after', 'places'=>0, 'thousands'=>'.')).'/giờ';
        else $str .= 'Chưa có giá';
        $str .= '</div><div class="quantities">';
        if(isset($product['UnitpriceProduct'][0]['PricePerDay']))
            $str .= $this->Number->currency($product['UnitpriceProduct'][0]['PricePerDay'], '', array('wholeSymbol'=>'₫', 'wholePosition'=>'after', 'places'=>0, 'thousands'=>'.')).'/ngày';
        else $str .= 'Chưa có giá';
        $str .= '</div></div></div>';
        return $str;
    }

///////////////////////////////////////////////////////////////////////////////////////////

    function listView($product, $onCart) {
        $str = '';
        $str .= '<div class="listView col-xs-12 col-sm-12 col-md-12 col-lg-12">';
        $str .= '<div class="block">';
        $str .= '<div class="block-left" align="center">';
        $str .= $this->Html->link(
                    $this->Html->image('product/'.$product['Product']['ProductImg'], array('alt'=>$product['Product']['ProductName'])),
                    array('controller'=>'products', 'action'=>'view', 'parent_id'=>$product['Product']['Id_Category'],'id'=>$product['Product']['Id_Product'], 'slug'=>$this->convertViToEn($product['Product']['ProductName'], true)),
                    array('escape'=>false)
                );
        $str .= '</div><div class="block-right"><div class="name" align="left">';
        $str .= $this->Html->link($product['Product']['ProductName'],
                    array('controller'=>'products', 'action'=>'view', 'parent_id'=>$product['Product']['Id_Category'],'id'=>$product['Product']['Id_Product'], 'slug'=>Inflector::slug($product['Product']['ProductName'])),
                    array('escape'=>false)
                );
        $str .= '</div>';
        if($onCart != NULL) {
            $str .= '<br/><div style="position: absolute;top: 0; right: 0">';
                foreach ($onCart as $idOnCart) {
                    if($idOnCart == $product['Product']['Id_Product'])
                        $str .= $this->Html->image('control/checked.png', array('alt'=>'checked'));
                }
            $str .= '</div>';
        }
        $str .= '<div class="quantities">';
        if(isset($product['UnitpriceProduct'][0]['PricePerHour']))
            $str .= $this->Number->currency($product['UnitpriceProduct'][0]['PricePerHour'], '', array('wholeSymbol'=>'₫', 'wholePosition'=>'after', 'places'=>0, 'thousands'=>'.')).'/giờ';
        else $str .= 'Chưa có giá';
        $str .= '</div><div class="quantities">';
        if(isset($product['UnitpriceProduct'][0]['PricePerDay']))
            $str .= $this->Number->currency($product['UnitpriceProduct'][0]['PricePerDay'], '', array('wholeSymbol'=>'₫', 'wholePosition'=>'after', 'places'=>0, 'thousands'=>'.')).'/ngày';
        else $str .= 'Chưa có giá';
        $str .= '</div></div></div></div>';
        return $str;
    }

///////////////////////////////////////////////////////////////////////////////////////////

    function simpleView($product, $onCart = NULL) {
        $str = '';
        $str .= '<div class="simpleView col-xs-12 col-sm-12 col-md-12 col-lg-12">';
        $str .= '<div class="block">';
        $str .= '<div class="block-content"><div class="name" align="left">';
        $str .= $this->Html->link($product['Product']['ProductName'],
                    array('controller'=>'products', 'action'=>'view', 'parent_id'=>$product['Product']['Id_Category'],'id'=>$product['Product']['Id_Product'], 'slug'=>Inflector::slug($product['Product']['ProductName'])),
                    array('escape'=>false)
                );
        $str .= '</div>';
        if($onCart != NULL) {
            $str .= '<div style="position: absolute;top: 0; right: 0">';
                foreach ($onCart as $idOnCart) {
                    if($idOnCart == $product['Product']['Id_Product'])
                        $str .= $this->Html->image('control/checked.png', array('alt'=>'checked'));
                }
            $str .= '</div>';
        }
        $str .= '</div></div></div>';
        return $str;
    }
}
?>