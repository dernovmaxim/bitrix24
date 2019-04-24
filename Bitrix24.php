<?php
namespace common\bitrix24;

// Основной класс
class Bitrix24{
    protected $domain;
    protected $authId;
    protected $method;
    private $exec;
    private $webhook;
    private $authWebhook;
    private $webhookUser;
    
    public function __construct($domain = "", $authId = "", $webhook = false, $webhookUser = 1)
    {
        $this->domain = $domain;
        $this->authId = $authId;
        $this->exec = true;
        $this->webhook = $webhook;
        $this->webhookUser = $webhookUser;
        $this->authWebhook = ($this->webhook) ? $this->authId : FALSE;
    }
    
    public function setExecFalse()
    {
        $this->exec = false;
    }
    
    public function getBatchRequest($params)
    {
        return $this->method.'?'. http_build_query($params);
    }
    
    protected function executeHttpRequest($queryUrl, array $params = []) {
        $queryData = http_build_query($params);
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_POST => 1,
            CURLOPT_HEADER => 0,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $queryUrl,
            CURLOPT_POSTFIELDS => $queryData,
            CURLOPT_IPRESOLVE => CURL_IPRESOLVE_V4,
        ));
        $result = json_decode(curl_exec($curl), true);
        curl_close($curl);
        return $result;
    }
    
    protected function execute($params = [])
    {
        $queryUrl = $this->getQueryUrl();
        if ($this->exec) {
            $output = (isset($this->auth_id)) ? array_merge($params, array("auth" => $this->auth_id)) : $params;
            return $this->executeHttpRequest($queryUrl, $output);
        } else {
            return $this->getBatchRequest($params);
        }
    }

    private function getQueryUrl() {
        $queryUrl = '';
        if ($this->webhook) {
            $queryUrl = 'https://'.$this->domain.'/rest/'.$this->webhookUser.'/'.$this->authWebhook.'/'.$this->method.'.json';
            unset($this->authId);
        } else {
            $queryUrl = 'https://'.$this->domain.'/rest/'.$this->method.'.json';
        }
        return $queryUrl;
    }
    
    public function checkResult($result)
    {
        if (isset($result['result']) && is_numeric($result['result']))
            return $result['result'];
        else
            return false;
    }
    
}
