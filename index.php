<?php require_once('data.php') ?>
<?php require_once('Menu.php') ?>
<?php require_once('User.php') ?>
<!doctype html>
<!--[if IE 6]> <html class="ie6"> <![endif]-->
<!--[if IE 7]> <html class="ie7"> <![endif]-->
<!--[if IE 8]> <html class="ie8"> <![endif]-->
<!--[if IE 9]> <html class="ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html lang="ja">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<!--page info-->
<title>PHPtest</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<!--og-->
<meta property="og:type" content="website" />
<meta property="og:url" content="" />
<meta property="og:image" content="" />
<meta property="og:title" content="" />
<meta property="og:description" content="" />
<meta property="og:site_name" content="" />
<!--favicon-->
<link rel="shortcut icon" href=""/>
<!--css-->
<link rel="stylesheet" type="text/css" href="assets/css/index.css" media="all" />
<!--js-->
<script type="text/javascript" src="assets/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="assets/js/easing.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>

<!--[if lt IE 10]>
<script type="text/javascript" src="assets/js/html5shiv.min.js"></script>
<script type="text/javascript" src="assets/js/respond.min.js"></script>
<script type="text/javascript" src="assets/js/flexibility.js"></script>
<![endif]-->

</head>

<body>
    <div class="wrapper">
        <h1>
            php
        </h1>
        <main>
            <div class="menu">
                <ul>
                    <?php foreach($menus as $menu): ?>
                    <li>
                        <dl>
                            <dt><?php echo $menu->getName() ?></dt>
                            <dd><?php echo $menu->getText() ?></dd>
                        </dl>
                        <?php if($menu instanceof Drink) :?>
                            <p><?php echo $menu->getType() ?></p>
                        <?php else : ?>
                            <?php for($i=0;$i<$menu->getStar();$i++) :?>
                                <span>★</span>
                            <?php endfor ?>
                        <?php endif ?>
                    </li>
                    <?php endforeach ?>
                    <p>
                        総メニュー数：<?php echo Menu::getCount() ?>
                    </p>
                </ul>
            </div>
            <div class="userData">
                <ul>
                <?php foreach($users as $user) : ?>
                    <li>
                        <p>名前：<?php echo $user->getName() ?></p>
                        <p>メールアドレス:<?php echo User::strtoupper($user->getMail()) ?></p>
                        <p>TEL：<?php echo $user->getTel() ?></p>
                        <p>コメント：<?php echo $user->getMemo() ?></p>
                    </li>
                <?php endforeach ?>
                </ul>
            </div>
        </main>
    </div>
</body>
</html>
