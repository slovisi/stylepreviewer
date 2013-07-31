Style-Previewer
==============

Quick and dirty style guide.

Inspired by Brett Jankord's [Style Guide Boilerplate](http://brettjankord.com/projects/style-guide-boilerplate/)

# How it works

* install Style-Previewer as a subfolder of your project
* replace the call to *css/site-screen.css* with your own project's stylesheet.
* edit *index.html* and *css/sp-screen.css* to add your font-families and colors
* add in *patterns/custom* any snippet of HTML you'd like in its own file, give the file a understandable name, this name will be used in the select box
* this exemple use a PHP file(json.php) in order to list the basic and custom patterns in the select box. But you can use any other way to produce the json necessary for the listing of these patterns as long as you change the path in *js/style-previewer.js* (lines 35 & 36)