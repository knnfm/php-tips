<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        <?php
        // 初期値の設定
        $params = array(10, 20, 30, 40, 50, 60, 70, 80, 90, 100);

        // 回す
        foreach ($params as $p) {
            echo $p;
        }

        // arrayの表示
        echo print_r($params, true);
        ?>
    </body>
</html>