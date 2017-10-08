<?php

namespace app\modules\api;
use Yii;
/**
 * api module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\api\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        // parent::init();

        Yii::$app->request->parsers = ['application/json' => '\yii\web\JsonParser'];
        $headers = Yii::$app->response->headers;
        $headers->set('Access-Control-Allow-Origin','*');
        Yii::$app->user->enableSession = false;
        $response = Yii::$app->response;
        $response->format = \yii\web\Response::FORMAT_JSON;
        $headers->set('Expires', gmdate('D, d M Y H:i:s \G\M\T', time() + (60 * 60)));
    }
}
