const mapFrame = document.getElementById('mapFrame');
if (typeof (mapFrame) != 'undefined' && mapFrame != null) {
    const params = new URLSearchParams(window.location.search);
    mapFrame.src = `https://maps.greenpeace.org/maps/U4E/?lang=id${params.get('id')?`&${params}`:''}`;
}
