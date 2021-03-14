<?php
$users1 = ["Mark" => "Hello", "Adam" => "So Sorry", "Diana" => "Bye"];
$users2 = ["Tom" => "Run", "Mark" => "Love", "Adam" => "Cury"];
$r = array_merge($users1, $users2);
print_r ($r);