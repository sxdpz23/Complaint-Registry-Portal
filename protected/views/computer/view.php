<?php
/* @var $this ComputerController */
/* @var $model Computer */

$this->breadcrumbs=array(
	'Computers'=>array('index'),
	$model->name,
);

if (''.Yii::app()->user->name.''==='administrator')
{
$this->menu=array(
	//array('label'=>'List Computer', 'url'=>array('index')),
	//array('label'=>'Create Computer', 'url'=>array('create')),
	array('label'=>'Action taken', 'url'=>array('update', 'id'=>$model->id), 'visible'=>!Yii::app()->user->isGuest),
	//array('label'=>'Delete Computer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage', 'url'=>array('admin'), 'visible'=>!Yii::app()->user->isGuest),
);
}elseif(''.Yii::app()->user->name.''==='fieldengineer') {
        $this->menu=array(array('label'=>'Action taken', 'url'=>array('update', 'id'=>$model->id), 'visible'=>!Yii::app()->user->isGuest),);  
}
if((Yii::app()->user->name!='administrator')||(Yii::app()->user->name!='fieldengineer')){
    if(($model->status)!='pending'){
        echo "<h1>View Complaint #".$model->id."</h1>";}
    else{ 
        echo "<h2>Thank You <i style=\"color: #00FF00\">".Yii::app()->user->name."</i> for letting us know your complaint.</h2>"; 
        echo "<h3>Your <em style=\"color: #0000FF\">Complain ID <i style=\"color: #FF0000\">".$model->id."</i></em> will be attended shortly.</h3>";
      //  echo "<h3> Computer ID ".$model->id."</h3>";   
       }
}
else{ echo "<h1>View Complaint #".$model->id."</h1>";}
?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
	
		'name',
		'date',
		'location',
		'contact',
		'complaint',
		'workAssignTo',
		'actionTaken',
		'status',
		'updatedBy',
                'feedback',
	),
));
if((Yii::app()->user->name!='administrator')&&(Yii::app()->user->name!='fieldengineer')){
    echo "<br>";
    if(($model->status)==='COMPLETED'){
            echo "<h3>This Complaint has been attended and completed by <i style=\"color: #00FF00\">".$model->workAssignTo."</i>. Please fill out the given Feedback form displayed on the right side.</h3>"; 
            $this->menu=array(array('label'=>'Feedback Form', 'url'=>array('feedback', 'id'=>$model->id)),);
    }
    if(($model->status)==='ATTEND(pending) '){
            echo "<h3>This Complaint has been attended by<i style=\"color: #00FF00\">".$model->workAssignTo."</i> and will be completed soon.</h3>"; 
    }
}
?>
