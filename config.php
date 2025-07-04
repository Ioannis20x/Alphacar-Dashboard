<?php
include "db.php"

$env = parse_ini_file(".env");
print($env["SITENAME"])
;

