---
layout: post
title:  "Rails deployment using capistrano, nginx and unicorn!"
date:   2013-12-26 12:23:29
categories: jekyll update
---

I followed railscasts video #335 for setting up nginx, unicorn and capistrano

I faced few problems like unable to run my application at port 80 ( not configured nginx and capistrano)

I used to run my application like this

copy the unicorn_init.sh file and place it under /etc/init.d/unicorn_app_name

and make sure that correct path is given inside the unicorn.rb, unicorn_app_name and nginx.conf,
mostly i followed railscasts tutorial so path will be like /home/deployer/apps/...some times user name
differs so i forget to change the configuration.

This now i started my server like

{% highlight ruby %}
sudo /etc/init.d/unicorn_app_name start
{% endhighlight %}

no error came thought it should run at port 80, but it doesn't. then my friend told me that i should
tell nginx where to find for my application 

and i removed the file 

{% highlight ruby %}
sudo rm /etc/nginx/sites-enabled/default
{% endhighlight %}

and copied  my nginx.conf file to /etc/nginx/sites-available/default (remove previous file default)
now nginx default now know where to look for my app, my rails app now runs at port 80.

for nginx and unicorn configuration files, have a look at this railscasts episode codes

https://github.com/ryanb/railscasts-episodes/blob/master/episode-335/blog-nginx/

