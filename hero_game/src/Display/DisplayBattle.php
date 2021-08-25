<?php
namespace HeroGame\Display;
use HeroGame\Battle\BattleInterface;

class DisplayBattle implements DisplayBattleInterface {

    public function printInitialStats(BattleInterface $battle)
    {
        echo "Start Battle! <br>";
        echo "Hero health: ".$battle->getHero()->getHealth()."<br>";
        echo "Hero strength: ".$battle->getHero()->getStrength()."<br>";
        echo "Hero speed: ".$battle->getHero()->getSpeed()."<br>";
        echo "Hero defence: ".$battle->getHero()->getDefence()."<br>";
        echo "Hero luck: ".$battle->getHero()->getLuck()."<br>";
        echo "<br>";

        echo "Beast health: ".$battle->getBeast()->getHealth()."<br>";
        echo "Beast strength: ".$battle->getBeast()->getStrength()."<br>";
        echo "Beast speed: ".$battle->getBeast()->getSpeed()."<br>";
        echo "Beast defence: ".$battle->getBeast()->getDefence()."<br>";
        echo "Beast luck: ".$battle->getBeast()->getLuck()."<br>";
        echo "<br>";
    }

    public function printRoundStats(BattleInterface $battle, $currentRound)
    {
        echo "ROUND: ".$currentRound."<br>";
        echo "Attacker: ".$battle->getAttacker()->getName()."<br>";
        echo "Attacker Health: ".$battle->getAttacker()->getHealth()."<br>";

        echo "Defender: ".$battle->getDefender()->getName()."<br>";
        echo "Defender Health: ".$battle->getDefender()->getHealth()."<br>";

        if($battle->getDefenderWasLucky() === true)
        {
            echo "Defender was lucky. No damage will be taken."."<br>";    
        }   
            
        echo "<br>";
    }

    public function printBattleResults(BattleInterface $battle)
    {
        echo "Winner is: ".$battle->getWinner()->getName()."<br>";
        echo "GAME OVER!!"."<br>";
    }
}