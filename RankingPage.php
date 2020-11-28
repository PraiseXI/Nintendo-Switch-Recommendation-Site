<?php
// ----INCLUDE APIS------------------------------------
// Include our Website API
include ("api/api.inc.php");

// ----PAGE GENERATION LOGIC---------------------------
function createPage()
{
	$tgames = DAL_CreateGame();
	$tgamehtml = rendergGameTable($tgames);
	$tcontent = <<<PAGE
			<div class="container">
	<div class="row">
	{$tgamehtml}
	</div>
	</div>

PAGE;
	return $tcontent;
}

function jumbocontent()
{
	$tcontent = <<< PAGE
		<h1>All Games Ranked!</h1>
PAGE;
	return $tcontent;

}

// ----BUSINESS LOGIC---------------------------------
$tpagetitle = "Ranking Page";
$tpagelead = "<h1>All Games Ranked!</h1>";
$tpagefooter = "";
$tpagecontent = createPage();
$topcontent = jumbocontent();

// ----BUILD OUR HTML PAGE----------------------------
// Create an instance of our Page class
$tindexpage = new MasterPage($tpagetitle);
if(!empty($tpagelead))
    $tindexpage->setDynamic1($tpagelead);
$tindexpage->setDynamic2($tpagecontent);
if(!empty($tpagefooter))
    $tindexpage->setDynamic3($tpagefooter);
$tindexpage->renderPage();

?>