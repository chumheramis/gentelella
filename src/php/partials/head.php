<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo $config['site-title']; ?> | <?php echo $config['page-title']; ?></title>

        <!-- Bootstrap -->
        <link href="../assets/plugins/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="../assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="../assets/plugins/nprogress/nprogress.css" rel="stylesheet">
        <?php
        if (!empty($config['styles']) && is_array($config['styles'])) {
            foreach ($config['styles'] as $style):
                $style['rel'] = (!empty($style['rel'])) ? $style['rel'] : 'stylesheet';
                echo '<link href="' . $style['href'] . '" rel="' . $style['rel'] . '"/>';
            endforeach;
        }
        ?>
        <!-- Custom Theme Style -->
        <link href="../assets/css/custom.min.css" rel="stylesheet">
    </head>
    <body class="<?php echo $config['body-class']; ?>">