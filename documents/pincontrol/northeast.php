<?php
system("gpio -g mode 19 out");
system("gpio -g mode 26 out");

system("gpio -g write 19 1");
system("gpio -g write 26 1");
?>