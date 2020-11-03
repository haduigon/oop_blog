<?php
$mysqli = new mysqli("db", "root", "", "skillup");
$mysqli->query("insert into users (email, password) values ('00000','skj');");

