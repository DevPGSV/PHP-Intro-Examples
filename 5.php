<?php


for ($i = 0; $i < 1000; $i++) {
    echo ".";
    usleep(3000);
}


echo "\n\n\n";
sleep(1);



for ($i = 0; $i <= 50; $i++) {
    $progress = $i / 50 * 100;
    echo "\r Downloading [" . str_repeat("#", $i) . str_repeat(" ", 50-$i) . "] $progress%\t";
    usleep(50000);
}

echo "\n\n\n";
sleep(1);


for ($i = 0; $i <= 5; $i++) {
    for ($j = 0; $j <= 50; $j++) {
        echo "\r[" . str_repeat("#", $j) . str_repeat(" ", 50-$j) . "]\t";
        usleep(10000);
    }
    for ($j = 50; $j >= 0; $j--) {
        echo "\r[" . str_repeat("#", $j) . str_repeat(" ", 50-$j) . "]\t";
        usleep(10000);  
    }
}


echo "\n\n\n";
sleep(1);

for ($i = 0; $i <= 5; $i++) {
    echo "\r".date("r")."\t";
    sleep(1);
}


echo "\n\n\n";
