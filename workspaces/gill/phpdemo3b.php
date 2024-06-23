<!-- Demo file by Kanwal Gill of Parents Who Code-->
<!-- When someone edits this file, they will add their name too.-->

<!DOCTYPE html>
<html>
    <head>
        <title>A Brief PHP Demo, Page 3b</title>

        <!-- This line links the CSS file to this one.-->
	<link href="css/bootstrap.css" type="text/css" rel="stylesheet" />
        <link href="css/default.css" type="text/css" rel="stylesheet" />
    </head>

    <body>
        <!-- The line below brings in the header from another file, using PHP. -->
        <!-- You'll have to change this relative file path, depending on where your file is in the tree. -->
        <!-- Don't worry about the HTML links; those use absolute paths. Just change the PHP ones! -->
        <?php include "../../common/header.php" ?>

        <!-- Your page's content begins here.-->
        <h1>A Brief PHP Demo, Page 3b</h1>

        <h3>Bringing In The isitprime() Function</h3>
        <p>All of the important parts of our prior page were just HTML.  That's because HTML, by itself, is capable 
        of receiving input and passing it to another page for processing.  The processing page, however, needs to 
        have code to handle that input, for instance, our isitprime() function.  To get that function 
        into this page, I could have copied and pasted it from the "A Brief PHP Demo, Page 2" page but PHP has a much more 
        elegant approach that I've used here.  I put the isitprime() function in its own file and used an "include" directive
        to tell this page the name of that file.  Now this page can use the function whenever it wants to.  And if I need to 
        use isitprime() in yet another page, I can tell that page the location of the isitprime() function file and it can 
        also use it whenever it needs to.  This way, I maintain just one copy of the isitprime() function (which makes 
        changing the isitprime() function MUCH easier!) and the code in all of my pages will be much easier to read.</p>

        <?php include "isitprime.php"; ?>
        <!-- The isitprime() function is located in a file called itisprime.php and the line above brings that file into 
        this page.  It just copies the contents of the isitprime.php file and slaps it right into this spot of this file.
        Now, you've seen this line before... it's what we use to bring in the header and footer for every page on this site.  
        (Have a look above and below and find those lines!).
        As it happens, include has a weakness... It's possible to use it to include the same file more than once!  To 
        illustrate, let's pretend that this page used include to bring in files A and B but file B had its own include 
        statement that brought file A into file B.  What would happen is that this page would include file A and then go to
        include file B and see the include in file B pointing to file A and will then try to bring file A into this file 
        all over again!  This will result in errors because anything that was declared in file A would be declared twice in
        this page!
        To avoid that, PHP has an include_once directive which is used just like include.  It's smart enough to know not to
        try to include the same file twice so it's probably the one that you should be using to avoid troubles like the one
        described above.
        Another feature of include and include_once is that if the PHP preprocessor can't find the file that you're trying
        to include, it will simply skip that step and carry on as best as it can.  That's OK for optional code but if you 
        MUST have the code that's in that file (as is the case here, we MUST have isitprime() for this page to work
        correctly), you want to use require or it's cousin, require_once.  If either require or require_once can't find the 
        file it needs, it won't allow the page to run at all.
        So ordinarily I would have used require_once for bringing in the isitprime file since it IS required.  But, this is 
        a demo and it's hard to explain require_once without first describing include, include_once, and require so that's why 
        I used include here instead. --> 

        <h3>Writing Code For This Page</h3>
        <p>This page will need a bit of code of its own.  I've chosen to put it into this page rather than a separate file 
        because I don't think it'll  be needed in any other pages.  The code will take the input, process it a bit, and pass it  
        to isitprime().  It will then then write a response depending on what isitprime() said.  Go ahead and take a look at 
        that code now.</p>

        <h3>The Results!  Is It Prime?!?</h3>
        <?php
        /*There's a lot to talk about here but if you take it one step at a time, you'll be able to understand it all.  The
        first issue is that even if the user entered a number on the previous page, we'll be receiving a string on this
        page.  That's just how HTML works.  Therefore, we'll have to see if the string is capable of being changed
        to a number (the string "123" can be changed to a number but the string "RHS GWC" cannot).  If the string CAN be 
        changed into a number, we'll use the intval function to do it.  If the string cannot be changed into a number, we'll
        make a note of it so we can give an error message to the user.
        The second issue is how intval handles decimal numbers.  It truncates them rather than rounding them.  What I want,
        however, is rounding to the nearest whole number.  Thefore, what I do below is first convert the string number to a 
        float. Then I use the round function to round the float to the nearest whole number.  Finally, I use intval to convert 
        the rounded float to an integer.
        The third issue is that I could have passed the number from the previous page to this page using either HTML POST
        or HTML GET.  Either will work just fine; I just have to be consistent with I choose.  Since I used GET on the sending
        page, I can't use POST on this page; I must use GET.
        The reason I used GET is because GET passes values via the URL.  Have a look at the URL for this page in your
        browser.  If you got to this page from the sending page, you'll see that your URL ends with ?numbertotest=34 (or some
        other number).  This has two advantages,
        1.  It's easier for you, the student, because you can actually see the variables being passed from one page to another.
        2.  It's easier for me, the programmer, because if I want to test this page for a variety of values, all I have to
        do is change that 34 to a 3 or a 3.4 or whatever value I want to check.*/

            $number = $_GET['numbertotest']; //If I was using POST, this would be $_POST instead of $_GET
            if (is_numeric($number) == TRUE) //is_numeric returns TRUE if $number is EITHER a number OR a string that can be 
                                             //converted to numbers.  We already know that $number is a string so what we're
                                             //really asking is, "Is $number a string that can be converted to a number?"
            {
                $number = floatval($number); //Change a string to a float
                $number = round($number, 0); //Round that float to the nearest unit
                $number = intval($number); //Change the float to an int
                $response = isitprime($number); //Pass the int to isitprime()
            }
            else
            {
                $response = "Not a number"; //We get here if the user submitted something like "eight" or "foo"
            }

            switch($response)
            {
                case "Not a number":
                    $output = "My apologies.  It seems that you did not enter an integer number.  Please try again.";
                    break;
                case "prime":
                    $output = $number . " is a prime number.";
                    break;
                case "composite":
                    $output = $number . " is a composite number.";
                    break;
                case "neither":
                    $output = $number . " is neither prime nor composite.";
                    break;
                case "REALLY!?!?":
                    $output = "My apologies but there was a problem.  It seems that that there is a bug in the code.  ";
                    $output += "Please let the webmaster know of this problem.";
                    /*Sometimes strings are too long to fit in the screen width you've decided upon.  Doing something 
                    like what I've done above is one way to have the long string but still have neat looking code.*/  
                    break;
                case "uh-oh":
                    $output = "My apologies, there was a problem.  It appears there's a bug in the code.  Please let the ";
                    $output += "webmaster know of this problem.";                  
                    break;
            }
            echo("<p>" . $output . "</p>"); //Note, once again, that it is legal to put HTML into an echo statement.  It's
                                            //best done sparingly, however.
        ?>

        <h3>What's Next?</h3>
        <p>In the next page we'll,</p>
        <ul>
            <li>Do the very same thing except in just one page!  We'll make a page with a form that accepts a 
            number and then passes it back to <i>itself</i> for isitprime() to process and then display the 
            result.  Doing things this way, with one page instead of two, is often done in the real world but it 
            is hard to understand unless you have already worked through the two page process shown here.</li>
        </ul>
        <!-- Page content ends here.-->

        <!-- Include links to rest of PHP demo pages-->
        <?php include "phpdemolinks.php" ?>

        <!-- This line brings in the footer. -->
        <!-- Make sure to change this file path too. -->
        <?php include "../../common/footer.php" ?>
    </body>
</html>