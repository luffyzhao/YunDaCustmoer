<?php
namespace YunDaCustoms\Info;

class Body
{
    public $logistics_id;
    public $customs_id;
    public $ec_id;
    public $apply_type = 0;
    /**
     * @var Ship[]
     */
    public $ship_lists = [];
    public $source_flag;

    public function __toString()
    {
        $ship_lists = '';
        foreach ($this->ship_lists as $ship){
            $ship_lists .= "<ship>{$ship}</ship>";
        }
        return "<logistics_id>{$this->logistics_id}</logistics_id>
<customs_id>{$this->customs_id}</customs_id>
<ec_id>{$this->ec_id}</ec_id>
<apply_type>{$this->apply_type}</apply_type>
<ship_lists>{$ship_lists}</ship_lists>
<source_flag>{$this->source_flag}</source_flag>";
    }
}
/**

<body>
<logistics_id>W00001</logistics_id>
<customs_id>指定申报海关编码</customs_id>
<ec_id>指定电商公司编码（可空）</ec_id>
<apply_type>0:电商企业类型 1:个人物品类型</apply_type>
<ship_lists></ship_lists>
<source_flag>来源标识：账号</source_flag>
</body>

 */