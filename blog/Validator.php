<?php
class Validator{
    public function string($value, $min = 1, $max = INF){
        $value = trim($value);

        return is_string($value)
                && strlen($value) >= $min 
                && strlen($value) <= $max;
    }
    public function number($value, $min = 0, $max = INF){
        $value = trim($value);

        return is_nimeric($value)
                && $value >= $min
                && $value <= $max;
    }
}