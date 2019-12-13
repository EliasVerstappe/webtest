<?php
// All pins to output
system("gpio -g mode 10 out");
system("gpio -g mode 9 out");
system("gpio -g mode 11 out");
system("gpio -g mode 5 out");
system("gpio -g mode 6 out");
system("gpio -g mode 13 out");
system("gpio -g mode 19 out");
system("gpio -g mode 26 out");


// southeast
system("gpio -g write 13 1");
// execute for 1 second
sleep(1);

// stop last movement
system("gpio -g write 13 0");
// east
system("gpio -g write 19 1");
// execute for 1 second
sleep(1);

// stop last movement
system("gpio -g write 26 0");
// southwest
system("gpio -g write 13 1");
// system("gpio -g write 19 1"); // -> Still '1' from last movement
// execute for 1 second
sleep(1);

// stop last movement
system("gpio -g write 19 0");
// south
// system("gpio -g write 13 1"); // -> Still '1' from last movement
system("gpio -g write 26 1");
// execute for 1 second
sleep(1);

// stop last movement
system("gpio -g write 13 0");
system("gpio -g write 26 0");
// northwest
system("gpio -g write 6 1");
// execute for 1 second
sleep(1);

// stop last movement
system("gpio -g write 6 0");
// southwest
system("gpio -g write 13 1");
system("gpio -g write 19 1");
// execute for 1 second
sleep(1);

// stop last movement
system("gpio -g write 13 0");
system("gpio -g write 19 0");
// north
system("gpio -g write 26 1");
// execute for 1 second
sleep(1);

// stop last movement
system("gpio -g write 26 0");
// northwest
system("gpio -g write 6 1");
// execute for 1 second
sleep(1);

// stop last movement
system("gpio -g write 6 0");
// east
system("gpio -g write 19 1");
// execute for 1 second
sleep(1);

// stop last movement
// system("gpio -g write 19 0"); // -> reeds hoog
// northeast
system("gpio -g write 26 1");
// execute for 1 second
sleep(1);


//turn off last pin
system("gpio -g write 26 0");

?>