<?php

require_once("observable.php");
require_once("widgets.php");

$dat = new DataSource();

$widgetA = new BasicWidget();


$dat->addObserver($widgetA);


$dat->addRecord("Our Work");
$dat->addRecord("About");
$dat->addRecord("Careers");
$dat->addRecord("Contact");
$dat->addRecord("Aaron");

$widgetA->draw();



?>