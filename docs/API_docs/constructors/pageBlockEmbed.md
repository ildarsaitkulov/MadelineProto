---
title: pageBlockEmbed
description: pageBlockEmbed attributes, type and example
---
## Constructor: pageBlockEmbed  
[Back to constructors index](index.md)



### Attributes:

| Name     |    Type       | Required |
|----------|:-------------:|---------:|
|full\_width|[Bool](../types/Bool.md) | Optional|
|allow\_scrolling|[Bool](../types/Bool.md) | Optional|
|url|[string](../types/string.md) | Optional|
|html|[string](../types/string.md) | Optional|
|poster\_photo\_id|[long](../types/long.md) | Optional|
|w|[int](../types/int.md) | Required|
|h|[int](../types/int.md) | Required|
|caption|[RichText](../types/RichText.md) | Required|



### Type: [PageBlock](../types/PageBlock.md)


### Example:

```
$pageBlockEmbed = ['_' => 'pageBlockEmbed', 'full_width' => true, 'allow_scrolling' => true, 'url' => string, 'html' => string, 'poster_photo_id' => long, 'w' => int, 'h' => int, 'caption' => RichText, ];
```  

