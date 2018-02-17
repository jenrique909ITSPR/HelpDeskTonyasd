<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Userendmessage Entity
 *
 * @property int $id
 * @property string $message
 * @property int $user_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property \Cake\I18n\FrozenTime $startdate
 * @property \Cake\I18n\FrozenTime $endingdate
 *
 * @property \App\Model\Entity\User $user
 */class Userendmessage extends Entity
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
