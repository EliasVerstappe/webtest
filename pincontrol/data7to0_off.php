<?php
system("gpio -g mode 10 out");
system("gpio -g mode 9 out");
system("gpio -g mode 11 out");
system("gpio -g mode 5 out");
system("gpio -g mode 6 out");
system("gpio -g mode 13 out");
system("gpio -g mode 19 out");
system("gpio -g mode 26 out");

system("gpio -g write 10 0");
system("gpio -g write 9 0");
system("gpio -g write 11 0");
system("gpio -g write 5 0");
system("gpio -g write 6 0");
system("gpio -g write 13 0");
system("gpio -g write 19 0");
system("gpio -g write 26 0");
?>