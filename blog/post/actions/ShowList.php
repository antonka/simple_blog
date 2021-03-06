<?php

namespace blog\post\actions;

use yii\data\ActiveDataProvider;
use blog\post\models\Post;
use yii\helpers\Url;

/**
 * @author Anton Karamnov
 */
class ShowList extends \blog\base\Action 
{
    public function run()
    { 
        $dataProvider = new ActiveDataProvider([
            'query' => Post::find()->orderBy('created_at DESC'),
            'pagination' => ['pageSize' => 10],
        ]);
        
        return $this->render('list/show', [
            'postsListActiveDataProvider' => $dataProvider,
        ]);
    }
    
    /**
     * @return string
     */
    public function url()
    {
        return Url::toRoute(['post/showList']);
    }
}
