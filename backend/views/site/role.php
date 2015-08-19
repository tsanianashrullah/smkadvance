<?php
$this->title = 'Penambahan Role' . $model->username;
?>

	<?php 
    $authItems = ArrayHelper::map($authItems, 'name', 'name');
    ?>
    <?= $form->field($model,'permissions')->checkboxList($authItems); ?>
