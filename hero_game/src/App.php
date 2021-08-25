<?php
namespace HeroGame;
use HeroGame\Init\BattleInit;
use HeroGame\Init\HeroInit;
use HeroGame\Init\BeastInit;

class App{
    public static function init()
    {   
        try{
            $hero  = HeroInit::create();
            $beast = BeastInit::create();

            $battle = BattleInit::create($hero, $beast);
            $battle->startBattle();
        }
        catch(Exception $e)
        {
            print_r($e->getMessage());
        }
    }
}
