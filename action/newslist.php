<?php
$data = array(
	array(
		"id" => 1,
		"title" => "保利物业发文1",
		"writer" => "小名1",
		"date" => 1455808822088,
		"content" => "保利物业发文内容1"
	),
	array(
		"id" => 2,
		"title" => "保利物业发文2",
		"writer" => "小名2",
		"date" => 1455808822088,
		"content" => "保利物业发文内容2"
	),
	array(
		"id" => 3,
		"title" => "保利物业发文3",
		"writer" => "小名3",
		"date" => 1455808822088,
		"content" => "保利物业发文内容3"
	),
	array(
		"id" => 4,
		"title" => "保利物业发文4",
		"writer" => "小名4",
		"date" => 1455808822088,
		"content" => "保利物业发文内容4"
	),
	array(
		"id" => 5,
		"title" => "保利物业发文5",
		"writer" => "小名5",
		"date" => 1455808822088,
		"content" => "保利物业发文内容5"
	)
);
$result = array(
	"errno" => 0,
	"data" => $data
);
echo json_encode($result);