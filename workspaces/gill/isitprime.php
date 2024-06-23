<?php
function isitprime($number_to_test)
{
    /*Function isitprime:
    Author: Kanwal Gill
    Returns "prime"" if $number_to_test is prime
    Returns "composite" if $number_to_test is composite
    Returns "neither" if $number_to_test is neither prime nor composite (ie 0 or 1)
    Returns "REALLY!?!?" if $number_to_test is not an integer
    Returns "uh-oh" if there was an unexpected problem*/

    //First, check the input

    /*Is it an integer?*/
    if (gettype($number_to_test) != "integer")
    /*gettype is a built in function that tells us the type of $number_to_test.  It can
    return "integer" or "string" or "double" etc.*/
    {
        return "REALLY!?!?";
    }

    /*If someone gives us a negative number, we'll just take the absolute value of it and
    tell them if THAT number is prime or not.*/
    if ($number_to_test < 0)
    {
        $number_to_test = abs($number_to_test);
        //abs is a built-in function that returns the absolute value
    }
                        
    //Second, take care of easy cases quickly
    if ($number_to_test == 0 OR $number_to_test == 1)
    {
        return "neither"; //0 and 1 are neither prime nor composite
    }
    if ($number_to_test == 2)
    {
        return "prime"; //2 is prime
    }
    if ($number_to_test == 3)
    {
        return "prime"; //3 is prime too!
    }
    if ($number_to_test % 2 == 0)
    // If modular division by 2 is zero, it means that the number is divisible by 2.
    {
        return "composite"; //Any number divisible by 2 (other than 2 itself) is composite
    }

    /*Third, figure out if $number_to_test is prime by dividing it by all the odd numbers
    from 3 to the next whole number above the square root of $number_to_test.  If
    none of these divisions result in a whole number, $number_to_test is prime.
    For still more efficiency, we'll quit trying numbers once we find the first number
    that divides $number_to_test as going on from there is just wasteful.*/
                       
    $start_number = 3;
    $end_number = round(sqrt($number_to_test), 0) + 1;
    /*round is a built in function that, when used as I did above, rounds a number to
    the units place.  sqrt takes the square root of a number which often results in a
    decimal which is why I'm rounding it.  I then add one to make sure that I have the
    a whole number GREATER than the square root.*/
    for ($index = $start_number; $index <= $end_number; $index += 2)
    //$index +=2 is the same as $index = $index + 2
    {
        if ($number_to_test % $index == 0)
        {
            /*$index divides $number_to_test evenly so $number_to_test is
            composite.  We can stop here.*/
            return "composite";
        }
        {
            /*If we got here, it means that none of the divisors divided $number_to_test
            evenly so it's prime.*/
            return "prime";
        }
    }
    /*If we get here, there was a problem in our code...*/
    return "uh-oh";
}
?>