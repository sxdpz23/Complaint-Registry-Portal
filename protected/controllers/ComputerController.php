<?php

class ComputerController extends RController
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
                      'rights',
		//	'accessControl', // perform access control for CRUD operations
		//	'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','usersearch','feedback'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','update','adminpending','adminattended','admincompleted'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Computer;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Computer']))
		{
			$model->attributes=$_POST['Computer'];
                        $model ['date'] = date('m/d/Y');
                        $model ['name'] = Yii::app()->user->name;
                        $model ['status'] = "pending";
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}
		$this->render('create',array(
			'model'=>$model,
		));
	}
        
        public function actionFeedback($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Computer']))
		{
			$model->attributes=$_POST['Computer'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('feedback',array(
			'model'=>$model,
		));
	}
        
	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Computer']))
		{
			$model->attributes=$_POST['Computer'];
                        $model ['workDoneOn'] = date('m/d/Y');
                        $model['updatedBy'] = Yii::app()->user->name;
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Computer');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Computer('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Computer']))
			$model->attributes=$_GET['Computer'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
        
        public function actionAdminpending()
	{
		$model=new Computer('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Computer']))
			$model->attributes=$_GET['Computer'];

		$this->render('adminpending',array(
			'model'=>$model,
		));
	}
        
        public function actionAdminattended()
	{
		$model=new Computer('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Computer']))
			$model->attributes=$_GET['Computer'];

		$this->render('adminattended',array(
			'model'=>$model,
		));
	}
        
        public function actionAdmincompleted()
	{
		$model=new Computer('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Computer']))
			$model->attributes=$_GET['Computer'];

		$this->render('admincompleted',array(
			'model'=>$model,
		));
	}
        
        public function actionUsersearch()
	{
		$model=new Computer('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Computer']))
			$model->attributes=$_GET['Computer'];

		$this->render('usersearch',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Computer the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Computer::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Computer $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='computer-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
