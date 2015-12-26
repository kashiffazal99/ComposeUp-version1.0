$(document).ready(function() {
$('body').css('display', 'none');
$('body').fadeIn(500);

$('.link').click(function() {
event.preventDefault();
newLocation = this.href;
$('body').fadeOut(1000, newpage);
});

function newpage() {
window.location = newLocation;
}
});