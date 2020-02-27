<?php
/* @var $this ComputerController */
/* @var $data Computer */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('location')); ?>:</b>
	<?php echo CHtml::encode($data->location); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact')); ?>:</b>
	<?php echo CHtml::encode($data->contact); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('complaint')); ?>:</b>
	<?php echo CHtml::encode($data->complaint); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('workAssignTo')); ?>:</b>
	<?php echo CHtml::encode($data->workAssignTo); ?>
	<br /> 
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('feedback')); ?>:</b>
	<?php echo CHtml::encode($data->feedback); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('actionTaken')); ?>:</b>
	<?php echo CHtml::encode($data->actionTaken); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('workDoneOn')); ?>:</b>
	<?php echo CHtml::encode($data->workDoneOn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updatedBy')); ?>:</b>
	<?php echo CHtml::encode($data->updatedBy); ?>
	<br />   */?>

</div>