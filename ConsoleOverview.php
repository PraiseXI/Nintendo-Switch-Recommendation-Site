<?php
// ----INCLUDE APIS------------------------------------
// Include our Website API
include ("api/api.inc.php");

// ----PAGE GENERATION LOGIC---------------------------
function createPage()
{
	$tcontent = <<<PAGE
	<div class="container">
	<div class="row">
			<div class="col-12">
						<h1>Once you 'Switch and Play' you'll never go back!</h1>
				<hr>
			<hr>
			</div>
			<div class="col-sm-6">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">
							<b>The History of Nintendo</b>
						</h3>
					</div>
					<div class="panel-body">Nintendo was founded in 1990 in
						Kyoto, Kyoto, Japan and it was originally a playing card company!
						It is now a multinational consumer electronics and video game
						company now and in January 2019, it announced that it made
						$958million in profit and $5.59 billion in revenue during 2018</div>
					<p>Click the video down below to watch a breif summary of that
						history and its journey!</p>
					<video width="550" height="300" controls>
						<source src="img/Videos/nintendohistory.mp4" type="video/mp4">
						Your browser does not support the video tag.
					</video>
					<a class="btn btn-info btn-lg"
						href="https://en.wikipedia.org/wiki/History_of_Nintendo"
						target="_blank" role="button">Learn More</a>
				</div>
			</div>

			<div class="col-sm-6">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">
							<b>The History of the Switch</b>
						</h3>
					</div>
					<div class="panel-body">The Nintendo Switch was unveiled on
						October 20, 2016. Known in development by its codename NX, the
						concept of the Switch came about as Nintendo's reaction to several
						quarters of financial losses into 2014, attributed to poor sales
						of its previous console, the Wii U, and market competition from
						mobile gaming.</div>

					<!-- Slider -->
					<div id="slides" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slides" data-slide-to="0" class="active"></li>
							<li data-target="#slides" data-slide-to="1"></li>
							<li data-target="#slides" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="img/ConsoleOverview/co-history.jpg" />
							</div>
							<div class="item">
								<img src="img/ConsoleOverview/co-setup.jpg" />
							</div>
							<div class="item">
								<img src="img/ConsoleOverview/co-switch2.jpg" />
							</div>

						</div>
						<a class="left carousel-control" href="#slides" role="button"
							data-slide="prev"> <span
							class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a> <a class="right carousel-control" href="#slides" role="button"
							data-slide="next"> <span
							class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
					<a class="btn btn-info btn-lg"
						href="https://en.wikipedia.org/wiki/History_of_Nintendo"
						target="_blank" role="button">Learn More</a>
				</div>
			</div>
		</div>
	</div>

	<div class="jumbotron jumbotron-fluid"
		style="background-color: #DC143C">
		<h1>
			<span class="label label-danger">3 Modes in 1!</span>
		</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h2>TV Mode</h2>
				<img src="img/ConsoleOverview/co-tvmode.gif" height="185.5"
					width="327" />
				<p>Dock your Nintendo Switch to enjoy HD gaming on your TV.</p>
			</div>
			<div class="col-md-4">
				<h2>Tabletop Mode</h2>
				<img src="img/ConsoleOverview/co-tabletmode.gif" height="185.5"
					width="327" />
				<p>Flip the stand to share the screen, then share the fun with a
					multiplayer game.</p>
			</div>
			<div class="col-md-4">
				<h2>Handheld Mode</h2>
				<img src="img/ConsoleOverview/co-handheldmode.gif" height="185.5"
					width="327" />
				<p>Pick it up and play with the Joy‑Con™ controllers attached.</p>
			</div>
		</div>
	</div>
PAGE;
	return $tcontent;
}



// ----BUSINESS LOGIC---------------------------------
$tpagetitle = "Switch Overiview";
$tpagelead = "<h1> Join the Nintendo Switch Family! </h1>";
$tpagefooter = "";
$tpagecontent = createPage();

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