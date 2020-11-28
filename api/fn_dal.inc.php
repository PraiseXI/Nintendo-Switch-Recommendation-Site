<?php

// Include the Class Include
require_once ("oo_bll.inc.php");
require_once ("fn_pl.inc.php");


function DAL_CreateGame(): BLLgameSet
{
	$tgamedata = [];
	$tgamedata[] = new BLLGame("Animal Crossing", "Nintendo EAD", "PEGI 3", "In Animal Crossing, the player character is a human who lives in a village inhabited by various anthropomorphic animals, carrying out various activities such as fishing, bug catching, and fossil hunting.", 2020, "Education Simulation", 49.99, 9, "6", "8");
	$tgamedata[] = new BLLGame("Fortnite", "Epic Games", "12+", "Play Fortnite Battle Royale, the completely free 100-player PvP mode. One giant map, A Battle Bus, Last one standing wins.", 2017, "Shooter-Survival", 49.99, 9, "7", "9");
	$tgamedata[] = new BLLGame("Hollow Knight", "Team Cherry", "PEGI 3", "A classically styled 2D action adventure across a vast interconnected world. Explore twisting caverns, ancient cities and deadly wastes; battle tainted creatures and befriend bizarre bugs; and solve ancient mysteries at the kingdom's heart.", 2017, "Metroidvania", 7.50, 9, "2", "5");
	$tgamedata[] = new BLLGame("Stardew Valley", "Sickhead Games", "PEGI 7", "Players can work together to build a thriving farm, share resources, and build relationships with townspeople or each other.", 2016, "Simulation", 24.99, 9, "7", "4");
	$tgamedata[] = new BLLGame("Dead Cells", "Motion Twin", "14+", "Dead Cells puts you in control of a failed alchemic experiment trying to figure out what's happening on a sprawling, ever-changing and seemingly cursed Island. ... Speaking of weapons, Dead Cells features a plethora of ways to slay your enemies.", 2017, "Metroidvania", 14.99, 9, "8", "8");
	$tgamedata[] = new BLLGame("Into the Breach", "Subset Games", "12+", "The remnants of human civilization are threatened by gigantic creatures breeding beneath the earth. You must control powerful mechs from the future to hold off this alien threat.", 2010, "Turn-based strategy", 14.99, 9, "7", "9");
	$tgamedata[] = new BLLGame("The Messenger", "Sabotage Studio", "13+", "As a demon army besieges his village, a young ninja ventures through a cursed world, to deliver a scroll paramount to his clan's survival.", 2018, "Platform game", 17.99, 9, "3", "6");
	$tgamedata[] = new BLLGame("Mario Tennis Aces", "Camelot Software Planning", "PEGI 3", "Mario Tennis Aces is a single player and multiplayer that lets you play with up to 4 people as your favourite characters in intense battles.", 2018, "Sports Game", 39.99, 9, "8", "10");
	$tgamedata[] = new BLLGame("Arms", "Nintendo Entertainment Planning & Development", "12+", " An all-new way to fight ARMS is a fighting game where you use stretchy weaponised arms to punch, thump and knock-out opponents", 2017, "Fighting Game", 44.99, 9, "7", "8");
	$tgamedata[] = new BLLGame("Tetris 99", " Nintendo", "PEGI 3", "Tetris 99 is a free online multiplayer version of the tile-matching puzzle video game Tetris", 2020, "Puzzle video game", 17.99, 9, "9", "7");
	
	$tgames = new BLLgameSet();
	$tgames->gamesetname = "All Games";
	$tgames->gamelist = $tgamedata;
	return $tgames;
	
}


?>