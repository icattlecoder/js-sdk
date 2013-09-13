<?php
require_once("php-sdk/qiniu/rs.php");
$bucket = "qtestbucket";
$key = $_GET['key'];
$client = new Qiniu_MacHttpClient(null);
echo json_encode(Qiniu_RS_Stat($client,$bucket,$key));

?>