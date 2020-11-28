<?php
require_once("oo_bll.inc.php");

function processFormData($pdata)
{
	
	$tclean = trim($pdata) ?? "";
	if (! empty($tclean))
	{
		$tclean = stripslashes($tclean);
		$tclean = htmlspecialchars($tclean);
	}
	return $tclean;
}

function appFormMethodIsPost()
{
	return strtolower($_SERVER['REQUEST_METHOD']) == 'post';
}

function appFormActionSelf()
{
	return htmlspecialchars($_SERVER['PHP_SELF']);
}

?>
function appFormMethodIsPost()
{
    return strtolower($_SERVER['REQUEST_METHOD']) == 'post';
}

function appFormMethod($pmethoddefault = true)
{
    return $pmethoddefault ? "POST" : "GET";
}

function appFormProcessData($pdata)
{
    $tclean = $pdata ?? "";
    if (! empty($tclean))
    {
        $tclean = trim($tclean);
        $tclean = stripslashes($tclean);
        $tclean = htmlspecialchars($tclean);
    }
    return $tclean;
}