<?php      
function character_lower($string)
{
    $bool = 0;
    $array_string = str_split($string);
    $lowstring = str_split(mb_strtolower($string));
    
    for ($i = 0; $i < count($array_string); $i++) { 
        if ($array_string[$i] == "I") {
            $bool++;
            $lowstring[$i] = "ı";
        } else if ($array_string[$i] == "İ") {
            $lowstring[$i] = "i";
        }
    }
    
    if ($bool > 0) {
        return implode("", $lowstring);            
    } else {
        return mb_strtolower($string);
    }
}

function character_upper($string) 
{
    $bool = 0;
    $array_string = str_split($string);
    $upstring = str_split(mb_strtoupper($string));
    
    for ($i = 0; $i < count($array_string); $i++) { 
        if ($array_string[$i] == "i") {
            $bool++;
            $upstring[$i] = "İ";
        } else if ($array_string[$i] == "ı") {
            $upstring[$i] = "I";
        }
    }
    
    if ($bool > 0) {
        return implode("", $upstring);            
    } else {
        return mb_strtoupper($string);
    }
}

$string = "IİUÜOÖ";
$string2 = "ıiuüoö";
$a = array(0 => array("a" => "red"), 1 => array("b" => "green"), 2 => array("c" => "blue"));
$string3 = "red";

function array_search_recursive($search, $array)
{
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            $result = array_search_recursive($search, $value);
            if ($result !== null) {
                return $result;
            }
        } else {
            if ($value == $search) {
                return $key;
            }
        }
    }
    
    return null;
} 

function export_array_values($array)
{
    $result = [];
    foreach ($array as $value) {
        foreach ($value as $v) {
            $result[] = $v;
        }
    }
    
    return $result;
}

function bubble_sort($array) 
{ 
    $c = count($array); 
    for ($i = 0; $i < $c - 1; $i++) { 
        for ($j = 0; $j < $c - $i - 1; $j++) { 
            if ($array[$j] > $array[$j + 1]) { 
                $temp = $array[$j]; 
                $array[$j] = $array[$j + 1]; 
                $array[$j + 1] = $temp; 
            }   
        }  
    }
    
    return $array;
}

$array_one = [1, 2];
$array_one = array_add(5, $array_one);

function array_add($variable, $array)
{
    $array[] = $variable;
    return $array;
}


class MyThread extends Thread 
{
    private $sleepDuration;

    public function __construct($sleepDuration)
    {
        $this->sleepDuration = $sleepDuration;
    }

    public function run()
    {
        echo "Thread " . $this->getThreadId() . " çalışıyor ve " . $this->sleepDuration . " saniye bekliyor." . PHP_EOL;
        sleep($this->sleepDuration);
        echo "Thread " . $this->getThreadId() . " işlemi tamamlandı." . PHP_EOL;
    }
}

$thread1 = new MyThread(2);
$thread2 = new MyThread(4);
$thread3 = new MyThread(1);

$thread1->start();
$thread2->start();
$thread3->start();

$thread1->join();
$thread2->join();
$thread3->join();

echo "All threads are completed." . PHP_EOL;


function write_to_file($filename, $content)
{
    if (file_put_contents($filename, $content) === false) {
        echo "Dosya yazılamadı: " . $filename . PHP_EOL;
    } else {
        echo "Dosyaya yazıldı: " . $filename . PHP_EOL;
    }
}

function read_from_file($filename)
{
    if (file_exists($filename)) {
        $content = file_get_contents($filename);
        if ($content === false) {
            echo "File cannot read: " . $filename . PHP_EOL;
        } else {
            echo "Content from file: " . $content . PHP_EOL;
            return $content;
        }
    } else {
        echo "File cannot found: " . $filename . PHP_EOL;
    }
    return null;
}

$filename = "example.txt";
$content = "Hello World!";

write_to_file($filename, $content);
read_from_file($filename);

?>
