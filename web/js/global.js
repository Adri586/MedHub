/* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
particlesJS.load('particles-js', '/web/assets/particlesjs-config.json', function() {
    console.log('callback - particles.js config loaded');
});

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

function setParam(name, value) {
    var l = window.location;

    /* build params */
    var params = {};
    var x = /(?:\??)([^=&?]+)=?([^&?]*)/g;
    var s = l.search;
    for(var r = x.exec(s); r; r = x.exec(s))
    {
        r[1] = decodeURIComponent(r[1]);
        if (!r[2]) r[2] = '%%';
        params[r[1]] = r[2];
    }

    /* set param */
    params[name] = encodeURIComponent(value);

    /* build search */
    var search = [];
    for(var i in params)
    {
        var p = encodeURIComponent(i);
        var v = params[i];
        if (v != '%%') p += '=' + v;
        search.push(p);
    }
    search = search.join('&');

    /* execute search */
    l.search = search;
}