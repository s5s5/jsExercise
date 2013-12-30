<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>learn PHP</title>
</head>
<body><?
echo "PHP" . "<br>";
$url = "s5s5.me";
echo $url;
unset($url);
//echo $url;
echo __FILE__;
echo __LINE__;
define("NA", 123);
echo NA;

function fun($n)
{
    if ($n == 1) {
        return 1;
    } else {
        return $n * fun($n - 1);
    }
}

echo fun(1) . "<br>";
echo fun(2) . "<br>";
echo fun(3) . "<br>";
echo fun(4) . "<br>";
echo fun(5) . "<br>";

$arr = array(array(array(1, 2, 3), 'b', 'c'), 2, 3, 4, 5, 6, 7, 8, array('x', 'y', 'z'));
abc($arr);
function abc($i)
{
    if (is_array($i)) {
        foreach ($i as $j) {
            abc($j);
        }
    } else {
        echo $i . "|";
    }
}

echo filetype("C:\WINDOWS") . "<br>";
?>
<hr>
<pre><? print_r(stat("whileloop.php")); ?></pre>
<hr>
<?
if (!@$f = fopen("num.txt", "r")) {
    echo "文件不存在！";
    $num = 0;
} else {
    $num = fgets($f, 10); //获得9
    fclose($f);
}
$num++;
$ff = fopen("num.txt", "w");
fwrite($ff, $num);
fclose($ff);

$numarr = str_split($num);
foreach($numarr as $v) {
    echo $v;
}
?>
<hr>
<?
function scan_dir($arr2)
{
    echo $arr2 . "<hr><ul>";
    if (is_dir($arr2)) {
        $array = scandir($arr2);
        foreach ($array as $val) {
            echo "<li>";
            if ($val != "." && $val != ".." && is_dir($arr2 . "/" . $val)) {
                scan_dir($arr2 . "/" . $val);
                echo "</li>";
            } else {
                echo $val . "</li>";
            }
        }
    }
    echo "</ul>";
}

$arr2 = "E:/github/jsExercise/php";
scan_dir($arr2);

//print_r(scandir($arr2));
?>

</body>
</html>