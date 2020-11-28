<?php
// ----INCLUDE APIS------------------------------------
// Include our Website API
include ("api/api.inc.php");

// ----PAGE GENERATION LOGIC---------------------------
function createPage()
{
    $tgameslist = new PLGameList();
    $tgameshtml = "";
    foreach ($tgameslist->gameitems as $tnitem)
    {
        $tgameshtml .= $tnitem->getHTML();
    }
	
	$tcontent = <<<PAGE
	<div class = "container-fluid">
	<div class="row">
		<div class="col-12">
                {$tgameshtml}
	</div>
PAGE;
	return $tcontent;
}

function jumbocontent()
{
	$tcontent = <<< PAGE
<div class="row">
	<div class="col-md-4">
<!--put image -->
	</div>

	<div class="col-md-8">
		<h1>Page Title</h1>

	</div>
PAGE;
	return $tcontent;

}

// ----BUSINESS LOGIC---------------------------------
$tpagetitle = "Games Page";
$tpagelead = "<h1>Games Page!</h1>";
$tpagefooter = "";
$tpagecontent = createPage();
$topcontent = jumbocontent();

// ----BUILD OUR HTML PAGE----------------------------
// Create an instance of our Page class
$tindexpage = new MasterPage($tpagetitle); //this is my unique page!
if(!empty($tpagelead))
    $tindexpage->setDynamic1($tpagelead);
$tindexpage->setDynamic2($tpagecontent);
if(!empty($tpagefooter))
    $tindexpage->setDynamic3($tpagefooter);
$tindexpage->renderPage();

?>