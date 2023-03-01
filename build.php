<?php
$target = 'bin/swoole-cli-test';
$phpFile = 'test.php';

copy('bin/swoole-cli', $target);

$phpFileSize = filesize($phpFile);

`cat {$phpFile} >> {$target}`;

$fp = fopen($target, 'a');
fwrite($fp, pack('J', $phpFileSize));
fclose($fp);
