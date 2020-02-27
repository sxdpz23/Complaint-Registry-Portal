<?php
/* @var $this ComputerController */
/* @var $model Computer */

$this->breadcrumbs=array(
	'Computers'=>array('index'),
	'Create',
);
 if (''.Yii::app()->user->name.''==='admin')
 {  
        $this->menu=array(
                array('label'=>'Manage Complaint', 'url'=>array('admin')),
        );
 }
?>

<h1>Create Complaints</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>