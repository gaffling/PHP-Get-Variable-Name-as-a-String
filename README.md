# PHP-Get-Variable-Name-as-a-String

> Say you have this PHP code:

    $FooBar = "a string";

> and need not only the var_dump($FooBar)but also the Variable Name, you can use this:

    echo get_var_name($FooBar).' - '.var_dump($FooBar);

> which prints: "FooBar - a string"
