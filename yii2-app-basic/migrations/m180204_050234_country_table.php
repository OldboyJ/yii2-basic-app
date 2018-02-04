<?php

use yii\db\Migration;

/**
 * Class m180204_050234_country_table
 */
class m180204_050234_country_table extends Migration
{
    // /**
    //  * @inheritdoc
    //  */
    // public function safeUp()
    // {
    //
    // }
    //
    // /**
    //  * @inheritdoc
    //  */
    // public function safeDown()
    // {
    //     echo "m180204_050234_country_table cannot be reverted.\n";
    //
    //     return false;
    // }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
      $this->createTable('country', [
            'id' => $this->primaryKey(),
            'code' => $this->string(),
            'name' => $this->text(),
            'population' => $this->integer(),
        ]);
    }

    public function down()
    {
      $this->dropTable('country');  
    }

}
