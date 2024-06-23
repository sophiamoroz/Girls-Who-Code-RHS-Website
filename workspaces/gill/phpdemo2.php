<!-- Demo file by Kanwal Gill of Parents Who Code.-->
<!-- When someone edits this file, they will add their name too.-->

<!DOCTYPE html>
<html>
    <head>
        <title>A Brief PHP Demo, Page 2</title>

        <!-- This line links our default CSS file to this file.-->
	<link href="css/bootstrap.css" type="text/css" rel="stylesheet" />
        <link href="css/default.css" type="text/css" rel="stylesheet" />
    </head>

    <body>
        <!-- The line below brings in the header from another file, using PHP. -->
        <!-- You'll have to change this relative file path, depending on where your file is in the tree. -->
        <!-- Don't worry about the HTML links; those use absolute paths. Just change the PHP ones! -->
        <?php include "../../common/header.php" ?>

        <!-- Your page's content begins here.-->
        <h1>A Brief PHP Demo, Page 2</h1>

        <h3>Preliminaries</h3>
        <p>Here we'll demonstrate a variety of features of PHP.  For each of the features that are 
        demonstrated, you should do the following,</p>
        <ol>
            <li>Read the description of the feature here.</li>
            <li>Log into the web server to have a look at the code that created the feature.</li>
            <li>Use the "developer tools" of your browser (push F12 for most browsers) to see how that code resulted 
            in the HTML that is being displayed in your broswer.  Again, you won't see any PHP in your browser; 
            instead, you'll see the HTML that came out of the PHP.</li>
            <li>Lastly and <b>MOST IMPORTANTLY</b>, try the code out.  Have a file in another window and copy and 
            paste the code into your file, upload it to the webserver, and get it to work.  Then start tinkering with 
            the code and see if you can change how it does.  A LOT of programming learning takes place this way so 
            it's very important that you do this "tinkering and messing around" with ANY programming language that 
            you learn.</li>
        </ol>

        <h3>A Brief Remonstration</h3>
        <p>Now, the vast majority of you are going to do just step 1 above or steps 1-3 above and hope that that 
        will be enough.  I know this because once, I was in your shoes and that's what I tried to do as well.  
        Unfortunately, it won't result in any deep learning.  In order to truly understand the language and make it 
        your own, you'll need to get your hands dirty by first tinkering with other people's code snippets and then 
        using the language to solve simple problems and then more complex problems.  If you don't do this, everything 
        you read about the language will fall out of the bottom of your head in short order.  Trust me.  That's what 
        happened to me!  Don't let it happen to you!</p>
        <p>Now, one reason why students don't tinker on their own with code is that they're afraid that they'll 
        accidentally break something important while tinkering.  So, I promise you that everything I show you on 
        this page will be safe for tinkering.  Nothing you learn here can possibly break anything other than the one 
        page you happen to be working on... and the worst thing that will happen there is that the computer will 
        decide that it can't make any sense of what you've written and will either give you a snooty error 
        message or will simply decide not to display anything at all (as you'll come to realize, the snooty error 
        message is FAR more helpful!).  So have at it!  You won't break anything and you WILL learn a lot!</p>

        <h3>Variables, String Concatenation, And Comments</h3>
        <p>Every sentence in the list below was constructed using PHP.  Note, once again, that you can't see this 
        just by examining the HTML that your browser saw (by hitting F12).  You have to examine the file on the 
        server itself to see the PHP and how it worked.</p>
        <ul>
            <li>
                <?php
                    // Notice my use of indentation to try to keep things well formatted.  You can develop your
                    // own style for keeping code organized but you MUST have a style or else you and your partners
                    // will have a HORRIBLE time trying to figure out what you wrote!  And then they will kill you.
                    $firstpart = "Variable names in PHP";
                    $secondpart = " must begin with a $.";
                    $output = $firstpart . $secondpart;
                    echo($output);
                ?>
            </li>
            <li>
                <?php
                    $four = 4;
                    $five = $four++;
                    $nine = $four + $five;
                    $firstpart = "Other than that peculiarity, variables in PHP act a lot like variables in ";
                    $secondpart = "Python.  For instance, they do not have to be declared.  ";
                    $thirdpart = "They can also hold any type of data.  ";
                    $fourthpart = "And even if they hold numbers, they can be used in string concatenation.  ";
                    $fifthpart = "For instance, " . $four . " + " . $five . " = " . $nine . ".";
                    echo($firstpart . $secondpart . $thirdpart . $fourthpart . $fifthpart);
                    /*Note that // can be used for a single line comment like I did above.  The way to do a 
                    multiline comment is with the * and / as I've done here.*/
                ?>
            </li>
            <li>
                <?php
                    $firstpart = "This is because both PHP and Python will try to convert your variables into ";
                    $secondpart = " other data types as needed for your code to make sense.";
                    print($firstpart . $secondpart);
                    /*As we noted earlier, print is also a PHP command and does almost exactly the same thing as
                    echo.*/
                ?>
            </li>
        </ul>

        <h3>Math And Comparisions</h3>
        <ul>
            <li>Math and comparisions are done pretty much the same way in PHP as in Python.</li>
            <li>Therefore, we have,</li>
                <ul>
                    <li>
                    <?php>
                        $four = 4;
                        $fouragain = 4;
                        $eight = 8;
                        if ($four + $fouragain == $eight)
                        {
                            echo($four . " + " . $fouragain . " = " . $eight);
                        }
                        else
                        {
                            echo("There is a bug in this program!");
                        }
                    /*Notice how code blocks (the part that's after the "if" and after the "else" in PHP have to be 
                    put within curly braces.  This is different from Python which uses indentation to show where the 
                    code blocks are.  Many "C-like" languages require the curly braces like C++, C#, Java, and, um,
                    C.*/
                    ?>
                    </li>
                    <li>
                    <?php
                        $total = 0;
                        $start_number = 1;
                        $end_number = 10;

                        $number_to_add = $start_number;
                        while ($number_to_add <= $end_number)
                        {
                            $total += $number_to_add;
                            $number_to_add++;
                        }
                        echo("The sum of all of the numbers from " . $start_number . " to " . $end_number . " = " . $total);
                    /*Just as an aside, noticed how I put 1 and 10 into variables at the very beginning of this snippet.
                    That's because 1 and 10 are numbers that might be changed at any time if say, later on, we needed the
                    sum of all numbers from 234 to 1284.  If that happens, I just change $start_number to 234 and
                    $end_number to 1284 and run the code again.  This doesn't save all that much time in this simple 
                    example but sometimes functions can get to be 50-100 lines long with multiple references to the start
                    and end numbers and writing those functions in this way can save you a LOT of time in the long run.*/
                    ?>
                    </li>
                </ul>
        </ul>

        <h3>If, Else, Loops, and Functions</h3>
        <ul>
            <li>
            <?php
                $output = ""; //This statement is not needed in PHP but I like it because it reminds me that I'm 
                              //building an output string bit by bit and my starting point is nothing.
                $four = 4;
                $five = 5;
                if ($four == $five)
                {
                    $output = "This can't be!";
                }
                else
                {
                    $output = "If/else, while loops, and functions ";
                }

                //Below, adding five to four the hard way...
                //Can you tell why it has to be "$index < $five" and not "$index <= $five".  This is a very 
                //common error... especially in my code!
                $sum = $four;
                for ($index = 0; $index < $five; $index++)
                {
                    $sum++;
                }

                if ($sum == 9)
                {
                    $output = $output . "work about the same in PHP as in Python.";
                }
                else
                {
                    $output = $output . "This can't be either!";
                }
                echo($output);
            ?>
            </li>
            <li>A couple of funny bits, however, are that,</li>
                <ul>
                    <li>TRUE and FALSE are written in ALL CAPS in PHP.</li>
                    <li>PHP uses "else if" instead of "elif".</li>
                    <li>In PHP, to create an array, you have to create it using the array() function (I'll let you 
                    Google that one.  Learning to Google details of computer languages is a
                    <?php
                        //Yes, we're doing it the hard way.  AGAIN!
                        $how_many_verys = 3;
                        for ($index = 0; $index < $how_many_verys; $index++)
                        {
                            echo(" very");
                            if ($index == ($how_many_verys - 1))
                            {
                                echo(" "); //No comma after the last "very"
                            }
                            else
                            {
                                echo(", "); //Put comma after all "very"s EXCEPT the last one
                            }
                        }
                    ?> 
                    frequently used skill and the sooner you get good at it, the better).</li>
                    <li>Also, for loops are very different in PHP than they are in Python.  Or, more precisely,
                    for loops in Python are very different from every other language.  PHP does for loops the 
                    same way as C, C++, Java, and C# and it's Python who's the outlier here.  You can look this 
                    up and I also put plenty of for loop examples in the PHP code in this file for you to 
                    refer to.</li>
                </ul>
            <li>
                <?php
                    $a_number = 1283;
                    $output = "All that being said, it's pretty easy to write a function in PHP to tell us that, ";
                    $output = $output . "for instance, " . $a_number . " is " . isitprime($a_number) . ".";
                    echo($output);
                    /*Actually, I should not be taking isitprime's output and showing it directly to the user.
                    This is because isitprime could return "uh-oh" or "REALLY!?!?" (see below) so I should check
                    for that and if it happens, I should tell the user something like "There was a problem" rather
                    than just showing him "REALLY!?!?".  Perhaps one of you would like to fix this?*/
                    
                    function isitprime($number_to_test)
                    {
                        /*Function isitprime:
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

                            /*If we got here, it means that none of the divisors divided $number_to_test
                            evenly so it's prime.*/
                            return "prime";
                        }

                        /*If we get here, there was a problem in our code...*/
                        return "uh-oh";
                    }
                ?>
            </li>
        </ul>

        <h3>You Are Allowed to Put HTML Directly Into Your Echo Statements</h3>
        <ul>
            <li>By now, you've surely noticed that the output of the PHP echo (or print) command ends up being
            part of the page that's shown to the user.</li>
            <li>You may, therefore, wonder what would happen if you had echo output HTML tags.  Would those 
            tags show up directly on the user's screen?  Or would they be interpreted by the browser as HTML?</li>
            <li>The answer is that they get interpreted by the browser as HTML.  While putting HTML into PHP 
            echo commands can result in confusing code, it is perfectly legal and is one way you could do 
            something like this,</li>
            <ul>
                <li>
                    <?php
                        echo(bold_or_underscore(43));
                    ?>
                </li>

                <li>
                    <?php
                        echo(bold_or_underscore(44));
                    ?>
                </li>
                <?php
                    function bold_or_underscore($number)
                    {
                        /*Function bold_or_underscore:
                          If $number is even, produces HTML to create a bold-faced message
                          If $number is odd, produces HTML to create an underscored message
                          CAUTION - does NOT check input for sanity!*/
                        if ($number % 2 == 0)
                        {
                            return "<b>" . $number . " is even so this is bold text.</b>";
                        }
                        else
                        {
                            return "<u>" . $number . " is odd so this is underlined text.</u>";
                        }
                    }
                    /*Note that I have called bold_or_underscore in one PHP block and defined it in a DIFFERENT
                    PHP block!  This is allowed!  In fact, it's convenient because you could keep your code neat
                    by defining all your functions at the top (or bottom) of the page and then calling them as
                    needed within the page.  No more plopping the isitprime() function code right in the middle
                    of the HTML you're trying to write for the user!*/
                ?>
            </ul>
        </ul>

        <h3>What's Next?</h3>
        <p>In the next page, we'll have,</p>
        <ul>
            <li>An example of how you can get some interactivity out of the combination of PHP and HTML.</li>
        </ul>

        <h3>P.S.</h3>
        <ul>
            <li>
                <?php
                    echo($four . " + " . $five . " is still equal to " . $nine . "!");
                    /*Not only can I call a function in one PHP block and define it in another block, I can
                    even refer to variables that I created in a PREVIOUS PHP block as I've just done.  The
                    preprocessor will find them and use them without any trouble.
                    The one exception to this is variables that were created inside of a function.  Just as
                    in Python (and most languages, in fact), variables that were created inside of a function
                    do not exist outside of the function or, in computer-science-ese, variables created inside
                    of a function do not have "scope" outside of that function.  So I cannot refer to the 
                    variables that I created in the isitprime() function; those variables only exist within
                    that function.*/
                ?>
            </li>
        </ul>

        <!-- Page content ends here.-->

        <!-- Include links to rest of PHP demo pages-->
        <?php include "phpdemolinks.php" ?>

        <!-- This line brings in the footer. -->
        <!-- Make sure to change this file path too. -->
        <?php include "../../common/footer.php" ?>
    </body>
</html>