<?php
/* -----------------------------------------------------------------------------------------
   LamnhA-Z - http://www.lamnha-z.com
   -----------------------------------------------------------------------------------------
   Copyright (c) 2015 LamNhaZ Ltd.
   License - http://www.lamnha-z.com/license.html
   ---------------------------------------------------------------------------------------*/

App::uses('AppModel', 'Model', 'File', 'Utility');
/**
 * NewsImage Model
 *
 * @property News $News
 */
class NewsImage extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'uploadError' => array(
				'rule' => 'uploadError',
				'message' => 'Something went wrong with the file upload',
				'required' => FALSE,
				'allowEmpty' => TRUE,
			),
			'processUpload' => array(
				'rule' => 'processUpload',
				'message' => 'Something went wrong processing your file',
				'required' => FALSE,
				'allowEmpty' => TRUE,
				'last' => TRUE,
			)
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'News' => array(
			'className' => 'News',
			'foreignKey' => 'news_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * Upload Directory relative to WWW_ROOT
 * @param string
 */
	public $uploadDir = 'img/uploads/news';
	public $image;

/**
 * Before Validation Callback
 * @param array $options
 * @return boolean
 */
	public function beforeValidate($options = array()) {
		return parent::beforeValidate($options);
	}

/**
 * Before Save Callback
 * @param array $options
 * @return boolean
 */
	public function beforeSave($options = array()) {
		// a file has been uploaded so grab the filepath
		if (!empty($this->data[$this->alias]['name']['name'])) {
			$this->data[$this->alias]['name'] = round(microtime(true)).'.'.pathinfo($this->data[$this->alias]['name']['name'], PATHINFO_EXTENSION);
		}
		else{
			unset($this->data[$this->alias]['name']);
		};
		
		return parent::beforeSave($options);
	}
	

/**
 * Before Delete Callback
 * @param array $options
 * @return boolean
 */
	public function beforeDelete($cascade = true) {
		$this->image = $this->find('first', 
			array('conditions' => array('NewsImage.id' => $this->id), 'recursive' => 0, 'fields' => 'NewsImage.name')
			);
	}

/**
 * After Delete Callback
 * @param array $options
 * @return boolean
 */
	public function afterDelete() {
		var_dump($this->image);
		if(isset($this->image['NewsImage']['name'])){
	    	unlink(WWW_ROOT . $this->uploadDir . DS . $this->image['NewsImage']['name']);
		}
	}

/**
 * Process the Upload
 * @param array $check
 * @return boolean
 */
	public function processUpload($check=array()) {
		if (!empty($check['name']['tmp_name'])) {
			// check file is uploaded
			if (!is_uploaded_file($check['name']['tmp_name'])) {
				return FALSE;
			}
			// build full filename
			$filename = WWW_ROOT . $this->uploadDir . DS . round(microtime(true)).'.'.pathinfo($check['name']['name'], PATHINFO_EXTENSION);
			// @todo check for duplicate filename
			// try moving file
			if (!move_uploaded_file($check['name']['tmp_name'], $filename)) {
				return FALSE;
			// file successfully uploaded
			} else {
				// save the file path relative from WWW_ROOT e.g. uploads/example_filename.jpg
				$this->data[$this->alias]['filepath'] = str_replace(DS, "/", str_replace(WWW_ROOT, "", $filename) );
			}
		}
		return TRUE;
	}
}
