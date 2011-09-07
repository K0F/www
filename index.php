<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">

<?
$num_of_commits = 7;
?>

<html>

<head>
<title>kof @ lab19.ath.cx</title>
<meta name="decription" content="Kof @ Lab19.ath.cx">
<meta name="keywords" content="Krystof Pesek, kof, k0f, Processing, FAMU, Prague, Czech Republic">
<link href="style/basic.css" rel="stylesheet" type="text/css">
</head>




<body lang="en-US" dir="ltr">


<table align="center" width="800" cellpadding="5">

<thead>

<!-- HEAD --!>
<tr>
<th valign="top" colspan="2" align="right" ><h1>lab19.ath.cx</h1></th>
</tr>

</thead>

<tbody>

<!-- CONTENT --!>
<tr>

<!-- LEFT ROW --!>
<td valign="top" width="50%">


<!-- //////////////////////////// --!>


<div class="cell">
<h1>welcome!</h1>
<p>
Welcome to <i>lab19.ath.cx</i>, physical device / low fidelity web server placed in <i>Prague</i> / Central Europe. The motivation of building own little server is rather symbolic and purely ideologic in this case.
</p>
</div>

<div class="cell">
<h1>free culture</h1>

<p class="quote">
"A constellation of interests is now seeking to increase its ownership and control of creativity. We are told that these interests require new laws and rights that will allow them to control concepts and ideas and protect them from exploitation. They say that this will enrich our lives, create new products and safeguard the possibility of future prosperity. But this is a disaster for creativity, whose health depends on an ongoing, free and open conversation between ideas from the past and the present.
</p>

<p class="quote">
In response, we wish to defend the idea of a creative field of concepts and ideas that are free from ownership."
</p>

<p class="sign">
<i>-- David Berry, Giles Moss</i> <br/>
the whole text is available @ <a href="http://www.libresociety.org/">libresociety.org</a>

</p>
</div>


<div class="cell">
<h1>random thorought</h1>
<p>When you think about wider consequences, the what we call <i>The Great Internet</i> today are in fact just a few physical <i>"places"</i> most of us are visiting over and over again. The less <i>random</i> people act, the greater probability there is that someone will control them; therefore the more mass manipulation we can expect. To create <i>"a healthier global network"</i> we definitely need more decentralized network, less data retention and a hard-core-secured communication by default.
</p>

<p>
Hit by random thorought? Try to build your <a href="http://www.bit-tech.net/bits/2007/06/05/build_your_own_server/1">own server</a>. <i>(find preferably completely another tutorial)</i>.
</p>

<p>
The most simple step you can do is just to act less probable, to do so, you can try this page <a href="http://randomwebsite.com/cgi-bin/random.pl">randomwebsite.org</a> or try for example a different search engine to discover another web-corners: <a href="https://duckduckgo.com/">DuckDuckGo!</a> <i>(find preferably completely another engine)</i>.
</p>

<p> Or act even less ordered way and try to find a minor crappy search engine <i>(by another search engine)</i> which preferably suits you the worst, randomness guranteed!
</p>

<p style="font-size:10px;font-style:oblique;color:#777;">
--<br />
I am afraid we are completely unable to think nor to act random way, what we can do at maximum is just to think consequently less and less probable. There is no choice anyway.<br />
<p>

<!--
For those, who are reading sources instead of frontpages random thorought no.2: http://ccs.mit.edu/papers/CCSWP197/CCSWP197.html ..interesting paper
!-->

<p class="sign">
<i>--kof</i>
</p>

</div>

<!-- //////////////////////////// --!>
<div class="cell">
<h1>kof's manifesto</h1>

<p>
If there is any source code of my work, there is no owner including myself. Binary outputs can be either sold or collected, whatever. But sources are available to anyone. It is completely public domain and it will remain.
</p>


<p class="sign">
all of them are available @ <a href="https://github.com/K0F">github.com</a>
</p>
</div>

<div class="cell">
<h1>at absurdum</h1>


<p>
There is a list of commits made at the source of this page hosted on github, quite weird isn't it? :)
</p>

<?
/*
* simple github json API
*/

//load json answer
$contents = file_get_contents('http://github.com/api/v2/json/commits/list/K0F/www/master?page=1');

//parse it
$commits = json_decode($contents,true);
$all = $commits['commits'];

for($i = 0 ; $i < $num_of_commits ;$i++){
	$commit = $all[$i];

	$message = $commit["message"];
	$url = $commit["url"];
	$id = $commit["id"];
	$time = $commit["committed_date"];

	//remove -07:00 regexp
	$time = preg_replace('/T.*/', '',$time);
	echo '<p class="quote">';
	echo '<a href="http://github.com'.$url.'">'.$time.'</a>';
	echo '   :: '.$message;
	echo '</p>';
}
?>

</div>

<div class="cell">

<h1>recent coding activity 2011</h1>
<?
/*
* simple github json API
*/

//load json answer
$contents = file_get_contents('http://github.com/api/v2/json/commits/list/K0F/2011/master?page=1');

//parse it
$commits = json_decode($contents,true);
$all = $commits['commits'];

for($i = 0 ; $i < $num_of_commits ;$i++){
	$commit = $all[$i];

	$message = $commit["message"];
	$url = $commit["url"];
	$id = $commit["id"];
	$time = $commit["committed_date"];

	//remove -07:00 regexp
	$time = preg_replace('/T.*/', '',$time);
	echo '<p class="quote">';
	echo '<a href="http://github.com'.$url.'">'.$time.'</a>';
	echo '   :: '.$message;
	echo '</p>';
}
?>
</div>

<!-- //////////////////////////// --!>
<div class="cell">
<h1>fair use</h1>

<p>
Please feel free to share / copy / use / modify any of my works available online. If you would like to screen or modify some of my work and show publicly, please quote me -- either <i>Kof</i> or <i>Krystof Pesek</i> is perfectly OK.
</p>


<p class="sign">
kof@<a href="http://openprocessing.org/portal/?userID=3942">openprocessing.org</a><br />
kof@<a href="http://vimeo.com/kof/videos/">vimeo.com</a>
</p>
</div>


<div class="cell">
<h1>contact</h1>

<p>
For any questions etc. please do not hesitate to contact me:
</p>

<p> 
<div class="mail"></div>
</p>

<p>
I am sorry I am unable to describe particular code <i>(dis)</i>functionalities. There are plenty of sketches, they are old and messy, I am trying to reversely write down at least some basic documentation, where it is possible.. it is really hard work for me to dig in. The obstruction of this process is a matter of lack of my long-term memory <i>(I don't remember, I don't know anything)</i> and time for doing so. Thanks for understanding.
</p>

<p>
 Any other questions, offers, comments and critics are welcomed.
</p>
</div>



<div class="cell">

<p class="sign">
build with: <a href="http://www.vim.org/">vim</a> / <a href="http://www.php.net/">php</a> / <a href="http://httpd.apache.org/">apache</a> / <a href="http://git-scm.com/">git</a> / <a href="http://code.google.com/p/grafx2/">grafx</a> and mostly <a href="http://processing.org/">processing</a>
</p>
</div>


<!-- RIGHT ROW --!>
<td valign="top" width="50%">

<div class="cell">
<h1>16:9 of something</h1>

<iframe src="http://player.vimeo.com/video/27203486?title=0&amp;byline=0&amp;portrait=0&amp;color=f2583e&amp;autoplay=1&amp;loop=1" width="390" height="219" frameborder="0"></iframe>

<p>Linearity is an answer to linear questions only. As we are very good in observing linearity in abnormally complex natural behavior, sometimes it fails completely; so the human struct of the whole system start to miss the key for the reading, then the linearity gives no more sense anymore and this is the point where so called <i>complexity == not-understanding</i> comes into play; and where the imagination starts to supply more logically (linearly structured) parts of mind with completely new conceptions - afterwards perceived and named by logical parts of mind as the logical constructs.<br />
<br />
(the whole text is an off-topic notion and has nothing to do with the video above)<br />
<p class="sign">
Remake of: <a href="http://openprocessing.org/visuals/?visualID=30364">sketch</a> by Stephen Monslow</p>
</p>
</div>



<div class="cell">

<h1>wireworld</h1>


<iframe src="http://player.vimeo.com/video/4750394?title=0&amp;byline=0&amp;portrait=0&amp;color=f2583e&amp;loop=0" width="389" height="292" frameborder="0"></iframe><p>The computing model based on Cornway's "Cellar automata", made by Mark Owen in 1987 called WireWorld, it is a logics in it's pure beauty, now reloaded in this useless machine, untitled.</p>

</div>

<div class="cell">
<h1>imperfect illusion of motion</h1>

<iframe src="http://player.vimeo.com/video/19281044?title=0&amp;byline=0&amp;portrait=0&amp;color=f2583e&amp;autoplay=0&amp;loop=0" width="389" height="258" frameborder="0"></iframe><p>80.000 entities follows a given order (pure geometry, trigonometry, illusion of space and motion)</p>

</div>



<div class="cell">
<h1>the change</h1>

<iframe src="http://player.vimeo.com/video/14564533?title=0&amp;byline=0&amp;portrait=0&amp;color=f2583e&amp;autoplay=0&amp;loop=0" width="389" height="219" frameborder="0"></iframe><p>Ode to change. A change as a necessity to perceive. The Change is a word which is trying to describe / capture? (to stop in the way) some current happening.</p>
</div>

<div class="cell">
<h1>collapsing complexity</h1>
<iframe src="http://player.vimeo.com/video/8001034?title=0&amp;byline=0&amp;portrait=0&amp;color=f2583e&amp;loop=0" width="389" height="292" frameborder="0"></iframe><p>Computer code is gradually using all allowed memory until it reach it's own collapse..<br /><br />sound: We're Complex Piss - The Shadow Ring</p>
</div>

<!-- END CONTENT --!>


</td>
</tr>
</tbody>
</table>


</div>
</body>
</html>
