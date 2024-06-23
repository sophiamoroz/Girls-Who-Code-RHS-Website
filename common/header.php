<?php 
/*
* I went ahead and broke the link for the projects page for now, once we have some content, we can upload it- emily :)
*Sunny Liu, Class of 2023: added a Contact Us header and page

*Sierra Janson: added JS file for navigation bar styling 5/29/2022

*2023-08-30, McAdams: fixed broken include of javascript file, which had been moved
*/
?>
<nav class="nav">
    <a class="nav-link" href="/index.php">Home Page</a>
    <a class="nav-link" href="/about.php">About Us</a>
    <a class="nav-link" href="/memberprofiles.php">Member Profiles</a>
    <!-- <a class="nav-link" href="/projects.php">Projects</a> -->
    <a class="nav-link" href="/activities.php">Activities</a>
    <a class="nav-link" href="/resources.php">Resources</a>
    <a class="nav-link" href="/contactus.php">Contact Us</a>
    <?php
    if(isset($_COOKIE['rhsgwc_security']))
        {
            echo('<a class="nav-link" href="/login-system/logout.php">Log Out</a>');
            echo('<a class="nav-link" href="/login-system/createuser.php">Create User</a>');
            echo('<a class="nav-link" href="/login-system/changepassword.php">Change Password</a>');
            echo('<a class="nav-link" href="/login-system/deleteuser.php">Delete User</a>');
        }
    else
    {
        echo('<a class="nav-link" href="/login-system/login.php">Log In</a>');
    }
    ?>
	<script src="/js/javascript.js"></script>
</nav>