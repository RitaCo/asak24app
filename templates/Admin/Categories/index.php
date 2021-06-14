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
            <form>
                <div class="panel-header flex justify-between items-center px-5 py-3 text-gray-700 border-b  border-gray-300">
                    <h3 class="text-sm font-black ">گروه جدید</h3>
                    <?= $this->Html->link(__('New Category'), ['action' => 'add'], ['class' => 'button float-right']) ?>
                </div>

                <div class="panel-body px-5 py-6 bg-white  text-gray-700 border-b border-gray-300">

                    <div class="categories index content">

                        <h3><?= __('Categories') ?></h3>
                        <div class="table-responsive overflow-auto">
                            <table class="table  w-full">
                                <thead>
                                <tr>
                                    <th><?= $this->Paginator->sort('id') ?></th>
                                    <th><?= $this->Paginator->sort('type') ?></th>
                                    <th><?= $this->Paginator->sort('title') ?></th>
                                    <th><?= $this->Paginator->sort('slug') ?></th>
                                    <th><?= $this->Paginator->sort('published') ?></th>
                                    <th><?= $this->Paginator->sort('level') ?></th>
                                    <th><?= $this->Paginator->sort('parent_id') ?></th>
                                    <th><?= $this->Paginator->sort('product_counts') ?></th>
                                    <th><?= $this->Paginator->sort('created') ?></th>
                                    <th><?= $this->Paginator->sort('modified') ?></th>
                                    <th class="actions"><?= __('Actions') ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($categories as $category): ?>
                                    <tr>
                                        <td><?= $this->Number->format($category->id) ?></td>
                                        <td><?= h($category->type) ?></td>
                                        <td><?= h($category->title) ?></td>
                                        <td><?= h($category->slug) ?></td>
                                        <td><?= h($category->published) ?></td>
                                        <td><?= $this->Number->format($category->level) ?></td>
                                        <td><?= $category->has('parent_category') ? $this->Html->link($category->parent_category->title, ['controller' => 'Categories', 'action' => 'view', $category->parent_category->id]) : '' ?></td>
                                        <td><?= $this->Number->format($category->product_counts) ?></td>
                                        <td><?= h($category->created) ?></td>
                                        <td><?= h($category->modified) ?></td>
                                        <td class="actions">
                                            <?= $this->Html->link(__('View'), ['action' => 'view', $category->id]) ?>
                                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $category->id]) ?>
                                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                <div class="panel-footer flex justify-between items-center px-5 py-3">
                    <div>
                        <?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?>
                    </div>
                    <div class="paginator">
                        <ul class="btn-group">
                            <?= $this->Paginator->last(__('last') . ' >>') ?>
                            <?= $this->Paginator->prev('< ' . __('previous')) ?>
                            <?= $this->Paginator->next(__('next') . ' >') ?>
                            <?= $this->Paginator->numbers() ?>
                            <?= $this->Paginator->first('<< ' . __('first')) ?>
                        </ul>

                    </div>

                    <button
                        class="px-3 py-1 bg-indigo-600 text-white rounded-md text-sm hover:bg-indigo-500 focus:outline-none">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


