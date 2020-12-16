<!doctype html>
<html>
<head>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	
<meta charset="utf-8">
<title>無標題文件</title>
<?php
 include_once('db_conn.php');	

	 //變數轉換	
$o_name=$_POST['o_name'];	 
$o_type=$_POST['o_type'];	 
$o_contact=$_POST['o_contact'];	 
$o_info=$_POST['o_info'];	 
//寫入資料格式	 
$conn->set_charset('utf-8');
	
//變數寫入資料
	
$insert="insert into memo(o_name,o_type,o_contact,o_info)values('$o_name','$o_type','$o_contact','$o_info')";
	
if($conn->query($insert)){
	echo'資料寫入成功';
}else{die( $conn->error);}	
	
	
	?>
	
	
<style>
		
	
	
</style>	
</head>
	
	

<body>
	<div align="center">
	<h1>留言完成</h1>
		<hr>
	<div>
	<div> 您的大名 ： <?php  echo $o_name?></div>
	<div> 問題類型 ： <?php  echo $o_type?></div>
	<div> 聯絡資訊 ： <?php  echo $o_contact?></div>
	<div> 問題描述 ： <?php  echo $o_info?></div>
	<div>
		<p><a href="db_memo_select.php" class="btn btn-outline-primary">前往留言板</a> <a href="db_memo.php" class="btn btn-primary" >我要留言</a>
		</p>	
		
	</div>
		
	
	</div>
	</div>
</body>
</html>