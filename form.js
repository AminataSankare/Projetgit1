var $genre = document.getElementById('prop');
var $genr = document.getElementById('pro');
onchange = function() {
    if (document.getElementById('prop').checked) {
        document.getElementById('moi').style.visibility = "visible";
        document.getElementById('lui').style.visibility = "hidden";
        document.getElementById('lui').style.height = "5px";

    } else if (document.getElementById('pro').checked) {
        document.getElementById('lui').style.visibility = "visible";
        document.getElementById('lui').style.height = "400px";

        document.getElementById('moi').style.visibility = "hidden";

    } else {
        document.getElementById('lui').style.visibility = "hidden";
        document.getElementById('moi').style.visibility = "hidden";

    }
}