<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<?
$num_of_commits = 20;
?>

<html>

<head>
<title>kof @ lab19.ath.cx</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="decription" content="kof @ Lab19.ath.cx">
<meta name="keywords" content="Krystof Pesek, kryštof pešek, kof, k0f, Processing, Prague, Czech Republic">
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
Welcome to <i>lab19.ath.cx</i>, physical device / low fidelity web server placed in <i>Prague</i> / Central Europe. The motivation of building this small server is rather symbolic and purely ideologic in this case.
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


<p>
And even more systematically on <i>*free culture*</i>, please visit a <a href="http://randomfoo.net/oscon/2002/lessig/free.html">lecture</a> online, read a <a href="http://cyber.law.harvard.edu/node/217">book</a>. Support great effort of really creative people just by reading their work.
</p>

<p class="quote">
"A free culture has been our past, but it will only be our future if we change the path we are on right now."
</p>

<p class="sign">
 -- <a href="http://cyber.law.harvard.edu/people/llessig">Lawrence Lessig</a>
</p>
</div>


<div class="cell">
<h1>random thorought</h1>
<p>When you think about wider consequences, the what we call <i>The Great Internet</i> today are in fact just a few physical <i>*places*</i> most of us are visiting over and over again. The less <i>random</i> people act, the greater probability there is that someone will control them; therefore the more mass manipulation we can expect.
</p>
<p>
To create a <i>*healthier global network*</i> we definitely need:
<ul>
<li>
 more decentralization
</li>
<li>
supress data retention
</li>
<li>
secure communication by default <i>(or even better, no security at all!)</i>.
</li>
</ul> 
</p>

<p>
Seriously hit by random thorought? Try to build your <a href="http://www.bit-tech.net/bits/2007/06/05/build_your_own_server/1">own server</a>. <i>(find preferably completely another tutorial)</i>.
</p>

<p>
The most simple step you can do is just to act less probable, to do so, you can try this page <a href="http://randomwebsite.com/cgi-bin/random.pl">randomwebsite.org</a> or try for example a different search engine to discover another web-corners: <a href="https://duckduckgo.com/">DuckDuckGo!</a> <i>(find preferably completely another engine)</i>.
</p>

<p>
You can act randomly even visiting one site and get a random information from it. Set your default web-browser page to i.e. pseudorandom page from wikipedia: <pre>http://en.wikipedia.org/wiki/Special:Randompage</pre>
Try it here, it is <a href="http://en.wikipedia.org/wiki/Special:Randompage">briliant!</a>. Read <a href="http://www.labnol.org/software/random-browser-homepage/18813/">full article</a> by Amit Agarwal.
</p>

<p>
Are you using some kind of <i>*social*</i> network, try decentralized and much more secure alternative, project <a href="http://foocorp.org/projects/social/">GNU social</a> or more <i>*hip*</i> <a href="https://pod.geraspora.de/">d</a><a href="https://my-seed.com/">i</a><a href="https://the.diasperse.com/">a</a><a href="http://li-la.de:3000/">s</a><a href="https://social.mathaba.net/">p</a><a href="http://podup.sargodarya.de/">o</a><a href="http://filiusdex.com/">r</a><a href="https://diasp.de/">a</a><a href="http://podupti.me/">!</a>
</p>

<p> Or act even less ordered way and try to find a minor crappy search engine <i>(by another search engine)</i> which preferably suits you the worst, randomness guranteed!
</p>

<p style="font-size:10px;font-style:oblique;color:#777;">
--<br />
I am afraid we are completely unable to think nor to act random way, what we can do at maximum is just to think consequently less and less probable. There is no choice anyway.<br />
<p>


</div>

<!-- //////////////////////////// --!>
<div class="cell">
<h1>kof's manifesto</h1>

<p>
If there is any source code of my work, there is no owner including myself. All such <i>*code*</i> is available to anyone. It is public domain and it will remain!
</p>


<p class="sign">
Krystof Pesek / Kof, <i>2011</i></a>
</p>
</div>

<div class="cell">
<h1>at absurdum</h1>


<p>
There is a list of commits made to the source of this page hosted on github, quite weird isn't it? :)
</p>

<?
/*
 * simple github json API
 */

//load json answer
$contents = file_get_contents('http://github.com/api/v2/json/commits/list/K0F/www/master?page=1');

if($contents==null){
	echo '<p>GitHub API is not responding right now, you can reach the content <a href="https://github.com/K0F/www">here</a></p>';
}else{

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
}
?>

</div>

<div class="cell">

<h1>recent github activity</h1>
<?
/*
 * simple github json API
 */

//load json answer
$contents = file_get_contents('http://github.com/api/v2/json/commits/list/K0F/2011/master?page=1');


if($contents==null){
	echo '<p>Same error here, you can reach all the recent acivity <a href="https://github.com/K0F">here</a></p>';
}else{



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
}
?>
</div>

<!-- //////////////////////////// --!>
<div class="cell">
<h1>fair use</h1>
<p>
There is no <i>*fair use*</i> of my work, do whatever you want to my work, this is an <i>*author's*</i> stance and it is superior to any further mentioned licensing.
</p>


<p class="sign">


..all of my public works available online:
<ul>
<li>
kof @ <a href="http://openprocessing.org/portal/?userID=3942">openprocessing.org</a><br />
</li>
<li>
kof @ <a href="http://vimeo.com/kof/videos/">vimeo.com</a><br />
</li>
<li>
kof @ <a href="https://github.com/K0F">github.com</a>
</li>
</ul>
</p>
</div>


<div class="cell">
<h1>contact</h1>

<p>
Please do not hesitate to contact me:
</p>

<p> 
<div class="mail"></div>
</p>

<p>
..for questions, comments and critics <i>(Česky nebo English)</i> anything is welcomed.
</p>

</div>

<div class="cell">
<h1>a place you have just visited</h1>
<img alt="the picture: the server is behind the doors, painted with a 8px font coloured #F2583E on B/W photography of real place, picture above the doors is my grandfather, he was great man: Prof.Dr.Ing. Vlastimil Herout DrSc., člen korespondent ČSAV" src="imgs/serverBehindTheDoors.gif"/>
</div>

<div class="cell">

<p class="sign">
build with: <a href="http://www.vim.org/">vim</a> / <a href="http://www.php.net/">php</a> / <a href="http://httpd.apache.org/">apache</a> / <a href="http://git-scm.com/">git</a> / <a href="http://code.google.com/p/grafx2/">grafx</a> and mostly <a href="http://processing.org/">processing</a>
</p>
</div>


<!-- RIGHT ROW --!>
<td valign="top" width="50%">

<div class="cell">
<h1>Jev / Phenomenon</h1>

<iframe src="http://player.vimeo.com/video/30264207?title=0&amp;byline=0&amp;portrait=0&amp;color=f2583e&amp;autoplay=0&amp;loop=1" width="389" height="228" frameborder="0" webkitAllowFullScreen allowFullScreen></iframe>
<p>
Phenomenon is a series of films dedicated to cinema screening, presence of film and human creation of object. It creates an experience of watching film as a pure fact. If you play this video on computer screen and you would like to simulate a cinema effect, please watch it with a sound volume high, preferably with few friends, in the dark room.
</p>
</div>

<div class="cell">
<h1>Perfect Illusion of Motion</h1>
<iframe src="http://player.vimeo.com/video/28927645?title=0&amp;byline=0&amp;portrait=0&amp;color=f2583e&amp;autoplay=0&amp;loop=1" width="389" height="258" frameborder="0" webkitAllowFullScreen allowFullScreen></iframe>
<p>
Binaries in case of software outputs (executables, picture renders, video renders), technically doesn't contain a readable <i>"knowledge"</i> for <i>"next generations"</i>.
</p>
<p>
Binaries can be considered as an <i>"artifacts"</i> in software art, a product - something what <i>"can be sold"</i>, it has a <i>"market value"</i>. But in terms of archiving it is completely misleading conception.
</p>
<p>
<a href=" http://vimeo.com/kof/perfectillusionofmotion">Video above</a> is an exemplary remake of earlier binary <a href="http://vimeo.com/kof/imperfectillusionofmotion">video output</a> from a computer software (Processing).
</p>

<p>
The source code is now lost and of course forgotten, forever. <i>(disk corruption issue, not backed up)</i>

This video remake reveals the compression artifacts <i>(so far the past)</i> which is starting to appear after one <i>(two)</i> convertion<i>(s)</i>.
</p>
<p>
The <i>"original"</i> of <i>"Perfect Illusion of Motion"</i>, this video, has a <b>SHA-1</b> <i>(questionable 160 bit)</i> checksum:
<br /><br />
2a6e32b2190e05a4464f16e21598b57a3ec34d94
<br /><br />
<i>Isn't it poetic?</i>
<br /><br />
<a href="http://en.wikipedia.org/wiki/SHA-1">read more about SHA</a>
<br /><br />
<i>.. well, probably not )</i>
</p>


<p>
This file will change on the Vimeo server with a non-paid basic account one week after upload.. it is no longer authentic original then. Walter Benjamin, we need more theories here! ))
</p>
<p>
Vimeo can no longer support storing the original videos to common users.. it used to be <i>"free"</i> Vimeo service <i>(back in 2009?)</i>, but since then due to an enormous growth of this company; and understandable technical reasons <i>(server infrastructure able to distribute a massive of HD content)</i>; this model is just from the economical point of view impossible to keep such way.
</p>
<p>
<i>Is it even possible to keep it any other way?</i>
</p>
<p>
It is much cheaper to store any knowledge in the text form. It is much safer to store it in printed physical form. <i>(never ending rewriting to current readable "standarts")</i> The text communication is in general still the best <i>"compression"</i> algorithm ever made by human culture. And what is the best, it can be red hundreds years from now, as a algorithm, the human language is changing considerably more slow than any other such <i>"compression"</i>.
</p>
<p>
So why the <b>free-open-source</b> conception in terms of archiving of software and its development will be more successful over <b>machine-code-binary-product</b> conception? The answer is simple: for its readability anytime in future. What we can observe is a persisting tension between an understandable but temporary motivation of the market and the motivation to share some real current knowledge to other people, for this moment or anyhow distant future one.
</p>

<p>I am sorry for a long and fragmented text in bad English. It is just few current, massively compressed thoughts on archiving.</p>
<p>Anyway, this video will seamlessly "die" here in one week. <i>(@ Sep 19 2011)</i><br /><br />
<p class="sign">
<i>--kof</i></p>
</div>


<div class="cell">


<h1>wireworld</h1>


<iframe src="http://player.vimeo.com/video/4750394?title=0&amp;byline=0&amp;portrait=0&amp;color=f2583e&amp;loop=0" width="389" height="292" frameborder="0"></iframe><p>The computing model based on Cornway's "Cellar automata", made by Mark Owen in 1987 called WireWorld, it is a logics in it's pure beauty, now reloaded in this useless machine, untitled.</p>

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
