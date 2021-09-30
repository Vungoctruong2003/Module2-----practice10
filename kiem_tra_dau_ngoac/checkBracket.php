<?php

class checkBracket
{
    protected $stack;

    function __construct()
    {
        $this->stack = new SplStack();
    }

    function checkBBracket($str){
        for($i=0; $i<strlen($str); $i++){
            if ($str[$i] == "("){
                $this->stack->push($str[$i]);
            }
            if ($str[$i] == ")"){
              $this->stack->pop();
            }
        }
        if($this->stack->isEmpty()) {
            echo "Expression is true";
        } else{
            echo "Expression is not true";
        }
    }


}