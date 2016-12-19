<?php
/**
 * Created by PhpStorm.
 * User: han
 * Date: 2016/12/5
 * Time: 17:39.
 */

namespace arrayChangeFirst;

class ArrayChangeFirst
{
    public function arrayChange()
    {
        $data = [
            [
                'id' => 1,
                'hotel_name' => '长隆酒店',
                'ac_list' => [
                    [
                        'id' => 1,
                        'image_url' => 'http://www.baidu.com',
                    ],
                    [
                        'id' => 2,
                        'image_url' => 'http://www.jd.com',
                    ],

                ],
            ],
            [
                'id' => 2,
                'hotel_name' => '万达酒店',
                'ac_list' => [
                    [
                        'id' => 1,
                        'image_url' => 'http://www.taobao.com',
                    ],
                    [
                        'id' => 2,
                        'image_url' => 'http://www.wangyi.com',
                    ],

                ],
            ],

        ];
        echo '<pre>';

        foreach ($data as $key => $value) {
            foreach ($value['ac_list'] as $k => $v) {
                $arr[$key][] = ['id' => $v['id'], 'imageUrl' => $v['image_url']];
            }
        }
        foreach ($data as $key => $value) {
            $dataTemp[] = ['id' => $value['id'], 'hotelName' => $value['hotel_name'], 'acList' =>$arr[$key]];
        }
        return $dataTemp;
    }
}
