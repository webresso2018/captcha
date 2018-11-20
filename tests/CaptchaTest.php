<?php 
use PHPUnit\Framework\TestCase;

/**
*  Corresponding Class to test Captcha class
*
*  
*
*  @author a.karim
*/
class CaptchaTest extends TestCase
{
	
  /**
  * Just check if the YourClass has no syntax error 
  *
  * This is just a simple check to make sure your library has no syntax error. This helps you troubleshoot
  * any typo before you even use this library in a real project.
  *
  */
  public function testIsThereAnySyntaxError()
  {
	$var = new Webresso\SecurityKit\Captcha("my_key");
	$this->assertTrue(is_object($var));
	unset($var);
  }
  
  /**
  * Just check if the YourClass has no syntax error 
  *
  * This is just a simple check to make sure your library has no syntax error. This helps you troubleshoot
  * any typo before you even use this library in a real project.
  *
  */
  public function testGenerateSecurityCode()
  {
	$var = new Webresso\SecurityKit\Captcha("my_key");
	$this->assertTrue(is_string($var->generate_security_code()));
	unset($var);
  } 
}
