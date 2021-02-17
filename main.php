<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.inc.php' ?>
</head>

<body>
    <div class="flex-container">

        <div class="header">
            <?php include 'logo.inc.php' ?>
            <?php include 'menu.inc.php' ?>
        </div>

        <div class="about_me">

          <h1> <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="img/php.jpg">'; ?>
                </div>

                <div class="fullname">
                    <p> Меня зовут
                    <?php echo $name, ' ', $surname . '<br>';
                          echo 'город', ' ', $city; ?>
                    </p>

                    <p> Мне
                    <?php  echo $age;   ?>
                    лет </p>
                    <p> Мы научились создавать переменные </p>
                    <p> Изучили простые операции с ними </p>
                </div>
            </div>

            <div class="knowledge">

                    <?php  include 'knowledge.inc.php'; ?>
                    <?php echo $a, ' ', $b, ' ', $c; ?> <br>

                    <?php
                        $a = 10;
                        $b = 20;
                        $c = $a + $b;
                        echo $c;
                    ?>   <br>
                     <?php
                        echo $d;
                    ?> <br>

                    <?php
                        echo "Результат сложения $e и $f = $x1 <br>
                        Остаток от деления $e и $f = $x2";
                    ?> <br>

                    <?php
                        echo "Переменная \$val находиться на $val строке";
                    ?> <br>

                    <?php
                    for($i = 0; $i < 3; $i++)
                    {
                    echo " Счетчик :$i <br>";
                    }
                    flush();
                    sleep(1);
                    ?>



            </div>
            <div class="article">
                <p class="text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Recusandae asperiores ducimus dolore explicabo. Animi est amet quibusdam molestias!
                    Minus laudantium sapiente dignissimos possimus natus cumque delectus sed, accusantium totam quia?
                </p>
            </div>
        </div>
        <?php include 'footer.inc.php' ?>
    </div>
</body>
</html>
