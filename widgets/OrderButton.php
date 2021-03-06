<?php

namespace pistol88\order\widgets;

use yii;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use pistol88\order\models\Order;

class OrderButton extends \yii\base\Widget
{
    public function init()
    {
        return parent::init();
    }

    public function run()
    {
        $orderModel = new Order;
        
        return $this->render('order-form/button', [
            'model' => $orderModel,
        ]);
    }

}
