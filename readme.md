###################
<h1> HMVC - Fully Loaded </h1>
###################

<pre>CodeIgniter is an Application Development Framework - a toolkit - for people
who build web sites using PHP. Its goal is to enable you to develop projects
much faster than you could if you were writing code from scratch, by providing
a rich set of libraries for commonly needed tasks, as well as a simple
interface and logical structure to access these libraries. CodeIgniter lets
you creatively focus on your project by minimizing the amount of code needed
for a given task. </pre>

###################
<h2> Removed Index </h2>
###################

<pre>If we need a clean url in codeigniter. we need to remove index.php from url in
codeigniter.
Default you will get index.php in url in codeigniter cause index.php file included with
url in codeigniter.
so url looks like :-</pre>

http://example.com/index.php/controller/function

<pre>codeigniter provide easy way for url rewrite functionality to get clean url or remove
index.php from url in codeigniter.
we can easily done by using .htaccess some of config file changes.
after remove index.php from url you will see controller name in url like
“http://example.com/controller”.
We need to remove index.php from url so we can get clean url for our codeigniter site
and url not looks odd or to get a user friendly or seo friendly url.</pre>

###################
<h2> HMVC Structure </h2>
###################

<pre>The main controller doesn’t need to know about it, and is totally isolated from it.
In CI we can’t call more than 1 controller per request.
Therefore, to achieve HMVC, we have to simulate controllers. It can be done with libraries,
or with this “Modular Extensions HMVC” contribution.

The differences between using a library and a “Modular HMVC” HMVC class is:

No need to get and use the CI instance within an HMVC class
HMVC classes are stored in a modules directory as opposed to the libraries directory.</pre>


###################
<h2> Public Folder </h2>
###################

<pre>For the best security, both the system and any application folders should be placed
above web root so that they are not directly accessible via a browser.
By default, .htaccess files are included in each folder to help prevent direct access,
but it is best to remove them from public access entirely in case the web server
configuration changes or doesn’t abide by the .htaccess.</pre>

<br>

<pre>A better way to organise your folders would be:


        HMVC_FullyLoaded
            application_folder
                config
                controllers
                models
                ...
            system_folder
                core
                database
                helpers
                libraries
                ...
            public_html
                assets
                    css
                    js
                    images index.php .htaccess
        ...
        ...</pre>
