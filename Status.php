<?php
namespace common\bitrix24;

// Справочники
class Status extends Bitrix24{

    public function fields()
    {
        $this->method = "crm.status.fields";
        return $this->execute();
    }
    
    public function get($id)
    {
        $this->method = "crm.status.get";
        return $this->execute(['id' => $id]);
    }

    public function statusList()
    {
        $this->method = "crm.status.list";
        return $this->execute();
    }

    public function entityItems($id)
    {
        $this->method = "crm.status.entity.items";
        return $this->execute(['entityId' => $id]);
    }    
}