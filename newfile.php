<?php

$tlogin = "app_entry.php";
$tlogout = "app_eit.php";
$tentryhtml = <<<FORM

		<form id="signin" action="[$tlogin}" method="post"
		class="navbar-form navbar-right" role="form">
		<div c;ass"input-group">
		<span class="input-group-addon">
		<i class="glyphion glyphicon-user"></i>
		</span>
		<input id="email" type="email" class="form-control"
			name="myname" value="" placeholder="">
		</div>
		<button type="submit" class="btn btn-primary">Enter</button>
		</form>
FORM;
$texithtml = <<<EXIT
		<a class="btn btn-info navbar-right"
			href="{$tlogout}?action=exit">Exit</a>
EXIT;
$tcurryear = date("Y");
$tauth = isset($_SESSION["myuser"]) ? $texithtml : $tentryhtml;
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
				<li><a href="#">Your Profile</a></li>
			</ul>
		</div>
		<!--/.nav-collapse -->
	</div>
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