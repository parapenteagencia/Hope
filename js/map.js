function initMap() {

    /* ### Mapa con las coordenadas ### */
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 17,
        center: { lat: 20.640990, lng: -87.093888 },
        mapTypeControlOptions: {
            mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain',
                'styled_map'
            ]
        },
        streetViewControl: false
    });

    var marker = new google.maps.Marker({
        position: { lat: 20.640990, lng: -87.093888 },
        map: map,
        title: 'Hope'
    });
    /* ### Fin Mapa con las coordenadas ### */

    /* ### Estilos del mapa ### */
    var styledMapType = new google.maps.StyledMapType(
        [{
                "featureType": "administrative",
                "elementType": "geometry",
                "stylers": [{
                    "visibility": "off"
                }]
            },
            {
                "featureType": "poi",
                "stylers": [{
                    "visibility": "off"
                }]
            },
            {
                "featureType": "road",
                "elementType": "labels.icon",
                "stylers": [{
                    "visibility": "off"
                }]
            },
            {
                "featureType": "transit",
                "stylers": [{
                    "visibility": "off"
                }]
            }
        ], { name: 'Hope' });

    map.mapTypes.set('styled_map', styledMapType);
    map.setMapTypeId('styled_map');
    /* ### Fin Estilos del mapa ### */
}