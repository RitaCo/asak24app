<!DOCTYPE html>
<html lang="fa">
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

    <?= $this->Html->css(['tailwind.min.css', 'full.css', 'app', 'fontiran']) ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>

    <?= $this->fetch('script') ?>
</head>
<body class="flex items-center justify-center w-screen h-screen p-10 space-x-6 bg-gray-300">
<?= $this->Flash->render() ?>
<?= $this->fetch('content'); ?>

<div id="app">

</div>
</body>
</html>
