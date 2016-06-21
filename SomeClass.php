<?php
//这句话的意思是 判断是不是命令行直接执行  php xx.php
if (!count(debug_backtrace())) {
    // some usefull stuff
    print 'I am SomeClass.php which run in shell' . "\n";
}

print 'I am SomeClass.php' . "\n";

?>