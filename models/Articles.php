<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "articles".
 *
 * @property string $id
 * @property string $title
 * @property string $img
 * @property string $intro_text
 * @property string $full_text
 * @property string $date
 * @property string $meta_desc
 * @property string $met_key
 * @property integer $hide
 * @property integer $no_form
 */
class Articles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'articles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'img', 'intro_text', 'full_text', 'meta_desc', 'met_key', 'hide', 'no_form'], 'required'],
            [['intro_text', 'full_text'], 'string'],
            [['date'], 'safe'],
            [['hide', 'no_form'], 'integer'],
            [['title', 'img', 'meta_desc', 'met_key'], 'string', 'max' => 255],
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
            'img' => 'Img',
            'intro_text' => 'Intro Text',
            'full_text' => 'Full Text',
            'date' => 'Date',
            'meta_desc' => 'Meta Desc',
            'met_key' => 'Met Key',
            'hide' => 'Hide',
            'no_form' => 'No Form',
        ];
    }
}
