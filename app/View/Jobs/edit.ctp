<h1 class="text-center">Job bearbeiten</h1>
<?php echo $this->Form->create('Job'); ?>
	<div class="form-group">
		<?php
		echo $this->Form->input('Job.company', array('class' => 'form-control', 'label' => 'Firma', 'value' => $job['Job']['company']));
		echo $this->Form->input('Job.vacancy', array('rows' => '2', 'class' => 'form-control', 'label' => 'Job', 'value' => $job['Job']['vacancy']));
		echo $this->Form->input('Job.description', array('rows' => '20', 'class' => 'form-control', 'label' => 'Beschreibung', 'value' => $job['Job']['description']));
		?>
	</div>
	<button class="btn btn-default" type="submit">Bearbeiten</button>
	<?php
	echo $this->Html->link('<button class="btn btn-default" type="button">Löschen</button>',
		array('controller' => 'jobs', 'action' => 'delete', $job['Job']['token']), array('escape' => false));
	?>
<?php $this->Form->end(); ?>
