<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Categories'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="categories form content">
            <?= $this->Form->create($category) ?>


            <?= $this->Form->end() ?>
        </div>
    </div>
</div>


<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category[]|\Cake\Collection\CollectionInterface $categories
 */
?>
<h3 class="text-gray-700 text-3xl font-semibold">فرم</h3>

<div class="mt-4">
    <h4 class="text-gray-600">مدیریت گروه</h4>

    <div class="mt-4">
        <div class="panel w-full bg-gray-100 shadow-md rounded-md overflow-hidden border border-gray-300">
            <?= $this->Form->create($category) ?>
            <div
                class="panel-header flex justify-between items-center px-5 py-3 text-gray-700 border-b  border-gray-300">
                <h3 class="text-sm font-black ">گروه جدید</h3>
                <?= $this->Html->link(__('New Category'), ['action' => 'add'], ['class' => 'button float-right']) ?>
            </div>

            <div class="panel-body px-5 py-6 bg-white  text-gray-700 border-b border-gray-300">
                <fieldset>
                    <legend><?= __('Add Category') ?></legend>
                    <?php
                    echo $this->Form->control('type');
                    echo $this->Form->control('title');
                    echo $this->Form->control('description');
                    echo $this->Form->control('slug');
                    echo $this->Form->control('picture');
                    echo $this->Form->control('published');
                    echo $this->Form->control('visible_flags');
                    echo $this->Form->control('level');
                    echo $this->Form->control('parent_id', ['options' => $parentCategories]);
                    echo $this->Form->control('product_counts');
                    ?>
                </fieldset>
            </div>

            <div class="panel-footer flex justify-between items-center px-5 py-3">

                <?= $this->Form->button(__('Submit')) ?>

            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>


