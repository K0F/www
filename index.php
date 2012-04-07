<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<?
$numposts = 6;
$num_of_commits = 30;
$trueRandom = (int)file_get_contents("http://www.random.org/integers/?num=1&min=1&max=300&col=1&base=10&format=plain&rnd=new");
$back = $trueRandom;//date('h')+date('m')+date('s');

//wp-integration
require('./blog/wp-blog-header.php');
?>

<html>

<head>
<title>kof @ lab19.dyndns.org</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="decription" content="kof @ Lab19.dyndns.org">
<meta name="keywords" content="kof, k0f, Processing, Prague, Czech Republic">
<link href="style/basic.css" rel="stylesheet" type="text/css">
</head>


<!--[if IE]>
<style type="text/css” media="screen">

@font-face{
font-family:'DroidSans';
src: url('/fonts/DroidSans.eot');
}

@font-face{
font-family:'DroidSansIt';
src: url('/fonts/DroidSansBI.eot');
}

</style>
<![endif]-->

<?

echo '<body lang="en-US" dir="ltr" style="background-image:url(imgs/human/img'.sprintf('%03d',$back).'.png);">';

?>

<body lang="en-US" dir="ltr">
<?
;/*
echo '<div style="position:absolute;left:0;top:0;width:100%;height:100%;opacity:40;filter:alpha(opacity=40);background-image:url(imgs/human/img'.sprintf('%03d',$back).'.gif)"></div>';
*/
?>

<table align="center" width="800" cellpadding="5">

<thead>

<!-- HEAD --!>
<tr>
<th valign="top" colspan="2" align="right" ><img src="kof2.png" /></th>
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
Please feel welcomed @ <i>lab19.dyndns.org</i>, physical device / low-fidelity web-server placed in Bohemia. My name is kof, and my motivation to build such place is rather symbolic and ideologicial.

</p>

<img src="imgs/map_of_bohemia.jpg" width="390" alt="map of Bohemia"/>
<!--
<img src="imgs/labPlacementHistorical.png" alt="a map">
--!>
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

<p>
<i>Richard Stallman</i> and his notes on particular <a href="http://www.gnu.org/licenses/license-list.html">licences</a>.
</p>

<p>
More on theme of Intellectual Property and licencing in the past:

<ul>

<li>
<a href="http://www.tomgpalmer.com/wp-content/uploads/papers/palmer-morallyjustified-harvard-v13n3.pdf">Tom G. Palmer</a>
</li>

<li>
<a href="http://lysanderspooner.org/node/10">Lysander Spooner</a>
</li>

<li>
<a href="http://www.mises.org/journals/jls/15_2/15_2_1.pdf">N. Stephan Kinsella</a>
</li>

<li>
<a href="http://www.dailyapology.com/2005/10/palmer-on-patents.html">Kinsella on Palmer</a>
</li>

<li>
<a href="http://c4ss.org/wp-content/uploads/2009/05/intellectual-property-a-libertarian-critique.pdf">Kevin Carson</a>
</li>

</ul>

</p>


<p>
And finally and very systematically on <i>*free culture*</i> <a href="http://randomfoo.net/oscon/2002/lessig/free.html">a lecture</a> online, a <a href="http://cyber.law.harvard.edu/node/217">book</a>.
</p>

<p>
It <i>IS</i> heavily ideological and definetely <i>WORTH READING. (ie. to disagree)</i>
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
a lot more decentralization
</li>
<li>
to supress data retention
</li>
<li>
secure communication by default <i>(or even better, no false feel of security at all!)</i>.
</li>
</ul> 
</p>

<p>
Seriously hit by random thorought?

<ul>
<li>
Try to build your <a href="http://www.bit-tech.net/bits/2007/06/05/build_your_own_server/1">own server</a>. <i>(find preferably completely another tutorial ..this is not very probable, please continue reading below this list)</i>
</li>
<li>
Support projects like <a href="https://www.torproject.org/">TOR</a> or even <a href="http://tails.boum.org/">TAILS</a>.<i>(the data retention has some value to the retentionist, but the value can be beaten in the great scale just by more common crypting, so the companies, governments, other leechers will think twice before expensive decrypting)</i>
</li>
<li>
When you are online, you are like on the street or square, in a crowded place. Do not <i>*shout*</i> there, what you would never even say to a stranger! <i>(this is hard to realize as you are probably in private place, but this is slightly changing now and people are starting to realize this, I'am an optimist :) )</i>
</li>
</ul>
</p>

<p>
Everything in this list is really nothing new / original. But if this can help <i>*one*</i> person to realize this <i>(even again)</i>, it is worth repeating.
</p>

<p>
More on decentralization:
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
I am afraid we are completely unable to think / act random way. What we can do is just to think consequently less and less probable. Well, there is no choice anyway, no choice at all :)<br />
<p>


</div>

<!-- //////////////////////////// --!>
<div class="cell">
<h1>kof's manifesto</h1>

<p>
If there is any source code of my work, there is no owner including myself. All such <i>*code*</i> is available to anyone. It is public domain and it will remain!
</p>


<p class="sign">
Kof, paradox signature, <i>2011</i></a>
</p>
</div>

<div class="cell">
<h1>at absurdum</h1>


<p>
There is a list of commits made to the source of this page hosted on github.
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
	
	echo '<p class="quote">';
	echo '<ul>';
	for($i = 0 ; $i < $num_of_commits ;$i++){
		$commit = $all[$i];

		$message = $commit["message"];
		$url = $commit["url"];
		$id = $commit["id"];
		$time = $commit["committed_date"];

		//remove -07:00 regexp
		$time = preg_replace('/T.*/', '',$time);
		
		echo '<li>';
		echo '<a href="http://github.com'.$url.'">'.$time.'</a>';
		echo '<i>   :: '.$message.'</i>';
		echo '</li>';
	}
	echo '</ul>';
	echo '</p>';
}
?>

</div>

<!-- //////////////////////////// --!>
<div class="cell">
<h1>fair use</h1>
<p>
I hope that I have a right to say: there is no <i>*fair use*</i> of my work, do whatever you consider <i>*fair*</i> with it. This is an <i>*author's*</i> stance and it is superior over any further mentioned licensing. To understand this stance precisely, please read more about <a href="http://www.gnu.org/copyleft/copyleft.html">copyleft</a>, this stance is well described here as a <i>*Public Domain / uncopyrighted*</i> work.
</p>


<p>


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

<p class="sign">
<i>-- paradox signature, Kof, 2011</i>
</p>


</div>


<div class="cell">
<h1>contact</h1>

<p>
Please do not hesitate to contact me:
</p>

<p> 
<div alt="k r y s t o f . p e s e k @ g m a i l . c o m" class="mail"></div>
</p>

<p>
..for questions, comments and critics <i>(Česky nebo English)</i> anything is welcomed.
</p>

</div>

<div class="cell">
<h1>the place you have just visited</h1>


<img alt="the picture: the server is behind the doors, painted with a 8px font coloured #F2583E on B/W photography of real place, picture above the doors is my grandfather, he was great man: Prof.Dr.Ing. Vlastimil Herout DrSc., člen korespondent ČSAV" src="imgs/serverBehindTheDoors.gif" title="*knock* *knock* ..this is just beginning, the world is going to be even more bizzare"/>
</div>


<div class="cell">
<h1>last remote session</h1>

<APPLET CODE="ttyplayer.class"
        CODEBASE="/ttyplayer"
        WIDTH="390"
        HEIGHT="448">
  <PARAM NAME="TTYFILE" VALUE="ttyrecord">
  <PARAM NAME="SPEED" VALUE="1">
  <PARAM NAME="REPEAT" VALUE="TRUE">
  <PARAM NAME="TOOLBAR" VALUE="FALSE">
  <!--PARAM NAME="REVERSE-VIDEO" VALUE="TRUE"-->
</APPLET>

<p>
This is starting to be close to a dream to be completely open. This is far beyond any open-source conception.. it is starting to be exhibicionism, so this can be now considered as a web performance.
</p>

<p>
You can read more about this wonderful application playing *nix ttyrec files by Hirotsugu Kakugawa @ <a href="http://www-masu.ist.osaka-u.ac.jp/~kakugawa/misc/ttyplayer/index-en.shtml">jp</a>.
</p>

<p class="sign">
Raw bash poetry! ))
</p>

</div>



<div class="cell">

<p class="sign">
build with: <a href="http://www.vim.org/">vim</a> / <a href="http://www.php.net/">php</a> / <a href="http://httpd.apache.org/">apache</a> / <a href="http://git-scm.com/">git</a> / <a href="http://code.google.com/p/grafx2/">grafx</a> and mostly <a href="http://processing.org/">processing</a>
</p>

<p class="sign">
background images are stolen from: <br /> <a href="http://msis.jsc.nasa.gov/">NASA-STD-3001</a> <br /> 
<i>*Space flight Human-System Standart Volumes 1</i> [Crew Health]*
</p>

<p class="sign">
The map of Bohemia: <br />drawn by Gelett Burgess In literary magazine, <a href="http://en.wikipedia.org/wiki/File:Gelett_Burgess_-_Map_of_Bohemia_1896.jpg">wikipedia citation</a><br /><i>In *The Lark*, Number 12, March 1, 1896</i>
</p>
</div>



<!-- RIGHT ROW --!>

<td valign="top" width="50%">
<?
$c=0;
if ( have_posts() ) : while ( have_posts() && $c < $numposts ) : the_post(); ?>
<?$c+=1;?>
<?echo '<div class="cell">';?>


<?php the_date('','<span style="float:right;margin-top:10px;">','</span>'); ?>
<?php the_title('<h1>','</h1>'); ?>
	
<div class="post" id="post-<?php the_ID(); ?>">
	
	<div class="storycontent">
		<?php the_content(__('(more...)')); ?>
	</div>
	
	<div class="feedback">
            <?php wp_link_pages(); ?>
	</div>

<p class="sign">
	&#8212; <?php the_author() ?> @ <?php the_time() ?> <?php edit_post_link(__('Edit This')); ?></p>

            
<?php //comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)')); ?>
</div>

<?php comments_template(); // Get wp-comments.php template ?>


<?echo '</div>';?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<!-- END CONTENT --!>



</td>
</tr>
</tbody>
</table>

<!--
<div class="cal">
<?php get_calendar(false,true);?>
</div>
--!>
</div>
</body>
</html>
