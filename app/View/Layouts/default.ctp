
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap.min.css');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<style> body { padding-top: 70px; } </style>
</head>
<body>
	<div id="container" class="container">
	    <nav class="navbar navbar-inverse navbar-fixed-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
			  <?php echo $this->Html->link('Jobbörse',
					array('controller' => 'jobs', 'action' => 'index'), array('class' => 'navbar-brand'));
				?>
	        </div>
	        <div id="navbar" class="collapse navbar-collapse">
	          <ul class="nav navbar-nav">
	            <li>
					<?php echo $this->Html->link('Job-Liste',
						array('controller' => 'jobs', 'action' => 'index'));
					?>
				</li>
	            <li>
					<?php echo $this->Html->link('Job erstellen',
						array('controller' => 'jobs', 'action' => 'add'));
					?>
	            </li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>
		<div id="content" class="starter-template">

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<?php echo $this->Html->script('bootstrap.min.js'); ?>
</body>
</html>
