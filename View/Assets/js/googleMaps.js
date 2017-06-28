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
        zoom:9,

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
    var marker_image ='images/pin.png';
    var pinIcon = new google.maps.MarkerImage(marker_image,null,null, null,new google.maps.Size(21, 34));

    marker = new google.maps.Marker({
        position: home,
        map: map,
        icon: pinIcon,
        title: 'My Home!'
    });
}

google.maps.event.addDomListener(window, 'load', initialize);