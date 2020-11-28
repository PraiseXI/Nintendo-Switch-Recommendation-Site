<?php 

require_once("api/api.inc.php");

function jsonCreatePlayerFormat($pfile)
{
    $tnewplayer = new BLLPlayer();
    $tnewplayer->id = 1;
    $tnewplayer->firstname = "";
    $tnewplayer->lastname = "";
    $tnewplayer->nationality = "";
    $tnewplayer->position = "";
    $tnewplayer->squadno = 1;
    $tnewplayer->role = "";
    $tdata = json_encode($tnewplayer).PHP_EOL;
    file_put_contents($pfile,$tdata);
	return $tdata;
}

function jsonCreateStadiumFormat($pfile)
{
    $tstadium = new BLLStadium();
    $tstadium->id = 1;
    $tstadium->name = "";
    $tstadium->capacity = 0;
    $tstadium->desc = "";
    $tstadium->desc_href = "stad.part.html";
    $tstadium->addr = "";
    $tstadium->long = 0.0;
    $tstadium->lat  = 0.0;
    $tstadium->imgdir = "def";
    $tdata = json_encode($tstadium).PHP_EOL;
    file_put_contents($pfile,$tdata);
	return $tdata;
}

function jsonCreateManagerFormat($pfile)
{
    $tmanager = new BLLManager();
    $tmanager->id = 1;
    $tmanager->fname = ""; 
    $tmanager->lname = "";
    $tmanager->age = 1;
    $tmanager->nationality = "";
    $tmanager->bio = "";
    $tmanager->bio_href = "man-bio.part.html";
    $tmanager->games_managed = 0;
    $tmanager->games_won     = 0;
    $tmanager->games_drawn   = 0;
    $tmanager->games_lost    = 0;
    $tmanager->honours = "";
    $tmanager->honours_href = "man-hon.part.html";
    $tdata = json_encode($tmanager).PHP_EOL;
    file_put_contents($pfile,$tdata);
	return $tdata;
}

function jsonCreateExecutivesFormat($pfile)
{
    $texec = new BLLExecutive();
    $texec->id = "1";
    $texec->name = "";
    $texec->role = "";
    $tdata = json_encode($texec).PHP_EOL;
    file_put_contents($pfile,$tdata);
	return $tdata;
}

function jsonCreateKitsFormat($pfile)
{
    $tkit = new BLLKit();
    $tkit->id = 1;
    $tkit->kittype = "";
    $tkit->kityear = "";
    $tkit->manufacturer = "";
    $tkit->shirtdesc = "";
    $tkit->shortsdesc = "";
    $tkit->socksdesc = "";
    $tkit->sponsor = "";
    $tdata = json_encode($tkit).PHP_EOL;
    file_put_contents($pfile,$tdata);
	return $tdata;
}

function jsonCreateFixturesFormat($pfile)
{
    $tf = new BLLFixture();
    $tf->id = 1;
    $tf->competition = "";
    $tf->attendance = 0;
    $tf->date = "";
    $tf->goalsagainst = 0;
    $tf->goalsfor = 0;
    $tf->ishome = false;
    $tf->kickoff = "00:00PM";
    $tf->opp_full = "";
    $tf->opp_abbr = "";
    $tf->report = "";
    $tf->report_href = "fix-20YYMMDD.part.html";
    $tdata = json_encode($tf).PHP_EOL;
    file_put_contents($pfile,$tdata);
	return $tdata;
}

function jsonCreateCoachesFormat($pfile)
{
    $tcoach = new BLLCoaching();
    $tcoach->id = 1;
    $tcoach->fname = "";
    $tcoach->lname = "";
    $tcoach->role = "";
    $tcoach->bio_href = "";
    $tcoach->bio = "";
    $tdata = json_encode($tcoach).PHP_EOL;
    file_put_contents($pfile,$tdata);
	return $tdata;
}

function jsonCreateClubsFormat($pfile)
{
    $tclub = new BLLClub();
    $tclub->id = 1;
    $tclub->country = "";
    $tclub->founded = 1900;
    $tclub->fullname = "";
    $tclub->shortname = "";
    $tclub->nickname = "";
    $tclub->majorhonours = "";
    $tclub->league = "";
    $tdata = json_encode($tclub).PHP_EOL;
    file_put_contents($pfile,$tdata);
	return $tdata;
}

function jsonCreateNewsItemsFormat($pfile)
{
    $tni = new BLLNewsItem();
    $tni->id = 1;
    $tni->heading = "";
    $tni->img_href = "news-mainXX.jpg";
    $tni->thumb_href = "news-mainXX.jpg";
    $tni->item_href = "niXX.part.html";
    $tni->content = "";
    $tni->tagline = "";
    $tni->summary = "";
    $tdata = json_encode($tni).PHP_EOL;
    file_put_contents($pfile,$tdata);
	return $tdata;
}

//---------Create JSON Files---------------------------------------------
//UNCOMMENT TO CREATE A NEW FILE
//jsonCreateManagerFormat("data/json/managers1.json");
//jsonCreatePlayerFormat("data/json/players1.json");
//jsonCreateStadiumFormat("data/json/stadiums1.json");
//jsonCreateExecutivesFormat("data/json/executives1.json");
//jsonCreateKitsFormat("data/json/kits1.json");
//jsonCreateFixturesFormat("data/json/fixtures1.json");
//jsonCreateCoachesFormat("data/json/coaches1.json");
//jsonCreateClubsFormat("data/json/clubs1.json");
//jsonCreateNewsItemsFormat("data/json/newsitems1.json");

?>