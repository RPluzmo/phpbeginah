<?php

//Dump n Die
function dd($data){
    echo"<pre>";
    var_dump($data);
    echo"</pre>";
    die();//kill  codoo
}