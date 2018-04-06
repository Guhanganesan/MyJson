
<input  id="ageToCheck" ></p>
<button onclick="myFunction()">Try it</button>

<p>Value: <span id="demo"></span></p>

	

<script>
function checkAdult(age) {
	
           var xmlhttp = new XMLHttpRequest();
           xmlhttp.onreadystatechange = function() {
	 
           if (this.readyState == 4 && this.status == 200) {
		
           var Obj = JSON.parse(this.responseText); // Obj[0], Obj[1], if mysql_fetch_array -- Obj[0].name
		
		//a= Obj.find("test");
		
	    //document.getElementById("p1").innerHTML=Obj[0]; 
		
		
		
		//var ages = [4, 12, 16, 20];

       
       return age = document.getElementById("ageToCheck").value;


      function myFunction() {
      document.getElementById("demo").innerHTML = Obj.find(checkAdult);
      }
       
    }
};
xmlhttp.open("GET", "7.php", true);
xmlhttp.send();

}
</script>
