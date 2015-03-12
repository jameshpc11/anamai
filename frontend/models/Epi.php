<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "epi".
 *
 * @property string $HOSPCODE
 * @property string $PID
 * @property string $SEQ
 * @property string $DATE_SERV
 * @property string $VACCINETYPE
 * @property string $VACCINEPLACE
 * @property string $PROVIDER
 * @property string $D_UPDATE
 */
class Epi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'epi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['HOSPCODE', 'PID', 'DATE_SERV', 'VACCINETYPE', 'D_UPDATE'], 'required'],
            [['DATE_SERV', 'D_UPDATE'], 'safe'],
            [['HOSPCODE', 'VACCINEPLACE'], 'string', 'max' => 5],
            [['PID', 'PROVIDER'], 'string', 'max' => 15],
            [['SEQ'], 'string', 'max' => 16],
            [['VACCINETYPE'], 'string', 'max' => 3]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'HOSPCODE' => 'Hospcode',
            'PID' => 'Pid',
            'SEQ' => 'Seq',
            'DATE_SERV' => 'Date  Serv',
            'VACCINETYPE' => 'Vaccinetype',
            'VACCINEPLACE' => 'Vaccineplace',
            'PROVIDER' => 'Provider',
            'D_UPDATE' => 'D  Update',
        ];
    }
}
