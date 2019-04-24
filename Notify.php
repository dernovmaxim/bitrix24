<?php

namespace common\bitrix24;

// Уведомления
class Notify extends Bitrix24 {

    public function sendnotify($id, $message) {
        $this->method = "im.notify";
        return $this->execute(['to' => $id, 'message' => $message, 'type' => 'SYSTEM']);
    }

}