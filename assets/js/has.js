function toggleIcon(e) {
  $(e.target)
    .prev('.panel-heading')
    .find('.more-less')
    .toggleClass('fa-arrow-down');
}
$('.panel-group').on('hidden.bs.collapse', toggleIcon);
$('.panel-group').on('shown.bs.collapse', toggleIcon);

$(document).ready(function () {
  $('#play-video').on('click', function (ev) {
    $('#video')[0].src += '&autoplay=1';
    ev.preventDefault();
  });
});
