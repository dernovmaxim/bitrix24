<?php

namespace common\bitrix24;

// Живая лента
class Livefeedmessage extends Bitrix24{
    public function add($fields)
    {
        $this->method = "crm.livefeedmessage.add";
        return $this->execute($fields);
    }
}