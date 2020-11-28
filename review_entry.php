<?php
// ----INCLUDE APIS------------------------------------
include ("api/api.inc.php");

// ----PAGE GENERATION LOGIC---------------------------
function createFormPage()
{ 
	$tmethod = appFormMethodIsPost();
	$taction = appFormActionSelf();
	
    $tcontent = <<<PAGE
    <div class="container-fluid">
    <form class="form-horizontal" method="{$tmethod}" action="{$taction}">
	<fieldset>
		<!-- Form Name -->
		<legend>Enter a game review</legend>

		<!-- Select Basic -->
		<div class="form-group">
			<label class="col-md-4 control-label" for="pos">Game Title</label>
			<div class="col-md-4">
				<select id="title" name="title" class="form-control">
					<option value="Animal Crossing">Animal Crossing</option>
					<option value="Hollow Knight">Hollow Knight</option>
					<option value="Stardew Valley">Stardew Valley</option>
					<option value="Dead Cells">Dead Cells</option>
					<option value="Into the Breach">Into the Breach</option>
					<option value="The Messenger">The Messenger</option>
					<option value="Mario Tennis Aces">Mario Tennis Aces</option>
					<option value="Arms">Arms</option>
					<option value="Tetris 99">Tetris 99</option>
				</select>
                <span class="help-block">Select the game title</span>
			</div>
		</div>

		<!-- Textarea -->
		<div class="form-group">
			<label class="col-md-4 control-label" for="review">Game Review</label>
			<div class="col-md-4">
				<textarea class="form-control" id="review" name="review" required=""></textarea>
                <span class="help-block">Enter the game review</span>
			</div>
		</div>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="form-sub">Submit Form</label>
  <div class="col-md-4">
    <button id="form-sub" name="form-sub" type="submit" class="btn btn-danger">Add your review</button>
  </div>
</div>
	</fieldset>
</form>
PAGE;
    return $tcontent;
}

// ----BUSINESS LOGIC---------------------------------

session_start();
$tpagecontent = "";

if(appFormMethodIsPost())
{
    //Capture the game nam
    $ttitle = appFormProcessData($_REQUEST["title"]  ?? "");
    $tgameslist = DAL_CreateGame("");
    
    //Map the Form Data
    $tgame = new BLLGame($ptitle, $pdev, $ppagecrt, $pdesc, $preldte, $pgnre, $prtprce, $prnk, $precscre, $pussre);
    $tgame->title = $_REQUEST["title"] ?? "";
        
    $tvalid = true;
    //TODO:  PUT SERVER-SIDE VALIDATION HERE
    
    if($tvalid)
    {
        
    } 
    else 
    {
        $tdest = appFormActionSelf();
        $tpagecontent = <<<ERROR
                         <div class="well">
                            <h1>Form was Invalid</h1>
                            <a class="btn btn-warning" href="{$tdest}">Try Again</a>
                         </div>
ERROR;
    }
}
else
{
    //This page will be created by default.
    $tpagecontent = createFormPage();
}
$tpagetitle = "Player Entry Page";
$tpagelead = "";
$tpagefooter = "";

// ----BUILD OUR HTML PAGE----------------------------
// Create an instance of our Page class
$tpage = new MasterPage($tpagetitle);
// Set the Three Dynamic Areas (1 and 3 have defaults)
if (! empty($tpagelead))
    $tpage->setDynamic1($tpagelead);
$tpage->setDynamic2($tpagecontent);
if (! empty($tpagefooter))
    $tpage->setDynamic3($tpagefooter);
    // Return the Dynamic Page to the user.
$tpage->renderPage();

?>