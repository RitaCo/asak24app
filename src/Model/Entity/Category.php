<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Category Entity
 *
 * @property int $id
 * @property string|null $type
 * @property string $title
 * @property string|null $description
 * @property string $slug
 * @property string|null $picture
 * @property bool|null $published
 * @property string|null $visible_flags
 * @property int|null $level
 * @property int|null $lft
 * @property int $parent_id
 * @property int|null $rght
 * @property int|null $product_counts
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\ParentCategory $parent_category
 * @property \App\Model\Entity\ChildCategory[] $child_categories
 * @property \App\Model\Entity\Product[] $products
 */
class Category extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'type' => true,
        'title' => true,
        'description' => true,
        'slug' => true,
        'picture' => true,
        'published' => true,
        'visible_flags' => true,
        'level' => true,
        'lft' => true,
        'parent_id' => true,
        'rght' => true,
        'product_counts' => true,
        'created' => true,
        'modified' => true,
        'parent_category' => true,
        'child_categories' => true,
        'products' => true,
    ];
}
