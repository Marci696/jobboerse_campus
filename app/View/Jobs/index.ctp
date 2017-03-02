<h1 class="text-center">Liste aller Jobs</h1>
<table class="table">
    <th>Firma</td>
    <th>Stellenangebot</th>
    <th>Erstellt</th>
    <th>Letzte Änderung</th>
<?php foreach($jobs as $job):?>
	    <tr>
	        <td>
	            <?php echo $job['Job']['company']; ?>
	        </td>
	        <td>
				<?php echo $this->Html->link($job['Job']['vacancy'],
					array('controller' => 'jobs', 'action' => 'view', $job['Job']['id']));
				?>
	        </td>
	        <td>
	            <?php echo $job['Job']['created']; ?>
	        </td>
	        <td>
	            <?php echo $job['Job']['edited']; ?>
	        </td>
	    </tr>
<?php endforeach; ?>
</table>
