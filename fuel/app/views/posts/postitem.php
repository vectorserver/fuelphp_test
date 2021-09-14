<?php
$pageid = isset($_REQUEST['Id']) ? (int)  $_REQUEST['Id'] : false;
echo "<h1>Блог {$pageid}</h1>";
