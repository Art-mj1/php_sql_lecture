<?php


echo '데이터 타입 페이지입니다<br>';
echo'------------------------------<br>';

//원시타입:문자 , 숫자, boolean(true,false)
//데이터 타입 확인 함수:gettype()
//명시적 형 변환: (형태명(int))변수 - 문자 형태의 숫자일 경우 숫자로 사용할 때 명시적으로 형태를 변화시켜준다

$num=12;
echo gettype($num).'<br>';
//integer:정수, double:실수

$str="hello";
echo gettype($str).'<br>';

$str_num ='123';
echo gettype($str_num).'<br>';

$str_num1="3";
echo gettype($str_num1).'<br>';

$minus= $str_num+$str_num1;

echo"------------------------------<br>";
$str_num = (int) $str_num;

echo gettype($str_num);

echo"------------------------------<br>";
$fff =3==2;
// echo gettype($fff);

if($fff){
 echo "a";
} else {
 echo "b";
}
?>