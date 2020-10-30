<?php

use yii\db\Migration;

/**
 * Class m191202_034903_create_chat_job_history
 */
class m191202_034903_create_job_history extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {
        $this->createTable('job_history', [
            'id' => $this->primaryKey()->unsigned()->notNull(),
            'company_name' =>$this->string(),
            'position' =>$this->string(),
            'date_from' => $this->integer(11),
            'date_to' => $this->integer(11),
           
            'user_id'=>$this->integer(),
            'date_create' => $this->integer(11),
            'date_update' => $this->integer(11),
            'status'=>$this->boolean(),
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function Down()
    {
        $this->dropTable('job_history');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191202_034903_create_chat_job_history cannot be reverted.\n";

        return false;
    }
    */
}
