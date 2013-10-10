<?php

include_once('php/Venue.php');
include_once('php/Show.php');

// Master
date_default_timezone_set('America/New_York');

/**
 * @var Venue $venue
 */
$venue = new Venue(array(
    'name' => "Dean Street Brooklyn",
    'addressOne' => "755 Dean Street",
    'addressTwo' => "Brooklyn, NY",
    'twitterHandle' => "deanstreetbk",
    'urlFacebook' => "https://www.facebook.com/163065380378627",
    'urlFoursquare' => "https://foursquare.com/v/dean-street/4d3933e376d1a35dfd3d058e",
    'contentPageMain' => "We are here for the community presenting top New York City comedy talent, at Brooklyn prices! A couple can come and watch a comedy show for 2 hours, drink and eat well for $50. Join us for the after party at the bar!",
));

/**
 * @var Show $show
 */
$show = new Show(array(
    'venue' => $venue,
    'url' => 'www.DeanStreetComedy.com',
    'dateSlug' => '20131016',
    'date' => 'October 16',
    'dayOfWeek' => 'Wednesday',
    'year' => '2013',
    'time' => '9:00',
    'timeDoors' => '8:45',
    'host' => 'Seena Jon',
    'headlinerOne' => 'Henry Zebrowski (Adult Swim\'s "Your Pretty Face is Going to Hell")',
    'headlinerTwo' => 'Mark Normand(from Conan on TBS)',
    'name' => "Dean Street Comedy #4",
    'slogan' => "Make 'em laugh!",
    'title' => "Comedy Night at Dean Street, Brooklyn, NY",
    'description' => "Top NYC comedy talent at Brooklyn prices!A couple can enjoy a comedy show for 2 hours, drink and eat well for \$50. After party at the bar!",
    'urlYouTube' => "http://www.youtube.com/deanstreetcomedy",
    'urlFacebook' => "https://www.facebook.com/events/158610091011639",
    'urlPoster' => "http://www.DeanStreetComedy.com/img/poster-20131016.jpg",
));

/**
 * @var Show[] $pastShows
 */
$pastShows = array(
    'show_3' => new Show(array(
        'venue' => $venue,
        'url' => 'www.DeanStreetComedy.com',
        'dateSlug' => '20130918',
        'date' => 'September 18',
        'dayOfWeek' => 'Wednesday',
        'year' => '2013',
        'time' => '9:00',
        'timeDoors' => '8:45',
        'host' => 'Ben Kissel',
        'headlinerOne' => 'Joe Machi (seen on Late Night with Jimmy Fallon)',
        'headlinerTwo' => 'Kevin Barnett (seen in Sleep Walk with Me")',
        'name' => "Dean Street Comedy #3",
        'slogan' => "Make 'em laugh!",
        'title' => "Comedy Night at Dean Street, Brooklyn, NY",
        'description' => "Top NYC comedy talent at Brooklyn prices! A couple can enjoy a comedy show for 2 hours, drink and eat well for $50. After party at the bar!",
        'urlYouTube' => "http://www.youtube.com/deanstreetcomedy",
        'urlFacebook' => "https://www.facebook.com/events/158610091011639",
        'urlPoster' => "http://www.DeanStreetComedy.com/img/poster-20130918.jpg",
    )),
    'show_2' => new Show(array(
        'venue' => $venue,
        'url' => 'www.DeanStreetComedy.com',
        'date' => 'August 14',
        'dayOfWeek' => 'Wednesday',
        'year' => '2013',
        'time' => '9:00',
        'timeDoors' => '8:45',
        'host' => 'Alissa Bissonnette',
        'headlinerOne' => 'Jermaine Fowler',
        'headlinerTwo' => 'Ben Kissel',
        'name' => "Dean Street Comedy #2",
        'slogan' => "Make 'em laugh!",
        'title' => "Comedy Night at Dean Street, Brooklyn, NY",
        'description' => "Top NYC comedy talent at Brooklyn prices! A couple can enjoy a comedy show for 2 hours, drink and eat well for $50. After party at the bar!",
        'urlYouTube' => "http://www.youtube.com/deanstreetcomedy",
        'urlFacebook' => "https://www.facebook.com/events/158610091011639",
        'urlPoster' => "http://www.DeanStreetComedy.com/img/poster-20130814.jpg",
    ))
);

// Technical
$gplus_publisher = "https://plus.google.com/113786691084626528718/posts";
$ga_account = "UA-43069052-1";

?><!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo $show->title; ?></title>
    <meta name="description" content="<?php echo $show->description; ?>"/>
    <link rel="canonical" href="<?php echo $show->url; ?>"/>
    <link rel="publisher" href="<?php echo $gplus_publisher; ?>"/>
    <meta property='og:locale' content='en_US'/>
    <meta property='og:type' content='article'/>
    <meta property='og:title' content="<?php echo $show->title; ?>"/>
    <meta property='og:description' content='<?php echo $show->description; ?>'/>
    <meta property='og:url' content='<?php echo $show->url; ?>'/>
    <meta property='og:site_name' content='<?php echo $show->name; ?>'/>
    <meta property='article:author' content='<?php echo $show->venue->urlFacebook; ?>'/>
    <meta property='article:publisher' content='<?php echo $show->venue->urlFacebook; ?>'/>
    <meta property='fb:admins' content='518634848'/>
    <meta property='og:image' content="<?php echo $show->urlPoster; ?>"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="@<?php echo $show->venue->twitterHandle; ?>"/>
    <meta name="twitter:domain" content="<?php echo $show->venue->name; ?>"/>
    <meta name="twitter:creator" content="@<?php echo $show->venue->urlTwitter(); ?>"/>
    <meta name="twitter:image:src"
          content="<?php echo $show->urlPoster; ?>"/>


    <meta name="viewport" content="width=device-width">

    <link href='http://fonts.googleapis.com/css?family=Jacques+Francois' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            padding-top: 40px;
            padding-bottom: 40px;
        }
    </style>
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/webicons.css">
    <link rel="stylesheet" href="css/main.css">

    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to
    improve your experience.</p>
<![endif]-->

<!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->

<?php /*
// TODO: Launch Video here
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="brand" href="http://www.eventbrite.com/event/7706515395">Click here to buy tickets online!</a>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>
</div>
*/
?>

<div class="container">

    <!-- Example row of columns -->
    <div class="row">
        <div class="span8">
            <a href="<?php echo $show->urlPosterLinkTo(); ?>" target="_blank"><img src='<?php echo $show->urlPoster; ?>'
                                                                                 alt="<?php echo $show->content(); ?>"/></a>
        </div>
        <div class="span4">
            <h1><?php echo $show->name ?></h1>

            <p class="event-info"><?php echo $show->dayOfWeek; ?>, <?php echo $show->date; ?>
                <br/><?php echo $show->time; ?>PM (Doors <?php echo $show->timeDoors; ?>)</p>

            <p class="event-info"><?php echo $show->venue->addressOne; ?><br/><?php echo $show->venue->addressOne; ?></p>

            <p><?php echo $show->venue->contentPageMain; ?></p>

            <p class='social'>
                <a class="webicon facebook large" href="<?php echo $show->urlFacebook; ?>" target="_blank">Facebook</a>
                <!--                <a class="webicon youtube large" href="<?php echo $show->urlYoutube; ?>" target="_blank">YouTube</a>	-->
            </p>

            <h2>the Venue</h2>

            <p><a href="http://www.deanstreetbrooklyn.com/" target="_blank"><img src='img/dean-street-restaurant-28.jpg'
                                                                                 alt='Dean Street Restaurant, Brooklyn'/></a>
            </p>

            <p><a href="http://www.deanstreetbrooklyn.com/" target="_blank">Dean Street Restaurant</a><br/><span
                    class="brooklyn">Brooklyn, NY</span></p>

            <p class='social'>
                <a class="webicon facebook large" href="<?php echo $show->venue->urlFacebook; ?>" target="_blank">Facebook</a>
                <a class="webicon twitter large" href="<?php echo $show->venue->urlTwitter(); ?>" target="_blank">Twitter</a>
                <a class="webicon foursquare large" href="<?php echo $show->venue->urlFoursquare; ?>" target="_blank">Foursquare</a>
            </p>

            <p>Friends since middle school, Rob Gelardi and John Longo co-own this neighborhood bar/restaurant and
                strive always to create a place that feels like home every time you walk in the door.</p>

            <p>Two distinct areas -a front bar area and a back dining area- allow customers to decide which atmosphere
                they prefer to enjoy our outstanding NOLA-inspired <a href="http://deanstreetbrooklyn.com/food/"
                                                                      target="_blank">menu</a> prepared by chef Simon
                Glenn.</p>

            <h2><a href="http://www.deanstreetbrooklyn.com/" target="_blank">the Line-up</a></h2>

            <h3>Host</h3>

            <p><?php echo $show->host; ?></p>

            <h3>Headlining</h3>

            <p><?php echo $show->headlinerOne; ?></p>

            <h3>Featuring</h3>

            <p><?php echo $show->headlinerTwo; ?></p>
        </div>
    </div>

    <hr>

    <footer>
        <p>&copy; Dean Street <?php echo date('Y'); ?></p>
    </footer>

</div>
<!-- /container -->

<div class="container">&nbsp;</div>

<div class="container">

    <div class="row">

        <?php foreach ($pastShows as $pastShow): ?>
            <div class="span6">
                <h1>Past Show: <?php echo $pastShow->name; ?></h1>

                <p class="event-info"><?php echo $pastShow->datePretty(); ?></p>

                <h3>Host</h3>

                <p><?php echo $pastShow->host; ?></p>

                <h3>Headlining</h3>

                <p><?php echo $pastShow->headlinerOne; ?></p>

                <h3>Featuring</h3>

                <p><?php echo $pastShow->headlinerTwo; ?></p>
            </div>
        <?php endforeach; ?>

    </div>

</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

<script src="js/vendor/bootstrap.min.js"></script>

<script src="js/main.js"></script>

<script>
    var _gaq = [
        ['_setAccount', '<?php echo $ga_account; ?>'],
        ['_trackPageview']
    ];
    (function (d, t) {
        var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
        g.src = '//www.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g, s)
    }(document, 'script'));
</script>
</body>
</html>