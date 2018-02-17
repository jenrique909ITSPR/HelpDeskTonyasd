<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * HdcategoriesArticle Entity
 *
 * @property int $id
 * @property int $hdcategory_id
 * @property int $article_id
 *
 * @property \App\Model\Entity\Hdcategory $hdcategory
 * @property \App\Model\Entity\Article $article
 */class HdcategoriesArticle extends Entity
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
        '*' => true,
        'id' => false
    ];
}
