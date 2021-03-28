<?php
$s = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi blandit tellus ante, at hendrerit sapien viverra a. Ut lobortis sem non nisi.";
$str = ">". wordwrap($s, 20, "\n>");
echo $str;
