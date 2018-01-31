<?php 

include "vendor/autoload.php";

use Towords\Search\Search;
// die("fuck it");
$search = new Search();
$value = ["q" => "ahmed khan"];
echo "<pre>";
print_r($search->search($value));
echo "</pre>"; ?>
