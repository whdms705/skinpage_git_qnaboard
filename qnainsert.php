<?
$conn=mysql_connect('localhost','root','apmsetup') or die(mysql_error());
mysql_select_db('skinboard',$conn);
mysql_query("set names utf8");


$posttitle=$_POST['posttitle'];
$posttext=$_POST['posttext'];

$insert=mysql_query("insert into qnaboard(qnatitle,qnacontent)

	values('$posttitle','posttext')",$conn) or die(mysql_error());

?>