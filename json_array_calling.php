<p id="p1"> </p>
<script>
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var Obj = JSON.parse(this.responseText);
        document.getElementById("p1").innerHTML = Obj[3];
    }
};
xmlhttp.open("GET", "3.php", true);
xmlhttp.send();
</script>