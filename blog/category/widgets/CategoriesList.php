<?php

namespace blog\category\widgets;

use Yii;
use blog\post\models\Post;
use blog\category\models\Category;

/**
 * @author Anton Karamnov
 */
class CategoriesList extends \yii\base\Widget
{    
    public function run()
    {
        $categoriesList = Category::find()->orderBy('name')->asArray()->all();
        
        return $this->render('categories_list', [
            'categoriesList' => $categoriesList,
            'canDeleteCategory' => !Yii::$app->user->isGuest,
        ]);
    }
}

