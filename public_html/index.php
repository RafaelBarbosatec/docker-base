
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Hello World!</title>
    </head>
    <body>
        <img src="http://blog.osteel.me/images/2015/12/18/docker-tutorial2.gif" alt="Hello World!" />
<br/>
        <?php
       $conn = mysqli_connect("mysql", "root", "root") or die(mysqli_error());
		echo "Conectado na base<br />";
		$res = mysqli_query($conn, "SHOW DATABASES");
		echo "<pre>";
		while($row = mysqli_fetch_assoc($res)){
			print_r($row);
		}
		echo "</pre>";
        ?>
    </body>
</html>
