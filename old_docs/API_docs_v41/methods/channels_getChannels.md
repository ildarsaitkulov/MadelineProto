---
title: channels.getChannels
description: channels.getChannels parameters, return type and example
---
## Method: channels.getChannels  
[Back to methods index](index.md)


### Parameters:

| Name     |    Type       | Required |
|----------|:-------------:|---------:|
|id|Array of [InputChannel](../types/InputChannel.md) | Required|


### Return type: [messages\_Chats](../types/messages_Chats.md)

### Example:


```
$MadelineProto = new \danog\MadelineProto\API();
if (isset($token)) {
    $this->bot_login($token);
}
if (isset($number)) {
    $sentCode = $MadelineProto->phone_login($number);
    echo 'Enter the code you received: ';
    $code = '';
    for ($x = 0; $x < $sentCode['type']['length']; $x++) {
        $code .= fgetc(STDIN);
    }
    $MadelineProto->complete_phone_login($code);
}

$messages_Chats = $MadelineProto->channels->getChannels(['id' => [InputChannel], ]);
```
