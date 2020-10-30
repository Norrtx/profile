<?php

use yii\db\Migration;

/**
 * Class m191202_034433_create_profile
 */
class m191202_034433_create_profile extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {
        $this->createTable('profile', [
            'id' => $this->primaryKey()->unsigned()->notNull(),
            'nameTH' =>$this->string(),             //ชื่อไทย
            'lastnameTH' =>$this->string(),         //สกุลไทย
            'nickname' =>$this->string(),           //ชื่อเล่น
            'nameEN' =>$this->string(),             //ชื่ออังกฤษ
            'lastnameEn' =>$this->string(),         //สกุลอังกฤษ
            'nameDAD' =>$this->string(),            //ชื่อพ่อ
            'lastnameDAD' =>$this->string(),        //สกุลพ่อ
            'nameMOM' =>$this->string(),            //ชื่อแม่
            'lastnameMOM' =>$this->string(),        //สกุลแม่
            'nameM' =>$this->string(),              //ชื่อเมีย
            'lastnameM' =>$this->string(),          //สกุลเมีย
            'nameOR' =>$this->string(),             //ชื่อเดิม
            'lastnameOR' =>$this->string(),         //สกุลเดิม
            'changname' =>$this->string(),          //หลักฐานเปลี่ยนชื่อ
            'numberPC'=>$this->text(),              //เลขบัตรประชาชน
            'numberTB'=>$this->text(),              //เลขประจำตัวทหาร
            'rank'=>$this->string(),                //ยศ
            'birthday' => $this->integer(11),       //วันเกิด
            'age' =>$this->integer(11),             //อายุ
            'city' => $this->string(),              //ที่เกิด
            'bloodtype' => $this->string(),         //หมู่เลือด
            'gender' =>$this->string(),             //เพศ
            'height' => $this->integer(11),         //ส่วนสูง
            'weight' => $this->integer(11),         //น้ำหนัก
            'bmi' => $this->integer(11),            //BMI
            'scar' => $this->string(),              //ตำหนิ
            'race' => $this->string(),              //เชื้อชาติ
            'religion' => $this->string(),          //ศาสนา
            'nationality' => $this->string(),       //สัญชาติ 
            'nationalityOR' => $this->string(),     //สัญชาติเดิม
            'nationalityORT' => $this->string(),    //หลักฐานการเปลี่ยนสัญชาติ    
            'address' => $this->string(),           //ที่อยู่        
            'addressMOM' => $this->string(),        //ที่อยุ่แม่
            'addressDAD' => $this->string(),        //ที่อยู่พ่อ
            'tel' => $this->integer(),              //เบอร์โทร
            'telMOM' => $this->integer(),           //เบอร์โทรแม่
            'telDAD' => $this->integer(),           //เบอร์โทรพ่อ
            'telM' => $this->integer(),             //เบอร์โทรเมีย
            'countPENOG' => $this->integer(),       //พี่น้อง
            'countPENOGChay' => $this->integer(),   //พี่ชาย 
            'countPENOGYing' => $this->integer(),   //พี่สาว
            'income' => $this->integer(),           //รายได้
            'child' => $this->integer(),            //บุตร
            'childCHAY' => $this->integer(),        //บุตรชาย
            'childYING' => $this->integer(),        //บุตรหญิง
            'birthdayCHAY' => $this->integer(11),   //วันเกิดลูกชาย
            'birthdayYing' => $this->integer(11),   //วันเกิดลูกสาว
            'status'=>$this->string(),              //สถนะภาพ
            'statusDAD'=>$this->string(),           //สถนะภาพพ่อ
            'statusMOM'=>$this->string(),           //สถนะภาพแม่

            
            
            
            
            
            'state' => $this->string(),
            'zip' => $this->integer(),
            'latitude' => $this->decimal(10,7),
            'longitude' => $this->decimal(10,7),
            'mail' => $this->string(),
            'facebook' => $this->string(),
            'link' => $this->string(),
            'user_id'=>$this->integer(),
            'pro_img' =>$this->string(),
            'description'=>$this->text(),
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
        $this->dropTable('profile');
       
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191202_034433_create_profile cannot be reverted.\n";

        return false;
    }
    */
}
