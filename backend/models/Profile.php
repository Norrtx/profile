<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property int $id
 * @property string $nameTH
 * @property string $nameEN
 * @property string $gender
 * @property int $birthday
 * @property string $Age
 * @property string $city
 * @property string $state
 * @property int $zip
 * @property string $latitude
 * @property string $longitude
 * @property string $mail
 * @property string $facebook
 * @property string $link
 * @property int $user_id
 * @property string $pro_img
 * @property int $date_create
 * @property int $date_update
 * @property int $status
 */
class Profile extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profile';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['birthday', 'Age','zip', 'user_id', 'date_create', 'date_update', 'status'], 'integer'],
            [['latitude', 'longitude'], 'number'],
            [['nameTH', 'nameEN', 'gender', 'city','address', 'state', 'mail', 'facebook', 'link', 'pro_img'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nameTH' => 'Name Th',
            'nameEN' => 'Name En',
            'gender' => 'Gender',
            'birthday' => 'Birthday',
            'Age' => 'Age',
            'city' => 'City',
            'address'=> 'Address',
            'state' => 'State',
            'zip' => 'Zip',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'mail' => 'Mail',
            'facebook' => 'Facebook',
            'link' => 'Link',
            'user_id' => 'User ID',
            'pro_img' => 'Pro Img',
            'date_create' => 'Date Create',
            'date_update' => 'Date Update',
            'status' => 'Status',
        ];
    }
}
