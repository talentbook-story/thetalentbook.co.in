<?php

namespace app\modules\models;

use Yii;

/**
 * This is the model class for table "tb_annotations".
 *
 * @property string $id
 * @property string $owner_guid
 * @property string $subject_guid
 * @property string $type
 * @property int $time_created
 */
class Annotations extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_annotations';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['owner_guid', 'subject_guid', 'type', 'time_created'], 'required'],
            [['owner_guid', 'subject_guid', 'time_created'], 'integer'],
            [['type'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'owner_guid' => 'Owner Guid',
            'subject_guid' => 'Subject Guid',
            'type' => 'Type',
            'time_created' => 'Time Created',
        ];
    }
}
