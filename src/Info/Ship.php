<?php
namespace YunDaCustoms\Info;

class Ship
{
    public $client_ship;
    public $goods_name;
    public $total_count;
    public $total_fees;
    public $total_weight;
    public $order_list;
    public $express_type;
    public $delivery_way;
    public $pre_express;
    public $ec_reg_cid;
    public $ec_reg_cname;
    public $ebp_ciq_code;
    public $ebp_ciq_name;

    /**
     * @var Receiver
     */
    public $receiver;

    /**
     * @var Sender
     */
    public $sender;

    /**
     * @var Item[]
     */
    public $items = [];

    public function __toString()
    {
        $items = '';
        foreach ($this->items as $item){
            $items .= "<item>{$item}</item>";
        }


        return "<client_ship>{$this->client_ship}</client_ship>
<goods_name>{$this->goods_name}</goods_name>
<total_count>{$this->total_count}</total_count>
<total_fees>{$this->total_fees}</total_fees>
<total_weight>{$this->total_weight}</total_weight>
<order_list>{$this->order_list}</order_list>
<express_type>{$this->express_type}</express_type>
<delivery_way>{$this->delivery_way}</delivery_way>
<pre_express>{$this->pre_express}</pre_express>
<ec_reg_cid>{$this->ec_reg_cid}</ec_reg_cid>
<ec_reg_cname>{$this->ec_reg_cname}</ec_reg_cname>
<ebp_ciq_code>{$this->ebp_ciq_code}</ebp_ciq_code>
<ebp_ciq_name>{$this->ebp_ciq_name}</ebp_ciq_name>
<receiver>{$this->receiver}</receiver>
<sender>{$this->sender}</sender>
<items>{$items}</items>";
    }
}

/**
 * >
 * <client_ship>客户运单号</client_ship>
 * <goods_name>申报物品名称</goods_name>
 * <total_count>货品总件数</total_count>
 * <total_fees>运单总费用</total_fees>
 * <total_weight>运单总重量</total_weight>
 * <order_list>运单对应订单号</order_list>
 * <express_type>快递类型</express_type>
 * <delivery_way>发货方式</delivery_way>
 * <pre_express>唯一分运单号</pre_express>
 * <ec_reg_cid>指定电商企业海关备案注册编号</ec_reg_cid>
 * <ec_reg_cname>指定电商企业海关备案注册名称</ec_reg_cname>
 * <ebp_ciq_code>指定电商企业国检备案注册编号</ebp_ciq_code>
 * <ebp_ciq_name>指定电商企业国检备案注册名称</ebp_ciq_name>
 * <!---收件人信息--->
 * <receiver></receiver>
 * <sender></sender>
 * <items></items>
 */