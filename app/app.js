

You don't have to use nodejs in order to work with a service worker. Just register the worker somewhere in app.js and use the install and fetch event in a seperate file (e.g. sw.js) to intervene in Http requests with:

// app.js
navigator.serviceWorker.register('sw.js', {
    scope: './'
});