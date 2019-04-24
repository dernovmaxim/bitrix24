<?php

namespace common\bitrix24;

// Задачи
class Task extends Bitrix24{
    public function get($id)
    {
        $this->method = "crm.lead.get";
        return $this->execute(['id' => $id]);
    }    
    
    public function add($fields)
    {
        $this->method = "task.item.add";
        return $this->execute($fields);
    }

    public function update($id, $fields)
    {
        $this->method = "crm.lead.update";
        return $this->execute(
            [
                'id' => $id,
                'fields' => $fields
            ]
        );        
    }
    
    public function delete($id)
    {
        $this->method = "crm.lead.delete";
        return $this->execute(['id' => $id]);
    }
    
    public function fields()
    {
        $this->method = "crm.lead.fields";
        return $this->execute();
    }
    
    public function leadList($fields)
    {
        $this->method = "crm.lead.list";
        return $this->execute($fields);
    }
    

}