<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php

/*    if (Yii::$app->session->getFlash('success')){
        echo Yii::$app->session->getFlash('success');
    }
*/

?>


<?php $form = ActiveForm::begin();  ?>

<?php echo  $form->field($model,'name'); ?>
<?php echo  $form->field($model,'email'); ?>

<?php echo Html::submitButton('Submit', ['class' => 'btn btn-primary']); ?>


<?php $form = ActiveForm::end();  ?>







