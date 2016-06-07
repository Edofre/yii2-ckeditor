<?php

namespace edofre\ckeditor;

/**
 * Class CKEditor
 * @package edofre\ckeditor
 */
class CKEditor extends \yii\widgets\InputWidget
{
	/** @var array */
	public $editorOptions = [];

	/**
	 * @throws \yii\base\InvalidConfigException
	 */
	public function init()
	{
		parent::init();
		$this->registerToView();
	}

	/**
	 * Register the ckeditor files to the view
	 */
	private function registerToView()
	{
		$view = $this->getView();
		$id = \yii\helpers\Json::encode($this->options['id']);
		$editor_options = \yii\helpers\Json::encode($this->editorOptions);

		// Register the javascript to replace the $id input with an instance of ckeditor
		$view->registerJs("CKEDITOR.replace({$id}, {$editor_options});");
		CoreAsset::register($view);
	}

	/**
	 * Determine if we should echo an active or default textarea
	 */
	public function run()
	{
		if ($this->hasModel()) {
			echo \yii\helpers\Html::activeTextarea($this->model, $this->attribute, $this->options);
		} else {
			echo \yii\helpers\Html::textarea($this->name, $this->value, $this->options);
		}
	}
}