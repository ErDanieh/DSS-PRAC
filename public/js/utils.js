/**
 * Devuelve la url de la que
 * @param {*} id  
 */
function redirectToId(id) {
    window.location.href = `${window.location.href}/${id}`;
}

function redirectSearch() {
    window.location.href = `${window.location.origin + window.location.pathname}?search=${document.getElementById('search').value}`;
}