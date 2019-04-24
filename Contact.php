<?php

namespace common\bitrix24;

// Работа с контактами
class Contact extends Bitrix24{
    public function get($id)
    {
        $this->method = "crm.contact.get";
        return $this->execute(['id' => $id]);
    }    
    
    public function add($fields)
    {
        $this->method = "crm.contact.add";
        return $this->execute($fields);
    }

    public function update($id, $fields)
    {
        $this->method = "crm.contact.update";
        return $this->execute(
            [
                'id' => $id,
                'fields' => $fields
            ]
        );
    }
    
    public function delete($id)
    {
        $this->method = "crm.contact.delete";
        return $this->execute(['id' => $id]);
    }
    
    public function fields()
    {
        $this->method = "crm.contact.fields";
        return $this->execute();
    }
    
    public function contactList($fields)
    {
        $this->method = "crm.contact.list";
        return $this->execute($fields);
    }
    

}