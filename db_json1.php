<h1 onclick="myFunction()"> Guhan </h1>
<h1 onclick="myFunction1()"> Mani </h1>


<p id="p1"> </p>
<p id="p2"> </p>
<p id="p3"> </p>
<p id="p4"> </p>
<p id="p5"> </p>




<p id="p6"> </p>
<p id="p7"> </p>
<p id="p8"> </p>
<p id="p9"> </p>
<p id="p10"> </p>
<p id="p11"> </p>
<p id="p12"> </p>







<script>
function myFunction(){
	
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
	 
    if (this.readyState == 4 && this.status == 200) {
		
        var Obj = JSON.parse(this.responseText);
		
        document.getElementById("p1").innerHTML = Obj[0];
        document.getElementById("p2").innerHTML = Obj[1];
        document.getElementById("p3").innerHTML = Obj[2];
        document.getElementById("p4").innerHTML = Obj[3];
        document.getElementById("p5").innerHTML = Obj[4];
        document.getElementById("p6").innerHTML = Obj[5];
		
		
    }
};
xmlhttp.open("GET", "4.php", true);
xmlhttp.send();

}
</script>



<script>
function myFunction1(){
	
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
	 
    if (this.readyState == 4 && this.status == 200) {
		
        var Obj = JSON.parse(this.responseText);
		
        document.getElementById("p6").innerHTML = Obj[0];
        document.getElementById("p7").innerHTML = Obj[1];
        document.getElementById("p8").innerHTML = Obj[2];
        document.getElementById("p9").innerHTML = Obj[3];
        document.getElementById("p10").innerHTML = Obj[4];
        document.getElementById("p11").innerHTML = Obj[5];
        document.getElementById("p12").innerHTML = Obj[6];
		
		
		
		
    }
};
xmlhttp.open("GET", "5.php", true);
xmlhttp.send();

}
</script>