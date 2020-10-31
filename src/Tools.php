<?php
namespace YunDaCustoms;

class Tools
{
    public $cityArray = [
        'BJ' => '北京市',
        'TJ' => '天津市',
        'HE' => '河北省',
        'SX' => '山西省',
        'NM' => '内蒙古自治区',
        'LN' => '辽宁省',
        'JL' => '吉林省',
        'HL' => '黑龙江省',
        'SH' => '上海市',
        'JS' => '江苏省',
        'ZJ' => '浙江省',
        'AH' => '安徽省',
        'FJ' => '福建省',
        'JX' => '江西省',
        'SD' => '山东省',
        'HA' => '河南省',
        'HB' => '湖北省',
        'HN' => '湖南省',
        'GD' => '广东省',
        'GX' => '广西壮族自治区',
        'HI' => '海南省',
        'CQ' => '重庆市',
        'SC' => '四川省',
        'GZ' => '贵州省',
        'YN' => '云南省',
        'XZ' => '西藏自治区',
        'SN' => '陕西省',
        'GS' => '甘肃省',
        'QH' => '青海省',
        'NX' => '宁夏回族自治区',
        'XJ' => '新疆维吾尔自治区',
    ];

    /**
     * @param $name
     * @return false|int|string
     * @throws \Exception
     */
    public function cityTransform($name)
    {
        if (($key = array_search($name, $this->cityArray)) !== false) {
            return $key;
        }

        foreach ($this->cityArray as $key=>$value){
            if(mb_stripos($value, $name) !== false){
                return $key;
            }
        }

        throw new \Exception("没找到对应{$name}城市！");
    }
}