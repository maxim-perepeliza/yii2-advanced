<?php

use yii\db\Migration;

/**
 * Class m181127_120725_add_column_file_name_to_auto
 */
class m181127_120725_add_column_file_name_to_auto extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181127_120725_add_column_file_name_to_auto cannot be reverted.\n";

        return false;
    }

    
    public function up()
    {
        $this->addColumn('cars', 'file_path', $this->string(255));
    }

    public function down()
    {
        $this->dropColumn('cars', 'file_path');
    }
}
