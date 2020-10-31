<?php
namespace YunDaCustoms\Info;

class Item
{
    public $product_code;
    public $hs_code;
    public $product_name;
    public $product_qutity;
    public $product_price;

    public function __toString()
    {
        return "<product_code>{$this->product_code}</product_code>
<hs_code>{$this->hs_code}</hs_code>
<product_name>{$this->product_name}</product_name>
<product_qutity>{$this->product_qutity}</product_qutity>
<product_price>{$this->product_price}</product_price>";
    }
}

/**
<product_code>物品编号</product_code>
<hs_code>物品海关编码</hs_code>
<product_name>物品名称</product_name>
<product_qutity>物品数量</product_qutity>
<product_price>物品价格</product_price>
 */