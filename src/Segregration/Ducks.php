<?php 

namespace App\Segregration;

interface CanPlay 
{
    public function play();
}

interface CanFloat
{
    public function float();
}

interface CanQuack
{
    public function quack();
}

class Duck implements CanFloat, CanQuack, CanPlay
{
    public function float()
    {
        echo "The duck is floating \n";
    }

    public function quack()
    {
        echo "The duck is quacking \n";
    }

    public function play()
    {
        $this->float();
        $this->quack();
    }
}


class WoodenDuck implements CanFloat, CanPlay
{
    public function float()
    {
        echo "The wooden duck is floating \n";
    }

    public function play()
    {
        $this->float();
    }

}


class Frod implements CanPlay
{
    public function play()
    {
        echo "The frog is playing \n";
    }
}
class Pond 
{
    public function sendToPlay(CanPlay $player)
    {
        $player->play();
    }
}



$pond = new Pond();

$pond->sendToPlay(new Duck());
$pond->sendToPlay(new WoodenDuck());
$pond->sendToPlay(new Frod());