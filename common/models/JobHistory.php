<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "job_history".
 *
 * @property int $id
 * @property string $company_name
 * @property string $position
 * @property int $date_from
 * @property int $date_to
 * @property string $description
 * @property int $user_id
 * @property int $date_create
 * @property int $date_update
 * @property int $status
 */
class JobHistory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'job_history';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date_from', 'date_to', 'user_id', 'date_create', 'date_update', 'status'], 'integer'],
          
            [['company_name', 'position'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'company_name' => 'Company Name',
            'position' => 'Position',
            'date_from' => 'Date From',
            'date_to' => 'Date To',
            
            'user_id' => 'User ID',
            'date_create' => 'Date Create',
            'date_update' => 'Date Update',
            'status' => 'Status',
        ];
    }
}
