<?php
/* @var $this ComputerController */
/* @var $model Computer */

$this->breadcrumbs=array(
	'Computers'=>array('index'),
    $model->name=>array('view','id'=>$model->id),
	'Feedback',
);
/*
if(Yii::app()->user->name==='fieldengineer'){$this->menu=array(array('label'=>'View ', 'url'=>array('view', 'id'=>$model->id)),);
}else{$this->menu=array(
	//array('label'=>'List Computer', 'url'=>array('index')),
	//array('label'=>'Create Computer', 'url'=>array('create')),
	array('label'=>'View ', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ', 'url'=>array('admin')),);
}*/
?>

<h1>Send Feedback <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_feedback', array('model'=>$model)); ?>