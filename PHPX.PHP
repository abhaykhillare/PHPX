<?php


/**
*
*/
class PHPX
{

  ########################

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

}