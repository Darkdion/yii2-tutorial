<?php
use yii\helpers\Html;
/* @var $this \yii\web\View */
/* @var $content string */
use frontend\assets\AgencyAsset;
\frontend\assets\FrontendAsset::register($this);
AgencyAsset::register($this);
$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@web');
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?php echo Yii::$app->language ?>">
<head>
    <meta charset="<?php echo Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <?php echo Html::csrfMetaTags() ?>
</head>
<body>
<?php $this->beginBody() ?>
    <?php echo $content ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
