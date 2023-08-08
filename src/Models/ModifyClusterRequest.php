<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class ModifyClusterRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $apiServerEip;

    /**
     * @example eip-wz9fnasl6dsfhmvci****
     *
     * @var string
     */
    public $apiServerEipId;

    /**
     * @example true
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableRrsa;

    /**
     * @example true
     *
     * @var string
     */
    public $ingressDomainRebinding;

    /**
     * @example lb-wz97kes8tnndkpodw****
     *
     * @var string
     */
    public $ingressLoadbalancerId;

    /**
     * @example true
     *
     * @var bool
     */
    public $instanceDeletionProtection;

    /**
     * @var MaintenanceWindow
     */
    public $maintenanceWindow;

    /**
     * @example rg-acfmyvw3wjm****
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'apiServerEip'               => 'api_server_eip',
        'apiServerEipId'             => 'api_server_eip_id',
        'deletionProtection'         => 'deletion_protection',
        'enableRrsa'                 => 'enable_rrsa',
        'ingressDomainRebinding'     => 'ingress_domain_rebinding',
        'ingressLoadbalancerId'      => 'ingress_loadbalancer_id',
        'instanceDeletionProtection' => 'instance_deletion_protection',
        'maintenanceWindow'          => 'maintenance_window',
        'resourceGroupId'            => 'resource_group_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiServerEip) {
            $res['api_server_eip'] = $this->apiServerEip;
        }
        if (null !== $this->apiServerEipId) {
            $res['api_server_eip_id'] = $this->apiServerEipId;
        }
        if (null !== $this->deletionProtection) {
            $res['deletion_protection'] = $this->deletionProtection;
        }
        if (null !== $this->enableRrsa) {
            $res['enable_rrsa'] = $this->enableRrsa;
        }
        if (null !== $this->ingressDomainRebinding) {
            $res['ingress_domain_rebinding'] = $this->ingressDomainRebinding;
        }
        if (null !== $this->ingressLoadbalancerId) {
            $res['ingress_loadbalancer_id'] = $this->ingressLoadbalancerId;
        }
        if (null !== $this->instanceDeletionProtection) {
            $res['instance_deletion_protection'] = $this->instanceDeletionProtection;
        }
        if (null !== $this->maintenanceWindow) {
            $res['maintenance_window'] = null !== $this->maintenanceWindow ? $this->maintenanceWindow->toMap() : null;
        }
        if (null !== $this->resourceGroupId) {
            $res['resource_group_id'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['api_server_eip'])) {
            $model->apiServerEip = $map['api_server_eip'];
        }
        if (isset($map['api_server_eip_id'])) {
            $model->apiServerEipId = $map['api_server_eip_id'];
        }
        if (isset($map['deletion_protection'])) {
            $model->deletionProtection = $map['deletion_protection'];
        }
        if (isset($map['enable_rrsa'])) {
            $model->enableRrsa = $map['enable_rrsa'];
        }
        if (isset($map['ingress_domain_rebinding'])) {
            $model->ingressDomainRebinding = $map['ingress_domain_rebinding'];
        }
        if (isset($map['ingress_loadbalancer_id'])) {
            $model->ingressLoadbalancerId = $map['ingress_loadbalancer_id'];
        }
        if (isset($map['instance_deletion_protection'])) {
            $model->instanceDeletionProtection = $map['instance_deletion_protection'];
        }
        if (isset($map['maintenance_window'])) {
            $model->maintenanceWindow = MaintenanceWindow::fromMap($map['maintenance_window']);
        }
        if (isset($map['resource_group_id'])) {
            $model->resourceGroupId = $map['resource_group_id'];
        }

        return $model;
    }
}
