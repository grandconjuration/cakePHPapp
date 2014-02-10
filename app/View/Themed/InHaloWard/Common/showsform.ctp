<?php $this->extend('/Common/shows'); ?>
<?php $this->Html->script('datepicker', array('inline' => false)); ?>
<?php $this->Js->buffer("new DatePicker('.demo_dashboard', { pickerClass: 'datepicker_dashboard', timePicker: true, inputOutputFormat: 'Y/m/d H:i','format': 'd-m-Y H:i', days: ['Zondag', 'Maandag', 'Dinsdag', 'Woensdag', 'Donderdag', 'Vrijdag', 'Zaterdag'],
		months: ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December']});"); ?>
<?php echo $this->fetch('content'); ?>