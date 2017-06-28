cheet('↑ ↑ ↓ ↓ ← → ← → b a', function () {
    alert('Voilà!');
});

cheet('r u s h b', function () {
    $('p').each(function () { $(this).text("Cyka Blyat") })
});

cheet('e p i l e p p i', function () {
    setInterval(function () {$('*').each(function() { $(this).css("background-color", getRandomColor()) }); }, 1);
});

var otherLogo = false;
cheet('p o r n', function () {

    setInterval(function () {
        if (otherLogo) {
            $('body > nav > div > div.navbar-header > a > img').get(0).src = "/web/img/logo.png"
        } else {
            $('body > nav > div > div.navbar-header > a > img').get(0).src = "/web/img/pornhub_logo_straight.png"
        }
        otherLogo = !otherLogo;
    }, 500);

    cheet.disable('p o r n');
});

function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}