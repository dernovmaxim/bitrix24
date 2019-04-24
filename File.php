<?php

namespace common\bitrix24;

// Файлы
class File extends Bitrix24{
    public function get($id)
    {
        $this->method = "disk.file.get";
        return $this->execute(['id' => $id]);
    }    
    
}