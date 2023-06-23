function goBack(){
  window.history.back();
}


function goToBooking(day, film_num) {
  var baseUrl = window.location.origin;
  var url = baseUrl + '/booking?day=' + day + '&film=' + film_num;
  window.location.href = url;
}


const seats = document.getElementsByClassName('row-seat');
const filmId = getFilmIdFromURL();

for (let i = 0; i < seats.length; i++) {
  seats[i].addEventListener('click', function() {
    this.classList.add('booked');
    localStorage.setItem('row-seat-' + filmId + '-' + i, 'booked');
  });

  if (localStorage.getItem('row-seat-' + filmId + '-' + i) === 'booked') {
    seats[i].classList.add('booked');
  }
}


function getFilmIdFromURL() {
  const urlParams = new URLSearchParams(window.location.search);
  const day = urlParams.get('day');
  const film = urlParams.get('film');
  filmParam = day + '-' + film;
  return filmParam;
}
