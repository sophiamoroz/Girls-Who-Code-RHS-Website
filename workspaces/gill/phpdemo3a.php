<!-- Demo file by Kanwal Gill of Parents Who Code-->
<!-- When someone edits this file, they will add their name too.-->

<!DOCTYPE html>
<html>
    <head>
        <title>A Brief PHP Demo, Page 3a</title>

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
        <h1>A Brief PHP Demo, Page 3a</h1>

        <h3>Making The isitprime() Function Interactive</h3>
        <p>On the previous page, we used the isitprime() function to demonstrate that 1283 was a prime number.  While 
        this was quite a technical <i>tour de force</i>, you're probably thinking that it would be much better to 
        let the user decide which number would be tested.  After all, you undoubtedly have many numbers that you're 
        wondering about the primality (yes, that is a word) of.  Is 314921 prime?  How about 1484801401?  If only 
        someone would make a webpage where you could enter a number and find out of if it was prime...</p>
        <p>So let's do that.  We'll create an HTML form on this page where you can enter a number and use HTML 
        to pass that number to another page ("A Brief PHP Demo, Page 3b") where we'll run isitprime() on the number 
        and display a result.</p>

        <h3>The Form</h3>
        <p>This is just straight HTML.  We'll create a box for the user to type a number in, label the box, 
        and supply a "Submit" button for the user to click after the number is entered.  In the HTML code, we'll 
        supply the computer the address of the next page so it can send both the number and the user's browser 
        there.</p>

        <form action = "http://rhsgirlswhocode.club/workspaces/gill/phpdemo3b.php" method="get">
        <p>Please enter a whole number here: <input type="number" name="numbertotest" maxlength="7" /></p>
        <!-- Setting the input type to "number" is neat because many browsers will not allow the user to 
        enter anything other than an integer number.-->
        <!--Also, I'm setting maxlength to 7 here to discourage people from putting in huge numbers that might
        bog the webserver down trying to process them.-->
        <input type="submit" value="Submit Number"/>
        </form>

        <p>When you use this form, you might get a reminder from your browser that your submission may not be 
        secure.  It's good warning but you can ignore it in this case... unless, for some reason, your number is 
        top secret!  (If it is, pick a different number).</p>

        <!-- Do notice that everything on this page (other than the parts that pull in the header and footer) is 
        pure HTML.  Creating forms and accepting input is an HTML responsibility and the programmer is free to use 
        whatever language they want on the other end to process the input.  Since this is a PHP Demo, however, we'll
        be using PHP!-->

        <!-- Page content ends here.-->

        <!-- Include links to rest of PHP demo pages-->
        <?php include "phpdemolinks.php" ?>

        <!-- This line brings in the footer. -->
        <!-- Make sure to change this file path too. -->
        <?php include "../../common/footer.php" ?>
    </body>
</html>