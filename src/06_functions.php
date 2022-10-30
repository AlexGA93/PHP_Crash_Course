<?php

    function registerUser( $email ) {
        echo 'Email registered: '.$email;
    }

    // registerUser('jDoe@mail.com');

    // default values

    function numOperations( $num1 = 10, $num2 = 99 ) {
        return $num1 * $num2;
    }

    echo numOperations(); // 990
    echo "<br />";
    echo numOperations( 30, 10 ); // 300
    echo "<br />";

    //arrow funcions
    $multiply = fn($num1=10, $num2=90) => $num1 * $num2;
    echo $multiply(); // 900
    echo "<br />";
    echo $multiply(5,5);// 25
