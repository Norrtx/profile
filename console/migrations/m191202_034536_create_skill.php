<?php

use yii\db\Migration;

/**
 * Class m191202_034536_create_skill
 */
class m191202_034536_create_skill extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {
        $this->createTable('skill', [
            'id' => $this->primaryKey()->unsigned()->notNull(),
            'school_name' =>$this->string(),            //ชื่อสถานศึกษา
            'date_from' => $this->integer(11),          //ปีที่เริ่มเรียน 
            'date_to' => $this->integer(11),            //ปีที่จบ
            'statusComputer' =>$this->string(),         //คอมพิวเตอร์
            'statusElectricity' =>$this->string(),      //ช่างไฟฟ้า
            'statusMechanic' =>$this->string(),         //ช่างยนต์
            'statusWelder' =>$this->string(),           //ช่างเชื่อม
            'statusElectrician' =>$this->string(),      //ช่างอิเล็ก
            'statusCarpenter' =>$this->string(),        //ช่างไม้
            'statusPlumber' =>$this->string(),          //ช่างประปา
            'statusTiler' =>$this->string(),            //ช่างปูน
            'statusDriver' =>$this->string(),           //ใบขับขี่
            'career' =>$this->string(),                 //อาชีพ
            'other' =>$this->string(),                  //อื่นๆ
            'sport' =>$this->string(),                  //กีฬา

            'statusHeart' =>$this->string(),                  //โรคหัวใจ
            'statusAllergy' =>$this->string(),                //โรคภูมิแพ้
            'statusBone' =>$this->string(),                   //โรคกระดูก
            'statusDeaf' =>$this->string(),                   //โรคหูตึง
            'statusAsthma' =>$this->string(),                 //โรคหอบหืด
            'statusHernia' =>$this->string(),                 //โรคไส้เลื่อน
            'statusNeuralgia' =>$this->string(),              //โรคประสาท  
            'statusKidney' =>$this->string(),                 //โรคไต
            'statusBasil' =>$this->string(),                  //โรคกระเพา
            'statuThalassemia' =>$this->string(),             //โรคธาลัสซีเมีย

            'name' =>$this->string(),
            'score' =>$this->integer(11),
            'maxscore' =>$this->integer(11),
            'chart_type' =>$this->string(),
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
        $this->dropTable('skill');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191202_034536_create_skill cannot be reverted.\n";

        return false;
    }
    */
}
