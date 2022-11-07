<?php
session_start();

require '../loadTemplate.php';
require '../classes/DatabaseTable.php';
require '../template/databaseConnect.php';


$output = loadTemplate('../template/faqs.html.php', []);

$title = 'Faqs Kitchen';


require '../template/layout.html.php';

?>