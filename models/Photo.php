<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "photo".
 *
 * @property string $id
 * @property string $title
 * @property string $photo
 * @property string $date
 * @property integer $like
 * @property string $intro_text
 * @property string $full_text
 * @property string $meta_key
 * @property string $meta_desc
 * @property integer $hide
 */
class Photo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'photo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'photo', 'like', 'intro_text', 'full_text', 'meta_key', 'meta_desc', 'hide'], 'required'],
            [['date'], 'safe'],
            [['like', 'hide'], 'integer'],
            [['full_text'], 'string'],
            [['title', 'photo', 'intro_text', 'meta_key', 'meta_desc'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'photo' => 'Photo',
            'date' => 'Date',
            'like' => 'Like',
            'intro_text' => 'Intro Text',
            'full_text' => 'Full Text',
            'meta_key' => 'Meta Key',
            'meta_desc' => 'Meta Desc',
            'hide' => 'Hide',
        ];
    }
}
