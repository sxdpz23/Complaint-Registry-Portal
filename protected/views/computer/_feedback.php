<?php
/* @var $this ComputerController */
/* @var $model Computer */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'computer-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<h2>Id:- <?php echo "$model->id"; ?></h2> 

	<div class="row">
		<?php echo $form->labelEx($model,'feedback'); ?>
             <?php echo $form->textArea($model,'feedback',array('rows'=>4,'cols'=>24,'style'=>'resize','maxlength'=>1000)); ?>
		<?php echo $form->error($model,'feedback'); ?>
	</div>

	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Send' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->