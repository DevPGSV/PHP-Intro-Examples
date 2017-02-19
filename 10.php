<html>
<body>

<ul>
<?php for ($i = 1; $i <= 10; $i++) echo "<li>$i</li>\n"; ?>
</ul>





<?php
/*
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://jsonplaceholder.typicode.com/photos");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
curl_close($ch);
$photos = json_decode($output, true);

echo '<table border="1">';
foreach ($photos as $i => $photo) {
    $id = $photo['id'];
    $title = $photo['title'];
    $url = $photo['url'];
    $thumbnail = $photo['thumbnailUrl'];
    echo "<tr><td>$id</td><td><a href='$url'>$title</a></td><td><img src='$thumbnail'></td></tr>\n";
    if ($i >= 50) break;
}
echo '</table>';
*/
?>



</body>
</html>