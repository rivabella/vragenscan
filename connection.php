<?php
//connection
 $username = "root";
 $password = "";
 $dbname = "scan";
 $db = new PDO("mysql:host=localhost;dbname=$dbname",$username,$password); 
 $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
