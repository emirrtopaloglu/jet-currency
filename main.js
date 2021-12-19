var cryptoRate = document.querySelectorAll(".jet-crypto > tbody > tr > td:last-child");

cryptoRate.forEach(coin => {
    newcoin = parseFloat(coin.innerHTML.split('%')[1]);

    if (newcoin > 0) {
        coin.style.color = "green";
    } else if (newcoin < 0) {
        coin.style.color = "red";
    }
});

var currencyRate = document.querySelectorAll(".jet-currency > tbody > tr > td:last-child");

currencyRate.forEach(rate => {
    newrate = parseFloat(rate.innerHTML.split('%')[1].replace(',', '.'));
    if (newrate > 0) {
        rate.style.color = "green";
    } else if (newrate < 0) {
        rate.style.color = "red";
    } else {
        rate.style.color = "#161616";
    }
});