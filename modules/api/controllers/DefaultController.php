<?php

namespace app\modules\api\controllers;

use yii\web\Controller;
use app\models\Promotions;
/**
 * Default controller for the `api` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return ['Hi'];
    }

    public function actionPromotions(){
    	$data = Promotions::find()->all();
        return ['promotions'=>$data];
        
    }
}
