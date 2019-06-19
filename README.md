Niceditor Widget для Yii2
========================
Тестовый виджет обертка редактора wyswyg http://nicedit.com
Выполнен в целях обучения написания виджетов.
Раскрыт только базовый функционал редактора.
<b>Данный редактор заброшен, не рекомендую к использованию.</b>

Установка
------------
php composer.phar require "pun2006/yii2-nicedit" "*"

Использование
-----

```
use pun2006\yiinicedit\NiceditWidget;
<?=  NiceditWidget::widget(['content' => "some content",'fullpanel'=>'true','local'=>true]); ?>
```
<b>Также можно использовать с ActiveField.</b>
```
$form->field($model, 'attribute')->widget(NiceditWidget::classname(),['fullpanel'=>false,'local'=>true]) ?>

```
<ul>
<b>Поддерживаются следующие опции:</b>    
<li>content, string инициализация с заданным контентом, по умолчанию будет пусто;</li>
<li>fullpanel, boolean отображать все кнопки на панели;</li>
<li>local, boolean использовать локальные скрипты виджета, по умолчанию false(используются ресурсы CDN).</li>
</ul>
