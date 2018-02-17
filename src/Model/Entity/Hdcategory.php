<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Hdcategory Entity
 *
 * @property int $id
 * @property string $title
 * @property int $parent_id
 * @property int $lft
 * @property int $rght
 * @property string $description
 *
 * @property \App\Model\Entity\Hdcategory $parent_hdcategory
 * @property \App\Model\Entity\Hdcategory[] $child_hdcategories
 * @property \App\Model\Entity\Hdtemplate[] $hdtemplate
 * @property \App\Model\Entity\Ticket[] $tickets
 * @property \App\Model\Entity\Article[] $articles
 */class Hdcategory extends Entity
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
