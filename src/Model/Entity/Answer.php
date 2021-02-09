<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Answer Entity
 *
 * @property int $id
 * @property int $question_id
 * @property string $name
 * @property string|null $url
 * @property string $body
 * @property int $ip
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Question $question
 */
class Answer extends Entity
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
        'question_id' => true,
        'name' => true,
        'url' => true,
        'body' => true,
        'ip' => true,
        
        // 日時は変更させない
        // 'created_at' => true,
        // 'updated_at' => true,
    ];
}
