<?php
require "function.php";

$id = $_GET["id"];

destroy($id);

header("Location: index.php");