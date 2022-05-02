<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function createCurrentMarker(lat, lng) {
            if (currentMarker) {
                currentMarker.setPosition(new kakao.maps.LatLng(lat, lng));
            } else {
                currentMarker = new kakao.maps.Marker({
                    map: map,
                    position: new kakao.maps.LatLng(lat, lng),
                    image: new kakao.maps.MarkerImage(imageUrl, new kakao.maps.Size(45, 41)),
                });
            }
            kakao.maps.event.addListener(currentMarker, 'click', function() {
                onClickMarker.postMessage('marker is clicked');
            });
            map.panTo(new kakao.maps.LatLng(lat, lng));
        }
    </script>
</head>

<body>

</body>

</html>