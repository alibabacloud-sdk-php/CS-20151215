<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeWorkflowsResponseBody;

use AlibabaCloud\Tea\Model;

class jobs extends Model
{
    /**
     * @description 集群ID。
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description 工作流创建时间。
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 工作流名称。
     *
     * @var string
     */
    public $jobName;
    protected $_name = [
        'clusterId'  => 'cluster_id',
        'createTime' => 'create_time',
        'jobName'    => 'job_name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['cluster_id'] = $this->clusterId;
        }
        if (null !== $this->createTime) {
            $res['create_time'] = $this->createTime;
        }
        if (null !== $this->jobName) {
            $res['job_name'] = $this->jobName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cluster_id'])) {
            $model->clusterId = $map['cluster_id'];
        }
        if (isset($map['create_time'])) {
            $model->createTime = $map['create_time'];
        }
        if (isset($map['job_name'])) {
            $model->jobName = $map['job_name'];
        }

        return $model;
    }
}
