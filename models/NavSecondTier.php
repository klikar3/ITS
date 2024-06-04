<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Nav_Second_Tier".
 *
 * @property int $id
 * @property string $servername
 * @property string $service
 * @property string $system
 * @property string $sqlserver
 * @property string $datenbank
 * @property int $aktiv
 */
class NavSecondTier extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Nav_Second_Tier';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('db2');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['servername', 'service', 'system', 'sqlserver', 'datenbank'], 'required'],
            [['servername', 'service', 'system', 'sqlserver', 'datenbank', 'aktiv'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'servername' => Yii::t('app', 'Servername'),
            'service' => Yii::t('app', 'Service'),
            'system' => Yii::t('app', 'System'),
            'sqlserver' => Yii::t('app', 'Sqlserver'),
            'datenbank' => Yii::t('app', 'Datenbank'),
            'aktiv' => Yii::t('app', 'Aktiv'),
        ];
    }

    /**
     * @inheritdoc
     * @return NavSecondTierQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new NavSecondTierQuery(get_called_class());
    }
}
