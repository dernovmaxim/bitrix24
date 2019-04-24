<?php

namespace common\bitrix24;

// Пользователи
class User extends Bitrix24{

    public function get($id)
    {
        $this->method = "user.get";
        return $this->execute(['ID' => $id]);
    }

    public function userList($fields = []) {
        $this->method = "user.search";
        return $this->execute($fields);
    }

    public function fields() {
        $this->method = "user.fields";
        return $this->execute();
    }
    
    public function search($fields = []) {
        $this->method = "user.search";
        return $this->execute($fields);
    }
    
    public function update($fields = []) {
        $this->method = "user.update";
        return $this->execute($fields);
    }
    
}