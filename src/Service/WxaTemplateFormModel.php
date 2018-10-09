<?php

namespace Miaoxing\WxaTemplate\Service;

use Miaoxing\Plugin\BaseModelV2;
use Miaoxing\Plugin\Model\HasAppIdTrait;
use Miaoxing\WxaTemplate\Metadata\WxaTemplateFormTrait;

/**
 * WxaTemplateFormModel
 */
class WxaTemplateFormModel extends BaseModelV2
{
    use WxaTemplateFormTrait;
    use HasAppIdTrait;

    public function consume()
    {
        $this->decr('left_times')->save();
    }
}
