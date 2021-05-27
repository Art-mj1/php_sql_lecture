<?php

 echo '배열 페이지입니다.<br>';
 echo'---------------------<br>';

 $arr = [1,2,3,4,5,6,7,'민지'];

 echo var_dump ($arr).'<br>';
 echo $arr[0].'<br>';
 echo $arr[1].'<br>';

 echo'---------------------<br>';

 //배열의 개수 확인 count()
 echo count($arr).'<br>';

 echo'---------------------<br>';
 //함수로 선언하는 배열

 $earth=array();
 echo gettype($earth).'<br>';

 $earth[0]="Korea";
 $earth[1]="Japan";
 
 echo var_dump($earth).'<br>';
 echo $earth[0].'<br>';
 
 //배열에 여러 값을 한꺼번에 삽입하는 함수: array_push();(배열이름,[값1, 값2,........]);

 $country= array();
 array_push($country,'korea','japan','china','russia','spain');
 echo var_dump( $country).'<br>';
 echo $country[2].'<br>';
 
 echo'---------------------<br>';
 $fruit=array('f_1' => 'apple','f_2' => 'banana');
 echo $fruit['f_1'].'<br>';
 
 $arr=[1,2,3,5,7,8,9];

for ($i = 0; $i<10;$i++){
echo $i. "hello world!<br>";
}
?>