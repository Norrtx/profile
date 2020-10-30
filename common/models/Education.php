<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "education".
 *
 * @property int $id
 * @property string $school_name
 * @property int $date_from
 * @property int $date_to
 * @property string $faculty
 * @property string $gpa
 * @property int $user_id
 * @property int $date_create
 * @property int $date_update
 * @property int $status
 */
class Education extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'education';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date_from', 'date_to', 'user_id', 'date_create', 'date_update', 'status'], 'integer'],
            [['gpa'], 'number'],
            [['school_name', 'faculty'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'school_name' => 'School Name',
            'date_from' => 'Date From',
            'date_to' => 'Date To',
            'faculty' => 'Faculty',
            'gpa' => 'Gpa',
            'user_id' => 'User ID',
            'date_create' => 'Date Create',
            'date_update' => 'Date Update',
            'status' => 'Status',
        ];
    }
}
