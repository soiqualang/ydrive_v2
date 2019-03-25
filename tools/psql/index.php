<!DOCTYPE html>
<html lang="en">
<head>
  <title>PostgreSQL tools by Soiqualang_Chentreu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>PostgreSQL tools by Soiqualang_Chentreu</h2>
  <p>Tool to backup and restore PostgreSQL Database by Soiqualang_Chentreu.</p>

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#dump2sql">Dump2SQL</a></li>
    <li><a data-toggle="tab" href="#dump2backup">Dump2Backup</a></li>
    <li><a data-toggle="tab" href="#sql2db">SQL2Db</a></li>
    <li><a data-toggle="tab" href="#backup2db">Backup2Db</a></li>
	<li><a data-toggle="tab" href="#backup2sql">Backupfile2SQLfile</a></li>
  </ul>

  <div class="tab-content">
    <div id="dump2sql" class="tab-pane fade in active">
    <?php
		include('dump2sql.php');
	?>
    </div>
    <div id="dump2backup" class="tab-pane fade">
	<?php
		include('dump2backup.php');
	?>
    </div>
    <div id="sql2db" class="tab-pane fade">
	<?php
		include('sql2db.php');
	?>
    </div>
    <div id="backup2db" class="tab-pane fade">
    <?php
		include('backup2db.php');
	?>
	</div>
	<div id="backup2sql" class="tab-pane fade">
    <?php
		include('backup2sql.php');
	?>
	</div>
</div>



<div class="container">
  
</div>

</body>
</html>
