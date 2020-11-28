<?php
// ----INCLUDE APIS------------------------------------
// Include our Website API
include ("api/api.inc.php");

// ----PAGE GENERATION LOGIC---------------------------
function createPage($pmethod, $paction)
{
	
	$tcontent = <<<PAGE
	<div class="container">
	<form class="form-horizontal METHOD="{$pmethod}" action="{$paction}">
	<div class="form-group">
		<label for="inputEmail" class="control-label col-xs-2">Email</label>
		<div class="col-xs-10">
			<input type="email" class="form-control" id="inputEmail" name="inputEmail"
				placeholder="Email">
		</div>
	</div>
	<div class="form-group">
		<label for="inputPassword" class="control-label col-xs-2">Password</label>
		<div class="col-xs-10">
			<input type="password" class="form-control" id="inputPassword" name="inputPassword
				placeholder="Password">
		</div>
	</div>
	<div class="form-group">
	<label class="control-label col-xs-3" for="confirmPassword">Confirm
		Password:</label>
	<div class="col-xs-9">
		<input type="password" class="form-control" id="confirmPassword" name="confirmPassword"
			placeholder="Confirm Password">
	</div>
</div>
<div class="form-group">
	<label class="control-label col-xs-3" for="firstName">First
		Name:</label>
	<div class="col-xs-9">
		<input type="text" class="form-control" id="firstName" name="firstName"
			placeholder="First Name">
	</div>
</div>
<div class="form-group">
	<label class="control-label col-xs-3" for="lastName">Last Name:</label>
	<div class="col-xs-9">
		<input type="text" class="form-control" id="lastName" name="lastName
			placeholder="Last Name">
	</div>
</div>
<div class="form-group">
	<label class="control-label col-xs-3" for="phoneNumber">Phone:</label>
	<div class="col-xs-9">
		<input type="tel" class="form-control" id="phoneNumber" name="phoneNumber"
			placeholder="Phone Number">
	</div>
</div>
<div class="form-group">
	<label class="control-label col-xs-3">Date of Birth:</label>
	<div class="col-xs-3">
		<select class="form-control"><option>Date</option></select>
	</div>
	<div class="col-xs-3">
		<select class="form-control"><option>Month</option></select>
	</div>
	<div class="col-xs-3">
		<select class="form-control"><option>Year</option></select>
	</div>
</div>

	<div class="form-group">
		<div class="col-xs-offset-2 col-xs-10">
			<div class="checkbox">
				<label><input type="checkbox"> Remember me</label>
			</div>
		</div>
	</div>
	<div class="form-group">
	<div class="col-xs-offset-2 col-xs-10">
		<label class="checkbox-inline"><input type="checkbox"
			value="news" checked> Send me latest news and updates.</label>
	</div>
</div>
<div class="form-group">
	<div class="col-xs-offset-2 col-xs-10">
		<label class="checkbox-inline"><input type="checkbox"
			value="agree" checked> I agree to the <a href="https://www.gov.uk/help/terms-conditions" target="_blank">Terms
				and Conditions</a>.</label>
	</div>
</div>
	<div class="form-group">
		<div class="col-xs-offset-2 col-xs-10">
			<button type="Submit" class="btn btn-primary">Submit</button>
			<button type="Reset" class="btn btn-default">Reset</button>
		</div>
	</div>
</form>
</div>

PAGE;
	return $tcontent;
}
function createResponse(array $pformdata)
{
	$tresponse = <<<RESPONSE
	<section class="panel panel-primary" id="Form Response">
	<div class="jumbotron">
		<h1>Thank You {$pformdata["firstName"]} {$pformdata["lastName"]}</h1>
		<p class="lead">Your account has been created. Thank you for
			creating an account!</p>
	</div>
</section>
RESPONSE;
	return $tresponse;
}
function processForm(array $pformdata): array
{
	foreach ($pformdata as $tfield => $tvalue)
	{
		$pformdata[$tfield] = processFormData($tvalue);
	}
	$tvalid = true;
	if ($tvalid && empty($pformdata["inputEmail"]))
	{
		$tvalid = false;
	}
	if ($tvalid && empty($pformdata["inputPassword"]))
	{
		$tvalid = false;
	}
	if ($tvalid && empty($pformdata["confirmPassword"]))
	{
		$tvalid = false;
	}
	if ($tvalid && $pformdata["confirmPassword"]!= $pformdata["inputPassword"])
	{
		$tvalid = false;
	}
	if ($tvalid)
	{
		$pformdata["valid"] = true;
	}
	
	return $pformdata;
}


// ----BUSINESS LOGIC---------------------------------
$tpagetitle = "Create an Account";
$tpagelead = "";
$tpagefooter = "";
$taction = htmlspecialchars($_SERVER['PHP_SELF']);
$tmethod = "GET";
$tformdata = processForm($_REQUEST) ?? array();

if(isset($tformdata["valid"]))
{
	$tpagecontent = createResponse($tformdata);
}
else
{
	$tpagecontent = createPage($tmethod, $taction);
}


// ----BUILD OUR HTML PAGE----------------------------
// Create an instance of our Page class
$tindexpage = new MasterPage($tpagetitle);
if(!empty($tpagelead))
    $tpage->setDynamic1($tpagelead);
$tindexpage->setDynamic2($tpagecontent);
if(!empty($tpagefooter))
    $tpage->setDynamic3($tpagefooter);
$tindexpage->renderPage();

?>