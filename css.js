document.getElementsByTagName("h1")[0].style.fontSize = "60px";
document.getElementsByTagName("h2")[0].style.fontSize = "60px";
$('.dropdown-toggle').dropdown();
var main = function() {
  $('.dropdown-toggle').dropdown() ; //geht nicht, warum?
  $('.panel').click(function(){
        $(this).children('.description').show();
        });

        $('.datepicker').datepicker(({
    format: 'mm/dd/yyyy'
});
};

$(document).ready(main);
