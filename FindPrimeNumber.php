<?php
// Function to check if a number is prime
function isPrime($number) {
    // Check if number is less than 2
    if ($number < 2) {
        return false;
    }

    // Check for factors other than 1 and the number itself
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

// Function to find all prime numbers in a given range
function findPrimesInRange($start, $end) {
    $primes = array();

    // Iterate through each number in the range
    for ($i = $start; $i <= $end; $i++) {
        // Check if the current number is prime
        if (isPrime($i)) {
            $primes[] = $i;
        }
    }

    return $primes;
}

// Example usage
$start = 10;
$end = 50;
$primes = findPrimesInRange($start, $end);

echo "Prime numbers between $start and $end are: ";
echo implode(", ", $primes);
?>
