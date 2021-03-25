<?php
require "./models/image.model.php";
include "./models/home.model.php"; // home model
require "./models/agent.model.php"; // agent model
require "./models/feature.model.php"; // features
require "./models/partner.model.php"; // features


// instances 
$agent = new Agent(); // Agent
$hom = new Home(); // Home
$Feature = new Feature(); // Feature
$Partner = new Partner(); // Feature

$top3Agents = $agent->getTop3(); // get Top 3 agents
$homes = $hom->all(); // get all homes
$features = $Feature->all();
$partners = $Partner->all();
echo "<pre>";
print_r($homes);
echo "</pre>";
// get home view
include "./views/home.view.php";