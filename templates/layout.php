<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> <?php echo f('about', 'title') ?></title>

    <script src="<?php echo Theme::base('vendor/jquery/jquery.js') ?>"></script>
    <script src="<?php echo Theme::base('vendor/js/main.js') ?>"></script>

    <link rel="stylesheet" href="<?php echo Theme::base('vendor/css/naked.min.css') ?>">
    <link rel="stylesheet" href="<?php echo Theme::base('vendor/css/main.css') ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="row">
                <div class="span-2">
                    <a class="back-button" href="<?php echo URL::base() ?>">Home</a>
                </div>
                <div class="span-8">
                    <h6 class="label title"><?php echo f('page.header', 'Bono Application') ?></h6>
                    <p><?php echo f('page.subheader', 'Great web application') ?></p>
                </div>
                <div class="span-2">
                    <a href="<?php echo URL::site('/menu') ?>" class="icon-menu"></a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <?php echo f('notification.show') ?>
        <div class="container">
            <?php echo $body ?>
        </div>
    </main>
</body>
</html>
