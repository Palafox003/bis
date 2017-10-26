<?php 
session_start();
session_destroy();

echo "Session destroy.";
echo "<br>";
echo "<a href='../'>Home</a>";
echo "<script>location.href='../'</script>";
?>