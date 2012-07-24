# PHP Formee Builder Class

This work hasn't conciliation with the Original [Formee Project](http://formee.org/)

Just a simple PHP class to Build xHTML and CSS Form based on Formee Framework

## How to use
### Install
The first step to use it is to include the class file in your php page:

`include("/path/formee.builder.class.php");`

Replace the `/path/` with the path you used.

### Use
#### Input Text
`$formeeBuilder->inputText(string $title, string $id, string $val[, string $class[, int $size[, string $required[, string $type[, string $readonly]]]]]);`

>**Patterns** 

>$size: 12

>$required: false

>$type: text

>$readonly: false

#### Input Check [Radio/Button]
`$formeeBuilder->inputCheck(string $title, string $id, array $val, string $type[, string $checked[, int $size[, string $class[, string $required]]]]);`
>**Patterns** 

>$cheked: none

>$size: 12

>$required: false

#### Text Area
`$formeeBuilder->textArea(string $title, string $id, string $val[, string $class[, int $size [, string $required]]]);`
>**Patterns** 

>$size: 12

>$required: false


#### Select
`$formeeBuilder->Select(string $title, string $id[, string $val, string $default[, string $multiple[, string $classe[, string $size[, string $required]]]]]);`
>**Patterns** 

>$multiple: false

>$size: 12

>$required: false

#### Pattern Global

>$required:
>If wanted the field required, you need to type: 'required'

>$val:
>If InputCkech or Select the val is an array, like:
>`array(value1 => description1,value2 => description2)`

>$readonly
>If wanted the field readonly, you need to type: 'readonly'

>$checked/$default
>The values if need to be checked, for more than one, broke the values with: ','

>$size
>The size can be from 1 to 12

#### Close Form
`$formeeBuilder->finaliza(string $title, string $id[, string $url_back[, bool $reset]]);`

#### Required
To all work perfectly, You'll need:

* [Jquery](http://jquery.com/)
* [Formee](http://formee.org/)