<?php

class DancerSquare
{
    protected $maleQueue;
    protected $femaleQueue;

    function __construct()
    {
        $this->femaleQueue = new SplQueue();
        $this->maleQueue = new SplQueue();
    }

    function addDancer($dancer)
    {
        if ($dancer->getGender() == "male") {
            $this->maleQueue->enqueue($dancer);
        }
        if ($dancer->getGender() == "female") {
            $this->femaleQueue->enqueue($dancer);
        }
    }

    public function pairDance()
    {
        if ($this->femaleQueue->isEmpty()) {
            echo count($this->maleQueue) . " nam dang cho";
        } elseif ($this->maleQueue->isEmpty()) {
            echo count($this->femaleQueue) . " nu dang cho";
        } else {
            echo "cap " . $this->maleQueue->dequeue()->getName() . " - " . $this->femaleQueue->dequeue()->getName() . "<br>";
        }
    }

}