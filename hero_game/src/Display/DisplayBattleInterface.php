<?php
namespace HeroGame\Display;
use HeroGame\Battle\BattleInterface;

interface DisplayBattleInterface {
    public function printInitialStats(BattleInterface $battle);
    public function printRoundStats(BattleInterface $battle, $currentRound);
    public function printBattleResults(BattleInterface $battle);
}