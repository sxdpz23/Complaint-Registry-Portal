<?php
/* @var $this ComputerController */
/* @var $model Computer */

$this->breadcrumbs=array(
	'Computers'=>array('index'),
	'Manage',
);
/*
$this->menu=array(
	//array('label'=>'List Computer', 'url'=>array('index')),
	array('label'=>'Launch complaint', 'url'=>array('create')),
);
*/
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#computer-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Computers online complaint </h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
        'status'=>($model->status='pending')
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'computer-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
    
	'columns'=>array(
		
		'id',
                'name',
		'date',
		'location',
		'contact',
		'complaint',
                'status',
		/*
                 * 'id',
		'workAssignTo',
		'actionTaken',
		
		'workDoneOn',
		'updatedBy',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
