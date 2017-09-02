<?php
echo "Cloud Computing";

if (isset($_GET['cars'])) {
	header("Content-Type: application/json");
	die( file_get_contents(dirname(__FILE__).'/json/carros.json') );
}