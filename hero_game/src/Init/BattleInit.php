<?php
namespace HeroGame\Init;
use HeroGame\Display\DisplayBattle;
use HeroGame\Config\Config;
use HeroGame\Battle\Battle;
use HeroGame\Players\Player;

class BattleInit
{
    public static function create(Player $hero, Player $beast)
    {
        return (new Battle(new Config, new DisplayBattle))
            ->initHero($hero)
            ->initBeast($beast);
    }
}