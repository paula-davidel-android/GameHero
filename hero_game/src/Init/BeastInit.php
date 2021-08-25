<?php
namespace HeroGame\Init;
use HeroGame\Config\Config;
use HeroGame\Players\RandomStatsGenerator;
use HeroGame\Players\Beast;

class BeastInit implements PlayerInit
{
    public static function create()
    {
        return (new Beast(new RandomStatsGenerator, Config::BEAST_STATS))
            ->setName(Config::BEAST_NAME);
    }
}