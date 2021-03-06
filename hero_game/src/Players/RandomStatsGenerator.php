<?php
namespace HeroGame\Players;

class RandomStatsGenerator implements StatsGeneratorInterface {

    public function generate(Player $player, $stats = []) {

        if(empty($stats))
        {
            throw new \Exception('The stats cannot be empty');
        }

        foreach($stats as $statKey => $statValue)
        {
            if(empty($statValue[0]) || empty($statValue[1]))
            {
                throw new \Exception('The minimum or maximum value is missing');
            }
            if($statValue[0] > $statValue[1])
            {
                throw new \Exception('The minimum cannot be greater than maximum');
            }

            $method = sprintf("set%s", ucfirst(strtolower($statKey)));
            if (!method_exists($player, $method)) {
                throw new \Exception(sprintf('Attribute cannot be set. Method [%s] does not exist.', $method));
            }

            $randNumber = $this->getRandomNumber($statValue[0], $statValue[1]);
            $player->$method($randNumber);
        }
    }

    public function getRandomNumber(int $min, int $max)
    {
        return random_int($min, $max);
    }
}