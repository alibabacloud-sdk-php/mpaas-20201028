<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMappCenterWorkspacesResponseBody\listMappCenterWorkspaceResult;
use AlibabaCloud\Tea\Model;

class ListMappCenterWorkspacesResponseBody extends Model
{
    /**
     * @var listMappCenterWorkspaceResult
     */
    public $listMappCenterWorkspaceResult;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resultCode;

    /**
     * @var string
     */
    public $resultMessage;
    protected $_name = [
        'listMappCenterWorkspaceResult' => 'ListMappCenterWorkspaceResult',
        'requestId'                     => 'RequestId',
        'resultCode'                    => 'ResultCode',
        'resultMessage'                 => 'ResultMessage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->listMappCenterWorkspaceResult) {
            $res['ListMappCenterWorkspaceResult'] = null !== $this->listMappCenterWorkspaceResult ? $this->listMappCenterWorkspaceResult->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resultCode) {
            $res['ResultCode'] = $this->resultCode;
        }
        if (null !== $this->resultMessage) {
            $res['ResultMessage'] = $this->resultMessage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMappCenterWorkspacesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ListMappCenterWorkspaceResult'])) {
            $model->listMappCenterWorkspaceResult = listMappCenterWorkspaceResult::fromMap($map['ListMappCenterWorkspaceResult']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResultCode'])) {
            $model->resultCode = $map['ResultCode'];
        }
        if (isset($map['ResultMessage'])) {
            $model->resultMessage = $map['ResultMessage'];
        }

        return $model;
    }
}
