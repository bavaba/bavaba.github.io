function loadInfo() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'ajax/projectDetails.php', true);
    xhr.onload = function() {
        if (this.status == 200) {
            document.getElementById('more-info').innerHTML = this.responseText;
        } else {
            document.getElementById('more-info').innerHTML = "<p>Failed to load data. Please try again later.</p>";
        }
    }
    xhr.onerror = function() {
        document.getElementById('more-info').innerHTML = "<p>Request failed. Please check your connection.</p>";
    }
    xhr.send();
}