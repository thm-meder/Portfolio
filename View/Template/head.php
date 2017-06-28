
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta charset="utf-8">
<title>Thomas MEDER</title>
<meta name="description" content="Thomas MEDER Portfolio">

<?php require 'config.php'; ?>

<link rel="shortcut icon" href="/View/Assets/images/favicon.ico">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>

<!-- Bootstrap -->
<link href="<?php echo ASSET_ROOT; ?>bootstrap/css/bootstrap.css" rel="stylesheet">

<!-- Font-Awesome -->
<link href="<?php echo ASSET_ROOT; ?>fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

<!-- AdminLte -->
<link rel="stylesheet" href="<?php echo ASSET_ROOT; ?>css/AdminLTE.min.css">
<link rel="stylesheet" href="<?php echo ASSET_ROOT; ?>css/_all-skins.min.css">

<!-- Animate -->
<link href="<?php echo ASSET_ROOT; ?>css/animations.css" rel="stylesheet">
<link href="<?php echo ASSET_ROOT; ?>css/animate.css" rel="stylesheet">

<!-- Slick -->
<link rel="stylesheet" type="text/css" href="<?php echo ASSET_ROOT; ?>slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo ASSET_ROOT; ?>slick/slick-theme.css"/>

<!-- Style -->
<link href="<?php echo ASSET_ROOT; ?>css/style.css" rel="stylesheet">
<link href="<?php echo ASSET_ROOT; ?>css/custom.css" rel="stylesheet">




<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6RIXhtkUh5Ps1FM7ep2-GrtzW0lxUXgY "></script>

<script type="text/javascript">

    window.marker = null;

    function initialize() {
        var map;

        var home = new google.maps.LatLng(49.120290, 6.183283);

        var style = [
            { "featureType": "road",
                "elementType":
                    "labels.icon",
                "stylers": [
                    { "saturation": 1 },
                    { "gamma": 1 },
                    { "visibility": "on" },
                    { "hue": "#e6ff00" }
                ]
            },
            { "elementType": "geometry", "stylers": [
                { "saturation": -100 }
            ]
            }
        ];

        var mapOptions = {
            // SET THE CENTER
            center: home,

            // SET THE MAP STYLE & ZOOM LEVEL
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            zoom:15,

            // SET THE BACKGROUND COLOUR
            backgroundColor:"#eeeeee",

            // REMOVE ALL THE CONTROLS EXCEPT ZOOM
            panControl:false,
            zoomControl:true,
            mapTypeControl:false,
            scaleControl:false,
            streetViewControl:false,
            overviewMapControl:false,
            zoomControlOptions: {
                style:google.maps.ZoomControlStyle.SMALL
            }

        }
        map = new google.maps.Map(document.getElementById('map'), mapOptions);

        // SET THE MAP TYPE
        var mapType = new google.maps.StyledMapType(style, {name:"Grayscale"});
        map.mapTypes.set('grey', mapType);
        map.setMapTypeId('grey');

        //CREATE A CUSTOM PIN ICON
        var marker_image ='<?php echo ASSET_ROOT; ?>images/pin.png';
        var pinIcon = new google.maps.MarkerImage(marker_image,null,null, null,new google.maps.Size(21, 34));

        marker = new google.maps.Marker({
            position: home,
            map: map,
            icon: pinIcon,
            title: 'My Home!'
        });
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>

<?php
/*
ga('send', 'pageview', 'developpeur_web');
ga('send', 'pageview', 'developpeur_metz');
ga('send', 'pageview', 'developpeur_freelance');
ga('send', 'pageview', 'web_developper');
ga('send', 'pageview', 'metz_web_developper');
ga('send', 'pageview', 'freelance_web_developper');
ga('send', 'pageview', 'developpeur_web_php');
ga('send', 'pageview', 'developpeur_php');
ga('send', 'pageview', 'php_web_developper');
ga('send', 'pageview', 'php_developper');
*/
?>
