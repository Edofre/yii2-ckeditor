# Yii2 ckeditor widget

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