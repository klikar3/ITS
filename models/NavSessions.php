<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sess_dat".
 *
 * @property string $ServerComputerName
 * @property int $Anzahl
 */
class NavSessions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sess_dat';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('db2');
    }

    public static function primaryKey () {
        return ['ServerComputerName'];
    } 

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ServerComputerName'], 'string'],
            [['Anzahl'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ServerComputerName' => Yii::t('app', 'Server Computer Name'),
            'Anzahl' => Yii::t('app', 'Anzahl'),
        ];
    }

    /**
     * @inheritdoc
     * @return NavSessionsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new NavSessionsQuery(get_called_class());
    }     
}
