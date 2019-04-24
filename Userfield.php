<?php
namespace common\bitrix24;

// Вспомогательные поля
class Userfield extends Bitrix24{

    public function add($fields)
    {
        $this->method = "userfieldtype.add";
        return $this->execute($fields);
    }
    
    public function userfieldList()
    {
        $this->method = "userfieldtype.add";
        return $this->execute();
    }
    
    public function delete($id)
    {
        $this->method = "userfieldtype.add";
        return $this->execute(['USER_TYPE_ID' => $id]);
    }
}