<?php
$data = json_decode( file_get_contents('https://jsonplaceholder.typicode.com/users'), true );

for ($i=0; $i < count($data) ; $i++) { 
	echo "<div>";
	$id = $data[$i]["id"]."<br>";
	echo $id;
	echo $data[$i]["name"]."<br>";
	echo "</div>";
	echo "<input type='button' value = 'Seleccionar' onClick='ver(".$data[$i]["id"].");'/>";
	echo "<div id='i".$data[$i]["id"]."'>";
	 
		echo "Username: ".$data[$i]["username"]."<br>";
		echo "Email: ".$data[$i]["email"]."<br>";
		echo "Phone: ".$data[$i]["phone"]."<br>";
		echo "Website: ".$data[$i]["website"]."<br>";
		echo "<button id='post' value='posts'><a href='todos.php?userid=".$data[$i]["id"]."'>todos</a></button>";
		echo "<button id='post' value='posts'><a href='post.php?userid=".$data[$i]["id"]."'>posts</a></button>";
	echo "</div>";
	

}

?>

<script>
	$('#i').hidden();
	function ver(i){
		//alert(i);
		//!$('#i'+i).isVisible();
		if ($('#i'+i).is(':hidden'))
   $('#i'+i).show();
else
   $('#i'+i).hide();
	}

	function ver1(i){

	}

</script>
<script src="jquery-3.1.1.min.js"></script>