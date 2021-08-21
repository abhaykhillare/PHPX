<?php


/**
*
*/
class PHPX
{

  ########################
  ##--- FUNCTION NO : 0 ---##
  /**
  *
  */
  public function __construct($argument) {
    // code...
  }
  /**
  *
  */

  ########################
  ########################
  ##--- FUNCTION NO : 1 - VLDT1 ---##

  /**
  *
  */
  public static function VALIDATE_url($url) {
    // code...

    if (filter_var($url, FILTER_VALIDATE_URL)) {
      return true;
    } else {
      return false;
    }
  }
  /**
  *
  */

  ########################
  ########################
  ##--- FUNCTION NO : 2 - VLDT2 ---##

  /**
  *
  */
  public static function VALIDATE_email($email) {
    // code...

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      return true;
    } else {
      return false;
    }
  }
  /**
  *
  */

  ########################
  ########################
  ##--- FUNCTION NO : 3 - VLDT3 ---##

  /**
  *
  */
  public static function VALIDATE_IP($IP) {
    // code...

    if (filter_var($IP, FILTER_VALIDATE_IP)) {
      return true;
    } else {
      return false;
    }
  }
  /**
  *
  */

  ########################
  ########################
  ##--- FUNCTION NO : 4 - VLDT4 ---##

  /**
  *
  */
  public static function VALIDATE_IPlocal($IPlocal) {
    // code...

    if (filter_var($IPlocal, FILTER_VALIDATE_IP)) {
      return true;
    } else {
      return false;
    }
  }
  /**
  *
  */

  ########################
  ########################
  ##--- FUNCTION NO : 5 - VLDT5 ---##

  /**
  *
  */
  public static function VALIDATE_IPv4($IPV4) {
    // code...

    if (filter_var($IPV4, FILTER_FLAG_IPV4)) {
      return true;
    } else {
      return false;
    }
  }
  /**
  *
  */

  ########################
  ########################
  ##--- FUNCTION NO : 6 - VLDT6 ---##

  /**
  *
  */
  public static function VALIDATE_IPv6($IPV6) {
    // code...

    if (filter_var($IPV6, FILTER_FLAG_IPV6)) {
      return true;
    } else {
      return false;
    }
  }
  /**
  *
  */

  ########################
  ########################
  ##--- FUNCTION NO : 7 - MYSQL1 ---##

  /**
  *
  */
  public static function MYSQLI_connect($host, $db, $user, $pass) {
    // code...
    // Connecting Mysql With PDO
    try
		{
			$this->dbh = new PDO(
			             "mysql:host=$host;
			                  dbname=$db", 
			                         $user, 
			                         $pass);
			/*** 
			echo a message saying we have connected 
			***/
			//echo 'Connected to database'; 
			// Test with this string
		}
		catch(PDOException $e)
		{
			echo __LINE__.$e->getMessage();
		}
  }
  /**
  *
  */

  ########################

}