var popcornsubtotal = 0.00;
var sodasubtotal = 0.00;
var grandtotal = 0.00;
var formattedtotal = popcornsubtotal.toFixed(2);
var formattedsodatotal = sodasubtotal.toFixed(2);
var formattedgrandtotal = grandtotal.toFixed(2);
var originalpopcorntotal = 0;
var originalsodatotal = 0;
document.getElementById("subtotalamount popcorn").innerHTML = formattedtotal;
document.getElementById("subtotalamount soda").innerHTML = formattedsodatotal;
document.getElementById("totalnumber").innerHTML = formattedgrandtotal;

document.getElementById("snackplus largepopcorn").onclick = function(){
    var amount = document.getElementById("snackamount largepopcorn").innerHTML;
    amount++;
    popcornsubtotal += 29.95;
    document.getElementById("snackamount largepopcorn").innerHTML = amount;
    formattedtotal = popcornsubtotal.toFixed(2);
    document.getElementById("subtotalamount popcorn").innerHTML = formattedtotal;
};

document.getElementById("snackminus largepopcorn").onclick = function(){
    var amount = document.getElementById("snackamount largepopcorn").innerHTML;
    amount--;
    if(amount == -1)
    {
        amount = 0;
    }
    else
    {
        popcornsubtotal -= 29.95;
        popcornsubtotal = Math.max(0, popcornsubtotal);
        formattedtotal = popcornsubtotal.toFixed(2);
        document.getElementById("snackamount largepopcorn").innerHTML = amount;
        document.getElementById("subtotalamount popcorn").innerHTML = formattedtotal;
    }
    
};

document.getElementById("snackplus mediumpopcorn").onclick = function(){
    var amount = document.getElementById("snackamount mediumpopcorn").innerHTML;
    amount++;
    popcornsubtotal += 22.95;
    document.getElementById("snackamount mediumpopcorn").innerHTML = amount;
    formattedtotal = popcornsubtotal.toFixed(2);
    document.getElementById("subtotalamount popcorn").innerHTML = formattedtotal;
};

document.getElementById("snackminus mediumpopcorn").onclick = function(){
    var amount = document.getElementById("snackamount mediumpopcorn").innerHTML;
    amount--;
    if(amount == -1)
    {
        amount = 0;
    }
    else
    {
        popcornsubtotal -= 22.95;
        popcornsubtotal = Math.max(0, popcornsubtotal);
        formattedtotal = popcornsubtotal.toFixed(2);
        document.getElementById("snackamount mediumpopcorn").innerHTML = amount;
        document.getElementById("subtotalamount popcorn").innerHTML = formattedtotal;
    }
    
};

document.getElementById("snackplus smallpopcorn").onclick = function(){
    var amount = document.getElementById("snackamount smallpopcorn").innerHTML;
    amount++;
    popcornsubtotal += 18.95;
    document.getElementById("snackamount smallpopcorn").innerHTML = amount;
    formattedtotal = popcornsubtotal.toFixed(2);
    document.getElementById("subtotalamount popcorn").innerHTML = formattedtotal;
};

document.getElementById("snackminus smallpopcorn").onclick = function(){
    var amount = document.getElementById("snackamount smallpopcorn").innerHTML;
    amount--;
    if(amount == -1)
    {
        amount = 0;
    }
    else
    {
        popcornsubtotal -= 18.95;
        popcornsubtotal = Math.max(0, popcornsubtotal);
        formattedtotal = popcornsubtotal.toFixed(2);
        document.getElementById("snackamount smallpopcorn").innerHTML = amount;
        document.getElementById("subtotalamount popcorn").innerHTML = formattedtotal;
    }
    
};

document.getElementById("popcornconfirm").onclick = function(){
    var difference;
    if(popcornsubtotal == 0)
    {
        difference = originalpopcorntotal*-1;
    }
    else
    {
        difference = popcornsubtotal - originalpopcorntotal;
        difference = Math.max(0, difference);
    }
    originalpopcorntotal = popcornsubtotal;
    grandtotal += difference;
    $.ajax({
        type: 'post',
        url: 'snacktotalajax.php',
        data: { snacktotal : grandtotal },
        success: function( data ) {
            console.log( data );
        }
    });
    formattedgrandtotal = grandtotal.toFixed(2);
    document.getElementById("totalnumber").innerHTML = formattedgrandtotal;
}

document.getElementById("snackplus largesoda").onclick = function(){
    var amount = document.getElementById("snackamount largesoda").innerHTML;
    amount++;
    sodasubtotal += 24.95;
    document.getElementById("snackamount largesoda").innerHTML = amount;
    formattedsodatotal = sodasubtotal.toFixed(2);
    document.getElementById("subtotalamount soda").innerHTML = formattedsodatotal;
};

document.getElementById("snackminus largesoda").onclick = function(){
    var amount = document.getElementById("snackamount largesoda").innerHTML;
    amount--;
    if(amount == -1)
    {
        amount = 0;
    }
    else
    {
        sodasubtotal -= 24.95;
        sodasubtotal = Math.max(0, sodasubtotal);
        formattedsodatotal = sodasubtotal.toFixed(2);
        document.getElementById("snackamount largesoda").innerHTML = amount;
        document.getElementById("subtotalamount soda").innerHTML = formattedsodatotal;
    }
    
};

document.getElementById("snackplus mediumsoda").onclick = function(){
    var amount = document.getElementById("snackamount mediumsoda").innerHTML;
    amount++;
    sodasubtotal += 17.95;
    document.getElementById("snackamount mediumsoda").innerHTML = amount;
    formattedsodatotal = sodasubtotal.toFixed(2);
    document.getElementById("subtotalamount soda").innerHTML = formattedsodatotal;
};

document.getElementById("snackminus mediumsoda").onclick = function(){
    var amount = document.getElementById("snackamount mediumsoda").innerHTML;
    amount--;
    if(amount == -1)
    {
        amount = 0;
    }
    else
    {
        sodasubtotal -= 17.95;
        sodasubtotal = Math.max(0, sodasubtotal);
        formattedsodatotal = sodasubtotal.toFixed(2);
        document.getElementById("snackamount mediumsoda").innerHTML = amount;
        document.getElementById("subtotalamount soda").innerHTML = formattedsodatotal;
    }
    
};

document.getElementById("snackplus smallsoda").onclick = function(){
    var amount = document.getElementById("snackamount smallsoda").innerHTML;
    amount++;
    sodasubtotal += 12.95;
    document.getElementById("snackamount smallsoda").innerHTML = amount;
    formattedsodatotal = sodasubtotal.toFixed(2);
    document.getElementById("subtotalamount soda").innerHTML = formattedsodatotal;
};

document.getElementById("snackminus smallsoda").onclick = function(){
    var amount = document.getElementById("snackamount smallsoda").innerHTML;
    amount--;
    if(amount == -1)
    {
        amount = 0;
    }
    else
    {
        sodasubtotal -= 12.95;
        sodasubtotal = Math.max(0, sodasubtotal);
        formattedsodatotal = sodasubtotal.toFixed(2);
        document.getElementById("snackamount smallsoda").innerHTML = amount;
        document.getElementById("subtotalamount soda").innerHTML = formattedsodatotal;
    }
    
};

document.getElementById("sodaconfirm").onclick = function(){
    var difference;
    if(sodasubtotal == 0)
    {
        difference = originalsodatotal*-1;
    }
    else
    {
        difference = sodasubtotal - originalsodatotal;
        difference = Math.max(0, difference);
    }
    originalsodatotal = sodasubtotal;
    grandtotal += difference;
    $.ajax({
        type: 'post',
        url: 'snacktotalajax.php',
        data: { snacktotal : grandtotal },
        success: function( data ) {
            console.log( data );
        }
    });
    formattedgrandtotal = grandtotal.toFixed(2);
    document.getElementById("totalnumber").innerHTML = formattedgrandtotal;
}