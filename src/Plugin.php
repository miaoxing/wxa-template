<?php

namespace Miaoxing\WxaTemplate;

use Miaoxing\Order\Service\Order;
use Miaoxing\Plugin\BasePlugin;
use Miaoxing\Wxa\Payment\WxaPay;
use Miaoxing\WxaTemplate\Service\WxaTemplateFormModel;

class Plugin extends BasePlugin
{
    /**
     * {@inheritdoc}
     */
    protected $name = '小程序模板消息';

    public function onBeforeWxaPaySubmit($ret, Order $order)
    {
        if ($ret['code'] !== 1) {
            return;
        }

        // 记录临时的prePayId
        wei()->wxaTemplateFormModel()->save([
            'userId' => $order['userId'],
            'formId' => $ret['prepayId'],
            'leftTimes' => -1,
        ]);
    }

    public function onAfterWxPayVerify($result, WxaPay $wxaPay)
    {
        if (!$result) {
            return;
        }

        $orderNo = $wxaPay->getOrderNo();
        $order = wei()->order()->findOneById($orderNo);

        /** @var WxaTemplateFormModel $last */
        $last = wei()->wxaTemplateFormModel()
            ->andWhere([
                'user_id' => $order['userId'],
                'left_times' => -1
            ])
            ->desc('id')
            ->find();
        if ($last) {
            // 1次支付可下发3条
            $last->save([
                'leftTimes' => 3,
                'createdAt' => wei()->time(),
            ]);
        }
    }
}
