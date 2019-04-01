<?php

function get_var_name(){
    // read backtrace
    $bt   = debug_backtrace();
    // read file
    $file = file($bt[0]['file']);
    // select exact print_var_name($varname) line
    $src  = $file[$bt[0]['line']-1];
    // search pattern
    $pat = '#(.*)'.__FUNCTION__.' *?\( *?(.*) *?\)(.*)#i';
    // extract $varname from match no 2
    $var  = preg_replace($pat, '$2', $src);
    // return the var name
    return trim($var);
}

// Say you have this PHP code:
$FooBar = "a string";

// and need not only the dump of $FooBar, but also the Variable Name, you can use this:
echo get_var_name($FooBar).' - '.$FooBar;

// which prints: "FooBar - a string"
