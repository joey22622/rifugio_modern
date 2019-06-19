

//Google Maps js
function initMap() {
    var denver = {lat: 39.745, lng: -104.9903};
    var rino = {lat: 39.763486, lng:-104.983158};
    var cherryCreek = {lat: 39.720338, lng:-104.950666};
    var map = new google.maps.Map(
        document.getElementById('map'), {
            zoom: 12, 
            center: denver,
            disableDefaultUI: true,
            scaleControl: true,
            zoomControl: true,
            styles : 

            [
              {
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#242f3e"
                  }
                ]
              },
              {
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#746855"
                  }
                ]
              },
              {
                "elementType": "labels.text.stroke",
                "stylers": [
                  {
                    "color": "#242f3e"
                  }
                ]
              },
              {
                "featureType": "administrative.locality",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#d59563"
                  }
                ]
              },
              {
                "featureType": "poi",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#d59563"
                  }
                ]
              },
              {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#263c3f"
                  }
                ]
              },
              {
                "featureType": "poi.park",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#6b9a76"
                  }
                ]
              },
              {
                "featureType": "road",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#38414e"
                  }
                ]
              },
              {
                "featureType": "road",
                "elementType": "geometry.stroke",
                "stylers": [
                  {
                    "color": "#212a37"
                  }
                ]
              },
              {
                "featureType": "road",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#9ca5b3"
                  }
                ]
              },
              {
                "featureType": "road.highway",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#746855"
                  }
                ]
              },
              {
                "featureType": "road.highway",
                "elementType": "geometry.stroke",
                "stylers": [
                  {
                    "color": "#1f2835"
                  }
                ]
              },
              {
                "featureType": "road.highway",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#f3d19c"
                  }
                ]
              },
              {
                "featureType": "transit",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#2f3948"
                  }
                ]
              },
              {
                "featureType": "transit.station",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#d59563"
                  }
                ]
              },
              {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#17263c"
                  }
                ]
              },
              {
                "featureType": "water",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#515c6d"
                  }
                ]
              },
              {
                "featureType": "water",
                "elementType": "labels.text.stroke",
                "stylers": [
                  {
                    "color": "#17263c"
                  }
                ]
              }
            ]
            
            // [
            //     {
            //       "elementType": "geometry",
            //       "stylers": [
            //         {
            //           "color": "#f5f5f5"
            //         }
            //       ]
            //     },
            //     {
            //       "elementType": "labels.icon",
            //       "stylers": [
            //         {
            //           "visibility": "off"
            //         }
            //       ]
            //     },
            //     {
            //       "elementType": "labels.text.fill",
            //       "stylers": [
            //         {
            //           "color": "#616161"
            //         }
            //       ]
            //     },
            //     {
            //       "elementType": "labels.text.stroke",
            //       "stylers": [
            //         {
            //           "color": "#f5f5f5"
            //         }
            //       ]
            //     },
            //     {
            //       "featureType": "administrative.land_parcel",
            //       "elementType": "labels.text.fill",
            //       "stylers": [
            //         {
            //           "color": "#bdbdbd"
            //         }
            //       ]
            //     },
            //     {
            //       "featureType": "poi",
            //       "elementType": "geometry",
            //       "stylers": [
            //         {
            //           "color": "#eeeeee"
            //         }
            //       ]
            //     },
            //     {
            //       "featureType": "poi",
            //       "elementType": "labels.text.fill",
            //       "stylers": [
            //         {
            //           "color": "#757575"
            //         }
            //       ]
            //     },
            //     {
            //       "featureType": "poi.park",
            //       "elementType": "geometry",
            //       "stylers": [
            //         {
            //           "color": "#e5e5e5"
            //         }
            //       ]
            //     },
            //     {
            //       "featureType": "poi.park",
            //       "elementType": "labels.text.fill",
            //       "stylers": [
            //         {
            //           "color": "#9e9e9e"
            //         }
            //       ]
            //     },
            //     {
            //       "featureType": "road",
            //       "elementType": "geometry",
            //       "stylers": [
            //         {
            //           "color": "#ffffff"
            //         }
            //       ]
            //     },
            //     {
            //       "featureType": "road.arterial",
            //       "elementType": "labels.text.fill",
            //       "stylers": [
            //         {
            //           "color": "#757575"
            //         }
            //       ]
            //     },
            //     {
            //       "featureType": "road.highway",
            //       "elementType": "geometry",
            //       "stylers": [
            //         {
            //           "color": "#dadada"
            //         }
            //       ]
            //     },
            //     {
            //       "featureType": "road.highway",
            //       "elementType": "labels.text.fill",
            //       "stylers": [
            //         {
            //           "color": "#616161"
            //         }
            //       ]
            //     },
            //     {
            //       "featureType": "road.local",
            //       "elementType": "labels.text.fill",
            //       "stylers": [
            //         {
            //           "color": "#9e9e9e"
            //         }
            //       ]
            //     },
            //     {
            //       "featureType": "transit.line",
            //       "elementType": "geometry",
            //       "stylers": [
            //         {
            //           "color": "#e5e5e5"
            //         }
            //       ]
            //     },
            //     {
            //       "featureType": "transit.station",
            //       "elementType": "geometry",
            //       "stylers": [
            //         {
            //           "color": "#eeeeee"
            //         }
            //       ]
            //     },
            //     {
            //       "featureType": "water",
            //       "elementType": "geometry",
            //       "stylers": [
            //         {
            //           "color": "#c9c9c9"
            //         }
            //       ]
            //     },
            //     {
            //       "featureType": "water",
            //       "elementType": "labels.text.fill",
            //       "stylers": [
            //         {
            //           "color": "#9e9e9e"
            //         }
            //       ]
            //     }
            //   ]
            
        });
    var marker1 = new google.maps.Marker({
        position: rino, 
        map: map,
        icon: {
            // url :'http://sriarchitect.com/wp-content/uploads/2018/10/sri-maps-icon-1.png',
            scaledSize: new google.maps.Size(75, 75),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(60, 80)
        }
    });
    var marker2 = new google.maps.Marker({
      position: cherryCreek, 
      map: map,
      icon: {
          // url :'http://sriarchitect.com/wp-content/uploads/2018/10/sri-maps-icon-1.png',
          scaledSize: new google.maps.Size(75, 75),
          origin: new google.maps.Point(0, 0),
          anchor: new google.maps.Point(60, 80)
      }
  });
}

