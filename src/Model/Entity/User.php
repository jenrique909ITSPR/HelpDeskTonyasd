<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $username
 * @property string $name
 * @property string $last_name
 * @property int $positionbranch_id
 * @property string $password
 * @property int $statususer_id
 * @property int $group_id
 * @property int $role_id
 * @property string|resource $data
 * @property int $expires
 *
 * @property \App\Model\Entity\Positionbranch $positionbranch
 * @property \App\Model\Entity\Statususer $statususer
 * @property \App\Model\Entity\Group $group
 * @property \App\Model\Entity\Role $role
 * @property \App\Model\Entity\Article[] $articles
 * @property \App\Model\Entity\Internalnote[] $internalnotes
 * @property \App\Model\Entity\Movereasontemplate[] $movereasontemplates
 * @property \App\Model\Entity\Publicnote[] $publicnotes
 * @property \App\Model\Entity\Stockmove[] $stockmoves
 * @property \App\Model\Entity\Ticketlog[] $ticketlogs
 * @property \App\Model\Entity\Ticket[] $tickets
 */class User extends Entity
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

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
