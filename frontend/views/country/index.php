<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
?>
<h1>country/index</h1>
<ul>
<?php foreach ($countries as $country): ?> 
	<li>
		<?= Html::encode("{$country->name} ({$country->code})") ?> - <?= $country->population ?>
	</li>
	<?php endforeach; ?>
	</ul>