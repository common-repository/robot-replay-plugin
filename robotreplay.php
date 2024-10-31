<?php
/*
Plugin Name: Robot Replay
Plugin URI: http://www.robotreplay.com/
Description: This plugin includes the JS for RobotReplay
Tags: statistics, us
Author: Joe Bowser
Version: 1.0
Author URI: http://blogs.nitobi.com/joe
*/ 


// This just echoes the chosen line, we'll position it later
function robot_replay() {
	echo '<script type="text/javascript" src="http://static.robotreplay.com/nitobi.replay.js"></script>';
}

// Now we set that function up to execute when the admin_footer action is called
add_action('wp_head', 'robot_replay');

?>