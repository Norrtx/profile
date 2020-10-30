<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "themes".
 *
 * @property int $id
 * @property string $name
 * @property int $score
 * @property string $file
 * @property int $user_id
 * @property int $date_create
 * @property int $date_update
 * @property int $status
 */
class Themes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'themes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['score', 'user_id', 'date_create', 'date_update', 'status'], 'integer'],
            [['name', 'file'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'score' => 'Score',
            'file' => 'File',
            'user_id' => 'User ID',
            'date_create' => 'Date Create',
            'date_update' => 'Date Update',
            'status' => 'Status',
        ];
    }
}
