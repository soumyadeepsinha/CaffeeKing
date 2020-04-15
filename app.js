$(document).ready(function () {
  $('.sidenav').sidenav();
  $('.modal').modal();
  $('.slider').slider({ full_width: true });
  $('.parallax').parallax();
  $('.carousel-effects').carousel({
    numVisible: 7,
    shift: 50,
    padding: 50,
  });
});

function toggleModal() {
  var instance = M.Modal.getInstance($('#modal1'));
  instance.open();
}