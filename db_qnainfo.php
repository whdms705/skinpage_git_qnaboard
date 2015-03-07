<?

$conn=mysql_connect('localhost','root','apmsetup') or die(mysql_error());
mysql_select_db('skinboard',$conn);
mysql_query("set names utf8");

?>