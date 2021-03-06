<?php
/* @var $this InformationController */
/* @var $model Information */
/* @var $form CActiveForm */
//form options array...

?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'information-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
        'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
    ),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'full_name'); ?>
		<?php echo $form->textField($model,'full_name',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'full_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'location'); ?>
		<?php
                $records = Location::model()->findAll(array('order' => 'location'));
                $lis = CHtml::listData($records, 'id','location');
                echo CHtml::dropDownList('location', null, $lis, array('empty' => 'Select Location'));
                ?>
		<?php echo $form->error($model,'location'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php
                $records = Phone::model()->findAll(array('order' => 'phone'));
                $list = CHtml::listData($records, 'id','phone');
                echo CHtml::dropDownList('phone', null, $list, array('empty' => 'Select Model'));
                ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'number'); ?>
		<?php echo $form->textField($model,'number'); ?>
		<?php echo $form->error($model,'number'); ?>
	</div>
        
    <div class="row">
        <?php echo $form->labelEx($model,'image'); ?>
        <?php echo CHtml::activeFileField($model, 'image'); /* by this we can upload image */ ?>  
        <?php echo $form->error($model,'image'); ?>
	</div>
		<?php if($model->isNewRecord!='1'){ ?>
	<div class="row">
	     <?php echo CHtml::image(Yii::app()->request->baseUrl.'/banner/'.$model->image,"image",array("width"=>200)); } /* Image shown here if page is update page */ ?>  
	</div>
        

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->