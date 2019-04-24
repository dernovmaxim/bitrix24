<?php

namespace common\bitrix24;

// Работа с перечислениями
class Enum extends Bitrix24 {

    public function type() {
        $this->method = "crm.enum.activitytype";
        return $this->execute();
    }
    
    public function ownertype() {
        $this->method = "crm.enum.ownertype";
        return $this->execute();
    }

    public function priority() {
        $this->method = "crm.enum.activitypriority";
        return $this->execute();
    }

    public function direction() {
        $this->method = "crm.enum.activitydirection";
        return $this->execute();
    }

    public function content() {
        $this->method = "crm.enum.contenttype";
        return $this->execute();
    }

    public function fields() {
        $this->method = "crm.enum.fields";
        return $this->execute();
    }

    public function notifytype() {
        $this->method = "crm.enum.activitynotifytype";
        return $this->execute();
    }

    public function addresstype() {
        $this->method = "crm.enum.addresstype";
        return $this->execute();
    }

    public function activitystatus() {
        $this->method = "crm.enum.activitystatus";
        return $this->execute();
    }

}