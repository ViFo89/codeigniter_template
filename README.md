##Codeigniter web template

Ready to use web template that includes:

####Codeigniter

####Bootstrap

####Font awesome

####JQuery


###Getting started

1. Clone, fork or copy the repo to your webserver root
2. Navigate to #webserveradress/web_template, (http://localhost/web_template if you are on localhost)
3. If you see a generic bootstrap startpage then everything is up and running. 


###Start customizing

I am guessing you do not want to call your project to be called "web_template" or perhaps you want the project to work from root?

###If this is the case then you need to edit the following files:

##.htaccess

  We redirect index.php in this file. If you want the project to work from root then simply change RewriteBase on line 3
  to: 
  
  RewriteBase //  
  
  else if you just have changed the name of the project fill in the name of your project in the same manor as it already is.
  
##config.php

  Change $config["base_url"] = "Whatever the url to the project is";




