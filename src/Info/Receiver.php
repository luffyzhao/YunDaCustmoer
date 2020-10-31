<?php

namespace YunDaCustoms\Info;

class Receiver
{
    public $receiver_name;
    public $receiver_tel;
    public $receiver_address;
    public $receiver_eamil;
    public $receiver_compay;
    public $re_card_type;
    public $re_card_no;
    public $re_country_code = 'CN';
    public $re_city_code;
    public $receiver_province;
    public $receiver_city;
    public $receiver_area;
    public $receiver_street;

    public function __toString()
    {
        return "<receiver_name>{$this->receiver_name}</receiver_name>
<receiver_tel>{$this->receiver_tel}</receiver_tel>
<receiver_address>{$this->receiver_address}</receiver_address>
<receiver_eamil>{$this->receiver_eamil}</receiver_eamil>
<receiver_compay>{$this->receiver_compay}</receiver_compay>
<re_card_type>{$this->re_card_type}</re_card_type>
<re_card_no>{$this->re_card_no}</re_card_no>
<re_country_code>{$this->re_country_code}</re_country_code>
<re_city_code>{$this->re_city_code}</re_city_code>
<receiver_province>{$this->receiver_province}</receiver_province>
<receiver_city>{$this->receiver_city}</receiver_city>
<receiver_area>{$this->receiver_area}</receiver_area>
<receiver_street>{$this->receiver_street}</receiver_street>";
    }
}
/**
 * <receiver_name>收件人姓名</receiver_name>
 * <receiver_tel>收件人电话</receiver_tel>
 * <receiver_address>收件人地址</receiver_address>
 * <receiver_eamil>收件人 E_mail</receiver_eamil>
 * <receiver_compay>收件人公司</receiver_compay>
 * <re_card_type>证件类型</re_card_type>
 * <re_card_no>证件信息</re_card_no>
 * <re_country_code>收件国家编码</re_country_code>
 * <re_city_code>收件城市编码</re_city_code>
 * <receiver_province>收件人省信息</receiver_province>
 * <receiver_city>收件人市信息</receiver_city>
 * <receiver_area>收件人区信息</receiver_area>
 * <receiver_street>收件人街道</receiver_street>
 */