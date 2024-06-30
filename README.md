# Girls Who Code Website - Rocklin High School
Building off of the base website that my predecessors built - I have been updating and adding features to the website for Girls Who Code at Rocklin High School. For this project, I am using HTML, PHP and SQL. 

## Current updates include:
- [Styling](#styling)
- [Signup and Login System](#signupandloginsystem)
- [Member Profiles](#memberprofiles)

## Styling
I used HTML to re-style the member profiles page and the home page. I added a new home page picture, created a matching format for all of the member profiles page, and connected each member profiles page to the general website header and footer for a smooth transition between pages/consistent look. I also re-formatted the home page to make our club information center-aligned and flow nicely. 

## Signup and Login System
Currently, I am working on creating working Signup and Login Forms. I am utilizing SQL to create a database within the DBeaver application. For now, the forms are located on the home page. When the Signup form is submitted, the website is redirected back to the home page and the data is sent to the girls who code database if entered correctly. I added a message feature that pop's up with either a confirmation or error message, after checking the data through all current error handling functions. 

I plan to create two new error handlers for the signup form, and then create separate pages for the signup form and login form. I plan to add a button on the login form to link to the signup form, and put the login form on the header. I plan to connect the database to the website to create a feature, where the user can attempt to login in, have their credentials verified, and once successfully logged in they will be able to:
1. Access a members-only page on the website.
2. Use the members-only page on the website to create a member profile page.
3. Access a real-time Q and A forum, and be able to network with other Rocklin High School Girls Who Code alumni/members.

After this, I will begin working on a cookie/security system for the website.

## Member Profiles
Once the sign up and login systems are complete, I will begin working on adding a feature for members-only. This feature will allow girls who code club members with an account to create their own member profile page to add to the "Member Profiles" section of our website - with easy access so that new members do not have to become overwhelmed with coding their profile in through the back end. 
