<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\GetMcubeUpgradePackageInfoResponseBody;

use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetMcubeUpgradePackageInfoResponseBody\getPackageResult\packageInfo;
use AlibabaCloud\Tea\Model;

class getPackageResult extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var packageInfo
     */
    public $packageInfo;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resultMsg;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorCode'   => 'ErrorCode',
        'packageInfo' => 'PackageInfo',
        'requestId'   => 'RequestId',
        'resultMsg'   => 'ResultMsg',
        'success'     => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->packageInfo) {
            $res['PackageInfo'] = null !== $this->packageInfo ? $this->packageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resultMsg) {
            $res['ResultMsg'] = $this->resultMsg;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return getPackageResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['PackageInfo'])) {
            $model->packageInfo = packageInfo::fromMap($map['PackageInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResultMsg'])) {
            $model->resultMsg = $map['ResultMsg'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
