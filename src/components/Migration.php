<?php
/**
 * @copyright Copyright (c) 2016 Zhang Di <zhangdi_me@163.com>
 */

namespace app\components;


class Migration extends \yii\db\Migration
{
    public function getTableOptions()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }
        return $tableOptions;
    }
}