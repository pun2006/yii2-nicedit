# yiinicedit

Использование:
use pun2006\yiinicedit\NiceditWidget;
...
...

<?=  NiceditWidget::widget(['content' => "some content",'fullpanel'=>'true','local'=>true]); ?>

Также можно использовать с ActiveField

$form->field($model, 'attribute')->textarea([])->widget(NiceditWidget::classname(),['fullpanel'=>false,'local'=>true]) ?>
		
Поддерживаются следующие опции:
- content, string инициализация с заданным контентом, по умолчанию будет пусто.
- fullpanel, boolean отображать все кнопки на панели.
- local, boolean использовать локальные скрипты виджета, по умолчанию используются false(используются ресурсы с CDN).
