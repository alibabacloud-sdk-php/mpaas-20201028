<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\Tea\Model;

class DeleteMcdpAimRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $mpaasMappcenterMcdpAimDeleteJsonStr;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'appId'                               => 'AppId',
        'mpaasMappcenterMcdpAimDeleteJsonStr' => 'MpaasMappcenterMcdpAimDeleteJsonStr',
        'tenantId'                            => 'TenantId',
        'workspaceId'                         => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->mpaasMappcenterMcdpAimDeleteJsonStr) {
            $res['MpaasMappcenterMcdpAimDeleteJsonStr'] = $this->mpaasMappcenterMcdpAimDeleteJsonStr;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteMcdpAimRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['MpaasMappcenterMcdpAimDeleteJsonStr'])) {
            $model->mpaasMappcenterMcdpAimDeleteJsonStr = $map['MpaasMappcenterMcdpAimDeleteJsonStr'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
