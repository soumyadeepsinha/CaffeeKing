$(document).ready(function () {
  $('.sidenav').sidenav();
  $('.modal').modal();
  $('.slider').slider({ full_width: true });
  $('.parallax').parallax();
});

function toggleModal() {
  var instance = M.Modal.getInstance($('#modal1'));
  instance.open();
}