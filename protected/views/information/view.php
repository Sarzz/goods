<?php
/* @var $this InformationController */
/* @var $model Information */

$this->breadcrumbs=array(
	'Informations'=>array('index'),
	$model->title,
);

$this->menu=array(
	
	array('label'=>'Update Information', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Information', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	
);
?>

<h1>View Information #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'full_name',
		'title',
		'description',
		'email',
		'number',
                'time',
                'image',
	),
)); ?>
