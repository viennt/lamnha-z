<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class MenusController extends AppController {

/**
 * projects method
 *
 * @return Projectdata
 */
	function projects() {
        $this->loadModel('ProjectCategory');
        $ProjectCategories = $this->ProjectCategory->find('all');
        foreach ($ProjectCategories as $Category) {
            $Projectdata[$Category['ProjectCategory']['parent_id']][] = $Category;
        }
        $this->set('menuHorizontal_projects', $Projectdata);
        return $Projectdata;
	}

/**
 * products method
 *
 * @return Productdata
 */
	function products() {
        $this->loadModel('ProductCategory');
        $ProductCategories = $this->ProductCategory->find('all');
        foreach ($ProductCategories as $Category) {
            $Productdata[$Category['ProductCategory']['parent_id']][] = $Category;
        }
        return $Productdata;
	}

/**
 * services method
 *
 * @return Servicedata
 */
    function services() {
        $this->loadModel('ServiceCategory');
        $ServiceCategories = $this->ServiceCategory->find('all');
        foreach ($ServiceCategories as $Category) {
            $Servicedata[$Category['ServiceCategory']['parent_id']][] = $Category;
        }
        $this->set('menuHorizontal_services', $Servicedata);
        return $Servicedata;
    }

/**
 * services method
 *
 * @return Newsdata
 */
    function news() {
        $this->loadModel('NewsCategory');
        $NewsCategories = $this->NewsCategory->find('all');
        foreach ($NewsCategories as $Category) {
            $Newsdata[$Category['NewsCategory']['parent_id']][] = $Category;
        }
        $this->set('menuHorizontal_news', $Newsdata);
        return $Newsdata;
    }
}