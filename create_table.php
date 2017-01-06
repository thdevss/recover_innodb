<?php
$dbhost = "localhost:3306";
$dbname = $argv[1];
$dbuser = $argv[2];
$dbpwd  = $argv[3];

mysql_connect($dbhost,$dbuser,$dbpwd) or die(mysql_error());

for ($i = 1; $i <= $argv[4]; $i++) {
   $dbquery = "CREATE TABLE $dbname.t" . $i . " (id int) ENGINE=InnoDB";
	
   echo "" . $dbquery . "";
	
      $result = mysql_db_query($dbname,$dbquery) or die(mysql_error());
	
      $j = 0;
	
      while($row = mysql_fetch_array($result)) {
         $j++;
         echo $row[0];
      }
}

mysql_close();