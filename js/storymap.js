const mapFrame = document.getElementById('mapFrame');
if (typeof (mapFrame) != 'undefined' && mapFrame != null) {
    let params = new URLSearchParams(window.location.search);
    let lang = params.get('lang');
    let storyID = params.get('id');
    mapFrame.src = `https://maps.greenpeace.org/maps/U4E/?lang=${lang?lang:''}${storyID?`&id=${storyID}`:''}`;
}
