<?php
class DB extends DBmysql {
   public $dbhost = 'db';
   public $dbuser = 'username';
   public $dbpassword = 'password';
   public $dbdefault = 'mydb';
   public $use_utf8mb4 = true;
   public $allow_myisam = false;
   public $allow_datetime = false;
   public $allow_signed_keys = false;
}
