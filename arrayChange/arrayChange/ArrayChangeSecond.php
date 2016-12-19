<?php

namespace arrayChangeSecond;

class ArrayChangeSecond
{
    public function arrayChange()
    {
        $data = [
            [
                'id' => 1,
                'hotelName' => '长隆酒店',
                'date' => '2016-12-06',
                'isOpen' => 1,
            ],
            [
                'id' => 1,
                'hotelName' => '长隆酒店',
                'date' => '2016-12-07',
                'isOpen' => 0,
            ],
            [
                'id' => 1,
                'hotelName' => '长隆酒店',
                'date' => '2016-12-08',
                'isOpen' => 1,
            ],
            [
                'id' => 1,
                'hotelName' => '长隆酒店',
                'date' => '2016-12-09',
                'isOpen' => 0,
            ],

        ];

        echo '<pre/>';
        foreach ($data as $key => $value) {
            $arr[$key] = ['date'=>$value['date'],'isOpen'=>$value['isOpen']];
        }
        foreach ($data as $key => $value){
            $dataTemp = ['id' =>$value['id'],'hotelName'=>$value['hotelName'],'dateList'=>$arr];
        }
        return $dataTemp;
    }
}
