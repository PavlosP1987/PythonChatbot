<?php 

$command = escapeshellcmd('python3 pip.py');
$output = shell_exec($command);
echo $output;

$command1 = escapeshellcmd('python3 train.py');
$output1 = shell_exec($command1);
echo $output1;

$command2 = escapeshellcmd('python3 main.py');
$output2 = shell_exec($command2);
echo $output2;

