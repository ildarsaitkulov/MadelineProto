---
title: userForeign
description: userForeign attributes, type and example
---
## Constructor: userForeign  
[Back to constructors index](index.md)



### Attributes:

| Name     |    Type       | Required |
|----------|:-------------:|---------:|
|id|[int](../types/int.md) | Required|
|first\_name|[string](../types/string.md) | Required|
|last\_name|[string](../types/string.md) | Required|
|username|[string](../types/string.md) | Required|
|access\_hash|[long](../types/long.md) | Required|
|photo|[UserProfilePhoto](../types/UserProfilePhoto.md) | Required|
|status|[UserStatus](../types/UserStatus.md) | Required|



### Type: [User](../types/User.md)


### Example:

```
$userForeign = ['_' => 'userForeign', 'id' => int, 'first_name' => string, 'last_name' => string, 'username' => string, 'access_hash' => long, 'photo' => UserProfilePhoto, 'status' => UserStatus, ];
```  

