<?php

namespace MiaoxingDoc\WxaTemplate {

    /**
     * @property    \Miaoxing\WxaTemplate\Service\WxaTemplate $wxaTemplate WxaTemplate
     *
     * @property    \Miaoxing\WxaTemplate\Service\WxaTemplateFormModel $wxaTemplateFormModel WxaTemplateFormModel
     * @method      \Miaoxing\WxaTemplate\Service\WxaTemplateFormModel|\Miaoxing\WxaTemplate\Service\WxaTemplateFormModel[] wxaTemplateFormModel()
     */
    class AutoComplete
    {
    }
}

namespace {

    /**
     * @return MiaoxingDoc\WxaTemplate\AutoComplete
     */
    function wei()
    {
    }

    /** @var Miaoxing\WxaTemplate\Service\WxaTemplate $wxaTemplate */
    $wxaTemplate = wei()->wxaTemplate;

    /** @var Miaoxing\WxaTemplate\Service\WxaTemplateFormModel $wxaTemplateFormModel */
    $wxaTemplateForm = wei()->wxaTemplateFormModel();

    /** @var Miaoxing\WxaTemplate\Service\WxaTemplateFormModel|Miaoxing\WxaTemplate\Service\WxaTemplateFormModel[] $wxaTemplateFormModels */
    $wxaTemplateForms = wei()->wxaTemplateFormModel();
}
