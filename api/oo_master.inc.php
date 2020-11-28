<?php

// Include our HTML Page Class
require_once ("oo_page.inc.php");

class MasterPage
{

	// -------FIELD MEMBERS----------------------------------------
	private $_htmlpage;
	private $_dynamic_1;
	private $_dynamic_2;

	// -------CONSTRUCTORS-----------------------------------------
	function __construct($ptitle)
	{
		$this->_htmlpage = new HTMLPage($ptitle);
		$this->setPageDefaults();
		$this->setDynamicDefaults();
	}

	// -------GETTER/SETTER FUNCTIONS------------------------------
	public function getDynamic1()
	{
		return $this->_dynamic_1;
	}

	public function getDynamic2()
	{
		return $this->_dynamic_2;
	}

	public function setDynamic1($phtml)
	{
		$this->_dynamic_1 = $phtml;
	}

	public function setDynamic2($phtml)
	{
		$this->_dynamic_2 = $phtml;
	}

	// -------PUBLIC FUNCTIONS-------------------------------------
	public function createPage()
	{
		$this->setMasterContent();
		return $this->_htmlpage->createPage();
	}

	public function renderPage()
	{
		$this->setMasterContent();
		$this->_htmlpage->renderPage();
	}

	public function addCSSFile($pcssfile)
	{
		$this->_htmlpage->addCSSFile($pcssfile);
	}

	public function addScriptFile($pjsfile)
	{
		$this->_htmlpage->addScriptFile($pjsfile);
	}

	// -------PRIVATE FUNCTIONS-----------------------------------
	private function setPageDefaults()
	{
		$this->_htmlpage->setMediaDirectory("css", "js", "fonts", "img", "data");
		$this->addCSSFile("bootstrap.nintendo.css");
		$this->addCSSFile("site.css");
		$this->addScriptFile("jquery-2.2.4.js");
		$this->addScriptFile("bootstrap.js");
		$this->addScriptFile("holder.js");

	}

	private function setDynamicDefaults()
	{
		$tcurryear = date("Y");
		$this->_dynamic_1 = <<<JUMBO
		<h1> Welcome to the Switch Recommendation Site!</h1>
JUMBO;
		$this->_dynamic_2 = "";
		$this->_dynamic_3 = <<<FOOTER
		<p>Praise Olawuni: 865888 - LJMU &copy {$tcurryear}</p>
FOOTER;
	}

	private function setMasterContent()
	{

		$tlogin = "app_entry.php";
		$tlogout = "app_eit.php";
		$tentryhtml = <<<FORM

		<form id="signin" action="[$tlogin}" method="post"
		class="navbar-form navbar-right" role="form">
		<div class"input-group">
		<span class="input-group-addon">
		<i class="glyphion glyphicon-user"></i>
		</span>
		<input id="email" type="email" class="form-control"
			name="myname" value="" placeholder="">
		</div>
		<button type="submit" class="btn btn-primary">Enter</button>
		</form>
FORM;
		$tauth = isset($_SESSION["myuser"]) ? $texithtml : $tentryhtml;
		$texithtml = <<<EXIT
		<a class="btn btn-info navbar-right"
			href="{$tlogout}?action=exit">Exit</a>
EXIT;
		$tcurryear = date("Y");
		$tmasterpage = <<<MASTER
<!-- Navigation Bar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<img src="img/ConsoleOverview/co-fun.gif" height="60" width="80" />
			<button type="button" class="navbar-toggle collapsed"
				data-toggle="collapse" data-target="#navbar" aria-expanded="false"
				aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span> <span
					class="icon-bar"></span> <span class="icon-bar"></span> <span
					class="icon-bar"></span>
			</button>
		</div>

		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="ConsoleOverview.php">Nintendo Switch Overview</a></li>
				<li><a href="GamesPage.php">Games Page</a></li>
				<li><a href="RankingPage.php">Ranking Page</a></li>
				<li><a href="datainput.php">Login</a></li>
				

          <form id="signin" action="[$tlogin}" method="post" form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input id="email" input type="text" placeholder="Email" class="form-control" name="myname" value="">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
			</ul>
		</div>
		<!--/.nav-collapse -->
</nav>

	<div class="jumbotron">
		{$this->_dynamic_1}
    </div>
	<div class="row details">
		{$this->_dynamic_2}
    </div>
    <footer class="footer">
		{$this->_dynamic_3}
	</footer>
</div>
MASTER;
	
		$this->_htmlpage->setBodyContent($tmasterpage);
	}
}

?>