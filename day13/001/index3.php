<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1> Mảng đa chiều (mảng lồng mảng)</h1>
<?php
$vietnam=[
    "hn" =>[
        "ten"=>"hà nội",
        "quan"=>[
            "hk"=>"hoàn kiếm",
            "th"=>"tây hồ",
            "cg"=>"cầu giấy",
        ]
    ],
    "hcm"=>[
        "ten"=>"hồ chí minh",
        "quận"=>[
            "td"=>"thủ đức",
            "1"=>"quận 1",
            "7"=>"quận 7",
        ]
    ],
    "dn"=>[
        "ten"=>"đà nẵng",
        "quận"=>[
            "st"=>"sơn trà",
            "hc"=>"hải châu",
            "nhs"=>"ngũ hành sơn",
        ]
    ],
];

echo "<pre>";
print_r($vietnam);
echo "<pre>";

// in ra tên thành phố
echo "<br>" .$vietnam["hn"]["ten"];
echo "<br>" .$vietnam["hcm"] ["ten"];
echo "<br>" .$vietnam["dn"]["ten"];

// in ra các quận
echo "<br>" .$vietnam["hn"]["quan"]["hk"];
?>
</body>
</html>