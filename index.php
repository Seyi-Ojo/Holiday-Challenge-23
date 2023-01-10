<!DOCTYPE html>
<html>
<body>

<h1 style="color: purple;"> Hello there! This is my server's IP address! </h1>
<p style="font-size: 20px;"> Programming Language: PHP </p>
<h2>
<?php

echo "MY HOSTNAME IS: " .gethostname();

?>
</h2>
<h3 style="color: purple;">
<?php

$currentTime = date('h:i:s A');
   echo "The Current Time Is : $currentTime";
?>
</body>
</html>
