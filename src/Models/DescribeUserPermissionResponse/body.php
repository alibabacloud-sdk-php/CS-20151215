<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeUserPermissionResponse;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @description 集群访问配置
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description 授权类型
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description 自定义角色名称
     *
     * @var string
     */
    public $roleName;

    /**
     * @description 预置的角色类型
     *
     * @var string
     */
    public $roleType;

    /**
     * @description 是否为集群 owner 的授权
     *
     * @var int
     */
    public $isOwner;

    /**
     * @description 是否为ram 角色授权
     *
     * @var int
     */
    public $isRamRole;
    protected $_name = [
        'resourceId'   => 'resource_id',
        'resourceType' => 'resource_type',
        'roleName'     => 'role_name',
        'roleType'     => 'role_type',
        'isOwner'      => 'is_owner',
        'isRamRole'    => 'is_ram_role',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceId) {
            $res['resource_id'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['resource_type'] = $this->resourceType;
        }
        if (null !== $this->roleName) {
            $res['role_name'] = $this->roleName;
        }
        if (null !== $this->roleType) {
            $res['role_type'] = $this->roleType;
        }
        if (null !== $this->isOwner) {
            $res['is_owner'] = $this->isOwner;
        }
        if (null !== $this->isRamRole) {
            $res['is_ram_role'] = $this->isRamRole;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['resource_id'])) {
            $model->resourceId = $map['resource_id'];
        }
        if (isset($map['resource_type'])) {
            $model->resourceType = $map['resource_type'];
        }
        if (isset($map['role_name'])) {
            $model->roleName = $map['role_name'];
        }
        if (isset($map['role_type'])) {
            $model->roleType = $map['role_type'];
        }
        if (isset($map['is_owner'])) {
            $model->isOwner = $map['is_owner'];
        }
        if (isset($map['is_ram_role'])) {
            $model->isRamRole = $map['is_ram_role'];
        }

        return $model;
    }
}
