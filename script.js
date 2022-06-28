function get() {
    document.getElementById("content2").innerHTML = decodeURI(localStorage.getItem("content"));
    localStorage.setItem("content", document.getElementById("content1").innerHTML);
}

function set() {
    localStorage.setItem("content", document.getElementById("content1").innerHTML);
}