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
  ##--- FUNCTION NO : 1 - V1 ---##

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
  ##--- FUNCTION NO : 2 - V2 ---##

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
  ##--- FUNCTION NO : 3 - V3 ---##

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
  ##--- FUNCTION NO : 4 - V4 ---##

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
  ##--- FUNCTION NO : 5 - V4 ---##

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
  ##--- FUNCTION NO : 6 - V5 ---##

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