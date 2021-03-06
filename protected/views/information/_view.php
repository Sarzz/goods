<?php
/* @var $this InformationController */
/* @var $data Information */

?>

<div class="view">
	<div class = "my">
		<?php 
		if($data->image){ 
			echo CHtml::image(Yii::app()->baseUrl."/banner/".$data->image,$data->image , array(
		    'class' => 'someClass',
		));
		}else{
			echo CHtml::image(Yii::app()->baseUrl."/banner/000.jpg", $data->image , array(
		    'class' => 'someClass',
		));
		}
		
		?>

	</div>
	<div class="mydiv">
		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
		<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('full_name')); ?>:</b>
		<?php echo CHtml::encode($data->full_name); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
		<?php echo CHtml::encode($data->phone); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('location')); ?>:</b>
		<?php echo CHtml::encode($data->location); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
		<?php echo CHtml::encode($data->title); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
		<?php echo CHtml::encode($data->description); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
		<?php echo CHtml::encode($data->email); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('number')); ?>:</b>
		<?php echo CHtml::encode($data->number); ?>
		<br />

	        <b><?php echo CHtml::encode($data->getAttributeLabel('time')); ?>:</b>
		<?php echo CHtml::encode($data->time); ?>
		<br />
       	
	</div>

</div>