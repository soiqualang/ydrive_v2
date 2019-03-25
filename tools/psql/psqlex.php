<?php
//http://localhost/dothanhlong.org/tools/postgresql_tool/psqlex.php?binfol=C%3A%5CProgram+Files+%28x86%29%5CPostgreSQL%5C9.2%5Cbin&port=5433&dbname=thuadat_dongnai_v4&outfol=D%3A%5Ctmp%5Csqlout&submit_dump2sql=
set_time_limit(0);
function convertstr($str){
	$laststr=substr($str,(strlen($str)-1),1);
	if($laststr!='\\'){
		//return str_replace('\\','/',$str).'/';
		return $str.'\\';
	}else{
		return $str;
	}
}
if(isset($_GET['submit_dump2sql'])){
	$binfol=$_GET['binfol'];
	$port=$_GET['port'];
	$uname=$_GET['uname'];
	$dbname=$_GET['dbname'];
	$outfol=convertstr($_GET['outfol']);
	//echo $outfol.$dbname;
	$batchfile='';
	$batchfile.='set path='.$binfol.'
';
	$batchfile.='call pg_dump -p '.$port.' -U '.$uname.' "'.$dbname.'" > "'.$outfol.$dbname.'.sql"
';
	$batchfile.='pause';
	
	$size = strlen($batchfile);
	header('Content-Disposition: attachment; filename="'.$dbname.'2sql.bat"');
	//header('Content-Type: BAT MIME TYPE or something like application/octet-stream');
	header('Content-Type: BAT MIME TYPE');
	header('Content-Lenght: '.$size);
	echo $batchfile;
}
if(isset($_GET['submit_dump2backup'])){
	$binfol=$_GET['binfol'];
	$port=$_GET['port'];
	$uname=$_GET['uname'];
	$dbname=$_GET['dbname'];
	$outfol=convertstr($_GET['outfol']);
	//pg_dump -p 5433 -U postgres -f "D:\tmp\sqlout\thuadat_dongnai_v4.backup" "thuadat_dongnai_v4"
	$batchfile='';
	$batchfile.='set path='.$binfol.'
';
	$batchfile.='call pg_dump -p '.$port.' -U '.$uname.' -f "'.$outfol.$dbname.'.backup" "'.$dbname.'"
';
	$batchfile.='pause';
	
	$size = strlen($batchfile);
	header('Content-Disposition: attachment; filename="'.$dbname.'2backup.bat"');
	//header('Content-Type: BAT MIME TYPE or something like application/octet-stream');
	header('Content-Type: BAT MIME TYPE');
	header('Content-Lenght: '.$size);
	echo $batchfile;
}
if(isset($_GET['submit_sql2db'])){
	$binfol=$_GET['binfol'];
	$port=$_GET['port'];
	$uname=$_GET['uname'];
	$dbname=$_GET['dbname'];
	$fname=$_GET['fname'];
	$infol=convertstr($_GET['infol']);
	//psql -p 5432 -U postgres -d thuadatq1 -q -f "C:\Users\dtlong\Desktop\thuadatq1.sql"
	$batchfile='';
	$batchfile.='set path='.$binfol.'
';
	$batchfile.='call psql -p '.$port.' -U '.$uname.' -d '.$dbname.' -q -f "'.$infol.$fname.'"
';
	$batchfile.='pause';
	
	$size = strlen($batchfile);
	header('Content-Disposition: attachment; filename="'.$dbname.'_sql2db.bat"');
	//header('Content-Type: BAT MIME TYPE or something like application/octet-stream');
	header('Content-Type: BAT MIME TYPE');
	header('Content-Lenght: '.$size);
	echo $batchfile;
}
if(isset($_GET['submit_backup2db'])){
	$binfol=$_GET['binfol'];
	$port=$_GET['port'];
	$uname=$_GET['uname'];
	$dbname=$_GET['dbname'];
	$fname=$_GET['fname'];
	$infol=convertstr($_GET['infol']);
	//pg_restore -p 5432 -U postgres -d thuadatq1 "C:\Users\dtlong\Desktop\thudatq1.backup"
	$batchfile='';
	$batchfile.='set path='.$binfol.'
';
	$batchfile.='call pg_restore -p '.$port.' -U '.$uname.' -d '.$dbname.' "'.$infol.$fname.'"
';
	$batchfile.='pause';
	
	$size = strlen($batchfile);
	header('Content-Disposition: attachment; filename="'.$dbname.'_backup2db.bat"');
	//header('Content-Type: BAT MIME TYPE or something like application/octet-stream');
	header('Content-Type: BAT MIME TYPE');
	header('Content-Lenght: '.$size);
	echo $batchfile;
}
?>