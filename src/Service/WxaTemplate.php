<?php

namespace Miaoxing\WxaTemplate\Service;

use Miaoxing\Plugin\BaseService;
use Miaoxing\Plugin\Service\User;

/**
 * WxaTemplate
 */
class WxaTemplate extends BaseService
{
    /**
     * @param User $user
     * @return WxaTemplateFormModel
     */
    public function getAvailableForm(User $user)
    {
        return wei()->wxaTemplateFormModel()
            ->andWhere(['user_id' => $user['id']])
            ->andWhere('left_times != 0')
            // 7天内有效
            ->andWhere('created_at >= ?', date('Y-m-d H:i:s', time() - 86400 * 7))
            ->asc('id')
            ->find();
    }
}
