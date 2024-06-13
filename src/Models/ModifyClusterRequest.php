<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterRequest\apiServerCustomCertSans;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterRequest\operationPolicy;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterRequest\systemEventsLogging;
use AlibabaCloud\Tea\Model;

class ModifyClusterRequest extends Model
{
    /**
     * @description The network access control list (ACL) of the SLB instance associated with the API server if the cluster is a registered cluster.
     *
     * @var string[]
     */
    public $accessControlList;

    /**
     * @var apiServerCustomCertSans
     */
    public $apiServerCustomCertSans;

    /**
     * @description Specifies whether to associate an elastic IP address (EIP) with the cluster. This EIP is used for accessing the API server over the Internet. Valid values:
     *
     *   `true`: associates an EIP with the cluster.
     *   `false`: does not associate an EIP with the cluster.
     *
     * @example true
     *
     * @var bool
     */
    public $apiServerEip;

    /**
     * @description The ID of the EIP that you want to associate with the API server of the cluster. This parameter takes effect when `api_server_eip` is set to `true`.
     *
     * @example eip-wz9fnasl6dsfhmvci****
     *
     * @var string
     */
    public $apiServerEipId;

    /**
     * @description The cluster name.
     *
     * The cluster name must be 1 to 63 characters in length, and can contain digits, letters, and hyphens (_). The cluster name cannot start with a hyphen (-).
     * @example cluster-new-name
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description Specifies whether to enable cluster deletion protection. If this option is enabled, the cluster cannot be deleted in the console or by calling API operations. Valid values:
     *
     *   `true`
     *   `false`
     *
     * Default value: `false`
     * @example true
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @description Specifies whether to enable the RRSA feature. Valid values:
     *
     *   `true`
     *   `false`
     *
     * @example true
     *
     * @var bool
     */
    public $enableRrsa;

    /**
     * @description Specifies whether to remap the test domain name of the cluster. Valid values:
     *
     *   `true`
     *   `false`
     *
     * Default value: `false`
     * @example true
     *
     * @var bool
     */
    public $ingressDomainRebinding;

    /**
     * @description The ID of the Server Load Balancer (SLB) instance of the cluster to be modified.
     *
     * @example lb-wz97kes8tnndkpodw****
     *
     * @var string
     */
    public $ingressLoadbalancerId;

    /**
     * @description Specifies whether to enable instance deletion protection. If this option is enabled, the instance cannot be deleted in the console or by calling API operations. Valid values:
     *
     *   `true`
     *   `false`
     *
     * Default value: `false`
     * @example true
     *
     * @var bool
     */
    public $instanceDeletionProtection;

    /**
     * @description The cluster maintenance window. This feature takes effect only for managed Pro clusters.
     *
     * @var MaintenanceWindow
     */
    public $maintenanceWindow;

    /**
     * @var operationPolicy
     */
    public $operationPolicy;

    /**
     * @description The ID of the cluster resource group.
     *
     * @example rg-acfmyvw3wjm****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The storage configurations of system events.
     *
     * @var systemEventsLogging
     */
    public $systemEventsLogging;
    protected $_name = [
        'accessControlList'          => 'access_control_list',
        'apiServerCustomCertSans'    => 'api_server_custom_cert_sans',
        'apiServerEip'               => 'api_server_eip',
        'apiServerEipId'             => 'api_server_eip_id',
        'clusterName'                => 'cluster_name',
        'deletionProtection'         => 'deletion_protection',
        'enableRrsa'                 => 'enable_rrsa',
        'ingressDomainRebinding'     => 'ingress_domain_rebinding',
        'ingressLoadbalancerId'      => 'ingress_loadbalancer_id',
        'instanceDeletionProtection' => 'instance_deletion_protection',
        'maintenanceWindow'          => 'maintenance_window',
        'operationPolicy'            => 'operation_policy',
        'resourceGroupId'            => 'resource_group_id',
        'systemEventsLogging'        => 'system_events_logging',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessControlList) {
            $res['access_control_list'] = $this->accessControlList;
        }
        if (null !== $this->apiServerCustomCertSans) {
            $res['api_server_custom_cert_sans'] = null !== $this->apiServerCustomCertSans ? $this->apiServerCustomCertSans->toMap() : null;
        }
        if (null !== $this->apiServerEip) {
            $res['api_server_eip'] = $this->apiServerEip;
        }
        if (null !== $this->apiServerEipId) {
            $res['api_server_eip_id'] = $this->apiServerEipId;
        }
        if (null !== $this->clusterName) {
            $res['cluster_name'] = $this->clusterName;
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
        if (null !== $this->operationPolicy) {
            $res['operation_policy'] = null !== $this->operationPolicy ? $this->operationPolicy->toMap() : null;
        }
        if (null !== $this->resourceGroupId) {
            $res['resource_group_id'] = $this->resourceGroupId;
        }
        if (null !== $this->systemEventsLogging) {
            $res['system_events_logging'] = null !== $this->systemEventsLogging ? $this->systemEventsLogging->toMap() : null;
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
        if (isset($map['access_control_list'])) {
            if (!empty($map['access_control_list'])) {
                $model->accessControlList = $map['access_control_list'];
            }
        }
        if (isset($map['api_server_custom_cert_sans'])) {
            $model->apiServerCustomCertSans = apiServerCustomCertSans::fromMap($map['api_server_custom_cert_sans']);
        }
        if (isset($map['api_server_eip'])) {
            $model->apiServerEip = $map['api_server_eip'];
        }
        if (isset($map['api_server_eip_id'])) {
            $model->apiServerEipId = $map['api_server_eip_id'];
        }
        if (isset($map['cluster_name'])) {
            $model->clusterName = $map['cluster_name'];
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
        if (isset($map['operation_policy'])) {
            $model->operationPolicy = operationPolicy::fromMap($map['operation_policy']);
        }
        if (isset($map['resource_group_id'])) {
            $model->resourceGroupId = $map['resource_group_id'];
        }
        if (isset($map['system_events_logging'])) {
            $model->systemEventsLogging = systemEventsLogging::fromMap($map['system_events_logging']);
        }

        return $model;
    }
}
