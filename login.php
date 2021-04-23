<html>
<body>
<?php
echo $_POST["name"];
$name= $_POST["Name"];
$file= fopen('Output.txt','w')
fwrite($file,$name)
?>
</body>
</html>
