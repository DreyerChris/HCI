var popcornsubtotal = 0.00;
var grandtotal = 0.00;
var formattedtotal = popcornsubtotal.toFixed(2);
var formattedgrandtotal = grandtotal.toFixed(2);
var originalpopcorntotal = 0;
document.getElementById("subtotalamount popcorn").innerHTML = formattedtotal;
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
    formattedgrandtotal = grandtotal.toFixed(2);
    document.getElementById("totalnumber").innerHTML = formattedgrandtotal;
}