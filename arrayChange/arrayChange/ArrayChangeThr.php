<?php
namespace arrayChangeThr;
class ArrayChangeThr
{
    public function arrayChange()
    {
        $data = [
            [
                'id' => 1,
                'hotelName' => '长隆酒店',
                'dateList' => [
                    [
                        'date' => '2016-12-06',
                        'isOpen' => 1,
                    ],
                    [
                        'date' => '2016-12-07',
                        'isOpen' => 0,
                    ],
                    [
                        'date' => '2016-12-08',
                        'isOpen' => 1,
                    ],
                    [
                        'date' => '2016-12-09',
                        'isOpen' => 0,
                    ],
                ],
            ],

        ];

        foreach ($data as $key => $value) {
            $dataTemp = $value['dateList'];
        }

        foreach ($data as $key => $value) {
            $arr = ['id' => $value['id'], 'hotelName' => $value['hotelName']];
        }
        foreach ($dataTemp as $key => $value) {
            $arrChange[] = array_merge($arr, $value);
        }

        return $arrChange;
    }
}
