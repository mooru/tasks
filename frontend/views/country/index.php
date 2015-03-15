<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
?>
<h1>country/index</h1>
<table class="table">
<tbody>
<tr>
<?php foreach ($countries as $country): ?> 
	<td>
		<?= Html::encode("{$country->name} ({$country->code})") ?> - <?= $country->population ?>
	</td>
	<?php endforeach; ?>
	</tr>
</tbody>
	</table>