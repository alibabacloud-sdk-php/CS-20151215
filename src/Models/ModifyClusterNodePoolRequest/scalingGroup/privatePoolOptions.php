<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterNodePoolRequest\scalingGroup;

use AlibabaCloud\Tea\Model;

class privatePoolOptions extends Model
{
    /**
     * @example eap-bp67acfmxazb4****
     *
     * @var string
     */
    public $id;

    /**
     * @example Open
     *
     * @var string
     */
    public $matchCriteria;
    protected $_name = [
        'id'            => 'id',
        'matchCriteria' => 'match_criteria',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->matchCriteria) {
            $res['match_criteria'] = $this->matchCriteria;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return privatePoolOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['match_criteria'])) {
            $model->matchCriteria = $map['match_criteria'];
        }

        return $model;
    }
}
