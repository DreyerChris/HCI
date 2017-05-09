document.getElementById("confirmmovie").onclick = function(){
    var cinema = $('#selectscinema option:selected').text();
    var movie = $('#selectsmovie option:selected').text();
    var date = $('#selectsdate option:selected').text();
    var time = $('#selectstime option:selected').text();
    var numtickets = $('#selectstickets option:selected').text();
    if(cinema == "Select Cinema" || movie == "Select Movie" || date == "Select Date" || time == "Select Time" || numtickets == "Number of tickets"){
        alert("Please make sure you have selected all the options");
    }
    else
    {
        $.ajax({
            type: 'post',
            url: 'buyticketsajax.php',
            data: { cinema : cinema, movie : movie, date:  date, time : time, numtickets : numtickets},
            success: function( data ) {
                location.href= "snackmenu.php";
            }
        });
    }
}