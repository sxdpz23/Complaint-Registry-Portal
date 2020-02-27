<?php
/* @var $this CivilController */
/* @var $model Civil */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'computer-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>
       <table>
<tr><td> 
	<?php echo $form->errorSummary($model); ?>
<h2>Complaint By:-
	<?php echo "$model->name "; ?></h2>
        
        </td><td>    
                    
       <h2>Dated:-
	<?php echo "$model->date "; ?></h2> 
 </td><td>    
	 <h2>Location:-
	<?php echo "$model->location"; ?></h2> 

 </td></tr>
</table>
 <h2>Contact NO:-
	<?php echo "$model->contact"; ?></h2> 

	<h2>Complaint:-
	<?php echo "$model->complaint"; ?></h2> 

        
	<div class="row">
		<?php echo $form->labelEx($model,'workAssignTo'); ?>
		<?php echo $form->textField($model,'workAssignTo',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'workAssignTo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'actionTaken'); ?>
		 <?php echo $form->textArea($model,'actionTaken',array('rows'=>4,'cols'=>24,'style'=>'resize','maxlength'=>500)); ?>
		<?php echo $form->error($model,'actionTaken'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropDownList($model,'status',array('COMPLETED'=>'COMPLETED','PENDING'=>'PENDING','ATTEND(pending) '=>'ATTEND(pending)'),array('empty'=>'(PLEASE SELECT ANY ONE)')) ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->