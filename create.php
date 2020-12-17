<?php
// var_dump($_POST);
// exit();
$number = $_POST["number"];
$name = $_POST["name"];
$text1 = $_POST["text1"];
$text2 = $_POST["text2"];
$catagory = $_POST["catagory"];
$catagory2 = $_POST["catagory2"];
$write_data = "{$number} {$name} {$text1} {$text2} {$catagory} {$catagory2}\n";
$file = fopen("data/data.csv", "a");
flock($file, LOCK_EX);
fwrite($file, $write_data);
flock($file, LOCK_UN);
fclose($file);
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.min.js"></script>
    <script src="mychart.js"></script>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<body>
    <div class="contents">
        <div class="form-title">アンケートの回答ありがとうございました</div>
        <div class="form-item">■ 受講No</div>
        <?php echo $_POST['number']; ?>
        <div class="form-item">■ 名前</div>
        <?php echo $_POST['name']; ?>
        <div class="form-item">■ ご自身の過去経験（概要）と、今後も大切にしたい価値観または使命（Why me）</div>
        <?php echo $_POST['text1']; ?>
        <div class="form-item">■ G'sに入学して2ヵ月。どんな新しいことを得ましたか？なにか感動することはありましたか？</div>
        <?php echo $_POST['text2']; ?>
        <div class="form-item">■ 卒業後の進路</div>
        <?php echo $_POST['catagory']; ?>
        <div class="form-item">■ 相談したいこと</div>
        <?php echo $_POST['catagory2']; ?>
    </div>
    <!--ここにグラフが挿入されます-->
    <div style="width: 100%; height: 100%;">
        <canvas id="myChart" style="width: 100%; height: auto;"></canvas>
    </div>
    <script>

    </script>
</body>

</html>