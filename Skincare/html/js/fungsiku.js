function toggleShowDesk(id) {
    var shortDesk = document.getElementById("shortdesk-" + id);
    shortDesk.style.display = 'block';
    var tombol = document.getElementById("tombol-" + id);
    tombol.onclick = function() {
        toggleHideDesk(id);
    };
}   

function toggleHideDesk(id) {
    var shortDesk = document.getElementById("shortdesk-" + id);
    shortDesk.style.display = 'none';
    var tombol = document.getElementById("tombol-" + id);
    tombol.onclick = function() {
        toggleShowDesk(id);
    };
}