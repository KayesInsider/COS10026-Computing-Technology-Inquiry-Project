<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Topic</title>
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link rel="stylesheet" type="text/css" href="styles/topic_style.css">
</head>
<body>


  <?php

  include ("menu.inc");


  ?>

<?php
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";

echo"<div class='topic_content'>";
echo "<section class='topic_description'>";


echo"<section class='topic_description'>";
echo"<h1 class='heading'>What is Node.JS ?</h1>";
echo"<br>";

echo"<p>Node.js is an open-soure server environment widely used to excute JavaScript code outside a
web browser. It is widely used for server-side scripting, and it simplifies web-appliction
development by using only one programming language, that is JavaScript, in both server-side
and client-sides.
A Node.js app runs in a single process, without creating a new thread for every request. Node.js provides a set of asynchronous I/O primitives in its standard library that prevent JavaScript code from blocking and generally, libraries in Node.js are written using non-blocking paradigms, making blocking behavior the exception rather than the norm.
</p>";
echo"<br>";
echo"<h2 class='heading'>Its purpose / function? Major points / features?</h2>";
echo"<br>";
echo"<p>This Node.js is technology outbreak that is still used today. Main reason is obviously what
it is purposely developed for; speed. Node.js uses asynchronous programming. This web
application handles communications real-time, two-ways connections, where both client and
server can initiate communication, unlike where normally, client always initiates
communication. Additionally, it’s all based on the open web stack (HTML, CSS and JS)
running over the standard port 80.(extracted from Toptal)";
echo"<br>"; echo"<br>";

echo"Node.js is an open-soure server environment widely used to excute JavaScript code outside a
web browser. It is widely used for server-side scripting, and it simplifies web-appliction
development by using only one programming language, that is JavaScript, in both server-side
and client-sides.";
echo"<br>";
echo"<b>Node.js uses asynchronous programming!</b>";

echo"<figure>";
echo"<figcaption>
The below picture shows how NodeJs actually Works!</figcaption>";
echo"<br><br>";
echo"<a href='#'><img id='img_1' src='images/Img04.jpg' alt='NodeJss Working Method'title='NodeJs Working Method'/></a>";
echo"</figure>";
echo"<br>";
echo"<br>";
echo"<h4>
To use Nodejs , it is recommanded to have a good knowledge of the following Javascript concepts
</h4>";
echo"<br>";
echo"<ol class='lists'>";
echo"<li>Lexical Structure</li>";
echo"<li>Expressions</li>";
echo"<li>Types</li>";
echo"<li>Classes</li>";
echo"<li>Variables</li>";
echo"<li>Functions</li>";
echo"<li>Arrow Functions</li>";
echo"<li>Loops</li>";
echo"<li>Arrays</li>";
echo"</ol>";

echo"<br>";

echo"<h2 class='heading'>Who developed it? When? Why? </h2>";
echo"<br>";
echo"<p>The Node.js is developed by Ryan Dahl, initially in May 2009 in Node.js Foundation. But
now merged with JS Foundation to form OpenJS Foundation, therefore currently managed by
the Linux Foundation's Collaborative Projects program. Back in the days, the popular
existing web server could process a limited load of concurrent connections. Dahl wanted a
solution that can handle higher capacity of connections at a fast speed.
(Source:<a class='foot_notes' href='https://en.wikipedia.org/wiki/Node.js'>Wikipedia</a>-extracted)";
echo"<aside>";
echo"<div>";
echo"<figcaption>";
echo"<h3 id='Ryan'> Ryan Dahl, Creator of Node.js</h3>";
echo"</figcaption>";
echo"<a href='https://en.wikipedia.org/wiki/Node.js#/media/File:Ryan_Dahl.jpg'>";
echo"<img id='Ryan_Dahl' alt='Ryan Dahl,creator of Node.js, in 2010' title='Ryan Dahl,creator of Node.js, in 2010' src='images/Ryan_Dahl.jpg'> </a>";
echo"</div>";
echo"</aside>";
echo"<br>";
echo"<br>";
echo"<p>This Node.js is technology outbreak that is still used today. Main reason is obviously what
it is purposely developed for; speed. Node.js uses asynchronous programming. This web
application handles communications real-time, two-ways connections, where both client and
server can initiate communication, unlike where normally, client always initiates
communication. Additionally, it’s all based on the open web stack (HTML, CSS and JS)
running over the standard port 80.(source: Topportal)
</p>";
echo"<br>";
echo"<br>";
echo"<p>As comparison take a webserver PHP or ASP for example. Imagine a common task like opening
a file on the server and return the content to the client. Normally a webserver will send
a task to the computer's file system, then waits while file is being opened and read, then
returns the content to the client, then ready to handle next request. However, Node.js will
firstly send the task to the computer system similarly but swiftly afterwards ready to
handle the next request, when the file system has opened and read the file, the server
returns the content to the client. So basically, Node.js eliminates the waiting queue.
</p>";
echo"<br>";
echo"<figure>";
echo"<figcaption>";

echo"<b>Here are the companies using Node. js: Netflix, NASA, Trello, PayPal, LinkedIn, Walmart, Uber, Twitter, Yahoo, eBay, GoDaddy, and got much better results<a class="foot_notes" href='https://www.google.com/search?q=what+companies+use+node&oq=company+used++node+j&aqs=chrome.2.69i57j0i13j0i390l5.13421j0j7&sourceid=chrome&ie=UTF-8'>[1]</a>";
echo"</figcaption>";

echo"</b>"; echo"<br><br>";
echo"<a href='#'> <img src='images/Img02.jpg' alt='Companies use Nodejs' title='Companies use Nodejs' width='600' height='300' /></a>";
echo"</figure>";
echo"<br>";
echo"<h2 class='heading'> What groups, if any, are responsible for managing it?</h2>";
echo"<br>";
echo"<p>";
echo"Node.js is an open-source, cross-platform, back-end JavaScript runtime
environment that runs on the V8 engine and executes JavaScript code outside
a web browser. Node.js lets developers use JavaScript to write command line
tools and for server-side scripting—running scripts server-side to produce
dynamic web page content before the page is sent to the user's web browser.
Consequently, Node.js represents a 'JavaScript everywhere' paradigm,[6]
unifying web-application development around a single programming language,
rather than different languages for server-side and client-side scripts.</p>";
echo"<br>";
echo"<br>";
echo"Node.js has an event-driven architecture capable of asynchronous I/O. These
design choices aim to optimize throughput and scalability in web applications
with many input/output operations, as well as for real-time Web applications
(e.g., real-time communication programs and browser games).";
echo"<br>";
echo"<br>";

echo"The Node.js distributed development project was previously governed by the Node.js Foundation,[8] and has now merged with the JS Foundation to form the OpenJS Foundation, which is facilitated by the Linux Foundation's Collaborative Projects program.[9]";

echo"Corporate users of Node.js software include GoDaddy,<a class='foot_notes' href='https://www.godaddy.com/en-au'>[10]</a>Groupon,<a class='foot_notes' href='https://en.wikipedia.org/wiki/Groupon'>[11] </a> IBM,<a class='foot_notes' href='https://www.ibm.com'>[12] </a> LinkedIn, Microsoft,Netflix,PayPal,Rakuten, SAP,Walmart, Yahoo!,and Amazon Web Services. Node.js modules use an API designed to reduce the complexity of writing server applications.";
echo"</p>";
echo"<br>";
echo"<h2 class='heading'>"; echo" The growth Node.JS and the future </h2>";
echo"<br>";
echo"<p>";
echo"Node.js shines in real-time web applications employing push technology over websockets. What is so revolutionary about that? Well, after over 20 years of stateless-web based on the stateless request-response paradigm, we finally have web applications with real-time, two-way connections, where both the client and server can initiate communication, allowing them to exchange data freely. This is in stark contrast to the typical web response paradigm, where the client always initiates communication. Additionally, it’s all based on the open web stack (HTML, CSS and JS) running over the standard port 80.";
echo"<br>";
echo"<br>";
echo"What it really means is that Node.js is not a silver-bullet new platform that will dominate the web development world. Instead, it’s a platform that fills a particular need. And understanding this is absolutely essential. You definitely don’t want to use Node.js for CPU-intensive operations; in fact, using it for heavy computation will annul nearly all of its advantages. Where Node really shines is in building fast, scalable network applications, as it’s capable of handling a huge number of simultaneous connections with high throughput, which equates to high scalability.";

echo"</p>";
echo"<br>";
echo"<br>";
echo"<h2 class='heading'>What are related technologies? Compare / contrast with other technologies.";
echo"</h2>";
echo"<br>";
echo"<p>";
echo"How it works under-the-hood is pretty interesting. Compared to traditional web-serving techniques where each connection (request) spawns a new thread, taking up system RAM and eventually maxing-out at the amount of RAM available, Node.js operates on a single-thread, using non-blocking I/O calls, allowing it to support tens of thousands of concurrent connections held in the event loop.Node.js is a platform for building fast and scalable server applications using JavaScript. Node.js is the runtime and npm is the Package Manager for Node.js modules.";



echo"</p>";
echo"<br>";
echo"<br>";

echo"</section>";

echo"<section>";
echo"<h2 class='heading'>What Can Node.js Do?</h2>";
echo"<ul class='lists'>";
echo"<h3>";
echo"<br>";
echo"<li>Node.js can generate dynamic page content</li>";
echo"<li>Node.js can create, open, read, write, delete, and close files on the server</li>";
echo"<li>Node.js can collect form data</li>";
echo"<li>Node.js can add, delete, modify data in your database</li>";
echo"</h3>";
echo"</ul>";


echo"<br>";
echo"<br>";




echo"<table boarder='1'>";

echo"<tr>";
echo"<th>Steps</th>";
echo"<th>How PHP or ASP web servers would handle file requests</th>";
echo"<th> Here is how Node.js web servers would handle a file request</th>";
echo"</tr>";
echo"<tr>";
echo"<td>1</td>";
echo"<td>Sends the task to the computer's file system.</td>";
echo"<td>Sends the task to the computer's file system.</td>";
echo"</tr>";
echo"<tr>";
echo"<td>2</td>";
echo"<td>Waits while the file system opens and reads the file.</td>";
echo"<td rowspan='2'>";
echo"Ready to handle the next request.</td>";
echo"</tr>";
echo"<tr>";
echo"<td>3</td>";
echo"<td>Returns the content to the client. </td>";

echo"</tr>";
echo"<tr>";
echo"<td>4</td>";
echo"<td>Ready to handle the next request.</td>";
echo"<td>When the file system has opened and read the file, the server returns the content to the client.</td>";
echo"</tr>";
echo"</table>";


echo"</section>";
echo"<br>";
echo"<p id='source'> Informations of this page are collected from these sources :<a class='source_link' href='https://en.wikipedia.org/wiki/Node.js'>Wikipedia</a>,<a class='source_link' href='https://www.toptal.com/nodejs'>Toptal</a>,<a
class='source_link' href='https://www.w3schools.com/nodejs/default.asp'>W3School</a>, <a class='source_link' href='https://nodejs.dev/learn/how-much-javascript-do-you-need-to-know-to-use-nodejs'>nodejs.dev</a></p>";

echo"<br>";
echo"<br>";


echo"</div>";
?>
<?php


include("footer.inc");

?>
</body>
</html>
