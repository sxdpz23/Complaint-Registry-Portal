<?php

class LoginController extends Controller
{
	public $defaultAction = 'login';

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
            if (Yii::app()->user->isGuest) {
                $model=new UserLogin;
		// collect user input data
		if(isset($_POST['UserLogin']))
		{
                    $model->attributes=$_POST['UserLogin'];
		// validate user input and redirect to previous page if valid
                    if($model->validate()) {
                        $uname = 'username';
                        if ((($model->$uname)==='administrator')||(($model->$uname)==='fieldengineer')){
                            $this->lastViset();
                            if ('/index.php')
                            {
				{$this->redirect(Yii::app()->controller->module->returnUrladmin);}
                            }
                            else
                            {
				{$this->redirect(Yii::app()->user->returnUrladmin);}
                            }
                        }
                        else {
                            $this->lastViset();
                            if ('/index.php')
                            {
				{$this->redirect(Yii::app()->controller->module->returnUrl);}
                            }
                            else
                            {
				{$this->redirect(Yii::app()->user->returnUrl);}
                            }
                        }
                    }
		}
		// display the login form
		$this->render('/user/login',array('model'=>$model,));
            } else
            {
                if ((($model->$uname)==='administrator')||(($model->$uname)==='fieldengineer'))
                {$this->redirect(Yii::app()->controller->module->returnUrladmin);}
                else {$this->redirect(Yii::app()->controller->module->returnUrladmin);}
            }
	}
	
	private function lastViset() {
		$lastVisit = User::model()->notsafe()->findByPk(Yii::app()->user->id);
		$lastVisit->lastvisit = time();
		$lastVisit->save();
	}

}