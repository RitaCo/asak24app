<?php
/**
 * @var \App\View\AppView $this
 */
?>
<!DOCTYPE html>
<html dir="rtl" lang="fa" data-theme="Emerald">
<head>
    <?= $this->Html->charset(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> مدیریت آساک </title>
    <?= $this->Html->meta('icon') ?>
    <?php
    //$this->AssetMix->css('app');
    // $this->AssetMix->script('app')
    ?>
    <?= $this->Html->css(['tailwind.min.css', 'full.css', 'app', 'fontiran']) ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>

</head>
<body class=" bg-gray-200">

<div class="flex h-screen ">
    <?= $this->element('Admin/sidebar-left1'); ?>

    <div class="flex-1 flex flex-col overflow-hidden">
        <?= $this->element('Admin/header'); ?>

        <main class="flex-1 overflow-x-hidden overflow-y-auto ">
            <div class="container mx-auto px-6 py-8">
                <?= $this->fetch('content'); ?>
            </div>
        </main>
    </div>
</div>


<?= $this->fetch('script') ?>
</body>
</html>
