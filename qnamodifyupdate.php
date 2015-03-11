<?
$qnanumber=$_GET['id'];

$conn=mysql_connect('localhost','root','apmsetup') or die(mysql_error());
mysql_select_db('skinboard',$conn);
mysql_query("set names utf8");


$modifyposttitle=$_POST['modifyposttitle'];
$modifyposttext=$_POST['modifyposttext'];


echo $modifyposttitle;
echo $modifyposttext;
echo $qnanumber;



mysql_query("update qnaboard set qnatitle='".$modifyposttitle."' , qnacontent='".$modifyposttext."' 
 where qnanumber='".$qnanumber."'; ",$conn) or die(mysql_error());



?>
<html>
<head>
	
</head>
<body>
	<script type="text/javascript">
	alert("수정이 완료 되었습니다");
	location.href="qnalist.php";
	</script>
</body>
</html>
