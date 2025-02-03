<?php

namespace App;

use App\InterfaceNotify;

class SendMail implements InterfaceNotify {
    public function send($msg) {
        echo $msg;
    }

}