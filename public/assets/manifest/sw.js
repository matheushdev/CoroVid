//Instala Cache

var staticCacheName = 'gerenciador_pessoal_2020_03_12_16_55_15'

this.addEventListener("install", event => {
    this.skipWaiting();

    event.waitUntil(
        caches.open(staticCacheName)
        .then(cache => {
            return cache.addAll([
                '/',
                '/assets/manifest/manifest.json',
                '/assets/img/icon.png',
                '/assets/img/logo.png',
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
                .filter(cacheName => (cacheName.startsWith('gerenciador_pessoal_')))
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
            return caches.match('offline.php');
        })
    )
})