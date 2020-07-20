<?php

session_start();

// v1 without session

//echo "Bonjour $_GET[login]";


// v2 with session
echo "Bonjour $_SESSION[login]";

?>