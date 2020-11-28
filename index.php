<?php
// ----INCLUDE APIS------------------------------------
// Include our Website API
include ("api/api.inc.php");

// ----PAGE GENERATION LOGIC---------------------------
function createPage($pgametitle1,$pgametitle2,$pgametitle3,$pimg1,$pimg2,$pimg3, $pgamelink1, $pgamelink2, $pgamelink3)
{
	$tcontent = <<<PAGE
<div class="container">

	<div class="row">
		<div class="col-md-6">
			<h1>
				<span class="label label-primary">{$pgametitle1}</span>
			</h1>
			<img src={$pimg1} alt="Image1" height="280" width="454" />
			<p>
				<a class="btn btn-info" href="{$pgamelink1}" role="button">Find Out More
					&raquo;</a>
			</p>
		</div>

		<div class="col-md-6">
			<h1>
				<span class="label label-primary">{$pgametitle2}</span>
			</h1>
			<img src={$pimg2} alt="Image1" height="280" width="454" />
			<p>
				<a class="btn btn-info" href="{$pgamelink2}" role="button">Find Out More
					&raquo;</a>
			</p>
		</div>

		<div class="col-md-12">
			<h1>
				<span class="label label-primary">{$pgametitle3}</span>
			</h1>
			<img src={$pimg3} alt="Image1" height="280" width="454" />
			<p>
				<a class="btn btn-info" href="{$pgamelink3}" role="button">Find Out More
					&raquo;</a>
			</p>
		</div>
	</div>

	<button class="btn btn-lg btn-warning" data-toggle="collapse"
		data-target="#videos">
		Click for extra content!
		<div id="videos" class="collapse">
			<!--videos-->
			<video width="550" height="413" controls>
				<source src="img/Videos/firstlook.mp4" type="video/mp4">
				Your browser does not support the video tag.
			</video>
			<video width="550" height="413" controls>
				<source src="img/Videos/superbowl.mp4" type="video/mp4">
				Your browser does not support the video tag.
			</video>
		</div>
	</button>
	<!-- Slider -->
	<div id="slides" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#slides" data-slide-to="0" class="active"></li>
			<li data-target="#slides" data-slide-to="1"></li>
			<li data-target="#slides" data-slide-to="2"></li>
			<li data-target="#slides" data-slide-to="3"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="img/MasterPage/mp-logo.jpg" />
			</div>
			<div class="item">
				<img src="img/HomePage/hp-art1.jpg" />
			</div>
			<div class="item">
				<img src="img/HomePage/hp-art4.jpg" />
			</div>
			<div class="item">
				<img src="img/HomePage/hp-art3.jpg" />
			</div>
		</div>
		<a class="left carousel-control" href="#slides" role="button"
			data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"
			aria-hidden="true"></span> <span class="sr-only">Previous</span>
		</a> <a class="right carousel-control" href="#slides" role="button"
			data-slide="next"> <span
			class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- -->
</div>
PAGE;
	return $tcontent;
}

function jumbocontent()
{
	
	$tcontent = <<< PAGE
	
	<h1>Nintendo Switch Recommendation Site</h1>
	<marquee> <p class="lead">welcome</p> </marquee>
PAGE;
	return $tcontent;

}

// ----BUSINESS LOGIC---------------------------------
$tpagetitle = "Home Page";
$tpagelead = "";
$tpagefooter = "";
$tarrtitles1 = array("Animal Crossing: New Horizons", "Fortnite", "The Legend of Zelda: Breath of the Wild");
$tarrimgnames1 = array("img/Games/rv-animalcross.jpg", "img/Games/rv-fornite.jpg", "img/Games/rv-zelda.jpg");
$tarrlinks1 = array("https://www.nintendo.com/games/detail/animal-crossing-new-horizons-switch/", "https://www.nintendo.com/games/detail/fortnite-switch/", "https://www.nintendo.com/games/detail/the-legend-of-zelda-breath-of-the-wild-switch/" );
$tarrtitles2 = array("Pokémon Sword and Shield", "NBA 2K19", "Haven");
$tarrimgnames2 = array("img/Games/rv-pokemon.jpg", "img/Games/rv-nba.jpg", "img/Games/rv-haven.jpg");
$tarrlinks2 = array("https://www.nintendo.com/games/detail/pokemon-sword-switch/", "https://www.nintendo.com/games/detail/nba-2k19-switch/", "https://www.nintendo.co.uk/Games/Nintendo-Switch-download-software/Haven-1719432.html");
$tarrtitles3 = array("Hollow Knight", "Mario Kart 8 Deluxe", "Doom");
$tarrimgnames3 = array("img/Games/rv-hollowknight.jpg","img/Games/rv-mariokart.jpg", "img/Games/rv-doom.jpg");
$tarrlinks3 = array("https://www.nintendo.com/games/detail/hollow-knight-switch/", "https://www.nintendo.com/games/detail/mario-kart-8-wii-u/", "https://www.nintendo.com/games/detail/doom-64-switch/");

$pgametitle1 = $tarrtitles1[time()%3];
$pgametitle2 = $tarrtitles2[time()%3];
$pgametitle3 = $tarrtitles3[time()%3];
$pimg1 = $tarrimgnames1[time()%3];
$pimg2 = $tarrimgnames2[time()%3];
$pimg3 = $tarrimgnames3[time()%3];
$pgamelink1 = $tarrlinks1[time()%3];
$pgamelink2 = $tarrlinks2[time()%3];
$pgamelink3 = $tarrlinks3[time()%3];


$tpagecontent = createPage($pgametitle1,$pgametitle2,$pgametitle3,$pimg1,$pimg2,$pimg3, $pgamelink1, $pgamelink2, $pgamelink3);
$topcontent = jumbocontent();



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