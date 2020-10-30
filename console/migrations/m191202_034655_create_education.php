<?php

use yii\db\Migration;

/**
 * Class m191202_034655_create_education
 */
class m191202_034655_create_education extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {
        $this->createTable('education', [
            'id' => $this->primaryKey()->unsigned()->notNull(),
            'school_name' =>$this->string(),
            'date_from' => $this->integer(11),
            'date_to' => $this->integer(11),
            'faculty' =>$this->string(),
            'gpa'=>$this->decimal(10,2),
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
        $this->dropTable('education');

       
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191202_034655_create_education cannot be reverted.\n";

        return false;
    }
    */
}
