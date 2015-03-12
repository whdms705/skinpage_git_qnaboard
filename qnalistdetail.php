<html>
<head>
<style type="text/css">
	
	
</style>
	<meta charset="utf-8">
	<title>Q & A detail_list</title>
	<link rel="stylesheet" type="text/css" href="qna.css">
</head>
<body>
	<form action="" method="post">


		<center>
			<table border="1">
				<?

				$qnanumber=$_GET['id'];

				$conn=mysql_connect("localhost","root","apmsetup") or die(mysql_error());
				mysql_select_db("skinboard",$conn);
				mysql_query("set names 'utf8'");

				$result=mysql_query("select * from qnaboard where qnanumber='".$qnanumber."'; ",$conn);
                
                while($row=mysql_fetch_array($result)){
				echo 
				"<tr>

				<td class='posttitle'>$row[qnatitle]</td>

			    </tr>

			    <tr>

				<td class='posttext'>$row[qnacontent]</td>

			    </tr>

			    <tr>

				<td ><a href='modify.php?id=$row[qnanumber]'><div>수정</div></a>
				<a href='qnalist.php'><div style='text-align:right'>돌아가기</div></a></td>
				

			    </tr>

			    ";

			}

			?>

		</table>
	</center>



</form>

</body>
</html>
