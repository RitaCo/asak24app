<!DOCTYPE html>
<html dir="rtl" data-theme="Emerald">
<head>
    <?= $this->Html->charset(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> مدیریت آساک </title>
    <?= $this->Html->meta('icon') ?>
    <?php
    //$this->AssetMix->css('app');
    // $this->AssetMix->script('app')
    echo $this->Html->css(['tailwind.min.css', 'full.css', 'app']);
    ?>



    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>

</head>
<body class=" bg-gray-100">


<nav id="main-nav" class="w-52 z-50 bg-white shadow md:right-0 md:block md:fixed md:top-0 md:bottom-0 md:flex-row md:flex-nowrap">
    <?= $this->element('Admin/sidebar-left'); ?>
</nav>
<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
    <div class="container mx-auto px-6 py-8">
        <?= $this->fetch('content'); ?>
    </div>
</main>
<div class="  md:mr-52 z-0 p-2 	">


    ss
</div>


<?= $this->fetch('script') ?>
</body>
</html>
