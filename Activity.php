<?php

namespace common\bitrix24;

// класс для добавление ДЕЛА
class Activity extends Bitrix24 {

    public function add($fields) {
        $this->method = "crm.activity.add";
        return $this->execute(['fields' => $fields]);
    }

    public function communication() {
        $this->method = "crm.activity.communication.fields";
        return $this->execute();
    }

    public function delete($id) {
        $this->method = "crm.activity.delete";
        return $this->execute(['id' => $id]);
    }

    public function fields() {
        $this->method = "crm.activity.fields";
        return $this->execute();
    }

    public function get($id) {
        $this->method = "crm.activity.get";
        return $this->execute(['id' => $id]);
    }

    public function activitylist($fields = []) {
        $this->method = "crm.activity.list";
        return $this->execute($fields);
    }

    public function update($id, $fields = []) {
        $this->method = "crm.activity.update";
        return $this->execute(['id' => $id, 'fields' => $fields]);
    }

}