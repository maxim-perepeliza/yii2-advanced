<?php

namespace common\widgets;

use Yii;
use yii\helpers\Html;
use yii\db\Query;
use common\models\Cars;

class AutoFilter extends \yii\bootstrap\Widget {

    public $message;

    public function init() {
        parent::init();
        if ($this->message === null) {
            $this->message = 'Hello World';
        }
    }

    public function run() {
        $query = new Query;
        $query->select('mark')
                ->from('cars')
                ->distinct();
        $marks = $query->all();
        $command = $query->createCommand();
        $marks = $command->queryAll();

        $widgetHtml = '';
        $widgetHtml .= '<h3 class="cursive-font">Finding the right car</h3>';
        $widgetHtml .= '<form action="/site/auto-find" method="GET">';
        $widgetHtml .= '<div class="row form-group">';
        $widgetHtml .= '<div class="col-md-12">';
        $widgetHtml .= '<label for="activities">Brand</label>';
        $widgetHtml .= '<select name="brand_car" id="brand_auto" class="form-control brand-auto">';
        $widgetHtml .= '<option value="">All brands</option>';
        foreach ($marks as $mark) {
            $selected = false;
            if (Yii::$app->request->get('brand_car') == $mark['mark']) {
                $selected = true;
            }
            $widgetHtml .= '<option value="' . $mark['mark'] . '" ';
            $widgetHtml .= ($selected == true) ? 'selected' : '';
            $widgetHtml .= '>' . $mark['mark'] . '</option>';
        }
        $widgetHtml .= '</select>';
        $widgetHtml .= '</div>';
        $widgetHtml .= '</div>';
        $widgetHtml .= '<div class="row form-group">';
        $widgetHtml .= '<div class="col-md-12">';
        $widgetHtml .= '    <label for="date-start">Model</label>';
        $widgetHtml .= '<select name="model_car" id="model_auto" class="form-control model-auto">';
        if (!empty(Yii::$app->request->get('brand_car'))) {
            $connection = Yii::$app->getDb();
            $command = $connection->createCommand('select models_car.name from models_car join cars on models_car.id = cars.model_id and cars.mark = \''. Yii::$app->request->get('brand_car') .'\'');
            $result = $command->queryAll();
            foreach ($result as $row) {
                $selected = false;
                if (Yii::$app->request->get('model_car') == $row['name']) {
                    $selected = true;
                }
                $widgetHtml .= '<option value="'.$row['name'].'"';
                $widgetHtml .= ($selected == true)?'selected':'';
                $widgetHtml .= '>'.$row['name'].'</option>';
            }
        } else {
            $widgetHtml .= '<option value="">-</option>';
        }

        $widgetHtml .= '</select>';
        $widgetHtml .= ' </div>';
        $widgetHtml .= '</div>';
        $widgetHtml .= ' <div class="row form-group">';
        $widgetHtml .= ' <div class="col-md-12">';
        $widgetHtml .= '     <input type="submit" class="btn btn-primary btn-block" value="Find">';
        $widgetHtml .= ' </div>';
        $widgetHtml .= '</div>';
        $widgetHtml .= ' </form>	';
        return $widgetHtml;
    }

}
