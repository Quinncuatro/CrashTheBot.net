<!-- Heavily inspired by Kevin Law :) -->

<html>
<head>
  <title>CrashTheBot.net</title>
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
  <link rel="stylesheet" href="splash.css" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
</head>

<body>
  <h5><span>Last login: Sun Mar 13 12:13:16 2016 from <?php echo $_SERVER['REMOTE_ADDR']; ?>
    <br>Welcome to CrashTheBot.net!
    <br>[user@crashthebot ~]$<span class="command"></span>
  </span></h5>

  <div class="ls hide">
  <h5>Communications:</h5>
  <ul>
    <li><a href="dowhatmakes/">Blog
    <br><span class="displayText">// Updates will be more frequent once A100 starts</span></a></li>
    <br>
  </ul>
  
  <h5>Free Code Camp Projects:</h5>
  <ul>
    <li><a href="/freecodecamp/tribute/">Tribute to Paul Rudd
    <br><span class="displayText">// Quick tribute page for THE man</span></a></li>
    <br>
    <li><a href="/freecodecamp/quotes/">Random Quote Generator
    <br><span class="displayText">// Random quotes about the wonderment of travel</span></a></li>
    <br>
    <li><a href="/freecodecamp/weather/">Weather Checker
    <br><span class="displayText">// Weather based on your present location</span></a></li>
    <br>
    <li><a href="/freecodecamp/wiki/">Wikipedia Portal
    <br><span class="displayText">// Cleaner looking search results for Wikipedia</span></a></li>
    <br>
    <li><a href="/freecodecamp/twitch/">Twitch List
    <br><span class="displayText">// Keeps track of streamers being logged in - API test</span></a></li>
    <br>
  </ul>

  <h5>Side Projects:</h5>
  <ul>
    <li><a href="/MapsExperiments/camp/">Camp Heatmap
    <br><span class="displayText">// Heatmap of addresses from a customer database</span></a></li>
    <br>
    <li><a href="/MapsExperiments/distance/">Distance Experiment
    <br><span class="displayText">// Calculates distances, ties into Camp Heatmap ^^</span></a></li>
    <br>
    <li><a href="/droves/">Droves
    <br><span class="displayText">// Quick customized Bootstrap template for a business idea</span></a></li>
    <br>
    <li><a href="/fantasy/public_html">Fantasy League Name Proposals
    <br><span class="displayText">// Keeps track of proposals for fantasy football league names</span></a></li>
    <br>
    <li><a href="/lunch/">Lunch (Work In Progress)
    <br><span class="displayText">// Tool to help keep track of lunch spots near work</span></a></li>
    <br>
    <li><a href="/MacDaddy/ChallengeOne/">Mac's Code Challenge
    <br><span class="displayText">// Mac really shouldn't have told me he didn't buy that domain name</span></a></li>
    <br>
  </ul>

  <h5>Repositories:</h5>
  <ul>
    <li><a href="https://github.com/Quinncuatro">GitHub</a></li>
  </ul>
  </div>
</body>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://crashthebot.net/js/typed/js/typed.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>

<script type="text/javascript">
$(document).ready(function() {
    // Type out strings on screen
    $(".command").typed({
        strings: [" ls /var/www/html/"],
        typeSpeed: 60,
        backDelay: 2500,
        loop: false,
    }).delay(2750).queue(function(next) {
        $(".ls").removeClass('hide');
    });
});
</script>

</html>
