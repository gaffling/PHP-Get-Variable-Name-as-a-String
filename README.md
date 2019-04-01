# PHP-Get-Variable-Name-as-a-String

> Say you have this PHP code:

    $FooBar = "a string";

> and need not only the dump of $FooBar, but also the Variable Name, you can use this:

    echo get_var_name($FooBar).' - '.$FooBar;

> which prints: "FooBar - a string"
