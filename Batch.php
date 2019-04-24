<?php
namespace common\bitrix24;

// класс для выполнения пакетных запросов
class Batch extends Bitrix24{
    private $halt;
    private $webhook;
    private $queryUrl;
    private $webhookUser;
    
    public function __construct($domain, $authId, $webhook = false, $halt = 0, $webhookUser = 1)
    {
        $this->domain = $domain;
        $this->halt = $halt;
        $this->webhook = $webhook;
        $this->webhookUser = $webhookUser;
        if ($this->webhook) {
            $this->queryUrl = 'https://'.$this->domain.'/rest/'.$this->webhookUser.'/'.$authId.'/batch.json';
            unset($this->authId);
        } else {
            $this->authId = $authId;
            $this->queryUrl = 'https://'.$this->domain.'/rest/batch.json';
        }
    }
    
    public function exec($params)
    {
        $batchParams = [
            'auth' => $this->authId,
            'halt' => $this->halt,
            'cmd' => $params
        ];
        return $this->executeHttpRequest($this->queryUrl, $batchParams);
    }
    
}