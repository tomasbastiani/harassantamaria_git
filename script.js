function iniciarMap(){
    var coord = {lat:-34.3408324 ,lng: -58.8531717};
    var map = new google.maps.Map(document.getElementById('map'),{
      zoom: 10,
      center: coord
    });
    var marker = new google.maps.Marker({
      position: coord,
      map: map
    });
}