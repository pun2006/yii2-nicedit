# yiinicedit


<h3>Выполнен в целях обучения написания виджетов.
Раскрыт только базовый функционал редактора.
</h3>
<p>
Тестовый виджет обертка редактора wyswyg http://nicedit.com/
  <b>Данный редактор заброшен, не рекомендую к использованию.</b>
</p>
<p>Использование:</p>
<code>
use pun2006\yiinicedit\NiceditWidget;
<?=  NiceditWidget::widget(['content' => "some content",'fullpanel'=>'true','local'=>true]); ?>
</code>	

<h3>Также можно использовать с ActiveField.</h3>
<code>
$form->field($model, 'attribute')->widget(NiceditWidget::classname(),['fullpanel'=>false,'local'=>true]) ?>
</code>			
<p>Поддерживаются следующие опции:
- content, string инициализация с заданным контентом, по умолчанию будет пусто;
- fullpanel, boolean отображать все кнопки на панели;
- local, boolean использовать локальные скрипты виджета, по умолчанию false(используются ресурсы CDN).
</p>
