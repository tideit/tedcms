<?php
namespace api\common\filters;

use yii\filters\auth\AuthMethod;

use yii\web\UnauthorizedHttpException;
use common\util\Constants;

/**
 * api auth
 *
 * @author Ather.Shu Apr 22, 2015 7:44:18 PM
 */
class ApiAuth extends AuthMethod {

    public function beforeAction($action) {
        return true;
    }

    public function authenticate($user, $request, $response) {
        return null;
    }
}
