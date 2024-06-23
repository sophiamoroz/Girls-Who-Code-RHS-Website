<!-- Demo file by Kanwal Gill of Parents Who Code.-->
<!-- When someone edits this file, they will add their name too.-->

<!DOCTYPE html>
<html>
    <head>
        <title>A Brief PHP Demo, Page 1</title>

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
        <h1>A Brief PHP Demo, Page 1</h1>

        <h3>What is PHP?</h3>
        <ul>
            <li>PHP stands for "PHP: Hypertext Preprocessor" and is an example of a class of humor known as 
            "recursive acronyms".  You can Google "recursive acronyms" if you like, but be warned that they are 
            really not all that funny.</li>
            <li>"Hypertext Preprocessor," however, is a very useful description.  When PHP pages are sitting on 
            the web server (for example, the computer that serves rhsgirlswhocode), they are a mixture of HTML 
            and PHP.</li>
            <li>HTML, of course, is just HTML.  But PHP is code that can be run and when it is run, its output 
            is HTML!</li>
            <li>So when your browser requests a PHP page from rhsgirlswhocode, the computer that hosts this 
            website grabs the file and...</li>
                <ol>
                    <li>Leaves the HTML alone.</li>
                    <li>Looks for any PHP.</li>
                    <li>Runs any PHP it finds.</li>
                    <li>Takes the HTML output of the PHP it just ran and shoves it back into the file right where 
                    it found the PHP.</li>
                    <li>Sends the result (which is now 100% HTML) to the browser to be displayed.</li>
                </ol>
            <li>And that's where the word "Preprocessor" comes from.  The web server processes all of the PHP 
            before your brower ever gets a chance to see it and is, therefore, serving as... a preprocessor... a 
            preprocessor of hypertext!</li>
        </ul>
        
        <h3>A Brief Example...</h3>
        <p>Here is an example of PHP: <?php echo "Today's date is " . date("m/d/Y"); ?></p>
        <p>If you look at the HTML that was sent to your browser (And you should!  You can do so by using the 
        "developer's tools" in your browser which, in most browsers, you can get to by pushing F12), you won't see 
        any PHP code.  Instead, you'll see that the PHP I put it was run by the PHP preprocessor and was replaced 
        with HTML/text showing today's date.</p>
        <p>If you want to see the actual PHP code, you'll have to log into the server and look at this file 
        directly (and you should do this as well).  When you do, you'll see that the PHP code I entered to do this 
        was,</p>
        <center><div id="code">&lt;?php echo "Today's date is " . date("m/d/Y"); ?&gt;</div></center>
        <!--Note for above... I have to replace < with &lt; and > with &gt.  This is valid HTML which is used 
        when we want to put the characters > or < in without having them be interpreted as being HTML.  I also
        have to use them here because otherwise, the PHP preprocessor will see the PHP code and actually run it 
        which is not what I want to have happen in this case! -->
        <p>(Hmm... that looks kind of ugly... one of you should develop a CSS style for code snippets and apply 
        it to that line to make it look better...)</p>
        <!--And see how I left the div elements there so that you could come back later and set the style for 
        "code" to be something that looks good and it'll apply to that statement above?-->
        <p>As you may already know, the elements of PHP that are demonstrated in that line are,</p>
        <ul>
            <li><b>&lt;?php</b> - this tells the preprocessor that you're going to slip some PHP code in.  
            Everything after this will be interpreted as PHP.  Think of it as telling the computer "Enter PHP mode."</li>
            <!--Again with the &lt; and the &gt; for the same reason as above -->
            <li><b>echo</b> - this is a PHP command that prints a string to the screen.  Curiously, PHP also has the 
            print command which does the same thing.  The differences between the two are trivial enough that I have 
            resolved to simply use echo everywhere and pretend I never heard of print.</li>
            <li><b>"Today's date is "</b> - this is a string.  In PHP they're enclosed in double quotes like most 
            other languages.</li>
            <li><b>.</b> - a period is the string concatenation operator in PHP.  It glues two strings together just 
            like + does in Python.</li>
            <li><b>date("m/d/Y")</b> - this is a PHP built-in function that accepts a parameter (in this case, 
            a string that says "m/d/Y") and returns today's date formatted according to the "m/d/Y" string I 
            passed it.  The period, therefore, concatenates "Today's date is " and the output from the date() 
            command.
            <li><b>?&gt;</b> - this tells the preprocessor that you're done slipping PHP code in.  It's like saying 
            "Exit PHP mode."  Everything you put in after this has to be HTML until you put in a &lt;?php in to, once 
            again, enter "PHP mode".  There are no limits as to how often you go in and out of "PHP mode" but if you 
            do it too often, you will end up with code that's hard to understand (and, not to be judgemental or anything
            but hard-to-understand code is BAD code!).  Finally, the &lt;?php and the ?&gt; DO NOT have to be on the 
            same line.  This allows the creation of multi-line PHP code which is convenient because the vast majority 
            of PHP code is multi-line; just as the vast majority of Python code is multiline.</li>
            <li><b>;</b> - if you have more than one PHP statement, you need a semicolon after each 
            one.  If there's just one statement, a semicolon is optional.  But you should put it in anyway to develop 
            good PHP habits.</li>
        </ul>

        <h3>A Small Detail...</h3>
        <p>So far, I've pretended that the only things that appear in webpages are HTML and PHP.  Of course, that's 
        not true.  There's also CSS and Javascript and Javascript frameworks and plenty of other stuff that I have 
        never heard of.</p>

        <p>Fortunately, the PHP preprocessor will ignore everything in the file that is not PHP - HTML, CSS, 
        Javascript, etc. If your page contains these elements, they won't interact with the PHP, so you won't have to 
        consider them when you write your PHP. For these demos, I'll pretend that your page only contains HTML and PHP.
        Although this is unlikely, it makes it easier to describe things.  And it's pretty close to how the PHP
        preprocessor views the world - as a mixture of things that are not PHP (and therefore, ignored) and things that
        are PHP (and therefore, executed).</p>

        <h3>What's Next?</h3>
        <p>In subsequent pages we'll have,</p>
        <ul>
            <li>Examples showing the basics of PHP code (variables, loops, etc)</li>
            <li>An example of how you can get some interactivity out of the combination of PHP and HTML.</li>
        </ul>

        <!-- Page content ends here.-->

        <!-- Include links to rest of PHP demo pages-->
        <?php include "phpdemolinks.php" ?>

        <!-- This line brings in the footer. -->
        <!-- Make sure to change this file path too. -->
        <?php include "../../common/footer.php" ?>
    </body>
</html>