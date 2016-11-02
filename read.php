<?php
setcookie("has_read","yes",time()+365*24*3600);
$url = !isset($_COOKIE['redirect_url']) ? '/' : $_COOKIE['redirect_url'];
echo json_encode(['ret'=>0,'url'=>$url]);
