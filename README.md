# yiinicedit


Выполнен в целях обучения написания виджетов.
Раскрыт только базовый функционал редактора.

Тестовый виджет обертка редактора wyswyg http://nicedit.com/
Данный редактор заброшен, не рекомендую к использованию.

Использование:
use pun2006\yiinicedit\NiceditWidget;


<?=  NiceditWidget::widget(['content' => "some content",'fullpanel'=>'true','local'=>true]); ?>

Также можно использовать с ActiveField

$form->field($model, 'attribute')->widget(NiceditWidget::classname(),['fullpanel'=>false,'local'=>true]) ?>
		
Поддерживаются следующие опции:
- content, string инициализация с заданным контентом, по умолчанию будет пусто.
- fullpanel, boolean отображать все кнопки на панели.
- local, boolean использовать локальные скрипты виджета, по умолчанию false(используются ресурсы CDN).
