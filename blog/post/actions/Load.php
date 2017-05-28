<?php

namespace blog\post\actions;

use blog\base\traits\AuthenticatedAccess;
use blog\post\models\UploadPostForm;
use Yii;

/**
 * @author Anton Karamnov
 */
class Load extends \blog\base\Action
{
    use AuthenticatedAccess;

    /**
     * @return \yii\web\Responce
     */
    public function run()
    {   
        $uploadPostForm = new UploadPostForm();
        if ($uploadPostForm->loadPost()) {
            Yii::$app->session->setFlash('success', 
                Yii::t('post', 'This post was loaded'));
            return $this->redirect(Show::url($uploadPostForm));
        }
        
        return $this->render('load', [
            'uploadPostForm' => $uploadPostForm,
        ]);
    }
}