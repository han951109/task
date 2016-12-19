<?php
namespace arrayChangeFinal;
class ArrayChangeFinal
{
    public function arrayChange()
    {
        $data = [['id' => 1,
            'hotelName' => '长隆酒店',
            'styleId' => 3,
            'styleName' => '三选一',
            'itemId' => 333,
            'itemName' => '双早元素',
            'providerId' => 333,
            'providerName' => '长隆供应商', ],
            ['id' => 2,
                'hotelName' => '七天酒店',
                'styleId' => 4,
                'styleName' => '四选一',
                'itemId' => 444,
                'itemName' => '单早元素',
                'providerId' => 444,
                'providerName' => '七天供应商', ], ];

        foreach ($data as $key => $value) {
            $dataTemp[] = ['id' => $value['id'],
                'hotelName' => $value['hotelName'],
                'styleInfo' => '('.array_search($value['styleId'], $value).'=>'.$value['styleId'].')'.$value['styleName'],
                'itemInfo' => '('.array_search($value['itemId'], $value).'=>'.$value['itemId'].')'.$value['itemName'],
                'providerInfo' => '('.'providerId'.'=>'.$value['providerId'].')'.$value['providerName'], ];
        }

        echo '<pre>';

        return $dataTemp;
    }
}
