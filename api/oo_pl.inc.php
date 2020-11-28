<?php

class PLGameItem
{

    // -------CLASS FIELDS------------------
    public $heading;
    public $summary;
    public $image;
    public $link;
    public $linktext;
    public $recommendation;

    // -------CONSTRUCTORS------------------
    public function __construct($pheading = "Default Heading", $pimage="#", $psummary = "Default Summary", $plink = "#", $plinktext = "Add Review", $precommend = "")
    {
        $this->heading = $pheading;
        $this->image = $pimage;
        $this->summary = $psummary;
        $this->link = $plink;
        $this->linktext = $plinktext;
        $this->recommendation = $precommend;
    }

    // -------METHODS-----------------------
    public function getHTML()
    {
        $tgameitem = <<<NI
        <section class="list-group-item">
	<b><h3 class="list-group-item-heading">
			{$this->heading}
			</h4></b>
	<div class="col-sm-6">
		<img src="{$this->image}" height="185.5" width="327" />

	</div>
	<div class="col-sm-6">
		<div class="iframe-container">
			<iframe width="327" height="185.5"
				src="https://www.youtube.com/embed/{$this->link}" frameborder="0"
				<!--since all the embeded video links start with the same url i put the reference as just the end of it that changes
	allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
	allowfullscreen></iframe>
	</div>
		</div>
        <p class="list-group-item-text">{$this->summary}</p>
        <p><h1>Editorial Recommendation</h1></p>
        <p><h3>{$this->recommendation}</h3></p>
        <a class="btn btn btn-info" href="game_entry.php">{$this->linktext}</a>
        </section>
NI;
        return $tgameitem;
    }
}

class PLGameList
{

    public $gameitems = array();

    public function __construct()
    {
        $this->gameitems[] = new PLGameItem("Animal Crossing", "img/Games/rv-animalcross.jpg", "In Animal Crossing, the player character is a human who lives in a village inhabited by various anthropomorphic animals, carrying out various activities such as fishing, bug catching, and fossil hunting.", "_3YNL0OWio0", "Add Review", "Very good game, suitable for all age types even though it may not seem it initially!");
        $this->gameitems[] = new PLGameItem("Fortnite","img/Games/rv-fornite.jpg","Play Fortnite Battle Royale, the completely free 100-player PvP mode. One giant map, A Battle Bus, Last one standing wins.", "Dk56OpKuFts",  "Add Review", "Very similar to the well known multi-platform game, screen can be limiting at times but is a lot of fun.");
        $this->gameitems[] = new PLGameItem("Hollow Knight","img/Games/rv-hollowknight.jpg", "A classically styled 2D action adventure across a vast interconnected world. Explore twisting caverns, ancient cities and deadly wastes; battle tainted creatures and befriend bizarre bugs; and solve ancient mysteries at the kingdom's heart.","kWo5g-tsBNk", "Add Review", "Expected a bit more from the story of the game however, I can see the joy value in it.");
        $this->gameitems[] = new PLGameItem("Stardew Valley","img/Games/rv-stardew.jpg", "Players can work together to build a thriving farm, share resources, and build relationships with townspeople or each other.", "FjJx6u_5RdU",  "Add Review", "Quality game, would recommedation as a casual player or even a more serious player.");
        $this->gameitems[] = new PLGameItem("Dead Cells","img/Games/rv-deadcells.jpg", "Dead Cells puts you in control of a failed alchemic experiment trying to figure out what's happening on a sprawling, ever-changing and seemingly cursed Island. ... Speaking of weapons, Dead Cells features a plethora of ways to slay your enemies.","bFn4m4urbkQ",  "Add Review", "It is a bit of a uphill battle to get into the game however once you get into the story properly it is an enjoyable game!");
        $this->gameitems[] = new PLGameItem("Into the Breach","img/Games/rv-breach.jpg", "The remnants of human civilization are threatened by gigantic creatures breeding beneath the earth. You must control powerful mechs from the future to hold off this alien threat.","ptYwMwxP7ho",  "Add Review", "Great concept however, it doesn't live up to the expectations with its weak story and mediocre play style and methods");
        $this->gameitems[] = new PLGameItem("The Messenger","img/Games/rv-messenger.jpg", "As a demon army besieges his village, a young ninja ventures through a cursed world, to deliver a scroll paramount to his clan's survival.","qJf9edBS0TQ",  "Add Review", "Incredible game! the dynamic change to he story really makes it worth ever penny!");
        $this->gameitems[] = new PLGameItem("Mario Tennis Aces","img/Games/rv-marioaces.jpg", "Mario Tennis Aces is a single player and multiplayer that lets you play with up to 4 people as your favourite characters in intense battles.","jxrHwK-e1vk",  "Add Review", "Classic franchise that we all know and loves doesn't diappoint to bring a new family friendly incredible game");
        $this->gameitems[] = new PLGameItem("Arms","img/Games/rv-arms.jpg", "An all-new way to fight ARMS is a fighting game where you use stretchy weaponised arms to punch, thump and knock-out opponents","ai3iCpa8_1U",  "Add Review", "Didn' expect much from this game initally but it is worth it! it exceeded my expectations");
        $this->gameitems[] = new PLGameItem("Tetris 99","img/Games/rv-tetris.jpg","Tetris 99 is a free online multiplayer version of the tile-matching puzzle video game Tetris","BkltybqKrnc",  "Add Review", "Can't go wrong with this classic game. A must for the switch! Highly recommend");
    }
}

?>