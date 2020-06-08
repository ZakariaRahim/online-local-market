<script>
		function substract(){
			var first=parseInt(document.getElementById("NOC").value);
			var second=parseInt(document.getElementById("NOSC").value);
			var result=first - second;
			document.getElementById("RC").value=result;
		}
		</script>
		<script>
		function tas(){
			var poc=parseInt(document.getElementById("POC").value);
			var nosc=parseInt(document.getElementById("NOSC").value);
			var total=poc * nosc;
			document.getElementById("TAS").value= total;
		}
		</script>
		<script>
			function dat(){
				var dateO=new Date();
				var month=dateO.getUTCMonth() + 1;
                 var day=dateO.getUTCDate();
				 var year=dateO.getUTCFullYear();
		var newdate =year +"-" + month + "-" + day;
		document.getElementById("date").value= newdate;
	}
		</script>