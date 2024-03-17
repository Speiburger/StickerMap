<?php
//error_reporting(E_ALL);
//ini_set('display_errors', '1');
// Test of Vscode.dev
$apiMethod = $_POST['method'];

if ($apiMethod == 'getStickerList') {
	echo '{
"list": [
1,
2,
3,
4,
10
]
}';
}

if ($apiMethod == 'getStickerDetails' && $_POST['id'] == 0) {
	echo '{
"name": "test",
"description": "Voluptatem sit placeat consequatur inventore sed. Ratione sit quo quae quasi reiciendis fuga. Quaerat dolorem vitae natus reiciendis beatae soluta sed non. In ullam non sed sunt sunt voluptatem qui aperiam. Possimus fugit qui mollitia earum perspiciatis",
"lat": 0.351354,
"long": 0.384975,
"imageLink": "https://www.spd-friesoythe.de/wp-content/uploads/2021/07/1024-1536-1.jpg"
}';
}
else if ($apiMethod == 'getStickerDetails' && $_POST['id'] == 1) {
	echo '{
"name": "Test2",
"description": "Hallo, das hier ist ein Test",
"lat": 0.12674,
"long": 0.93456,
"imageLink": "https://www.spd-friesoythe.de/wp-content/uploads/2021/07/1024-1536-1.jpg"
}';
}
