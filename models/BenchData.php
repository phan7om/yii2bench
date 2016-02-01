<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bk.rate".
 *
 * @property integer $id
 * @property string $name
 * @property integer $number
 */
class BenchData extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bench_data';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['number'], 'number'],
            [['name'], 'string'],
        ];
    }
}
