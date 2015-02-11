Messenger Pigeons Base Theme
============================

This is our starting point for most Wordpress projects. This theme is based on the _underscore base Wordpress theme, but has pretty departed from there quite a bit.

The main goal is to have a simple, functional, stripped down responsive structure ready to be quickly built off of.


Remove Git
==========================
We don't need that thang right here.


Trying out this SASS thang
==========================
SASS and Bourbon are already installed on my local machine. If it's not on yours, install them via command line with:

gem install sass
gem install bourbon

Install Bourbon into your project’s stylesheets directory by generating the bourbon folder:
bourbon install (already done if you copy/pasted this folder)

Sass Watch
===========
Run a standard sass --watch from the command line:
// This will take the stylesheets directory and output it as one style.css file in the theme
(run this command from the theme folder)
sass --watch stylesheets:.


Lastly, import the mixins at the beginning of your stylesheet(s) (again already done if it's :
@import "bourbon/bourbon";

