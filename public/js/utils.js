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

function redirectOrder() {
    let queryString = window.location.search;  // get url parameters
    let params = new URLSearchParams(queryString);  // create url search params object
    params.delete('ordered');  // delete city parameter if it exists, in case you change the dropdown more then once
    params.append('ordered', document.getElementById("order").value); // add selected city
    document.location.href = "?" + params.toString(); // refresh the page with new url
}
