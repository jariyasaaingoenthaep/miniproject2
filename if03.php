<?php
//--if03.php
$name="manager";

if($name=="manager")
{
echo ("ยินดีต้อนรับ คุณคือผู้จัดการ");
}
elseif ($name=="admin")
{
echo ("ยินดีต้อนรับ คุณคือผู้ดูแลระบบ");
}
elseif ($name=="wedmaster")
{
echo ("ยินดีต้อนรับ คุณคือผู้ดูแลเว๊บไซต์");	
}
else
{
echo ("ยินดีต้อนรับ คุณคือผู้ใช้งาน");	
}


?>