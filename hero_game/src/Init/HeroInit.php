<?php
namespace HeroGame\Init;
use HeroGame\Config\Config;
use HeroGame\Players\RandomStatsGenerator;
use HeroGame\Players\Hero;

class HeroInit implements PlayerInit
{
    public static function create()
    {
        return (new Hero(new RandomStatsGenerator, Config::HERO_STATS))
            ->setName(Config::HERO_NAME);
    }
}