<?php
setcookie("has_read","yes",time()+365*24*3600);
echo json_encode(['ret'=>0]);
