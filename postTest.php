<?php

    header('Content-Type:text/html; charset=utf-8');
    
    $name=$_POST['name'];
    $pw=$_POST['pw'];
    $gender=$_POST['rg1'];
    $msg=$_POST['msg'];
    $brand=$_POST['sel'];
    //체크박스에 선택된 값은 여러개일 수 있어서 배열로 받아짐
    $fruits=$_POST['fruits'];   //대입된 $fruits변수는 배열이지만 배열은 빼고 이름만 사용한다

    //textarea에서 입력된 값 중 줄바꿈문자(\n)를 브라우저에서 출력하면 
    //한줄로 보여지므로 \n을 <br>로 변경해줘야만 함
    //$msg=str_replace("\n", "<br>", $msg); //사용자가 윈도우인지 리눅스인지에 따라 결과가 달라짐
    $msg= nl2br($msg);

    echo "$name <br>";
    echo "$pw <br>";
    echo "$gender <br>";
    echo "$msg <br>";
    echo "$brand <br>";

    
    $num = count($fruits);      //배열의 길이를 구해주는 함수
    for($i=0;$i<$num;$i++){
        echo "$fruits[$i], ";
    }

?>