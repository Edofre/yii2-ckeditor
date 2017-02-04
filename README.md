# Yii2 ckeditor widget

[![Latest Stable Version](https://poser.pugx.org/edofre/yii2-ckeditor/v/stable)](https://packagist.org/packages/edofre/yii2-ckeditor)
[![Total Downloads](https://poser.pugx.org/edofre/yii2-ckeditor/downloads)](https://packagist.org/packages/edofre/yii2-ckeditor)
[![Latest Unstable Version](https://poser.pugx.org/edofre/yii2-ckeditor/v/unstable)](https://packagist.org/packages/edofre/yii2-ckeditor)
[![License](https://poser.pugx.org/edofre/yii2-ckeditor/license)](https://packagist.org/packages/edofre/yii2-ckeditor)
[![composer.lock](https://poser.pugx.org/edofre/yii2-ckeditor/composerlock)](https://packagist.org/packages/edofre/yii2-ckeditor)

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

To install, either run

```
$ php composer.phar require edofre/yii2-ckeditor "V1.0.1"
```

or add

```
"edofre/yii2-ckeditor": "V1.0.1"
```

to the ```require``` section of your `composer.json` file.

## Usage

### ActiveForm usage with a model

```php
<?= $form->field($model, 'body')->widget(\edofre\ckeditor\CKEditor::className(), [
    'editorOptions' => [
        'language' => 'nl',
    ],
]) ?>
```

### Usage without model

```php
<?= \edofre\ckeditor\CKEditor::widget([
    'name'          => 'content',
    'editorOptions' => [
        'height'      => '400px',
    ],
]) ?>
```