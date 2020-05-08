
function show_sidebar()
{
  var x = document.getElementById("box");
document.getElementById('box').style.visibility="visible";
x.style.WebkitAnimation = "mymove 1s"; // Code for Chrome, Safari and Opera
x.style.animation = "mymove 1s ";
}

function hide_sidebar()
{
document.getElementById('box').style.visibility="hidden";
}

$('#box').hide();

$('.col').mouseover(function () {
      $('#box').show();
});
$('.col').mouseout(function () {
      $('#box').hide();
});
