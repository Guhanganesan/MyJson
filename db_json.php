<h1 onclick="myFunction()"> Guhan </h1>
<h1 onclick="myFunction1()"> Mani </h1>
<p id="p1"> </p>
<p id="p2"> </p>
<p id="p3"> </p>
<p id="p4"> </p>
<p id="p5"> </p>
<script>
function myFunction(){
	
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
	 
    if (this.readyState == 4 && this.status == 200) {
		
        var Obj = JSON.parse(this.responseText);
		/*
        document.getElementById("p1").innerHTML = Obj[0];
        document.getElementById("p2").innerHTML = Obj[1];
        document.getElementById("p3").innerHTML = Obj[2];
        document.getElementById("p4").innerHTML = Obj[3];
        document.getElementById("p5").innerHTML = Obj[4];
        document.getElementById("p6").innerHTML = Obj[5];
		*/
		y =Obj.length;
		
		for(i=0;i<y; i++)
		{
		document.write(Obj[i]+"<br>");
		}
    }
};
xmlhttp.open("GET", "4.php", true);
xmlhttp.send();

}
</script>



<script>
/*
function myFunction1(){
	
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
	 
    if (this.readyState == 4 && this.status == 200) {
		
        var Obj = JSON.parse(this.responseText);
		/*
        document.getElementById("p1").innerHTML = Obj[0];
        document.getElementById("p2").innerHTML = Obj[1];
        document.getElementById("p3").innerHTML = Obj[2];
        document.getElementById("p4").innerHTML = Obj[3];
        document.getElementById("p5").innerHTML = Obj[4];
        document.getElementById("p6").innerHTML = Obj[5];
		
		y =Obj.length;
		
		for(i=0;i<y; i++)
		{
		document.write(Obj[i]+"<br>");
		}
    }
};
xmlhttp.open("GET", ".php", true);
xmlhttp.send();

}*/
}*/
</script>