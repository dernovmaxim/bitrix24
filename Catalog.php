<?php
namespace common\bitrix24;

// Работа с каталогом
class Catalog extends Bitrix24{

    public function fields()
    {
        $this->method = "crm.catalog.fields";
        return $this->execute();
    }
    
    public function get($id)
    {
        $this->method = "crm.catalog.get";
        return $this->execute(['id' => $id]);
    }

    public function catalogList()
    {
        $this->method = "crm.catalog.list";
        return $this->execute("crm.catalog.list");
    }
    
}