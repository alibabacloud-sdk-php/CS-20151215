<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeNodePoolVulsResponseBody\vulRecords;

use AlibabaCloud\Tea\Model;

class vulList extends Model
{
    /**
     * @description The alias of the vulnerability.
     *
     * @example RHSA-2019:3197-Important: sudo security update
     *
     * @var string
     */
    public $aliasName;

    /**
     * @description A list of CVE names corresponding to the vulnerabilities.
     *
     * @var string[]
     */
    public $cveList;

    /**
     * @description The name of the vulnerability.
     *
     * @example oval:com.redhat.rhsa:def:20193197
     *
     * @var string
     */
    public $name;

    /**
     * @description The severity level of the vulnerability.
     *
     * Valid values:
     *
     *   nntf
     *
     * .
     *
     *   later
     *
     * .
     *
     *   asap
     *
     * .
     * @example asap
     *
     * @var string
     */
    public $necessity;
    protected $_name = [
        'aliasName' => 'alias_name',
        'cveList'   => 'cve_list',
        'name'      => 'name',
        'necessity' => 'necessity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliasName) {
            $res['alias_name'] = $this->aliasName;
        }
        if (null !== $this->cveList) {
            $res['cve_list'] = $this->cveList;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->necessity) {
            $res['necessity'] = $this->necessity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vulList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['alias_name'])) {
            $model->aliasName = $map['alias_name'];
        }
        if (isset($map['cve_list'])) {
            if (!empty($map['cve_list'])) {
                $model->cveList = $map['cve_list'];
            }
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['necessity'])) {
            $model->necessity = $map['necessity'];
        }

        return $model;
    }
}
