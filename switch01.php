<?php
//-- switch01.php
$username="manager";
switch($username)
{
case "manager";
	echo "ยินดีต้อนรับ คุณคือผู้จัดการ";
	break;
case "admin";
	echo "ยินดีต้อนรับ คุณคือผู้ดูแลระบบ";
	break;
default:
	echo "ยินดีต้อนรับ คุณคือผู้ใช้งาน";
}

?>