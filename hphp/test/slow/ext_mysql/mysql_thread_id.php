<?php
require_once('connect.inc');

$conn = mysql_connect($host, $user, $passwd);
var_dump(mysql_thread_id() > 0);
