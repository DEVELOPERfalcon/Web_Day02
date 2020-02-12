<?php

    $files = $_FILES['aaa'];

    //files라는 2차원배열의 사이즈
    $num = count($files);           //출력: 파일 1개의 길이+에러칸 (파일이름, 임시저장소 경로, 파일종류, 파일크기, 에러칸  총 5개)
    $num2 = count($files['name']); //출력: 선택한 파일 갯수

    //즉, 전송된 파일의 개수를 알고싶다면.. $files를 count하면 안되고
    //$files['name']의 count()를 해야함

    //전송된 파일 개수
    $fileNum = count($files['name']);
    //파일의 개수만큼 반복
    for($i=0;$i<$fileNum;$i++){
        $srcName = $files['name'][$i];  //원본파일명
        $tmpName = $files['tmp_name'][$i];  //임시저장소 경로
        $fileType = $files['type'][$i]; //파일 종료
        $fileSize = $files['size'][$i]; //파일 크기

        echo "$srcName <br>";
        echo "$fileType <br>";
        echo "$fileSize <br>";
        echo "$tmpName <br>";
        echo "===================<br>";

        $dstName = date('Ymdhis').$srcName;
        move_uploaded_file($tmpName, $dstName);
    }

?>