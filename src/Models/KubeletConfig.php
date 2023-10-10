<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class KubeletConfig extends Model
{
    /**
     * @var string[]
     */
    public $allowedUnsafeSysctls;

    /**
     * @example 5
     *
     * @var int
     */
    public $containerLogMaxFiles;

    /**
     * @example 10Mi
     *
     * @var string
     */
    public $containerLogMaxSize;

    /**
     * @example none
     *
     * @var string
     */
    public $cpuManagerPolicy;

    /**
     * @example 10
     *
     * @var int
     */
    public $eventBurst;

    /**
     * @example 5
     *
     * @var int
     */
    public $eventRecordQPS;

    /**
     * @var mixed[]
     */
    public $evictionHard;

    /**
     * @var mixed[]
     */
    public $evictionSoft;

    /**
     * @var mixed[]
     */
    public $evictionSoftGracePeriod;

    /**
     * @var mixed[]
     */
    public $featureGates;

    /**
     * @example 10
     *
     * @var int
     */
    public $kubeAPIBurst;

    /**
     * @example 5
     *
     * @var int
     */
    public $kubeAPIQPS;

    /**
     * @var mixed[]
     */
    public $kubeReserved;

    /**
     * @example 110
     *
     * @var int
     */
    public $maxPods;

    /**
     * @example 0
     *
     * @var int
     */
    public $readOnlyPort;

    /**
     * @example 10
     *
     * @var int
     */
    public $registryBurst;

    /**
     * @example 5
     *
     * @var int
     */
    public $registryPullQPS;

    /**
     * @example true
     *
     * @var bool
     */
    public $serializeImagePulls;

    /**
     * @var mixed[]
     */
    public $systemReserved;
    protected $_name = [
        'allowedUnsafeSysctls'    => 'allowedUnsafeSysctls',
        'containerLogMaxFiles'    => 'containerLogMaxFiles',
        'containerLogMaxSize'     => 'containerLogMaxSize',
        'cpuManagerPolicy'        => 'cpuManagerPolicy',
        'eventBurst'              => 'eventBurst',
        'eventRecordQPS'          => 'eventRecordQPS',
        'evictionHard'            => 'evictionHard',
        'evictionSoft'            => 'evictionSoft',
        'evictionSoftGracePeriod' => 'evictionSoftGracePeriod',
        'featureGates'            => 'featureGates',
        'kubeAPIBurst'            => 'kubeAPIBurst',
        'kubeAPIQPS'              => 'kubeAPIQPS',
        'kubeReserved'            => 'kubeReserved',
        'maxPods'                 => 'maxPods',
        'readOnlyPort'            => 'readOnlyPort',
        'registryBurst'           => 'registryBurst',
        'registryPullQPS'         => 'registryPullQPS',
        'serializeImagePulls'     => 'serializeImagePulls',
        'systemReserved'          => 'systemReserved',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowedUnsafeSysctls) {
            $res['allowedUnsafeSysctls'] = $this->allowedUnsafeSysctls;
        }
        if (null !== $this->containerLogMaxFiles) {
            $res['containerLogMaxFiles'] = $this->containerLogMaxFiles;
        }
        if (null !== $this->containerLogMaxSize) {
            $res['containerLogMaxSize'] = $this->containerLogMaxSize;
        }
        if (null !== $this->cpuManagerPolicy) {
            $res['cpuManagerPolicy'] = $this->cpuManagerPolicy;
        }
        if (null !== $this->eventBurst) {
            $res['eventBurst'] = $this->eventBurst;
        }
        if (null !== $this->eventRecordQPS) {
            $res['eventRecordQPS'] = $this->eventRecordQPS;
        }
        if (null !== $this->evictionHard) {
            $res['evictionHard'] = $this->evictionHard;
        }
        if (null !== $this->evictionSoft) {
            $res['evictionSoft'] = $this->evictionSoft;
        }
        if (null !== $this->evictionSoftGracePeriod) {
            $res['evictionSoftGracePeriod'] = $this->evictionSoftGracePeriod;
        }
        if (null !== $this->featureGates) {
            $res['featureGates'] = $this->featureGates;
        }
        if (null !== $this->kubeAPIBurst) {
            $res['kubeAPIBurst'] = $this->kubeAPIBurst;
        }
        if (null !== $this->kubeAPIQPS) {
            $res['kubeAPIQPS'] = $this->kubeAPIQPS;
        }
        if (null !== $this->kubeReserved) {
            $res['kubeReserved'] = $this->kubeReserved;
        }
        if (null !== $this->maxPods) {
            $res['maxPods'] = $this->maxPods;
        }
        if (null !== $this->readOnlyPort) {
            $res['readOnlyPort'] = $this->readOnlyPort;
        }
        if (null !== $this->registryBurst) {
            $res['registryBurst'] = $this->registryBurst;
        }
        if (null !== $this->registryPullQPS) {
            $res['registryPullQPS'] = $this->registryPullQPS;
        }
        if (null !== $this->serializeImagePulls) {
            $res['serializeImagePulls'] = $this->serializeImagePulls;
        }
        if (null !== $this->systemReserved) {
            $res['systemReserved'] = $this->systemReserved;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return KubeletConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['allowedUnsafeSysctls'])) {
            if (!empty($map['allowedUnsafeSysctls'])) {
                $model->allowedUnsafeSysctls = $map['allowedUnsafeSysctls'];
            }
        }
        if (isset($map['containerLogMaxFiles'])) {
            $model->containerLogMaxFiles = $map['containerLogMaxFiles'];
        }
        if (isset($map['containerLogMaxSize'])) {
            $model->containerLogMaxSize = $map['containerLogMaxSize'];
        }
        if (isset($map['cpuManagerPolicy'])) {
            $model->cpuManagerPolicy = $map['cpuManagerPolicy'];
        }
        if (isset($map['eventBurst'])) {
            $model->eventBurst = $map['eventBurst'];
        }
        if (isset($map['eventRecordQPS'])) {
            $model->eventRecordQPS = $map['eventRecordQPS'];
        }
        if (isset($map['evictionHard'])) {
            $model->evictionHard = $map['evictionHard'];
        }
        if (isset($map['evictionSoft'])) {
            $model->evictionSoft = $map['evictionSoft'];
        }
        if (isset($map['evictionSoftGracePeriod'])) {
            $model->evictionSoftGracePeriod = $map['evictionSoftGracePeriod'];
        }
        if (isset($map['featureGates'])) {
            $model->featureGates = $map['featureGates'];
        }
        if (isset($map['kubeAPIBurst'])) {
            $model->kubeAPIBurst = $map['kubeAPIBurst'];
        }
        if (isset($map['kubeAPIQPS'])) {
            $model->kubeAPIQPS = $map['kubeAPIQPS'];
        }
        if (isset($map['kubeReserved'])) {
            $model->kubeReserved = $map['kubeReserved'];
        }
        if (isset($map['maxPods'])) {
            $model->maxPods = $map['maxPods'];
        }
        if (isset($map['readOnlyPort'])) {
            $model->readOnlyPort = $map['readOnlyPort'];
        }
        if (isset($map['registryBurst'])) {
            $model->registryBurst = $map['registryBurst'];
        }
        if (isset($map['registryPullQPS'])) {
            $model->registryPullQPS = $map['registryPullQPS'];
        }
        if (isset($map['serializeImagePulls'])) {
            $model->serializeImagePulls = $map['serializeImagePulls'];
        }
        if (isset($map['systemReserved'])) {
            $model->systemReserved = $map['systemReserved'];
        }

        return $model;
    }
}
