> Original package `vakorovin/yii2-datetimepicker` was removed by author.  
> So it is a package mirror to keep backend-service working properly.

# Yii2 DateTimePicker widget

```php
use oneplayce\datetimepicker\Datetimepicker;

echo $form->field($model, 'created')->widget(Datetimepicker::className(),[
    'options' => [
        'lang' => 'en',
    ]
]);
```

### Available `options` of DateTimePicker: 

http://xdsoft.net/jqplugins/datetimepicker
