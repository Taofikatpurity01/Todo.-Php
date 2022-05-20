<?php
require_once _DIR_. "/app/database /equery.php" ;

use app\database\Query;
if (isset($_Get ["id"])) {
$query=new query () ;
$query -> execute (query:" delete  from todo where id={$_GET ['id' ]}") ;
 } 
Header (header. "location /") 
?>