<?php
/**
 * Created by PhpStorm.
 * User: Purwa
 * Date: 7/8/2015
 * Time: 9:59 AM
 */

namespace app\components;


use Yii;
use yii\base\InvalidParamException;
use yii\grid\ActionColumn;
use yii\helpers\Url;

class CActionColumn extends ActionColumn
{


    public $urlCreator;

    protected function renderDataCellContent($model, $key, $index)
    {
        return preg_replace_callback('/\\{([\w\-\/]+)\\}/', function ($matches) use ($model, $key, $index) {
            $name = $matches[1];
            if (isset($this->buttons[$name])) {
                $url = $this->createUrl($name, $model, $key, $index);
                if (!$url) {
                    return '';
                }
                return call_user_func($this->buttons[$name], $url, $model, $key);
            } else {
                return '';
            }
        }, $this->template);
    }


    public function createUrl($action, $model, $key, $index)
    {
        if ($this->urlCreator instanceof Closure) {
            return call_user_func($this->urlCreator, $action, $model, $key, $index);
        } else {
            $params = is_array($key) ? $key : ['id' => (string)$key];
            $params[0] = $this->controller ? $this->controller . '/' . $action : $action;
            $route = static::normalizeRoute($params[0]);
            if (!SecurityUtil::isGranted("/" . $route)) {
                return null;
            }

            return Url::toRoute($params);
        }
    }

    protected static function normalizeRoute($route)
    {
        $route = Yii::getAlias((string)$route);
        if (strncmp($route, '/', 1) === 0) {
            // absolute route
            return ltrim($route, '/');
        }

        // relative route
        if (Yii::$app->controller === null) {
            throw new InvalidParamException("Unable to resolve the relative route: $route. No active controller is available.");
        }

        if (strpos($route, '/') === false) {
            // empty or an action ID
            return $route === '' ? Yii::$app->controller->getRoute() : Yii::$app->controller->getUniqueId() . '/' . $route;
        } else {
            // relative to module
            return ltrim(Yii::$app->controller->module->getUniqueId() . '/' . $route, '/');
        }
    }




}