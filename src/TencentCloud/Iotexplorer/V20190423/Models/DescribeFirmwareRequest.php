<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * DescribeFirmware请求参数结构体
 *
 * @method string getProductID() 获取产品ID
 * @method void setProductID(string $ProductID) 设置产品ID
 * @method string getFirmwareVersion() 获取固件版本号
 * @method void setFirmwareVersion(string $FirmwareVersion) 设置固件版本号
 */
class DescribeFirmwareRequest extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductID;

    /**
     * @var string 固件版本号
     */
    public $FirmwareVersion;

    /**
     * @param string $ProductID 产品ID
     * @param string $FirmwareVersion 固件版本号
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
        if (array_key_exists("ProductID",$param) and $param["ProductID"] !== null) {
            $this->ProductID = $param["ProductID"];
        }

        if (array_key_exists("FirmwareVersion",$param) and $param["FirmwareVersion"] !== null) {
            $this->FirmwareVersion = $param["FirmwareVersion"];
        }
    }
}
