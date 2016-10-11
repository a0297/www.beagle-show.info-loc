<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "menu_header".
 *
 * @property string $id
 * @property string $parent_id
 * @property string $name
 * @property string $keywords
 * @property string $description
 */
class MenuHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu_header';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id'], 'integer'],
            [['name'], 'required'],
            [['name', 'keywords', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Parent ID',
            'name' => 'Name',
            'keywords' => 'Keywords',
            'description' => 'Description',
        ];
    }
}
