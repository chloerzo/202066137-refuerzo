<?php
// ---------------------------
// Activity 1: Number Counter
// ---------------------------
echo "Exercise 1: Number Counter\n";

$i = 1;
while ($i <= 10) {
    echo $i . " ";
    $i++;
}

echo "\n";

$i = 2;
while ($i <= 20) {
    echo $i, " ";
    $i += 2;
}

echo "\n\n";

// -------------------------------
// Activity 2: Password Validator
// -------------------------------
echo "Exercise 2: Password Validator\n";

$correct_password = "password123";
do {
    $password = readline("Please enter the password: ");
    if ($password !== $correct_password) {
        echo "Incorrect password.\n";
    }
} while ($password !== $correct_password);

echo "Access Granted.\n\n";

// ---------------------------------
// Activity 3: Multiplication Table
// ---------------------------------
echo "Exercise 3: Multiplication Table\n";

for ($i = 1; $i <= 10; $i++) {
    echo "7 x $i = " . (7 * $i) . "\n";
}

echo "\n";

// --------------------------------------------------
// Activity 4: Loop Control with break and continue
// --------------------------------------------------
echo "Exercise 4: Loop Control with Break and Continue\n";

for ($i = 1; $i <= 10; $i++) {
    if ($i == 6) {
        continue;
    }
    if ($i == 8) {
        break;
    }
    echo $i . " ";
}

echo "\n\n";

// ---------------------------
// Activity 5: Sum of Numbers
// ---------------------------
echo "Exercise 5: Sum of Numbers\n";

$i = 1;
$sum = 0;
while ($i <= 100) {
    $sum += $i;
    $i++;
}
echo "The sum of numbers from 1 to 100 is: $sum\n\n";

// -----------------------------------------
// Activity 6: Array Iteration with foreach
// -----------------------------------------
echo "Exercise 6: Array Iteration with foreach\n";

$movies = ["The Shawshank Redemption", "Inception", "The Dark Knight", "Interstellar", "Parasite"];
foreach ($movies as $movie) {
    echo $movie . "\n";
}

echo "\n";

// ------------------------------------------
// Activity 7: Key-Value Pairs with foreach
// ------------------------------------------
echo "Exercie 7: Key-Value Pairs with foreach\n";

$student = ["Name" => "Alice", "Age" => 20, "Grade" >= "A", "City" => "Baguio"];
foreach ($student as $key => $value) {
    echo "$key: $value\n";
}

echo "\n";

// ---------------------------------
// Activity 8: Factorial Calculator
// ---------------------------------
echo "Exercise 8: Factorial Calculator";

$number = 5;
$factorial = 1;
for ($i = $number; $i > 0; $i--) {
    $factorial *= $i;
}

echo "Factorial of $number is: $factorial\n\n";

// -------------------------------
// Activity 9: FizzBuzz Challenge
// -------------------------------
echo "Exercise 9: FizzBuzz Challenge\n";

for ($i = 1; $i <= 60; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz ";
    } elseif ($i % 3 == 0) {
        echo "Fizz ";
    } elseif ($i % 5 == 0) {
        echo "Buzz ";
    } else {
        echo $i . " ";
    }
}

echo "\n\n";

// ----------------------------------
// Activity 10: Prime Number Checker
// ----------------------------------
echo "Activity 10: Prime Number Checker\n";

$number = 17;
$is_prime = true;
for ($i = 2; $i <= sqrt($number); $i++) {
    if ($number % $i == 0) {
        $is_prime = false;
        break;
    }
}
if ($is_prime) {
    echo "$number is a prime number.\n";
} else {
    echo "$number is not a prime number.\n";
}

echo "\n";

// --------------------------------
// Activity 11: Fibonacci Sequence
// --------------------------------
echo "Exercise 11: Fibonacci Sequence\n";

$n = 10;
$fib = [0, 1];
while (count($fib) < $n) {
    $fib[] = $fib[count($fib) - 1] + $fib[count($fib) - 2];
}
echo implode(" ", $fib) . "\n\n";

// -------------------------------
// Activity 12: Reverse a String
// -------------------------------
echo "Exercise 12: Reverse a String\n";

$string = "Hello";
$reversed = "";
for ($i = strlen($string) - 1; $i >= 0; $i--) {
    $reversed .= $string[$i];
}
echo "Input: $string\n";
echo "Output: $reversed\n";
?>