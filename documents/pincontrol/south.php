<?php
system("gpio -g mode 13 out");
system("gpio -g mode 26 out");

system("gpio -g write 13 1");
system("gpio -g write 26 1");
?>