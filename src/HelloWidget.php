<?php
namespace pun2006\yiinicedit;

use yii\base\Widget;
use yii\widgets\InputWidget;
use yii\helpers\Html;
use app\widgets\HelloWidgetAsset;

/**
 * Тестовый виджет для редактора niceedit 
 * который давно уже никто не поддерживает.
 * 
 * @author bvv
 *
 */

class HelloWidget extends InputWidget
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
        $this->registerAssets();
        if (!$this->model) {
        return Html::textarea("nicedit",$this->content,["id"=>$this->getInputId()]).
            Html::script($this->getScript());            
        } else {
            $this->options['id'] = $this->getInputId();             
            echo html::activeTextarea($this->model, $this->attribute,$this->options).Html::script($this->getScript());
        }
    }
    
    private function getInputId() {
        if (!$this->inputId) {
            $this->inputId="nicedit".uniqid();
        }        
        return $this->inputId;
        
    }
    
    private function registerAssets() {
        $view=$this->getView();
        HelloWidgetAsset::register($view);        
    }
    
    private function getScript(){
    return <<<marker
bkLib.onDomLoaded(function() {
new nicEditor({fullPanel : {$this->fullpanel}}).panelInstance('{$this->getInputId()}');
});
marker;
    }
}