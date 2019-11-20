<?php
	include_once("form_validation.php");
	use PHPUnit\Framework\TestCase;

	class TestFunctions extends TestCase {
		public function test_checkEmail(){
			$this->assertEquals(true, checkEmail('albert@ashesi.com'));

		}

		public function test_isBlank(){
			$this->assertEquals(true, isBlank('value'));

		}
	}
?>