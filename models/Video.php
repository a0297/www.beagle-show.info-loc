<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "video".
 *
 * @property string $id
 * @property string $title
 * @property string $author
 * @property string $date
 * @property integer $like
 * @property string $video
 * @property string $text
 * @property string $meta_key
 * @property string $meta_desc
 * @property integer $hide
 */
class Video extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'video';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'author', 'video', 'text', 'meta_key', 'meta_desc', 'hide'], 'required'],
            [['date'], 'safe'],
            [['like', 'hide'], 'integer'],
            [['text'], 'string'],
            [['title', 'author', 'video', 'meta_key'], 'string', 'max' => 255],
            [['meta_desc'], 'string', 'max' => 25],
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
            'author' => 'Author',
            'date' => 'Date',
            'like' => 'Like',
            'video' => 'Video',
            'text' => 'Text',
            'meta_key' => 'Meta Key',
            'meta_desc' => 'Meta Desc',
            'hide' => 'Hide',
        ];
    }
}
