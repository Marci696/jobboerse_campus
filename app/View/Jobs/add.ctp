<h1 class="text-center">Neuen Job erstellen</h1>
<?php echo $this->Form->create('Job'); ?>
	<div class="form-group">
		<?php
		echo $this->Form->input('Job.company', array('class' => 'form-control', 'label' => 'Firma'));
		echo $this->Form->input('Job.vacancy', array('rows' => '2', 'class' => 'form-control', 'label' => 'Job'));
		echo $this->Form->input('Job.description', array('rows' => '20', 'class' => 'form-control', 'label' => 'Beschreibung'));
		echo $this->Form->Input('Job.email', array('class' => 'form-control', 'label' => 'E-Mail'));
		?>
	</div>
	<button class="btn btn-default" type="submit">Erstellen</button>
<?php $this->Form->end(); ?>
