function totalCost(i) {
    let total_AL = 0;
    let price_AL = amount_AL = cost_AL = 0;
    for (let j = 0; j < i; j++) {
        price_AL = +(document.getElementById("p" + j).innerHTML);
        amount_AL = +(document.getElementById("q" + j).innerHTML);
        cost_AL = price_AL * amount_AL;
        document.getElementById("t" + j).innerHTML = cost_AL;
        total_AL += cost_AL;
    }
    document.getElementById("totalCost").innerHTML = total_AL;
}