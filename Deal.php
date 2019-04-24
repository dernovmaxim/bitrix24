<?php

namespace common\bitrix24;

// Работа со сделками
class Deal extends Bitrix24{
    public function get($id)
    {
        $this->method = "crm.deal.get";
        return $this->execute(['id' => $id]);
    }    
    
    public function add($fields)
    {
        $this->method = "crm.deal.add";
        return $this->execute($fields);
    }

    public function update($id, $fields)
    {
        $this->method = "crm.deal.update";
        return $this->execute(
            [
                'id' => $id,
                'fields' => $fields
            ]
        );        
    }
    
    public function delete($id)
    {
        $this->method = "crm.deal.delete";
        return $this->execute(['id' => $id]);
    }
    
    public function fields()
    {
        $this->method = "crm.deal.fields";
        return $this->execute();
    }
    
    public function dealList($fields)
    {
        $this->method = "crm.deal.list";
        return $this->execute($fields);
    }
    
    public function contactAdd($id, $fields)
    {
        $this->method = "crm.deal.contact.add";
        return $this->execute(['id' => $id, 'fields' => $fields]);
    }
    
    public function contactList($id) {
        $this->method = "crm.deal.contact.items.get";
        return $this->execute(['id' => $id]);
    }
    
    public function productrowGet($id) {
        $this->method = "crm.deal.productrows.get";
        return $this->execute(['id' => $id]);
    }
    
}