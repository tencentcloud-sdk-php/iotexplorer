<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云存时间轴接口返回数据
 *
 * @method array getTimeList() 获取云存时间轴信息列表
 * @method void setTimeList(array $TimeList) 设置云存时间轴信息列表
 * @method string getVideoURL() 获取播放地址
 * @method void setVideoURL(string $VideoURL) 设置播放地址
 */
class CloudStorageTimeData extends AbstractModel
{
    /**
     * @var array 云存时间轴信息列表
     */
    public $TimeList;

    /**
     * @var string 播放地址
     */
    public $VideoURL;

    /**
     * @param array $TimeList 云存时间轴信息列表
     * @param string $VideoURL 播放地址
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TimeList",$param) and $param["TimeList"] !== null) {
            $this->TimeList = [];
            foreach ($param["TimeList"] as $key => $value){
                $obj = new CloudStorageTimeInfo();
                $obj->deserialize($value);
                array_push($this->TimeList, $obj);
            }
        }

        if (array_key_exists("VideoURL",$param) and $param["VideoURL"] !== null) {
            $this->VideoURL = $param["VideoURL"];
        }
    }
}
