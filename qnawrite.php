<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<title>Q & A page</title>
	<link rel="stylesheet" type="text/css" href="qna.css">



<!------------------editor ---------------- -->

	<link type="text/css" rel="stylesheet" href="css/demo.css">
	<link type="text/css" rel="stylesheet" href="css/jquery-te-1.4.0.css">

	<script type="text/javascript" src="http://code.jquery.com/jquery.min.js" charset="utf-8"></script>
	<script type="text/javascript" src="css/jquery-te-1.4.0.min.js" charset="utf-8"></script>





</head>
<body>
	<form action="qnainsert.php" method="post">
		<center>
			<input class="posttitle"  type="text" name="posttitle" placeholder="포스트의 제목 입력하세요" ><br><br>
			<textarea name="posttext" class="jqte-test" style="width:500%"></textarea>
			<script>
				$('.jqte-test').jqte();

	// settings of status
	var jqteStatus = true;
	$(".status").click(function()
	{
		jqteStatus = jqteStatus ? false : true;
		$('.jqte-test').jqte({"status" : jqteStatus})
	});
</script>
<input type="submit" value="저장">
</center>
</form>

</body>
</html>
