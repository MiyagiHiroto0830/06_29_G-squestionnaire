<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>1</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<body>
    <div class="main">
        <div class="form-title">G'sアンケート</div>
        <form action="create.php" method="POST">
            <div class="form-item">受講No</div>
            <select name="number">
                <option value="未選択">選択してください</option>
                <?php
                for ($i = 1; $i <= 35; $i++) {
                    echo "<option value='{$i}'>{$i}</option>";
                };
                ?>
            </select>
            <div class="form-item">名前</div>
            <input type="text" name="name" placeholder="回答を入力" required>
            <div class="form-item">ご自身の過去経験（概要）と、今後も大切にしたい価値観または使命（Why me）をご記入ください。 </div>
            <input type="text" name="text1" placeholder="回答を入力" required style="width:300px">
            <div class="form-item">G'sに入学して2ヵ月。どんな新しいことを得ましたか？なにか感動することはありましたか？ </div>
            <input type="text" name="text2" placeholder="回答を入力" required style="width:300px">
            <div class="form-item">卒業後の進路</div>
            <?php
            $types = array("起業", "個人事業、副業", "新規事業", "IT業界へ転職", "現状維持");
            ?>
            <select name="catagory">
                <option value="未選択">選択してください</option>
                <?php
                foreach ($types as $type) {
                    echo "<option value='{$type}'>$type</option>";
                };
                ?>
            </select>
            <div class="form-item">相談したいこと</div>
            <?php
            $types2 = array("プログラミング、自宅学習の進め方", "進路（起業・就職・社内事業）", "企画の設計", "起業の進め方", "G'sの活用方法");
            ?>
            <select name="catagory2">
                <option value="未選択">選択してください</option>
                <?php
                foreach ($types2 as $type2) {
                    echo "<option value='{$type2}'>$type2</option>";
                };
                ?>
            </select>
            <div>
                <input type="submit" value="送信">
            </div>
    </div>

    </form>
</body>

</html>