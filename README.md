ANTON CMF based on PHP and MVC

by J�rgen Stegeby



Install instructions:


1 Create a folder. Remember that when Anton is cloned it will reside in the "bth" foler.

Clone Anton from Github with    git@github.com:jgst11/bth.git

2 Antopn needs the folder /site/data writable so that the database can be used.
Note: You have to be in folder bth

cd bth[enter]
cd site[enter]
chmod 777 data[enter]

3 All framework configurations are located in site/config.php and site/themes/mytheme where you can change:

- Classes to be enabled/disabled
- Navigationsfields och menues
- Themes
- Header and slogan
- Icons/images and the size of the icons/images
- Footer information

Note: /site/ is the location when site-specific information resides. In formation, data, modules and so on will override 
Anton's basic settings. That way the original structure and files of Anton can be untouched and still give the flexibility 
to modify the framework.

4 depending on the server .htaccess might have to be modified 

5 Point to the main index page and follow the instructions to initialize the modules that need access to the database. These modules are CMContent, CMGuestbook och CMUser and will be inisilized when clicking the module/install link.

The framework and database is now initilized and pages, blog and guestbook entries can be made.

6 Content is created /content/create/ and can be pages or post (blog-posts)


Revision history

v0.0.1 Initial release

v0.0.2 README.md released
