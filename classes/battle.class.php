<?php

class Battle
{
    private $players;
    private $attacker;
    private $defender;
    private $round = 1;
    private $gameOver = false;

    function __construct(array $players)
    {
        $this->players = $players;
        $this->findAttacher();
    }

    public function startRound()
    {
        $this->mainBattle($this->attacker, $this->defender);
        $this->switchRoles($this->attacker, $this->defender);
    }

    private function findAttacher()
    {
        $hero = $this->players[0];
        $beast = $this->players[1];

        //Hiher speed hit first
        $hero->getSpeed() > $beast->getSpeed() ? $attacker = $hero : $attacker = $beast;

        //Same speed, higher luck hit first
        if ($hero->getSpeed() === $beast->getSpeed()) {
            $hero->getLuck() > $beast->getLuck() ? $attacker = $hero : $attacker = $beast;
        }

        //set the defender
        $attacker === $hero ? $defender = $beast : $defender = $hero;

        $this->attacker = $attacker;
        $this->defender = $defender;
    }

    private function mainBattle($attacker, $defender)
    {
        if ($this->round >= 21) {
            $this->gameOver = true;
            echo " * * * 20 round limit reached - Game over * * * <br>" . str_repeat("_", 67) . "<br>";;

            exit();
        } else {
            echo "Round nr. " . $this->round++ . " starts:<br><br>";
        }

        echo $attacker->getName() . " is the attacker, life: " . $attacker->getLife() . "<br>";
        echo $defender->getName() . " is the defender, life : " . $defender->getLife() . "<br>";

        $damage = $attacker->getPower() - $defender->getDefence();

        echo $attacker->getName() . " attacks " . $defender->getName() . " with a damage of: " . $damage . "<br>";

        //if defender is lucky
        if (mt_rand(0, 100) <= $defender->getLuck()) {
            $damage = 0;
            echo $defender->getName() . " gets no damage because it's lucky. <br>";
        } elseif (get_class($attacker) === "Hero") {
            //if hero is the attacher and is lucky to use Dragon Power - 10%
            if (mt_rand(0, 100) <= 10) {
                $damage = ($attacker->getPower() * 2) - $defender->getDefence();
                echo $attacker->getName() . " hits with Dragon Power, double power, damage is: " . $damage . "<br>";
            }
        }

        if (get_class($defender) === "Hero") {
            //if hero is the defender and is lucky with the Magic Shield 20%       
            if (mt_rand(0, 100) <= 20) {
                $damage /= 2;
                echo $defender->getName() . " gets half of damage because it's using the Magic Shield. <br>";
            }
        };

        $lifeLeft = $defender->getLife() - $damage;
        $defender->setLife($lifeLeft);

        echo "<br>" . $defender->getName() . " life left: " . $defender->getLife() . "<br>";

        //Winner
        if ($defender->getLife() < 1) {
            $this->gameOver = true;
            echo str_repeat("_", 67) . "<br><br> * * * " . $attacker->getName() . " is the WINNER! * * * <br>";
        }

        echo str_repeat("_", 67) . "<br>";
    }

    private function switchRoles($attacker, $defender)
    {
        $this->attacker = $defender;
        $this->defender = $attacker;
    }

    public function getGameStatus()
    {
        return $this->gameOver;
    }
}
