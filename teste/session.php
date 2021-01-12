<?php

require_once("config.php");

echo "1º ID: " . session_id() . "<br>";
session_regenerate_id();
echo "2º ID: " . session_id() . "<br>";


?>