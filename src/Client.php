<?php
namespace YunDaCustoms;

use GuzzleHttp\Client as GuzzleHttp;

class Client
{
    protected $url = 'http://dcs.yundasys.com:10217/yddcs/entrance/handler.action';
    protected $buzType = 'logic';
    protected $version = '1.0';
    protected $dataType = 'xml';
    protected $accountNo;
    protected $password;
    protected $data;

    /**
     * @return mixed
     */
    public function getAccountNo()
    {
        return $this->accountNo;
    }

    /**
     * @param mixed $accountNo
     */
    public function setAccountNo($accountNo)
    {
        $this->accountNo = $accountNo;
    }

    /**
     * @return mixed
     */
    public function getBuzType()
    {
        return $this->buzType;
    }

    /**
     * @param mixed $buzType
     */
    public function setBuzType($buzType)
    {
        $this->buzType = $buzType;
    }

    /**
     * @return mixed
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param mixed $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * @return mixed
     */
    public function getDataType()
    {
        return $this->dataType;
    }

    /**
     * @param mixed $dataType
     */
    public function setDataType($dataType)
    {
        $this->dataType = $dataType;
    }

    /**
     * @return mixed
     */
    public function getValidation()
    {
        return md5($this->getAccountNo() .  $this->getPassword() . $this->getData());
    }

    /**
     * @param mixed $password
     * @return Client
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return base64_encode($this->data);
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }


    public function handle(){
        $client = new GuzzleHttp();
        return $client->post($this->getUrl(), [
            'form_params' => $this->formParams()
        ]);

    }

    /**
     * @return array
     */
    protected function formParams(){
        $params = [
            'buzType' => $this->getBuzType(),
            'data' => $this->getData(),
            'accountNo' => $this->getAccountNo(),
            'version' => $this->getVersion(),
            'dataType' => $this->getDataType(),
            'validation' => $this->getValidation(),
        ];
        return $params;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }


}