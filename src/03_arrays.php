<?php
    // Simple array 
    $numbers = [1, 3, 44.5,1000];
    $fruits = array('apple','pear','orange');

    // Associative Array
    // Associative arrays are arrays that use named keys that you assign to them.
    $colors = [
        1 => 'red',
        4 => 'blue',
        6 => 'green'
    ];

    // or
    $colors[2] = 'pink';
    $colors[3] = 'red';
    $colors[5] = 'purple';


    // iterate array values
    // foreach( $colors as $color_key => $color_value ) {
    //     echo "Key = ${color_key}, Value = ${color_value}";
    //     echo "<br />";
    // }

    // echo $colors[6];
    // echo "<br />";

    $person_data = [
        'first_name' => 'John',
        'second_name' => 'Doe',
        'user_age' => 49,
        'is_married' => true,
    ];

    // foreach( $person_data as $person_key => $person_value ) {
    //     echo "Key = ${person_key}, Value = ${person_value}";
    //     echo "<br />";
    // }
    // echo $person_data['first_name'];
    // echo "<br />";
    // echo $person_data['is_married'];
    // echo "<br />";

    $person_data2 = [
        [
            'first_name' => 'John',
            'second_name' => 'Doe',
            'user_age' => 49,
            'is_married' => false,
        ],
        [
            'first_name' => 'Jane',
            'second_name' => 'Doe',
            'user_age' => 29,
            'is_married' => true,
        ]
    ];

    echo $person_data2[0]['first_name'];
    echo "<br />";
    echo $person_data2[1]['is_married'];
    echo "<br />";
    echo ($person_data2[1]['is_married']) ? 'true' : 'false';
    echo "<br />";
    
    echo "My name is " .$person_data2[1]['first_name'];
    echo "<br />";
    $conditional = $person_data2[0]['is_married'] ? "" : " not";
    echo "My name is ". $person_data2[0]['first_name']." ".$person_data2[0]['second_name']. "I'm ".$person_data2[0]['user_age']." years old and I'm ".$conditional." married";
?>