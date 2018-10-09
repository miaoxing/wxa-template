<?php

namespace Miaoxing\WxaTemplate\Metadata;

/**
 * WxaTemplateFormTrait
 *
 * @property int $id
 * @property int $appId
 * @property string $formId
 * @property int $userId
 * @property int $leftTimes 剩余次数
 * @property string $createdAt
 * @property string $updatedAt
 * @property int $createdBy
 * @property int $updatedBy
 */
trait WxaTemplateFormTrait
{
    /**
     * @var array
     * @see CastTrait::$casts
     */
    protected $casts = [
        'id' => 'int',
        'app_id' => 'int',
        'form_id' => 'string',
        'user_id' => 'int',
        'left_times' => 'int',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'created_by' => 'int',
        'updated_by' => 'int',
    ];
}
