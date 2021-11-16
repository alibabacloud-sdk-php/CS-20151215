<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody\management\upgradeConfig;
use AlibabaCloud\Tea\Model;

class management extends Model
{
    /**
     * @description 自动修复。
     *
     * @var bool
     */
    public $autoRepair;

    /**
     * @description 是否开启托管版节点池。
     *
     * @var bool
     */
    public $enable;

    /**
     * @description 自动升级配置。
     *
     * @var upgradeConfig
     */
    public $upgradeConfig;
    protected $_name = [
        'autoRepair'    => 'auto_repair',
        'enable'        => 'enable',
        'upgradeConfig' => 'upgrade_config',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRepair) {
            $res['auto_repair'] = $this->autoRepair;
        }
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }
        if (null !== $this->upgradeConfig) {
            $res['upgrade_config'] = null !== $this->upgradeConfig ? $this->upgradeConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return management
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['auto_repair'])) {
            $model->autoRepair = $map['auto_repair'];
        }
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }
        if (isset($map['upgrade_config'])) {
            $model->upgradeConfig = upgradeConfig::fromMap($map['upgrade_config']);
        }

        return $model;
    }
}
