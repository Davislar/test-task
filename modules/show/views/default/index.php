<div class="sout-numbers-index">

    <h1>Show</h1>

    <?= \yii\grid\GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $column,
    ]); ?>
</div>