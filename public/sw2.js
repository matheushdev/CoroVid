self.addEventListener("install", function(event) {
    event.waitUntil(
        caches.open("v1.0").then(function(cache) {
            return cache.addAll([
                "/offline",
                "/manifest.json",
                "/assets/css/style.css",
                "/assets/js/jquery.js",
                "/assets/css/bootstrap/bootstrap.css",
                "/assets/js/bootstrap/bootstrap.js",
                "/assets/img/icon.png",
                "/assets/img/logo.png",
                "/assets/img/CoroVid.png",
                "/assets/img/logo48x48.png",
                "/assets/img/logo72x72.png",
                "/assets/img/logo96x96.png",
                "/assets/img/logo144x144.png",
                "/assets/img/logo168x168.png",
                "/assets/img/logo192x192.png",
                "/assets/img/logo512x512.png"
            ]);
        })
    );
});

self.addEventListener("activate", function(event) {
    var cacheWhitelist = ["v1.0"];
  
    event.waitUntil(
        caches.keys().then(function(cacheNames) {
            return Promise.all(
                cacheNames.map(function(cacheName) {
                        if (cacheWhitelist.indexOf(cacheName) === -1) {
                        return caches.delete(cacheName);
                    }
                })
            );
        })
    );
});

self.addEventListener('fetch', (event) => {
    event.respondWith(async function() {
        try {
	    return await fetch(event.request);
        } catch (err) {
            if(event.request.url === "https://corovid.ml/" ||
            event.request.url === "http://corovid.ml/" )
                return caches.match(event.request);

            return caches.match('/offline');
        }
    }());
});
