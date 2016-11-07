<?php
  function connect(){
    try{
      $dbh = new PDO('mysql:host=localhost;dbname=yeonjeDB', 'root', 'akdntm',array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
      $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    }catch(Exception $e){
      $e->getMessage();
      }
      return $dbh;
  }
 ?>
