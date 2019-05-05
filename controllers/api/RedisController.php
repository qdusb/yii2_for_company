<?php

namespace app\controllers\api;

use Yii;

class RedisController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $redis = Yii::$app->redis;
        $session=Yii::$app->session;
        $redis->rpush('login',$session->getId().'_'.time());
        //echo $redis->lpop('login');
        //$redis->set('user','111');
    }

    public function actionCache(){
        $cache=Yii::$app->cache;
        //$cache->set('user','111');
        echo $cache->get('user');
    }

    public function actionSession(){
        $session=Yii::$app->session;
        //$session->set('user','1111');
        echo $session->get('user');
    }



}
