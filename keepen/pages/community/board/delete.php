<?php
	include $_SERVER['DOCUMENT_ROOT']."/keepen_html_js_css/keepen/db/db.php";
	
	$bno = $_GET['idx'];
	$sql = query("delete from board where idx='$bno';");
?>
<script type="text/javascript">alert("삭제되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=../pages/community/index.php" />