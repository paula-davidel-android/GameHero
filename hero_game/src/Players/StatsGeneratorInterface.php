<?php
namespace HeroGame\Players;

interface StatsGeneratorInterface {
    public function generate(Player $player, $stats = []);
}