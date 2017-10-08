<?php

use yii\db\Migration;

/**
 * Handles the creation of table `promotions`.
 */
class m171006_055113_create_promotions_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $tbl = 'promotions';
        $this->createTable($tbl, [
            'ID' => $this->primaryKey(),
            'title' => $this->string(100)->notNull(),
            'startDate'=>$this->dateTime()->notNull(),
            'endDate'=>$this->dateTime()->notNull(),
            'reward'=>$this->char(50)->notNull(),
            'description'=>$this->text()->notNull(),
            'descriptionURL'=>$this->string(100)->notNull(),
            'instruction'=>$this->text()->notNull(),
            'instructionURL'=>$this->string(100)->notNull(),
            'WinnerURL'=>$this->string(100)->notNull(),
            'imageURL'=>$this->string(100)->notNull(),
            'createdDate' => $this->dateTime()->notNull() . ' DEFAULT NOW()',
            'expiredImageURL'=>$this->string(100)->notNull(),
            'isRegistrable'=>$this->boolean()->notNull(),
            'isActive'=>$this->boolean()->notNull(),
        ]);

        $this->addCommentOnColumn($tbl,'ID','identifies key for Promotion');
        $this->addCommentOnColumn($tbl,'title','title of the promotion');
        $this->addCommentOnColumn($tbl,'startDate','startDate is start date of the promotion');
        $this->addCommentOnColumn($tbl,'endDate','endDate is end date of promotion');
        $this->addCommentOnColumn($tbl,'reward','reward is of promotions');
        $this->addCommentOnColumn($tbl,'description','description of the promotion');
        $this->addCommentOnColumn($tbl,'descriptionURL','descriptionURL is link to description page');
        $this->addCommentOnColumn($tbl,'instruction','instruction to join the promotion');
        $this->addCommentOnColumn($tbl,'instructionURL','instructionURL is like to Instruction page');
        $this->addCommentOnColumn($tbl,'WinnerURL','WinnerURL is winner URL of promotions');
        $this->addCommentOnColumn($tbl,'imageURL','imageURL is url name to get the image');
        $this->addCommentOnColumn($tbl,'createdDate','createdDate of promotion');
        $this->addCommentOnColumn($tbl,'expiredImageURL', 'expiredImageURL is url name to get the expired image');
        $this->addCommentOnColumn($tbl,'isRegistrable','isRegistrable true = still can register, false = cannot register');
        $this->addCommentOnColumn($tbl,'isActive','isActive true = this promotion is valid , false = this promotion is soft deleted');

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('promotions');
    }
}
