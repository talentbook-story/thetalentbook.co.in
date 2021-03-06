<?php

namespace app\modules\models;

use Yii;

/**
 * This is the model class for table "tb_likes".
 *
 * @property string $id
 * @property string $subject_id
 * @property string $guid
 * @property string $type
 */
class Likes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_likes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['subject_id', 'guid', 'type'], 'required'],
            [['subject_id', 'guid'], 'integer'],
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
            'subject_id' => 'Subject ID',
            'guid' => 'Guid',
            'type' => 'Type',
        ];
    }
}
