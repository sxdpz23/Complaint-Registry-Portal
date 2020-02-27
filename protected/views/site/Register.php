<?php
/* @var $this RegisterFormController */
/* @var $model RegisterForm */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'register-form-Register-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ID'); ?>
		<?php echo $form->textField($model,'ID'); ?>
		<?php echo $form->error($model,'ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FullName'); ?>
		<?php echo $form->textField($model,'FullName'); ?>
		<?php echo $form->error($model,'FullName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Age'); ?>
		<?php echo $form->textField($model,'Age'); ?>
		<?php echo $form->error($model,'Age'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Email'); ?>
		<?php echo $form->textField($model,'Email'); ?>
		<?php echo $form->error($model,'Email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Department'); ?>
		<?php echo $form->textField($model,'Department'); ?>
		<?php echo $form->error($model,'Department'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PCNo'); ?>
		<?php echo $form->textField($model,'PCNo'); ?>
		<?php echo $form->error($model,'PCNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DOB'); ?>
		<?php echo $form->textField($model,'DOB'); ?>
		<?php echo $form->error($model,'DOB'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Username'); ?>
		<?php echo $form->textField($model,'Username'); ?>
		<?php echo $form->error($model,'Username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Password'); ?>
		<?php echo $form->PasswordField($model,'Password'); ?>
		<?php echo $form->error($model,'Password'); ?>
                <p class="hint">
                    <?php echo UserModule::t("Minimal password length 4 symbols."); ?>
                </p>
	</div>
        
        <div class="row">
                <?php echo $form->labelEx($model,'verifyPassword'); ?>
                <?php echo $form->PasswordField($model,'verifyPassword'); ?>
                <?php echo $form->error($model,'verifyPassword'); ?>
	</div>
        
        <?php if(CCaptcha::checkRequirements()): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		</div>
		<div class="hint">Please enter the letters as they are shown in the image above.
		<br/>Letters are not case-sensitive.</div>
		<?php echo $form->error($model,'verifyCode'); ?>
	</div>
	<?php endif; ?>
        
	<div class="row buttons">
		<?php echo CHtml::submitButton('Register'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->