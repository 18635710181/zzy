<?php
//2
// class GetNames {
// /**
//  * 获取一个函数的依赖
//  * @param  string|callable $func
//  * @param  array  $param 调用方法时所需参数 形参名就是key值
//  * @return array  返回方法调用所需依赖
//  */
//     function getFucntionParameter($func, $param = []) {
//         if (!is_array($param)) {
//             $param = [$param];
//         }
//         $ReflectionFunc = new \ReflectionFunction($func);
//         $depend = array();
//         foreach ($ReflectionFunc->getParameters() as $value) {
//             if (isset($param[$value->name])) {
//                 $depend[] = $param[$value->name];
//             } elseif ($value->isDefaultValueAvailable()) {
//                 $depend[] = $value->getDefaultValue();
//             } else {
//                 $tmp = $value->getClass();
//                 if (is_null($tmp)) {
//                     throw new \Exception("Function parameters can not be getClass {$class}");
//                 }
//                 $depend[] = $this->get($tmp->getName());
//             }
//         }
//         return $depend;
//     }

//     //获取方法里面的参数名
//     function getFucntionParameterName($func) {
//         $ReflectionFunc = new \ReflectionFunction($func);
//         $names = array();
//         foreach ($ReflectionFunc->getParameters() as $value) {
//             $names[] = $value->name;
//         }
//         return $names;
//     }

//     private function _test($a, $c, $b, $d = 20) {

//     }
// }

// function test1($a, $b, $c) {

// }

//4
// $a=123;//整型
// $b='123';//字符串型
// $c=1.23;//浮点型
// $d=true;//布尔型
// $e=null;//NULL型
// if(is_int($a)){//判断类型
// echo '$a是整型','<br />';
// }else{
// echo '$a不是整型','<br />';
// }
// if(is_string($b)){//判断类型
// echo '$b是字符串型','<br />';
// }else{
// echo '$b不是字符串型','<br />';
// }
// if(is_float($c)){//判断类型
// echo '$c是浮点型','<br />';
// }else{
// echo '$c不是浮点型','<br />';
// }
// if(is_bool($d)){//判断类型
// echo '$d是布尔型','<br />';
// }else{
// echo '$d不是布尔型','<br />';
// }
// if(is_null($e)){//判断类型
// echo '$e是NULL型','<br />';
// }else{
// echo '$e不是NULL型','<br /><br /><br />';
// }
//5
// $new = new GetNames();
// $names = $new->getFucntionParameterName('test1');
// $methords = get_class_methods('GetNames');
// echo "<pre>";
// print_r($names);
// print_r($methords);
// echo "</pre>";
// function static_global(){
//     global $glo;
//     $glo++;
//     echo $glo.'<br>';
// }
/*//7
//$var = 0;
$var = 12;
// Evaluates to true because $var is empty
if (empty($var)) {
    echo $var;
}

// Evaluates as true because $var is set
if (isset($var)) {
    echo $var;
}*/
// static_global(); //1
// static_global(); //2
// static_global(); //3
// echo $glo . '<br>'; 
//3
// $a=123;//整型
// $b='123';//字符串型
// $c=1.23;//浮点型
// $d=true;//布尔型
// $e=null;//NULL型
// echo '$a是',gettype($a),'型','<br />';
// echo '$b是',gettype($b),'型','<br />';
// echo '$c是',gettype($c),'型','<br />';
// echo '$d是',gettype($d),'型','<br />';
// echo '$e是',gettype($e),'型','<br /><br /><br />';

//6
// function foo()
// {
//     static $bar;
//     $bar++;
//     echo "Before unset: $bar, ";
//     unset($bar);
//     $bar = 23;
//     echo "after unset: $bar\n";
// }

// foo();
// foo();
// foo();



?>
