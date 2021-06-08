<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?php
    //$this->AssetMix->css('app');
   // $this->AssetMix->script('app')
    ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <link href="https://unpkg.com/tailwindcss@next/dist/tailwind.min.css" rel="stylesheet">
    <?= $this->fetch('meta') ?>

    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body class="flex items-center justify-center w-screen h-screen p-10 space-x-6 bg-gray-300">
<?= $this->fetch('content'); ?>

<div id="app">

</div>
</body>
</html>
