<?php

class BLLGame
{

    public $gameId;
    public $gameTitle;
    public $developer;
    public $ageCert;
    public $desc;
    public $releaseDate;
    public $genre;
    public $retailPrice;
    public $rank;
    public $recommendScore;
    public $userScore;

    public function __construct($ptitle, $pdev, $ppagecrt, $pdesc, $preldte, $pgnre, $prtprce, $prnk, $precscre, $pussre)
    {
        $this->gameTitle = $ptitle;
        $this->developer = $pdev;
        $this->ageCert = $ppagecrt;
        $this->desc = $pdesc;
        $this->releaseDate = $preldte;
        $this->genre = $pgnre;
        $this->retailPrice = $prtprce;
        $this->rank = $prnk;
        $this->recommendScore = $precscre;
        $this->userScore = $pussre;
        
        
    }
}
class BLLgameSet
{

	public $gamelist = array();

	public $gamesetname;

	public function __construct()
	{
		$this->gamelist = [];
		$this->gamesetname = "";
	}
}



?>