<?php
/* -----------------------------------------------------------------------------------------
   LamnhA-Z - http://www.lamnha-z.com
   -----------------------------------------------------------------------------------------
   Copyright (c) 2015 LamNhaZ Ltd.
   License - http://www.lamnha-z.com/license.html
   ---------------------------------------------------------------------------------------*/

App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class MenusController extends AppController {

/**
 * products method
 *
 * @return ProductData
 */
    function oneLevelProductCats() {
        $this->autoRender = false;
        $this->loadModel('ProductCategory');
        $options = array('conditions' => array('ProductCategory.parent_id' => 1), 'recursive' => -1);
        $ProductCategories = $this->ProductCategory->find('all', $options);
        foreach ($ProductCategories as $Category)
            $ProductData[$Category['ProductCategory']['id']] = $Category['ProductCategory'];
        return $ProductData;
    }
    function productCats() {
        $this->layout = 'ajax';
        $this->loadModel('ProductCategory');
        $ProductCategories = $this->ProductCategory->find('all', array('recursive' => -1));
        foreach ($ProductCategories as $Category)
            $ProductData[$Category['ProductCategory']['id']] = $Category['ProductCategory'];
        $this->set('data', $ProductData);
        return $ProductData;
    }

/**
 * services method
 *
 * @return ServiceData
 */
    function oneLevelServiceCats() {
        $this->autoRender = false;
        $this->loadModel('ServiceCategory');
        $options = array('conditions' => array('ServiceCategory.parent_id' => 1), 'recursive' => -1);
        $ServiceCategories = $this->ServiceCategory->find('all', $options);
        foreach ($ServiceCategories as $Category)
            $ServiceData[$Category['ServiceCategory']['id']] = $Category['ServiceCategory'];
        return $ServiceData;
    }
    function serviceCats() {
        $this->layout = 'ajax';
        $this->loadModel('ServiceCategory');
        $ServiceCategories = $this->ServiceCategory->find('all', array('recursive' => -1));
        foreach ($ServiceCategories as $Category)
            $ServiceData[$Category['ServiceCategory']['id']] = $Category['ServiceCategory'];
        $this->set('data', $ServiceData);
        return $ServiceData;
    }

/**
 * projects method
 *
 * @return ProjectData
 */
    function oneLevelProjectCats() {
        $this->autoRender = false;
        $this->loadModel('ProjectCategory');
        $options = array('conditions' => array('ProjectCategory.parent_id' => 1), 'recursive' => -1);
        $ProjectCategories = $this->ProjectCategory->find('all', $options);
        foreach ($ProjectCategories as $Category)
            $ProjectData[$Category['ProjectCategory']['id']] = $Category['ProjectCategory'];
        return $ProjectData;
    }
	function projectCats() {
        $this->layout = 'ajax';
        $this->loadModel('ProjectCategory');
        $ProjectCategories = $this->ProjectCategory->find('all', array('recursive' => -1));
        foreach ($ProjectCategories as $Category)
            $ProjectData[$Category['ProjectCategory']['id']] = $Category['ProjectCategory'];
        $this->set('data', $ProjectData);
        return $ProjectData;
	}

/**
 * services method
 *
 * @return NewsData
 */
    function oneLevelNewsCats() {
        $this->autoRender = false;
        $this->loadModel('NewsCategory');
        $options = array('conditions' => array('NewsCategory.parent_id' => 1), 'recursive' => -1);
        $NewsCategories = $this->NewsCategory->find('all', $options);
        foreach ($NewsCategories as $Category)
            $NewsData[$Category['NewsCategory']['id']] = $Category['NewsCategory'];
        return $NewsData;
    }
    function newsCats() {
        $this->loadModel('NewsCategory');
        $NewsCategories = $this->NewsCategory->find('all', array('recursive' => -1));
        foreach ($NewsCategories as $Category)
            $NewsData[$Category['NewsCategory']['id']] = $Category['NewsCategory'];
        $this->set('data', $NewsData);
        return $NewsData;
    }
}