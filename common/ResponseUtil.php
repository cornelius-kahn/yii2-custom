<?php
namespace app\common;

class ResponseUtil {

    public static function successReturn($data=null, $count=null) {
        return self::returnResult(0, 'ok', $data, $count);
    }

    public static function missParams() {
        return self::returnResult(-1, '缺少参数');
    }



    public static function returnResult($ret, $msg, $data=null, $count=null) {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        if ( !isset($data) ) {
            return [
                'ret' => $ret,
                'msg' => $msg,
            ];
        } else if ( !isset($count) ) {
            return [
                'ret' => $ret,
                'msg' => $msg,
                'data' => $data,
            ];
        } else {
            return [
                'ret' => $ret,
                'msg' => $msg,
                'count' => $count,
                'data' => $data,
            ];
        }
    }

}
