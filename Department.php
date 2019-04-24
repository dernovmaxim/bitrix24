<?php

namespace common\bitrix24;

// Работа с подразделениями
class Department extends Bitrix24{

    public function get($id)
    {
        $this->method = "department.get";
        return $this->execute(['ID' => $id]);
    }

}