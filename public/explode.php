<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 10/01/2017
 * Time: 14:02
 */
$url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$tabUrl = explode("/", $url);
var_dump($_SERVER);