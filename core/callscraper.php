<?php
/**
 * Created by Andrew sampson
 * User: Andrew
 * Date: 5/19/14
 * Time: 5:26 AM
 */

if (!empty($_POST["person"])) {
    $name = urldecode($_POST["person"]);
} else {
    $name = 'Justin Bieber';
}

require_once("WikiScraper.php");
$person = new WikiScraper($name);
$person->getStatus();