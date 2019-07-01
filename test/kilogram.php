<?php

require "../../../autoload.php";

use Jiny\Convert\Weight\Kilogram as WeightKilogram;

// $obj = new Jiny\Convert\Length\Foot(1);
$obj = new WeightKilogram(1);

// 타입확인
echo $obj::TYPE."\n";
echo $obj->type()."\n";

// 그램 변환
echo $obj->gram()."\n";

// 직접 지정
echo $obj->gram(2)."\n";

// 헬퍼함수 처리
// echo convFootCenti(3);
