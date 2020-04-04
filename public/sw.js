var data = new Date();
var dia = data.getDate();
var mes = data.getMonth();
var ano = data.getFullYear();
var hora = data.getHours();
var min = data.getMinutes();
var str_data_e_hora = ano + '_0' + (mes + 1) + '_0' + dia + '_0' + hora + '_' + min;


var staticCacheName = 'corovid_' + str_data_e_hora;

this.addEventListener("install", event => {
    this.skipWaiting();

    event.waitUntil(
        caches.open(staticCacheName)
        .then(cache => {
            return cache.addAll([
                '/',
                '/offline',
                '/contato',
                '/manifest.json',
                '/assets/css/style.css',
                '/assets/js/jquery.js',
                '/assets/css/bootstrap/bootstrap.css',
                '/assets/js/bootstrap/bootstrap.js',
                '/assets/img/icon.png',
                '/assets/img/logo.png',
                '/assets/img/CoroVid.png',
                '/assets/img/logo48x48.png',
                '/assets/img/logo72x72.png',
                '/assets/img/logo96x96.png',
                '/assets/img/logo144x144.png',
                '/assets/img/logo168x168.png',
                '/assets/img/logo192x192.png',
                '/assets/img/logo512x512.png'
            ]);
        })
    )
});


this.addEventListener("activate", event => {
    event.waitUntil(
        caches.keys().then(cacheNames => {
            return Promise.all(
                cacheNames
                .filter(cacheName => (cacheName.startsWith('corovid_')))
                .filter(cacheName => (cacheName !== staticCacheName))
                .map(cacheName => caches.delete(cacheName))
            );
        })
    );
});



this.addEventListener("fetch", event => {
    event.respondWith(
        caches.match(event.request)
        .then(response => {
            return response || fetch(event.request);
        })
        .catch(() => {
            return caches.match('/offline');
        })
    )
})