<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Article Entity
 *
 * @property int $id
 * @property string $title
 * @property string $answer
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $user_id
 * @property \Cake\I18n\FrozenTime $created
 * @property int $selected
 *
 * @property \App\Model\Entity\Hdcategory $hdcategory
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Articlefile[] $articlefiles
 * @property \App\Model\Entity\Role[] $roles
 */class Article extends Entity
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
