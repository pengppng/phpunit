<?php
class Calculation { 
    public function sum($num1, $num2) { 
        if (!($this->checkType($num1, 'integer') && $this->checkType($num2, 'integer'))) { 
            return null; 
        } 
        return $num1 + $num2; 
    } 

    public function checkType($input, $type) { 
        return gettype($input) === $type;
    } 
}
