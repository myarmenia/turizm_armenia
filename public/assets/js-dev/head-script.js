(function (a, s, y, n, c, h, i, d, e) {
    s.className += ' ' + y;
    h.start = 1 * new Date;
    h.end = i = function () {
        s.className = s.className.replace(RegExp(' ?' + y), '')
    };
    (a[n] = a[n] || []).hide = h;
    setTimeout(function () {
        i();
        h.end = null
    }, c);
    h.timeout = c;
})(window, document.documentElement, 'async-hide', 'dataLayer', 4000, {
    'GTM-K9BGS8K': true
});


// ga('set', 'anonymizeIp', true);
ga('require', 'GTM-K9BGS8K');
// ga('require', 'displayfeatures');
// ga('require', 'linker');
// ga('linker:autoLink', ["2checkout.com", "avangate.com"]);


