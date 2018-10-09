<?php

namespace Miaoxing\WxaTemplate\Migration;

use Miaoxing\Plugin\BaseMigration;

class V20180412190556CreateWxaTemplateFormsTable extends BaseMigration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->schema->table('wxa_template_forms')
            ->id()
            ->int('app_id')
            ->string('form_id', 64)
            ->int('user_id')
            ->int('left_times')->unsigned(false)->defaults(1)->comment('剩余次数')
            ->timestamps()
            ->userstamps()
            ->exec();
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->schema->dropIfExists('wxa_template_forms');
    }
}
