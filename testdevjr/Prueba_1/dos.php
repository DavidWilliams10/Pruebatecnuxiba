<?php
$userid=($_POST['id']);
$title=($_POST['title']);
$completed=($_POST['cbox']);

echo $userid;
echo $title;
echo $completed;


echo "<script >";
echo "fetch('https://jsonplaceholder.typicode.com/users/".$userid."/todos', {";
echo "method: 'POST',";
echo "body: JSON.stringify({";
echo "completed: '".$completed."',";
echo "title: '".$title."',";
echo "userId: ".$userid.",";
echo "}),";
echo "headers: {";
echo "'Content-type': 'application/json; charset=UTF-8',";
echo "},";
echo "})";
echo ".then((response) => response.json())";
echo ".then((json) => console.log(json));";
echo "</script>";


?>
