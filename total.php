<?php
// Define a variable
$greeting = "Hello, World!";
echo $greeting . "\n";

// Define an array
$fruits = array("Apple", "Banana", "jiuter");

// Display the array elements
echo "Fruits: \n";
foreach ($fruits as $fruit) {
    echo $fruit . "\n";
}

// Define a function
function add($a, $b) {
    return $a + $b;
}

// Use the function
$sum = add(3, 4);
echo "The sum of 3 and 4 is: " . $sum . "\n";

// Define an associative array
$person = array(
    "name" => "John Doe",
    "age" => 30,
    "email" => "johndoe@example.com"
);

$person = array(
    "name" => "John Doe",
    "age" => 30,
    "email" => "johndoe@example.com"
);

$person = array(
    "name" => "John Doe",
    "age" => 30,
    "email" => "johndoe@example.com"
);

$person = array(
    "name" => "John Doe",
    "age" => 30,
    "email" => "johndoe@example.com"
);


// Display associative array elements
echo "Person details: \n";
foreach ($person as $key => $value) {
    echo ucfirst($key) . ": " . $value . "\n";
}
?>
