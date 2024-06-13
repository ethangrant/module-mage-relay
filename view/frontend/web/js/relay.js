// @todo - url and protocols should be config
const relaySocket = new WebSocket(
    "ws://localhost:8083/relay"
);

relaySocket.onopen = (event) => {
    console.log(event.data);
}

relaySocket.onerror = (event) => {
    console.log(event.data);
}

relaySocket.onmessage = (event) => {
    console.log(event.data)

    let nav = document.querySelector('.sections.nav-sections');
    nav.insertAdjacentHTML('afterend', event.data);
}
