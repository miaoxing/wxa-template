<?php

namespace Miaoxing\WxaTemplate\Controller;

use Miaoxing\Plugin\BaseController;

class WxaTemplateForms extends BaseController
{
    public $guestPages = [
        'wxaTemplateForms'
    ];

    public function createAction($req)
    {
        $data = $this->request->getData();
        $data += (array) json_decode($this->request->getContent(), true);
        $this->request->fromArray($data);

        if (!$req['formId']) {
            return $this->err('formId不能为空');
        }

        $user = wei()->user()->find(['wechatOpenId' => $req['wechatOpenId']]);
        if (!$user) {
            return $this->err('用户不存在');
        }

        wei()->wxaTemplateFormModel()->save([
            'formId' => $req['formId'],
            'userId' => $user['id'],
        ]);

        return $this->suc();
    }
}
