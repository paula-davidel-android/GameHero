<?php
namespace HeroGame\Battle;
use HeroGame\Players\Player;

interface BattleInterface {
	public function initHero(Player $hero);
	public function initBeast(Player $beast);
	public function startBattle();
	public function getWinner();
}