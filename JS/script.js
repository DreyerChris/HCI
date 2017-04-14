$(document).ready(function(){
    menu = document.getElementById("menu");
    meny.style.zIndex = "-1";
	$('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
		$(this).toggleClass('open');
	});
});

function myFunction(x) {
    x.classList.toggle("change");
    menu = document.getElementById("menu");
    if(menu.style.zIndex == "-1"){
        menu.style.zIndex = "2";
    } else {
        menu.style.zIndex = "-1";
    }
}