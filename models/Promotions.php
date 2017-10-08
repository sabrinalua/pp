<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "promotions".
 *
 * @property int $ID identifies key for Promotion
 * @property string $title title of the promotion
 * @property string $startDate startDate is start date of the promotion
 * @property string $endDate endDate is end date of promotion
 * @property string $reward reward is of promotions
 * @property string $description description of the promotion
 * @property string $descriptionURL descriptionURL is link to description page
 * @property string $instruction instruction to join the promotion
 * @property string $instructionURL instructionURL is like to Instruction page
 * @property string $WinnerURL WinnerURL is winner URL of promotions
 * @property string $imageURL imageURL is url name to get the image
 * @property string $createdDate createdDate of promotion
 * @property string $expiredImageURL expiredImageURL is url name to get the expired image
 * @property int $isRegistrable isRegistrable true = still can register, false = cannot register
 * @property int $isActive isActive true = this promotion is valid , false = this promotion is soft deleted
 */
class Promotions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'promotions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'startDate', 'endDate', 'reward', 'description', 'descriptionURL', 'instruction', 'instructionURL', 'WinnerURL', 'imageURL', 'expiredImageURL', 'isRegistrable', 'isActive'], 'required'],
            [['startDate', 'endDate', 'createdDate'], 'safe'],
            [['description', 'instruction'], 'string'],
            [['isRegistrable', 'isActive'], 'integer'],
            [['title', 'descriptionURL', 'instructionURL', 'WinnerURL', 'imageURL', 'expiredImageURL'], 'string', 'max' => 100],
            [['reward'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'title' => 'Title',
            'startDate' => 'Start Date',
            'endDate' => 'End Date',
            'reward' => 'Reward',
            'description' => 'Description',
            'descriptionURL' => 'Description Url',
            'instruction' => 'Instruction',
            'instructionURL' => 'Instruction Url',
            'WinnerURL' => 'Winner Url',
            'imageURL' => 'Image Url',
            'createdDate' => 'Created Date',
            'expiredImageURL' => 'Expired Image Url',
            'isRegistrable' => 'Is Registrable',
            'isActive' => 'Is Active',
        ];
    }
}
