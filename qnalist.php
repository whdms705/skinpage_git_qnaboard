<?
$conn=mysql_connect("localhost","root","apmsetup") or die(mysql_error());
mysql_select_db("skinboard",$conn);
mysql_query("set names 'utf8'");

$result=mysql_query("select * from qnaboard",$conn)or die(mysql_error());
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Q & A page</title>
</head>
<body>
	<b>글 목록</b>
	<center>
	<table>
		<tr>
			<td bgcolor="#E7E7E7">순번</td><td bgcolor="#E7E7E7">제목</td><td bgcolor="#E7E7E7">날짜</td>
		</tr>
		<?

		while($row=mysql_fetch_array($result)){
			echo"
			<tr>
				<td><a href='../skinboard/qnalistdetail.php?id=$row[qnanumber]'>$row[qnanumber]</a></td>
				<td>$row[qnatitle]</td>
				<td>$row[qnadate]</td>
				
			</tr>
			";
		}

		?>
	</table>
	</center>
	<button><a href="qnawrite.php">글쓰기</a></button>
</body>
</html>