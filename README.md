Niceditor Widget для Yii2
========================
Тестовый виджет обертка редактора wyswyg http://nicedit.com
Выполнен в целях обучения написания виджетов.
#### Данный редактор заброшен. 

Установка
------------
php composer.phar require "pun2006/yii2-nicedit" "*"

Использование
-----

```
use pun2006\yiinicedit\NiceditWidget;
<?=  NiceditWidget::widget(['content' => "some content",'local'=>true]); ?>
```

Также можно использовать с ActiveField.

```
$form->field($model, 'attribute')->widget(NiceditWidget::classname(),['local'=>true]) ?>
```

Опции
-----
* Поддерживаются следующие опции:   
	* content, string инициализация с заданным контентом, по умолчанию будет пусто;</li>
	* editorOptions, array [wiki.nicedit.com](http://wiki.nicedit.com/w/page/515/Configuration%20Options);
	* local, boolean использовать локальные скрипты виджета, по умолчанию false(используются ресурсы CDN).</li>


