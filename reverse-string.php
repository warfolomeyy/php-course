<?php
$line = trim(fgets(STDIN));
echo implode(' ', array_reverse(explode(' ', $line)));