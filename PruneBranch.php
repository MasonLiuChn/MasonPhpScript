#!/usr/bin/php
<?php
require_once("SomeClass.php");
// system() 输出并返回最后一行shell结果。 
// exec() 不输出结果，返回最后一行shell结果，所有结果可以保存到一个返回的数组里面。 
// passthru() 只调用命令，把命令的运行结果原样地直接输出到标准输出设备上。
// python 中
// 在cmd 中直接运行.py文件,则__name__的值是'__main__';
// 而在import 一个.py文件后,__name__的值就不是'__main__'了;
// 从而用if __name__ == '__main__'来判断是否是在直接运行该.py文件

class Foo
{
    public $aMemberVar = 'aMemberVar Member Variable';
    public $aFuncName = 'aMemberFunc';
    function aMemberFunc()
    {
        print 'Inside `aMemberFunc()`' . "\n";
    }
}
$foo2 = new Foo();
$foo2->aMemberFunc();

if (!count(debug_backtrace())) {
    $projectDir = "/Users/admin/Project/AS_WORK/Jarvis";
    chdir($projectDir);
    echo getcwd() . "\n";
    exec("git branch -r --merged", $resultArray);
    foreach ($resultArray as $value) {
        //==  两边值类型不同的时候，要先进行类型转换，再比较。 === 不做类型转换，类型不同的一定不等。
        if (strpos($value, "dev") === false && strpos($value, "master") === false) {
            print $value."\n";
            $pieces = explode("/", $value, 2);
            print_r($pieces);
            //passthru("git push " . $pieces[0] . " :" . $pieces[1]);
            //passthru("git branch -d " . $pieces[1]);
        }
    }
}
?>