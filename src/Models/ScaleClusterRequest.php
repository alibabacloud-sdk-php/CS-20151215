<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class ScaleClusterRequest extends Model {
    protected $_name = [
        'headers' => 'headers',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['headers'] = $this->headers;
        return $res;
    }
    /**
     * @param array $map
     * @return ScaleClusterRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['headers'])){
            $model->headers = $map['headers'];
        }
        return $model;
    }
    /**
     * @description headers
     * @var array
     */
    public $headers;

}
