#!/usr/bin/env php
<?php
/*
Copyright 2016 Daniil Gentili
(https://daniil.it)
This file is part of MadelineProto.
MadelineProto is free software: you can redistribute it and/or modify it under the terms of the GNU Affero General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
MadelineProto is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
See the GNU Affero General Public License for more details.
You should have received a copy of the GNU General Public License along with MadelineProto.
If not, see <http://www.gnu.org/licenses/>.
*/

require_once 'vendor/autoload.php';

$MadelineProto = new \danog\MadelineProto\API();
var_dump(strlen(var_export($MadelineProto, true)));
if (file_exists('number.php')) {
    include_once 'number.php';
    $sendCode = $MadelineProto->auth->sendCode(
        [
            'phone_number' => $number,
            'sms_type'     => 5,
            'api_id'       => $MadelineProto->API->settings['app_info']['api_id'],
            'api_hash'     => $MadelineProto->API->settings['app_info']['api_hash'],
            'lang_code'    => $MadelineProto->API->settings['app_info']['lang_code'],
        ]
    );
    var_dump($sendCode);
}
