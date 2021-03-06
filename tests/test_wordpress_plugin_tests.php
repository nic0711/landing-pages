<?php

/**
 * Tests to test that that testing framework is testing tests. Meta, huh?
 *
 * @package wordpress-plugins-tests
 */
class WP_Test_WordPress_Plugin_Tests extends WP_UnitTestCase {

  /**
   * Run a simple test to ensure that the tests are running
   */
   function test_tests() {

    $this->assertTrue( true );

   }

  /**
   * Ensure that the plugin has been installed and activated.
   */
  function test_plugin_activated() {

    $this->assertTrue( is_plugin_active( 'landing-pages/landing-pages.php' ) );

  }

  /**
   * If the plugin is active lets see if we can return a simple test function
   */
  function test_landingpages_return_true() {
		$this->assertTrue( landingpages_is_active() );
  }

  /**
   * Echo something out to Travis so we know our tests are running with plugin *activated
   */
  function test_echo_travis() {
    $this->assertTrue( inbound_travis_check() );
  }
  
  function test_impression_check() {
		$args = array()

		$this->assertEquals( $meta , wp_remote_post( $url , $args ) );
  }
}

?>