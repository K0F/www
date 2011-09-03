<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">

<?
$num_of_commits = 15;
?>

<html>

<head>
<title>kof @ lab19.ath.cx</title>
<meta name="decription" content="Kof @ Lab19.ath.cx">
<meta name="keywords" content="Krystof Pesek, Kof, aritst, Processing, FAMU, Prague, Czech Republic">
<link href="style/basic.css" rel="stylesheet" type="text/css">
</head>




<body lang="en-US" dir="ltr">


<table align="center" width="800" cellpadding="5">

    <tbody>

    <!-- HEAD --!>
    <tr>
    <th valign="top" colspan="2" align="right" ><h1>lab19.ath.cx</h1></th>
    </tr>


    <!-- CONTENT --!>
    <tr>

    <!-- LEFT ROW --!>
    <td valign="top" width="50%">

    
    <!-- //////////////////////////// --!>
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


     <!-- //////////////////////////// --!>
    <div class="cell">
        <h1>kof's manifesto</h1>

        <p>
        If there is any source code of my work, there is no owner including myself. Binary outputs can be either sold or collected, whatever. But sources are available to anyone. It is completely public domain and it will remain.
        </p>


        <p class="sign">
            all of them are available @ <a href="https://github.com/K0F">github</a>
        </p>
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
	<h1>at absurdum</h1>


	<p>
	There is a source of this page hosted on github, quite weird :)
	</p>


	<?
        $contents = file_get_contents('http://github.com/api/v2/json/commits/list/K0F/www/master?page=1');
        
        //$obj = array();
        $commits = json_decode($contents,true);

        
        
        $all = $commits['commits'];
        


        for($i = 0 ; $i < 5 ;$i++){
        
        $commit = $all[$i];

        //var_dump($commit);

        $message = $commit["message"];
        $url = $commit["url"];
        $id = $commit["id"];
        $time = $commit["committed_date"];
      

        /*
        $fulltree = $commit["tree"];
        $tree = file_get_contents('http://github.com/api/v2/json/blob/all/K0F/2011/'.$fulltree);
        $parsedtree = json_decode($tree,true);

        for($ii = 0;$ii < count($tree); $ii++){
            echo $tree[$ii];

        }
        */    


        $time = preg_replace('/T.*/', '',$time);
        //$time = preg_replace('/-07:00/', '',$time);
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
        $contents = file_get_contents('http://github.com/api/v2/json/commits/list/K0F/2011/master?page=1');
        
        //$obj = array();
        $commits = json_decode($contents,true);

        
        
        $all = $commits['commits'];
        


        for($i = 0 ; $i < $num_of_commits ;$i++){
        
        $commit = $all[$i];

        //var_dump($commit);

        $message = $commit["message"];
        $url = $commit["url"];
        $id = $commit["id"];
        $time = $commit["committed_date"];
      

        /*
        $fulltree = $commit["tree"];
        $tree = file_get_contents('http://github.com/api/v2/json/blob/all/K0F/2011/'.$fulltree);
        $parsedtree = json_decode($tree,true);

        for($ii = 0;$ii < count($tree); $ii++){
            echo $tree[$ii];

        }
        */    


        $time = preg_replace('/T.*/', '',$time);
        //$time = preg_replace('/-07:00/', '',$time);
        echo '<p class="quote">';
        echo '<a href="http://github.com'.$url.'">'.$time.'</a>';
        echo '   :: '.$message;
        echo '</p>';

        }
        
        ?>
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

        ...
        
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

<h1>frequency analysis</h1>
<iframe src="http://player.vimeo.com/video/21277418?title=0&amp;byline=0&amp;portrait=0&amp;color=f2583e&amp;autoplay=0&amp;loop=1" width="389" height="224" frameborder="0"></iframe><p>Quick sketch using a visualisation methods for letter-frequency text analysis.<br /><br />(the original text can be found on <a href="http://en.wikipedia.org/wiki/Frequency_analysis">"frequency analysis"</a> page)<br /><br /><a href="http://openprocessing.org/visuals/?visualID=24454">applet version</a><br /><br /><a href="https://github.com/K0F/2011/tree/master/03-brezen/typeWriter">sources</a> for the sketch.</p>
</div>


<div class="cell">
<h1>imperfect illusion of motion</h1>

<iframe src="http://player.vimeo.com/video/19281044?title=0&amp;byline=0&amp;portrait=0&amp;color=f2583e&amp;autoplay=0&amp;loop=1" width="389" height="258" frameborder="0"></iframe><p>80.000 entities follows a given order (pure geometry, trigonometry, illusion of space and motion)</p>

</div>



<div class="cell">
<h1>the change</h1>

<iframe src="http://player.vimeo.com/video/14564533?title=0&amp;byline=0&amp;portrait=0&amp;color=f2583e&amp;autoplay=0&amp;loop=1" width="389" height="219" frameborder="0"></iframe><p>Ode to change. A change as a necessity to perceive. The Change is a word which is trying to describe / capture? (to stop in the way) some current happening.</p>
</div>

    </td>
    
    <!-- END CONTENT --!>
    </tr>
    

    </tbody>

    </table>


</div>
</body>
</html>
