<div id='map' style="width: 100%; height: 500px; margin-bottom: 10rem; margin-bottom: 7rem;"></div>
<script>
    var coordinates = [{{$lat}}, {{$lng}}];
    var map = tt.map({
        container: 'map',
        key: 'h0PXSuBWpADri2mCT2v8qmuBLqJIwGw6',
        style: 'tomtom://vector/1/basic-main',
        center: coordinates,
        zoom: 4,
    });
    var marker = new tt.Marker().setLngLat(coordinates).addTo(map);
    var popupOffsets = {
        top: [0, 0],
        bottom: [0, -70],
        'bottom-right': [0, -70],
        'bottom-left': [0, -70],
        left: [25, -35],
        right: [-25, -35]
    };
    var popup = new tt.Popup({offset: popupOffsets}).setHTML("<b>{{$title}}</b><br/>{{$address}}");
    marker.setPopup(popup).togglePopup();
</script>