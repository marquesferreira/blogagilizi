<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Artigo Entity
 *
 * @property int $id
 * @property int $categoria_id
 * @property string $titulo
 * @property string $texto
 * @property string $photo
 * @property \Cake\I18n\Time $criado
 * @property \Cake\I18n\Time $modificado
 * @property string $photo_dir
 *
 * @property \App\Model\Entity\Categorium $categorium
 */
class Artigo extends Entity
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
