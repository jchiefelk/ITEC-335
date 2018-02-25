<h1>Getting Started with PHP</h1>

<h3>Setting up MAMP Server</h3>

<p>
Using the package manager Homebrew.
</p>

<pre>
brew tap homebrew/homebrew-php
brew install php70
</pre>

<p>
  Next, you need to install a MAMP server on Mac.  Go to <a href="https://www.mamp.info/en/">https://www.mamp.info.</a> . Once installed, you'll need to go inside of Preferences and set the port for you MySQL and Apache server. By default the Apache Web Server will be on port 8888.
</p>

<p>
  All development needs to be kept inside of
</p>


<h3>Development in Mac</h3>

<pre>
/Applications/MAMP/htdocs
</pre>

<h3>Development  in Ubuntu</h3>

<pre>
/opt/lampp/htdocs
</pre>

<h3>Simple PHP Application Example</h3>

<p>
 Create a folder called
</p>

<pre>
/htdocs/phptutorial
</pre>

<p>
 Inside of this folder, create a file called "index.php" with the following contents 
</p>

<html>
  <body>
    <php code goes here>
  </body>
</html>
  
<p>
 To visit this, visit
</p>

<pre>
http://localhost:8888/phptutorial/
</pre>

