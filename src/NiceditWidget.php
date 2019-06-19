<?php
namespace pun2006\yiinicedit;

use yii\base\Widget;
use yii\widgets\InputWidget;
use yii\helpers\Html;
use pun2006\yiinicedit\NiceditWidgetAsset;

/**
 * Тестовый виджет для редактора nicedit 
 * который давно уже никто не поддерживает.
 * 
 * @author bvv
 *
 */

class NiceditWidget extends InputWidget
{   
    /**
     * Начальные данные в textarea
     * @var string
     */
    public $content;
    
    /**
     * Переменная отвечает за вывод всех кнопок на панели редактора.
     * @var string
     */
    public $fullpanel = "false";
    
    /**
     * тип по умолчанию
     * @var string
     */
    public $type = 'text';    
    
    /**
     * Генерация ID для input field
     * @var string
     */
       
    private $inputId;
    
    /**
     * Использовать локальные ресурсы? если нет,то CDN
     * @var bool
     */
    public $local=false;
    
    /**
     * {@inheritDoc}
     * @see \yii\widgets\InputWidget::init()
     */
    public function init()
    {
        if ($this->model === null) {
            $this->initWidget();    
        } else 
        {
            $this->initInputWidget();   
        }        
    }
    
    
    private function initWidget() {
        Widget::init();
        if ($this->content === null) {
            $this->content = '';
        }
    }
    
    private function initInputWidget() {
        parent::init();
        
    }
    
    public function run()
    {
        if ($this->local) {
            $this->registerAssets();
        } else 
        {
            $view=$this->getView();
            $view->registerJsFile('http://js.nicedit.com/nicEdit-latest.js',['position'=>$view::POS_HEAD]);
        }        
        
        if (!$this->model) {
        return Html::textarea("nicedit",$this->content,["id"=>$this->getInputId()]).
            Html::script($this->getScript());            
        } else {
            $this->options['id'] = $this->getInputId();             
            echo html::activeTextarea($this->model, $this->attribute,$this->options).Html::script($this->getScript());
        }
    }
    
    private function getInputId() {
        !$this->inputId ? $this->inputId="nicedit".uniqid():'';        
        return $this->inputId;        
    }
    
    private function registerAssets() {
        $view=$this->getView();
        NiceditWidgetAsset::register($view);        
    }
    
    /**
     * 
     * @param boolean $local используется при локальном источнике ресурсов.
     * @return string
     */
    
    private function getScript(){        
        $this->local ? $path = 'iconsPath : \''. \Yii::$app->assetManager->getBundle(NiceditWidgetAsset::class)->baseUrl.'/nicEdit/nicEditorIcons.gif\'':$path = '';
    return <<<marker
bkLib.onDomLoaded(function() {
new nicEditor({fullPanel : {$this->fullpanel},{$path}}).panelInstance('{$this->getInputId()}');
});
marker;
    }
    
    
}