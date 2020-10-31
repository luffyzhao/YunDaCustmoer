<?php
namespace YunDaCustoms\Info;

class Sender
{
    public $sender_name;
    public $sender_tel;
    public $sender_address;
    public $sender_eamil;
    public $sender_compay;
    public $sd_country_code = 'CN';
    public $sd_city_code;
    public $sender_city;

    public function __toString()
    {
        return "<sender_name>{$this->sender_name}</sender_name>
<sender_tel>{$this->sender_tel}</sender_tel>
<sender_address>{$this->sender_address}</sender_address>
<sender_eamil>{$this->sender_eamil}</sender_eamil>
<sender_compay>{$this->sender_compay}</sender_compay>
<sd_country_code>{$this->sd_country_code}</sd_country_code>
<sd_city_code>{$this->sd_city_code}</sd_city_code>
<sender_city>{$this->sender_city}</sender_city>";
    }
}

/**
<sender_name>发件人姓名</sender_name>
<sender_tel>发件人电话</sender_tel>
<sender_address>发件人地址</sender_address>
<sender_eamil>发件人 E_mail </sender_eamil>
<sender_compay>发件人公司</sender_compay>
<sd_country_code>发件国家编码</sd_country_code>
<sd_city_code>发件城市编码</sd_city_code>
<sender_city>发件人城市</sender_city>
 */