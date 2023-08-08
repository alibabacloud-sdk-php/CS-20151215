<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponseBody\nodepools;

use AlibabaCloud\SDK\CS\V20151215\Models\DataDisk;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponseBody\nodepools\scalingGroup\privatePoolOptions;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponseBody\nodepools\scalingGroup\spotPriceLimit;
use AlibabaCloud\SDK\CS\V20151215\Models\Tag;
use AlibabaCloud\Tea\Model;

class scalingGroup extends Model
{
    /**
     * @description Indicates whether auto-renewal is enabled for the nodes in the node pool. This parameter takes effect only when `instance_charge_type` is set to `PrePaid`. Valid values:
     *
     *   `true`: Auto-renewal is enabled.
     *   `false`: Auto-renewal is disabled.
     *
     * @example false
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description The duration of the auto-renewal. This parameter takes effect and is required only when `instance_charge_type` is set to `PrePaid`.
     *
     * If `PeriodUnit=Month` is specified, the valid values are 1, 2, 3, 6, and 12.
     * @example 0
     *
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @description Indicates whether pay-as-you-go instances are automatically created to meet the required number of ECS instances when the preemptible instances cannot be created due to reasons such as the cost or inventory availability. This parameter takes effect when `multi_az_policy` is set to `COST_OPTIMIZED`. Valid values:
     *
     *   `true`: Pay-as-you-go instances are automatically created to meet the required number of ECS instances if preemptible instances cannot be created.
     *   `false`: Pay-as-you-go instances are not created to meet the required number of ECS instances if preemptible instances cannot be created.
     *
     * @example true
     *
     * @var bool
     */
    public $compensateWithOnDemand;

    /**
     * @description The configurations of the data disks attached to the nodes in the node pool. The configurations include the disk type and disk size.
     *
     * @var DataDisk[]
     */
    public $dataDisks;

    /**
     * @example ds-bp1d19mmbsv3jf6xxxxx
     *
     * @var string
     */
    public $deploymentsetId;

    /**
     * @example 2
     *
     * @var int
     */
    public $desiredSize;

    /**
     * @description The ID of the custom image. You can call `DescribeKubernetesVersionMetadata` to query the images supported by ACK.
     *
     * @example aliyun_2_1903_x64_20G_alibase_20200529.vhd
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The billing method of the nodes in the node pool. Valid values:
     *
     *   `PrePaid`: subscription
     *   `PostPaid`: pay-as-you-go
     *
     * @example PostPaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The instance types of the nodes in the node pool.
     *
     * @example ecs.n4.large
     *
     * @var string[]
     */
    public $instanceTypes;

    /**
     * @description The billing method of the public IP address of the node.
     *
     * @example PayByBandwidth
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The maximum outbound bandwidth of the public IP address of the node. Unit: Mbit/s. Valid values: 1 to 100.
     *
     * @example 10
     *
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @description The name of the key pair. You must set this parameter or the `login_password` parameter.
     *
     * You must set `key_pair` if the node pool is a managed node pool.
     * @example pro-nodepool
     *
     * @var string
     */
    public $keyPair;

    /**
     * @description The password for SSH logon. You must set this parameter or the `key_pair` parameter. The password must be 8 to 30 characters in length, and must contain at least three of the following character types: uppercase letters, lowercase letters, digits, and special characters.
     *
     * For security purposes, the returned password is encrypted.
     * @example ******
     *
     * @var string
     */
    public $loginPassword;

    /**
     * @description The ECS instance scaling policy for a multi-zone scaling group. Valid values:
     *
     *   `PRIORITY`: the scaling group is scaled based on the VSwitchIds.N parameter. When an ECS instance cannot be created in the zone where the vSwitch with the highest priority resides, the system uses the vSwitch with the next highest priority to create the ECS instance.
     *
     *   `COST_OPTIMIZED`: ECS instances are created based on the vCPU unit price in ascending order. Preemptible instances are preferentially created when multiple instance types are specified in the scaling configurations. You can set the `CompensateWithOnDemand` parameter to specify whether to automatically create pay-as-you-go instances when preemptible instances cannot be created due to insufficient resources.
     *
     **
     *
     **Note** `COST_OPTIMIZED` is valid only when multiple instance types are specified or at least one preemptible instance type is specified.
     *
     *   `BALANCE`: ECS instances are evenly distributed across multiple zones specified by the scaling group. If ECS instances become imbalanced among multiple zones due to insufficient inventory, you can call `RebalanceInstances` of Auto Scaling (ESS) to balance the instance distribution among zones. For more information, see [RebalanceInstances](~~71516~~).
     *
     * @example COST_OPTIMIZED
     *
     * @var string
     */
    public $multiAzPolicy;

    /**
     * @description The minimum number of pay-as-you-go instances that must be kept in the scaling group. Valid values: 0 to 1000. When the number of pay-as-you-go instances is lower than this value, pay-as-you-go instances are preferentially created to meet the required number.
     *
     * @example 0
     *
     * @var int
     */
    public $onDemandBaseCapacity;

    /**
     * @description The percentage of pay-as-you-go instances among the extra instances that exceed the number specified by `on_demand_base_capacity`. Valid values: 0 to 100.
     *
     * @example 20
     *
     * @var int
     */
    public $onDemandPercentageAboveBaseCapacity;

    /**
     * @description The subscription duration of worker nodes. This parameter takes effect and is required only when `instance_charge_type` is set to `PrePaid`.
     *
     * If `PeriodUnit=Month` is specified, the valid values are 1, 2, 3, 6, 12, 24, 36, 48, and 60.
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The billing cycle of the nodes. This parameter takes effect only when `instance_charge_type` is set to `PrePaid`.
     *
     * Valid value: `Month`
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The release version of the operating system. Valid values:
     *
     *   `CentOS`
     *   `AliyunLinux`
     *   `Windows`
     *   `WindowsCore`
     *
     * @example AliyunLinux
     *
     * @var string
     */
    public $platform;

    /**
     * @var privatePoolOptions
     */
    public $privatePoolOptions;

    /**
     * @description The name of the worker Resource Access Management (RAM) role. The RAM role is assigned to the worker nodes of the cluster to allow the worker nodes to manage ECS instances.
     *
     * @example KubernetesWorkerRole-021dc54f-929b-437a-8ae0-34c24d3e****
     *
     * @var string
     */
    public $ramPolicy;

    /**
     * @description The IDs of the ApsaraDB RDS instances.
     *
     * @var string[]
     */
    public $rdsInstances;

    /**
     * @description The ID of the scaling group.
     *
     * @example asg-2ze8n5qw4atggut8****
     *
     * @var string
     */
    public $scalingGroupId;

    /**
     * @description The scaling mode of the scaling group. Valid values:
     *
     *   `release`: the standard mode. ECS instances are created and released based on the resource usage.
     *   `recycle`: the swift mode. ECS instances are created, stopped, or started during scaling events. This reduces the time required for the next scale-out event. When the instance is stopped, you are charged only for the storage service. This does not apply to ECS instances attached with local disks.
     *
     * @example release
     *
     * @var string
     */
    public $scalingPolicy;

    /**
     * @description The ID of the security group to which the node pool is added. If the node pool is added to multiple security groups, the first ID in the value of `security_group_ids` is returned.
     *
     * @example sg-2ze1iuk12m2sb4c4****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The IDs of the security groups to which the node pool is added.
     *
     * @var string[]
     */
    public $securityGroupIds;

    /**
     * @description The number of available instance types. The scaling group creates preemptible instances of multiple instance types at the lowest cost. Valid values: 1 to 10.
     *
     * @example 5
     *
     * @var int
     */
    public $spotInstancePools;

    /**
     * @description Indicates whether preemptible instances are supplemented when the number of preemptible instances drops below the specified minimum number. If this parameter is set to true, when the scaling group receives a system message that a preemptible instance is to be reclaimed, the scaling group attempts to create a new instance to replace this instance. Valid values:
     *
     *   `true`: Supplement to preemptible instances is enabled.
     *   `false`: Supplement to preemptible instances is disabled.
     *
     * @example false
     *
     * @var bool
     */
    public $spotInstanceRemedy;

    /**
     * @description The bid configurations of preemptible instances.
     *
     * @var spotPriceLimit[]
     */
    public $spotPriceLimit;

    /**
     * @description The bidding policy of preemptible instances. Valid values:
     *
     *   NoSpot: non-preemptible instance.
     *   SpotWithPriceLimit: specifies the highest bid for the preemptible instance.
     *   SpotAsPriceGo: automatically submits bids based on the up-to-date market price.
     *
     * For more information, see [Preemptible instances](~~157759~~).
     * @example NoSpot
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description The type of system disk. Valid values:
     *
     *   `cloud_efficiency`: ultra disk
     *   `cloud_ssd`: standard SSD
     *
     * @example cloud_efficiency
     *
     * @var string
     */
    public $systemDiskCategory;

    /**
     * @example PL1
     *
     * @var string
     */
    public $systemDiskPerformanceLevel;

    /**
     * @description The system disk size of a worker node. Unit: GiB.
     *
     * Valid values: 20 to 500
     * @example 120
     *
     * @var int
     */
    public $systemDiskSize;

    /**
     * @description The labels that are added only to ECS instances.
     *
     * A key must be unique and cannot exceed 128 characters in length. Neither keys nor values can start with aliyun or acs:. Neither keys nor values can contain https:// or http://.
     * @var Tag[]
     */
    public $tags;

    /**
     * @description The IDs of vSwitches.
     *
     * @var string[]
     */
    public $vswitchIds;
    protected $_name = [
        'autoRenew'                           => 'auto_renew',
        'autoRenewPeriod'                     => 'auto_renew_period',
        'compensateWithOnDemand'              => 'compensate_with_on_demand',
        'dataDisks'                           => 'data_disks',
        'deploymentsetId'                     => 'deploymentset_id',
        'desiredSize'                         => 'desired_size',
        'imageId'                             => 'image_id',
        'instanceChargeType'                  => 'instance_charge_type',
        'instanceTypes'                       => 'instance_types',
        'internetChargeType'                  => 'internet_charge_type',
        'internetMaxBandwidthOut'             => 'internet_max_bandwidth_out',
        'keyPair'                             => 'key_pair',
        'loginPassword'                       => 'login_password',
        'multiAzPolicy'                       => 'multi_az_policy',
        'onDemandBaseCapacity'                => 'on_demand_base_capacity',
        'onDemandPercentageAboveBaseCapacity' => 'on_demand_percentage_above_base_capacity',
        'period'                              => 'period',
        'periodUnit'                          => 'period_unit',
        'platform'                            => 'platform',
        'privatePoolOptions'                  => 'private_pool_options',
        'ramPolicy'                           => 'ram_policy',
        'rdsInstances'                        => 'rds_instances',
        'scalingGroupId'                      => 'scaling_group_id',
        'scalingPolicy'                       => 'scaling_policy',
        'securityGroupId'                     => 'security_group_id',
        'securityGroupIds'                    => 'security_group_ids',
        'spotInstancePools'                   => 'spot_instance_pools',
        'spotInstanceRemedy'                  => 'spot_instance_remedy',
        'spotPriceLimit'                      => 'spot_price_limit',
        'spotStrategy'                        => 'spot_strategy',
        'systemDiskCategory'                  => 'system_disk_category',
        'systemDiskPerformanceLevel'          => 'system_disk_performance_level',
        'systemDiskSize'                      => 'system_disk_size',
        'tags'                                => 'tags',
        'vswitchIds'                          => 'vswitch_ids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['auto_renew'] = $this->autoRenew;
        }
        if (null !== $this->autoRenewPeriod) {
            $res['auto_renew_period'] = $this->autoRenewPeriod;
        }
        if (null !== $this->compensateWithOnDemand) {
            $res['compensate_with_on_demand'] = $this->compensateWithOnDemand;
        }
        if (null !== $this->dataDisks) {
            $res['data_disks'] = [];
            if (null !== $this->dataDisks && \is_array($this->dataDisks)) {
                $n = 0;
                foreach ($this->dataDisks as $item) {
                    $res['data_disks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->deploymentsetId) {
            $res['deploymentset_id'] = $this->deploymentsetId;
        }
        if (null !== $this->desiredSize) {
            $res['desired_size'] = $this->desiredSize;
        }
        if (null !== $this->imageId) {
            $res['image_id'] = $this->imageId;
        }
        if (null !== $this->instanceChargeType) {
            $res['instance_charge_type'] = $this->instanceChargeType;
        }
        if (null !== $this->instanceTypes) {
            $res['instance_types'] = $this->instanceTypes;
        }
        if (null !== $this->internetChargeType) {
            $res['internet_charge_type'] = $this->internetChargeType;
        }
        if (null !== $this->internetMaxBandwidthOut) {
            $res['internet_max_bandwidth_out'] = $this->internetMaxBandwidthOut;
        }
        if (null !== $this->keyPair) {
            $res['key_pair'] = $this->keyPair;
        }
        if (null !== $this->loginPassword) {
            $res['login_password'] = $this->loginPassword;
        }
        if (null !== $this->multiAzPolicy) {
            $res['multi_az_policy'] = $this->multiAzPolicy;
        }
        if (null !== $this->onDemandBaseCapacity) {
            $res['on_demand_base_capacity'] = $this->onDemandBaseCapacity;
        }
        if (null !== $this->onDemandPercentageAboveBaseCapacity) {
            $res['on_demand_percentage_above_base_capacity'] = $this->onDemandPercentageAboveBaseCapacity;
        }
        if (null !== $this->period) {
            $res['period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['period_unit'] = $this->periodUnit;
        }
        if (null !== $this->platform) {
            $res['platform'] = $this->platform;
        }
        if (null !== $this->privatePoolOptions) {
            $res['private_pool_options'] = null !== $this->privatePoolOptions ? $this->privatePoolOptions->toMap() : null;
        }
        if (null !== $this->ramPolicy) {
            $res['ram_policy'] = $this->ramPolicy;
        }
        if (null !== $this->rdsInstances) {
            $res['rds_instances'] = $this->rdsInstances;
        }
        if (null !== $this->scalingGroupId) {
            $res['scaling_group_id'] = $this->scalingGroupId;
        }
        if (null !== $this->scalingPolicy) {
            $res['scaling_policy'] = $this->scalingPolicy;
        }
        if (null !== $this->securityGroupId) {
            $res['security_group_id'] = $this->securityGroupId;
        }
        if (null !== $this->securityGroupIds) {
            $res['security_group_ids'] = $this->securityGroupIds;
        }
        if (null !== $this->spotInstancePools) {
            $res['spot_instance_pools'] = $this->spotInstancePools;
        }
        if (null !== $this->spotInstanceRemedy) {
            $res['spot_instance_remedy'] = $this->spotInstanceRemedy;
        }
        if (null !== $this->spotPriceLimit) {
            $res['spot_price_limit'] = [];
            if (null !== $this->spotPriceLimit && \is_array($this->spotPriceLimit)) {
                $n = 0;
                foreach ($this->spotPriceLimit as $item) {
                    $res['spot_price_limit'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->spotStrategy) {
            $res['spot_strategy'] = $this->spotStrategy;
        }
        if (null !== $this->systemDiskCategory) {
            $res['system_disk_category'] = $this->systemDiskCategory;
        }
        if (null !== $this->systemDiskPerformanceLevel) {
            $res['system_disk_performance_level'] = $this->systemDiskPerformanceLevel;
        }
        if (null !== $this->systemDiskSize) {
            $res['system_disk_size'] = $this->systemDiskSize;
        }
        if (null !== $this->tags) {
            $res['tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vswitchIds) {
            $res['vswitch_ids'] = $this->vswitchIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scalingGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['auto_renew'])) {
            $model->autoRenew = $map['auto_renew'];
        }
        if (isset($map['auto_renew_period'])) {
            $model->autoRenewPeriod = $map['auto_renew_period'];
        }
        if (isset($map['compensate_with_on_demand'])) {
            $model->compensateWithOnDemand = $map['compensate_with_on_demand'];
        }
        if (isset($map['data_disks'])) {
            if (!empty($map['data_disks'])) {
                $model->dataDisks = [];
                $n                = 0;
                foreach ($map['data_disks'] as $item) {
                    $model->dataDisks[$n++] = null !== $item ? DataDisk::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['deploymentset_id'])) {
            $model->deploymentsetId = $map['deploymentset_id'];
        }
        if (isset($map['desired_size'])) {
            $model->desiredSize = $map['desired_size'];
        }
        if (isset($map['image_id'])) {
            $model->imageId = $map['image_id'];
        }
        if (isset($map['instance_charge_type'])) {
            $model->instanceChargeType = $map['instance_charge_type'];
        }
        if (isset($map['instance_types'])) {
            if (!empty($map['instance_types'])) {
                $model->instanceTypes = $map['instance_types'];
            }
        }
        if (isset($map['internet_charge_type'])) {
            $model->internetChargeType = $map['internet_charge_type'];
        }
        if (isset($map['internet_max_bandwidth_out'])) {
            $model->internetMaxBandwidthOut = $map['internet_max_bandwidth_out'];
        }
        if (isset($map['key_pair'])) {
            $model->keyPair = $map['key_pair'];
        }
        if (isset($map['login_password'])) {
            $model->loginPassword = $map['login_password'];
        }
        if (isset($map['multi_az_policy'])) {
            $model->multiAzPolicy = $map['multi_az_policy'];
        }
        if (isset($map['on_demand_base_capacity'])) {
            $model->onDemandBaseCapacity = $map['on_demand_base_capacity'];
        }
        if (isset($map['on_demand_percentage_above_base_capacity'])) {
            $model->onDemandPercentageAboveBaseCapacity = $map['on_demand_percentage_above_base_capacity'];
        }
        if (isset($map['period'])) {
            $model->period = $map['period'];
        }
        if (isset($map['period_unit'])) {
            $model->periodUnit = $map['period_unit'];
        }
        if (isset($map['platform'])) {
            $model->platform = $map['platform'];
        }
        if (isset($map['private_pool_options'])) {
            $model->privatePoolOptions = privatePoolOptions::fromMap($map['private_pool_options']);
        }
        if (isset($map['ram_policy'])) {
            $model->ramPolicy = $map['ram_policy'];
        }
        if (isset($map['rds_instances'])) {
            if (!empty($map['rds_instances'])) {
                $model->rdsInstances = $map['rds_instances'];
            }
        }
        if (isset($map['scaling_group_id'])) {
            $model->scalingGroupId = $map['scaling_group_id'];
        }
        if (isset($map['scaling_policy'])) {
            $model->scalingPolicy = $map['scaling_policy'];
        }
        if (isset($map['security_group_id'])) {
            $model->securityGroupId = $map['security_group_id'];
        }
        if (isset($map['security_group_ids'])) {
            if (!empty($map['security_group_ids'])) {
                $model->securityGroupIds = $map['security_group_ids'];
            }
        }
        if (isset($map['spot_instance_pools'])) {
            $model->spotInstancePools = $map['spot_instance_pools'];
        }
        if (isset($map['spot_instance_remedy'])) {
            $model->spotInstanceRemedy = $map['spot_instance_remedy'];
        }
        if (isset($map['spot_price_limit'])) {
            if (!empty($map['spot_price_limit'])) {
                $model->spotPriceLimit = [];
                $n                     = 0;
                foreach ($map['spot_price_limit'] as $item) {
                    $model->spotPriceLimit[$n++] = null !== $item ? spotPriceLimit::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['spot_strategy'])) {
            $model->spotStrategy = $map['spot_strategy'];
        }
        if (isset($map['system_disk_category'])) {
            $model->systemDiskCategory = $map['system_disk_category'];
        }
        if (isset($map['system_disk_performance_level'])) {
            $model->systemDiskPerformanceLevel = $map['system_disk_performance_level'];
        }
        if (isset($map['system_disk_size'])) {
            $model->systemDiskSize = $map['system_disk_size'];
        }
        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? Tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['vswitch_ids'])) {
            if (!empty($map['vswitch_ids'])) {
                $model->vswitchIds = $map['vswitch_ids'];
            }
        }

        return $model;
    }
}
