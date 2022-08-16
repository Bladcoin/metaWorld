<?php

	$dbHost				= 'localhost';
	$dbName				= 'secondworld';
	$dbUser				= 'root';
	$dbPass				= '';
	$tablePrefix	= 'ls_';
   
  // подключение для подписки на новости 
  class Database
  {
      private static $dbHost         = 'localhost';
      private static $dbName         = 'secondworld';
      private static $dbUsername     = 'root';
      private static $dbUserPassword = '';
  
      private static $cont = null;
  
      public function __construct() {
        die('Init function is not allowed');
      }
  
      public static function connect() {
          if (null === self::$cont) {
              try {
                  self::$cont =  new PDO('mysql:host='.self::$dbHost.'; dbname='.self::$dbName, self::$dbUsername, self::$dbUserPassword);
              } catch(PDOException $e) {
                  die($e->getMessage());
              }
          }
          return self::$cont;
      }
  
      public static function disconnect() {
          self::$cont = null;
      }
  }
