# Girls Who Code Website - Rocklin High School
Building off of the base website that my predecessors built - I have been updating and adding features to the website for Girls Who Code at Rocklin High School. For this project, I am using HTML, PHP and SQL. 

## Current updates include:
- [Styling](#styling)
- [Signup and Login System](#signupandloginsystem)
- [Member Profiles](#memberprofiles)
- [Google Recaptcha](#googlerecaptcha)

## Styling
I used HTML to re-style the member profiles page and the home page. I added a new home page picture, created a matching format for all of the member profiles page, and connected each member profiles page to the general website header and footer for a smooth transition between pages/consistent look. I also re-formatted the home page to make our club information center-aligned and flow nicely. 

## Signup and Login System
The login form links to the sign up form. Utilizing SQL to create a database with DBeaver, I am able to create a system that checks for a members username and password before allowing them to log in. When a member's account is created, their information is also stored in this database. I added a message feature that pop's up with confirmation and error messages on both the login page and signup page, after checking  data through all current error handling functions. Once the member profiles page system is built, I plan on moving the sign up page so only current members can create an account for another user. This helps to prevent further spam.

## Member Profiles
Once the sign up and login systems are complete, I will begin working on adding a feature for members-only. This feature will allow girls who code club members with an account to create their own member profile page to add to the "Member Profiles" section of our website - with easy access so that new members do not have to become overwhelmed with coding their profile in through the back end. 

## Google Recaptcha
The contact us form on our website has access to google recaptcha connection so that we can filter out any spam messages. When the login and signup system is complete, I plan to add the google recaptcha to these forms as well.
