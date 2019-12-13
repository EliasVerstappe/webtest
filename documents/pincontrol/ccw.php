<?php
system("gpio -g mode 6 out");
system("gpio -g mode 19 out");

system("gpio -g write 6 1");
system("gpio -g write 19 1");
?>