
<html>
<head>
	<meta charset="utf-8">
	<title>MODIFY page</title>
	<link rel="stylesheet" type="text/css" href="qna.css">
</head>
<body>
	
	<?
	$qnanumber=$_GET['id'];

	$conn=mysql_connect('localhost','root','apmsetup') or die(mysql_error());
	mysql_select_db('skinboard',$conn);
	mysql_query("set names utf8");

	$result=mysql_query("select * from qnaboard where qnanumber='".$qnanumber."'; ",$conn);
	?>
	<form action='qnamodifyupdate.php?id=<?=$qnanumber?>' method='post'>
		<center>
			<?

			while($row=mysql_fetch_array($result)){



				echo "<input class='posttitle'  type='text' name='modifyposttitle' value='$row[qnatitle]' ><br><br>";
				echo "<textarea class='posttext' name='modifyposttext'>$row[qnacontent]</textarea><br><br>";
			}
			?>
			<input type='submit' value='확인'>
		</center>
	</form>
	


	


	
	
	

</body>
</html>
