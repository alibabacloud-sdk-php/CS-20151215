<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\CS\V20151215\Models\AttachInstancesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\AttachInstancesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CancelClusterUpgradeResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CancelComponentUpgradeResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateKubernetesTriggerRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateKubernetesTriggerResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateTemplateRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateTemplateResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteClusterNodepoolResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteClusterNodesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteClusterNodesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteClusterRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteClusterResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DeleteKubernetesTriggerResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeAddonsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeAddonsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterAddonsUpgradeStatusRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterAddonsUpgradeStatusResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterAddonsVersionResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterAddonUpgradeStatusResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterAttachScriptsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterAttachScriptsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterDetailResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterLogsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterResourcesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClustersRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClustersResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClustersV1Request;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClustersV1Response;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterUserKubeconfigRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterUserKubeconfigResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterV2UserKubeconfigRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterV2UserKubeconfigResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeExternalAgentRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeExternalAgentResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeKubernetesVersionMetadataRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeKubernetesVersionMetadataResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeTaskInfoResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeTemplateAttributeResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeTemplatesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeTemplatesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeUserQuotaResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\GetKubernetesTriggerRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\GetKubernetesTriggerResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\GetUpgradeStatusResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\InstallClusterAddonsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\InstallClusterAddonsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterConfigurationRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterConfigurationResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterNodePoolRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterNodePoolResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterTagsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterTagsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\PauseClusterUpgradeResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\PauseComponentUpgradeResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ResumeComponentUpgradeResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ResumeUpgradeClusterResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ScaleClusterNodePoolRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ScaleClusterNodePoolResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ScaleClusterRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ScaleClusterResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\ScaleOutClusterRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\ScaleOutClusterResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\UnInstallClusterAddonsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\UnInstallClusterAddonsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateTemplateRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateTemplateResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\UpgradeClusterAddonsRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\UpgradeClusterAddonsResponse;
use AlibabaCloud\SDK\CS\V20151215\Models\UpgradeClusterRequest;
use AlibabaCloud\SDK\CS\V20151215\Models\UpgradeClusterResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class CS extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-2-pop'          => 'cs.aliyuncs.com',
            'cn-beijing-finance-1'        => 'cs.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'cs.aliyuncs.com',
            'cn-beijing-gov-1'            => 'cs.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'cs.aliyuncs.com',
            'cn-edge-1'                   => 'cs.aliyuncs.com',
            'cn-fujian'                   => 'cs.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'cs.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'cs.aliyuncs.com',
            'cn-hangzhou-finance'         => 'cs.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'cs.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'cs.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'cs.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'cs.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'cs.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'cs.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'cs.aliyuncs.com',
            'cn-qingdao-nebula'           => 'cs.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'cs.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'cs.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'cs.aliyuncs.com',
            'cn-shanghai-inner'           => 'cs.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'cs.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'cs.aliyuncs.com',
            'cn-shenzhen-inner'           => 'cs.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'cs.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'cs.aliyuncs.com',
            'cn-wuhan'                    => 'cs.aliyuncs.com',
            'cn-wulanchabu'               => 'cs.aliyuncs.com',
            'cn-yushanfang'               => 'cs.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'cs.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'cs.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'cs.aliyuncs.com',
            'eu-west-1-oxs'               => 'cs.aliyuncs.com',
            'rus-west-1-pop'              => 'cs.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cs', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param ListTagResourcesRequest $request
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListTagResourcesRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceIds)) {
            @$query['resource_ids'] = $request->resourceIds;
        }
        if (!Utils::isUnset($request->tags)) {
            @$query['tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->nextToken)) {
            @$query['next_token'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListTagResourcesResponse::fromMap($this->doROARequest('ListTagResources', '2015-12-15', 'HTTPS', 'GET', 'AK', '/tags', 'json', $req, $runtime));
    }

    /**
     * @param string               $ClusterId
     * @param ModifyClusterRequest $request
     *
     * @return ModifyClusterResponse
     */
    public function modifyCluster($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyClusterWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string               $ClusterId
     * @param ModifyClusterRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ModifyClusterResponse
     */
    public function modifyClusterWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apiServerEip)) {
            @$body['api_server_eip'] = $request->apiServerEip;
        }
        if (!Utils::isUnset($request->apiServerEipId)) {
            @$body['api_server_eip_id'] = $request->apiServerEipId;
        }
        if (!Utils::isUnset($request->deletionProtection)) {
            @$body['deletion_protection'] = $request->deletionProtection;
        }
        if (!Utils::isUnset($request->instanceDeletionProtection)) {
            @$body['instance_deletion_protection'] = $request->instanceDeletionProtection;
        }
        if (!Utils::isUnset($request->ingressDomainRebinding)) {
            @$body['ingress_domain_rebinding'] = $request->ingressDomainRebinding;
        }
        if (!Utils::isUnset($request->ingressLoadbalancerId)) {
            @$body['ingress_loadbalancer_id'] = $request->ingressLoadbalancerId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            @$body['resource_group_id'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->maintenanceWindow)) {
            @$body['maintenance_window'] = $request->maintenanceWindow;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return ModifyClusterResponse::fromMap($this->doROARequest('ModifyCluster', '2015-12-15', 'HTTPS', 'PUT', 'AK', '/api/v2/clusters/' . $ClusterId . '', 'json', $req, $runtime));
    }

    /**
     * @param string                              $ClusterId
     * @param DescribeClusterAttachScriptsRequest $request
     *
     * @return DescribeClusterAttachScriptsResponse
     */
    public function describeClusterAttachScripts($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterAttachScriptsWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string                              $ClusterId
     * @param DescribeClusterAttachScriptsRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeClusterAttachScriptsResponse
     */
    public function describeClusterAttachScriptsWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->arch)) {
            @$body['arch'] = $request->arch;
        }
        if (!Utils::isUnset($request->options)) {
            @$body['options'] = $request->options;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return DescribeClusterAttachScriptsResponse::fromMap($this->doROARequest('DescribeClusterAttachScripts', '2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $ClusterId . '/attachscript', 'string', $req, $runtime));
    }

    /**
     * @param DescribeKubernetesVersionMetadataRequest $request
     *
     * @return DescribeKubernetesVersionMetadataResponse
     */
    public function describeKubernetesVersionMetadata($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeKubernetesVersionMetadataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeKubernetesVersionMetadataRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeKubernetesVersionMetadataResponse
     */
    public function describeKubernetesVersionMetadataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->region)) {
            @$query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->clusterType)) {
            @$query['ClusterType'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->multiAZ)) {
            @$query['MultiAZ'] = $request->multiAZ;
        }
        if (!Utils::isUnset($request->kubernetesVersion)) {
            @$query['KubernetesVersion'] = $request->kubernetesVersion;
        }
        if (!Utils::isUnset($request->profile)) {
            @$query['Profile'] = $request->profile;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeKubernetesVersionMetadataResponse::fromMap($this->doROARequest('DescribeKubernetesVersionMetadata', '2015-12-15', 'HTTPS', 'GET', 'AK', '/api/v1/metadata/versions', 'array', $req, $runtime));
    }

    /**
     * @param string $ClusterId
     *
     * @return DescribeClusterLogsResponse
     */
    public function describeClusterLogs($ClusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterLogsWithOptions($ClusterId, $headers, $runtime);
    }

    /**
     * @param string         $ClusterId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeClusterLogsResponse
     */
    public function describeClusterLogsWithOptions($ClusterId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeClusterLogsResponse::fromMap($this->doROARequest('DescribeClusterLogs', '2015-12-15', 'HTTPS', 'GET', 'AK', '/clusters/' . $ClusterId . '/logs', 'array', $req, $runtime));
    }

    /**
     * @param CreateKubernetesTriggerRequest $request
     *
     * @return CreateKubernetesTriggerResponse
     */
    public function createKubernetesTrigger($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createKubernetesTriggerWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateKubernetesTriggerRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateKubernetesTriggerResponse
     */
    public function createKubernetesTriggerWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->action)) {
            @$body['Action'] = $request->action;
        }
        if (!Utils::isUnset($request->clusterId)) {
            @$body['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->projectId)) {
            @$body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->regionId)) {
            @$body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->type)) {
            @$body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CreateKubernetesTriggerResponse::fromMap($this->doROARequest('CreateKubernetesTrigger', '2015-12-15', 'HTTPS', 'POST', 'AK', '/triggers', 'json', $req, $runtime));
    }

    /**
     * @param string $ClusterId
     *
     * @return DescribeClusterDetailResponse
     */
    public function describeClusterDetail($ClusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterDetailWithOptions($ClusterId, $headers, $runtime);
    }

    /**
     * @param string         $ClusterId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeClusterDetailResponse
     */
    public function describeClusterDetailWithOptions($ClusterId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeClusterDetailResponse::fromMap($this->doROARequest('DescribeClusterDetail', '2015-12-15', 'HTTPS', 'GET', 'AK', '/clusters/' . $ClusterId . '', 'json', $req, $runtime));
    }

    /**
     * @param string $clusterid
     * @param string $componentid
     *
     * @return PauseComponentUpgradeResponse
     */
    public function pauseComponentUpgrade($clusterid, $componentid)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pauseComponentUpgradeWithOptions($clusterid, $componentid, $headers, $runtime);
    }

    /**
     * @param string         $clusterid
     * @param string         $componentid
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return PauseComponentUpgradeResponse
     */
    public function pauseComponentUpgradeWithOptions($clusterid, $componentid, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return PauseComponentUpgradeResponse::fromMap($this->doROARequest('PauseComponentUpgrade', '2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $clusterid . '/components/{componentid}/pause', 'none', $req, $runtime));
    }

    /**
     * @param DescribeClustersRequest $request
     *
     * @return DescribeClustersResponse
     */
    public function describeClusters($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClustersWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeClustersRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeClustersResponse
     */
    public function describeClustersWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            @$query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->clusterType)) {
            @$query['clusterType'] = $request->clusterType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeClustersResponse::fromMap($this->doROARequest('DescribeClusters', '2015-12-15', 'HTTPS', 'GET', 'AK', '/clusters', 'array', $req, $runtime));
    }

    /**
     * @param string                       $ClusterId
     * @param string                       $NodepoolId
     * @param ModifyClusterNodePoolRequest $request
     *
     * @return ModifyClusterNodePoolResponse
     */
    public function modifyClusterNodePool($ClusterId, $NodepoolId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyClusterNodePoolWithOptions($ClusterId, $NodepoolId, $request, $headers, $runtime);
    }

    /**
     * @param string                       $ClusterId
     * @param string                       $NodepoolId
     * @param ModifyClusterNodePoolRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyClusterNodePoolResponse
     */
    public function modifyClusterNodePoolWithOptions($ClusterId, $NodepoolId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->autoScaling)) {
            @$body['auto_scaling'] = $request->autoScaling;
        }
        if (!Utils::isUnset($request->kubernetesConfig)) {
            @$body['kubernetes_config'] = $request->kubernetesConfig;
        }
        if (!Utils::isUnset($request->nodepoolInfo)) {
            @$body['nodepool_info'] = $request->nodepoolInfo;
        }
        if (!Utils::isUnset($request->scalingGroup)) {
            @$body['scaling_group'] = $request->scalingGroup;
        }
        if (!Utils::isUnset($request->teeConfig)) {
            @$body['tee_config'] = $request->teeConfig;
        }
        if (!Utils::isUnset($request->management)) {
            @$body['management'] = $request->management;
        }
        if (!Utils::isUnset($request->updateNodes)) {
            @$body['update_nodes'] = $request->updateNodes;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return ModifyClusterNodePoolResponse::fromMap($this->doROARequest('ModifyClusterNodePool', '2015-12-15', 'HTTPS', 'PUT', 'AK', '/clusters/' . $ClusterId . '/nodepools/{NodepoolId}', 'json', $req, $runtime));
    }

    /**
     * @param string $ClusterId
     *
     * @return ResumeUpgradeClusterResponse
     */
    public function resumeUpgradeCluster($ClusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resumeUpgradeClusterWithOptions($ClusterId, $headers, $runtime);
    }

    /**
     * @param string         $ClusterId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ResumeUpgradeClusterResponse
     */
    public function resumeUpgradeClusterWithOptions($ClusterId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ResumeUpgradeClusterResponse::fromMap($this->doROARequest('ResumeUpgradeCluster', '2015-12-15', 'HTTPS', 'POST', 'AK', '/api/v2/clusters/' . $ClusterId . '/upgrade/resume', 'none', $req, $runtime));
    }

    /**
     * @param string                      $ClusterId
     * @param string                      $NodepoolId
     * @param ScaleClusterNodePoolRequest $request
     *
     * @return ScaleClusterNodePoolResponse
     */
    public function scaleClusterNodePool($ClusterId, $NodepoolId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->scaleClusterNodePoolWithOptions($ClusterId, $NodepoolId, $request, $headers, $runtime);
    }

    /**
     * @param string                      $ClusterId
     * @param string                      $NodepoolId
     * @param ScaleClusterNodePoolRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ScaleClusterNodePoolResponse
     */
    public function scaleClusterNodePoolWithOptions($ClusterId, $NodepoolId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->count)) {
            @$body['count'] = $request->count;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return ScaleClusterNodePoolResponse::fromMap($this->doROARequest('ScaleClusterNodePool', '2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $ClusterId . '/nodepools/{NodepoolId}', 'json', $req, $runtime));
    }

    /**
     * @param string $ClusterId
     * @param string $NodepoolId
     *
     * @return DescribeClusterNodePoolDetailResponse
     */
    public function describeClusterNodePoolDetail($ClusterId, $NodepoolId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterNodePoolDetailWithOptions($ClusterId, $NodepoolId, $headers, $runtime);
    }

    /**
     * @param string         $ClusterId
     * @param string         $NodepoolId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeClusterNodePoolDetailResponse
     */
    public function describeClusterNodePoolDetailWithOptions($ClusterId, $NodepoolId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeClusterNodePoolDetailResponse::fromMap($this->doROARequest('DescribeClusterNodePoolDetail', '2015-12-15', 'HTTPS', 'GET', 'AK', '/clusters/' . $ClusterId . '/nodepools/{NodepoolId}', 'json', $req, $runtime));
    }

    /**
     * @param string                       $ClusterId
     * @param CreateClusterNodePoolRequest $request
     *
     * @return CreateClusterNodePoolResponse
     */
    public function createClusterNodePool($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createClusterNodePoolWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string                       $ClusterId
     * @param CreateClusterNodePoolRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateClusterNodePoolResponse
     */
    public function createClusterNodePoolWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->autoScaling)) {
            @$body['auto_scaling'] = $request->autoScaling;
        }
        if (!Utils::isUnset($request->kubernetesConfig)) {
            @$body['kubernetes_config'] = $request->kubernetesConfig;
        }
        if (!Utils::isUnset($request->nodepoolInfo)) {
            @$body['nodepool_info'] = $request->nodepoolInfo;
        }
        if (!Utils::isUnset($request->scalingGroup)) {
            @$body['scaling_group'] = $request->scalingGroup;
        }
        if (!Utils::isUnset($request->teeConfig)) {
            @$body['tee_config'] = $request->teeConfig;
        }
        if (!Utils::isUnset($request->management)) {
            @$body['management'] = $request->management;
        }
        if (!Utils::isUnset($request->count)) {
            @$body['count'] = $request->count;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CreateClusterNodePoolResponse::fromMap($this->doROARequest('CreateClusterNodePool', '2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $ClusterId . '/nodepools', 'json', $req, $runtime));
    }

    /**
     * @param string                               $ClusterId
     * @param DescribeClusterUserKubeconfigRequest $request
     *
     * @return DescribeClusterUserKubeconfigResponse
     */
    public function describeClusterUserKubeconfig($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterUserKubeconfigWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string                               $ClusterId
     * @param DescribeClusterUserKubeconfigRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeClusterUserKubeconfigResponse
     */
    public function describeClusterUserKubeconfigWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->privateIpAddress)) {
            @$query['PrivateIpAddress'] = $request->privateIpAddress;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeClusterUserKubeconfigResponse::fromMap($this->doROARequest('DescribeClusterUserKubeconfig', '2015-12-15', 'HTTPS', 'GET', 'AK', '/k8s/' . $ClusterId . '/user_config', 'json', $req, $runtime));
    }

    /**
     * @param string              $ClusterId
     * @param ScaleClusterRequest $request
     *
     * @return ScaleClusterResponse
     */
    public function scaleCluster($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->scaleClusterWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string              $ClusterId
     * @param ScaleClusterRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ScaleClusterResponse
     */
    public function scaleClusterWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cloudMonitorFlags)) {
            @$body['cloud_monitor_flags'] = $request->cloudMonitorFlags;
        }
        if (!Utils::isUnset($request->count)) {
            @$body['count'] = $request->count;
        }
        if (!Utils::isUnset($request->cpuPolicy)) {
            @$body['cpu_policy'] = $request->cpuPolicy;
        }
        if (!Utils::isUnset($request->disableRollback)) {
            @$body['disable_rollback'] = $request->disableRollback;
        }
        if (!Utils::isUnset($request->keyPair)) {
            @$body['key_pair'] = $request->keyPair;
        }
        if (!Utils::isUnset($request->loginPassword)) {
            @$body['login_password'] = $request->loginPassword;
        }
        if (!Utils::isUnset($request->tags)) {
            @$body['tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->taints)) {
            @$body['taints'] = $request->taints;
        }
        if (!Utils::isUnset($request->vswitchIds)) {
            @$body['vswitch_ids'] = $request->vswitchIds;
        }
        if (!Utils::isUnset($request->workerAutoRenew)) {
            @$body['worker_auto_renew'] = $request->workerAutoRenew;
        }
        if (!Utils::isUnset($request->workerAutoRenewPeriod)) {
            @$body['worker_auto_renew_period'] = $request->workerAutoRenewPeriod;
        }
        if (!Utils::isUnset($request->workerDataDisk)) {
            @$body['worker_data_disk'] = $request->workerDataDisk;
        }
        if (!Utils::isUnset($request->workerDataDisks)) {
            @$body['worker_data_disks'] = $request->workerDataDisks;
        }
        if (!Utils::isUnset($request->workerInstanceChargeType)) {
            @$body['worker_instance_charge_type'] = $request->workerInstanceChargeType;
        }
        if (!Utils::isUnset($request->workerInstanceTypes)) {
            @$body['worker_instance_types'] = $request->workerInstanceTypes;
        }
        if (!Utils::isUnset($request->workerPeriod)) {
            @$body['worker_period'] = $request->workerPeriod;
        }
        if (!Utils::isUnset($request->workerPeriodUnit)) {
            @$body['worker_period_unit'] = $request->workerPeriodUnit;
        }
        if (!Utils::isUnset($request->workerSystemDiskCategory)) {
            @$body['worker_system_disk_category'] = $request->workerSystemDiskCategory;
        }
        if (!Utils::isUnset($request->workerSystemDiskSize)) {
            @$body['worker_system_disk_size'] = $request->workerSystemDiskSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return ScaleClusterResponse::fromMap($this->doROARequest('ScaleCluster', '2015-12-15', 'HTTPS', 'PUT', 'AK', '/clusters/' . $ClusterId . '', 'json', $req, $runtime));
    }

    /**
     * @param string $ClusterId
     * @param string $ComponentId
     *
     * @return DescribeClusterAddonUpgradeStatusResponse
     */
    public function describeClusterAddonUpgradeStatus($ClusterId, $ComponentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterAddonUpgradeStatusWithOptions($ClusterId, $ComponentId, $headers, $runtime);
    }

    /**
     * @param string         $ClusterId
     * @param string         $ComponentId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeClusterAddonUpgradeStatusResponse
     */
    public function describeClusterAddonUpgradeStatusWithOptions($ClusterId, $ComponentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeClusterAddonUpgradeStatusResponse::fromMap($this->doROARequest('DescribeClusterAddonUpgradeStatus', '2015-12-15', 'HTTPS', 'GET', 'AK', '/clusters/' . $ClusterId . '/components/{ComponentId}/upgradestatus', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAddonsRequest $request
     *
     * @return DescribeAddonsResponse
     */
    public function describeAddons($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeAddonsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeAddonsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeAddonsResponse
     */
    public function describeAddonsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->region)) {
            @$query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->clusterType)) {
            @$query['cluster_type'] = $request->clusterType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeAddonsResponse::fromMap($this->doROARequest('DescribeAddons', '2015-12-15', 'HTTPS', 'GET', 'AK', '/clusters/components/metadata', 'json', $req, $runtime));
    }

    /**
     * @param CreateClusterRequest $request
     *
     * @return CreateClusterResponse
     */
    public function createCluster($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createClusterWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateClusterRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateClusterResponse
     */
    public function createClusterWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->addons)) {
            @$body['addons'] = $request->addons;
        }
        if (!Utils::isUnset($request->cloudMonitorFlags)) {
            @$body['cloud_monitor_flags'] = $request->cloudMonitorFlags;
        }
        if (!Utils::isUnset($request->clusterType)) {
            @$body['cluster_type'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->containerCidr)) {
            @$body['container_cidr'] = $request->containerCidr;
        }
        if (!Utils::isUnset($request->cpuPolicy)) {
            @$body['cpu_policy'] = $request->cpuPolicy;
        }
        if (!Utils::isUnset($request->deletionProtection)) {
            @$body['deletion_protection'] = $request->deletionProtection;
        }
        if (!Utils::isUnset($request->disableRollback)) {
            @$body['disable_rollback'] = $request->disableRollback;
        }
        if (!Utils::isUnset($request->endpointPublicAccess)) {
            @$body['endpoint_public_access'] = $request->endpointPublicAccess;
        }
        if (!Utils::isUnset($request->formatDisk)) {
            @$body['format_disk'] = $request->formatDisk;
        }
        if (!Utils::isUnset($request->imageId)) {
            @$body['image_id'] = $request->imageId;
        }
        if (!Utils::isUnset($request->instances)) {
            @$body['instances'] = $request->instances;
        }
        if (!Utils::isUnset($request->isEnterpriseSecurityGroup)) {
            @$body['is_enterprise_security_group'] = $request->isEnterpriseSecurityGroup;
        }
        if (!Utils::isUnset($request->keepInstanceName)) {
            @$body['keep_instance_name'] = $request->keepInstanceName;
        }
        if (!Utils::isUnset($request->keyPair)) {
            @$body['key_pair'] = $request->keyPair;
        }
        if (!Utils::isUnset($request->kubernetesVersion)) {
            @$body['kubernetes_version'] = $request->kubernetesVersion;
        }
        if (!Utils::isUnset($request->loginPassword)) {
            @$body['login_password'] = $request->loginPassword;
        }
        if (!Utils::isUnset($request->masterAutoRenew)) {
            @$body['master_auto_renew'] = $request->masterAutoRenew;
        }
        if (!Utils::isUnset($request->masterAutoRenewPeriod)) {
            @$body['master_auto_renew_period'] = $request->masterAutoRenewPeriod;
        }
        if (!Utils::isUnset($request->masterCount)) {
            @$body['master_count'] = $request->masterCount;
        }
        if (!Utils::isUnset($request->masterInstanceChargeType)) {
            @$body['master_instance_charge_type'] = $request->masterInstanceChargeType;
        }
        if (!Utils::isUnset($request->masterInstanceTypes)) {
            @$body['master_instance_types'] = $request->masterInstanceTypes;
        }
        if (!Utils::isUnset($request->masterPeriod)) {
            @$body['master_period'] = $request->masterPeriod;
        }
        if (!Utils::isUnset($request->masterPeriodUnit)) {
            @$body['master_period_unit'] = $request->masterPeriodUnit;
        }
        if (!Utils::isUnset($request->masterSystemDiskCategory)) {
            @$body['master_system_disk_category'] = $request->masterSystemDiskCategory;
        }
        if (!Utils::isUnset($request->masterSystemDiskSize)) {
            @$body['master_system_disk_size'] = $request->masterSystemDiskSize;
        }
        if (!Utils::isUnset($request->masterVswitchIds)) {
            @$body['master_vswitch_ids'] = $request->masterVswitchIds;
        }
        if (!Utils::isUnset($request->name)) {
            @$body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->nodeCidrMask)) {
            @$body['node_cidr_mask'] = $request->nodeCidrMask;
        }
        if (!Utils::isUnset($request->nodePortRange)) {
            @$body['node_port_range'] = $request->nodePortRange;
        }
        if (!Utils::isUnset($request->numOfNodes)) {
            @$body['num_of_nodes'] = $request->numOfNodes;
        }
        if (!Utils::isUnset($request->osType)) {
            @$body['os_type'] = $request->osType;
        }
        if (!Utils::isUnset($request->platform)) {
            @$body['platform'] = $request->platform;
        }
        if (!Utils::isUnset($request->podVswitchIds)) {
            @$body['pod_vswitch_ids'] = $request->podVswitchIds;
        }
        if (!Utils::isUnset($request->privateZone)) {
            @$body['private_zone'] = $request->privateZone;
        }
        if (!Utils::isUnset($request->profile)) {
            @$body['profile'] = $request->profile;
        }
        if (!Utils::isUnset($request->proxyMode)) {
            @$body['proxy_mode'] = $request->proxyMode;
        }
        if (!Utils::isUnset($request->rdsInstances)) {
            @$body['rds_instances'] = $request->rdsInstances;
        }
        if (!Utils::isUnset($request->regionId)) {
            @$body['region_id'] = $request->regionId;
        }
        if (!Utils::isUnset($request->runtime)) {
            @$body['runtime'] = $request->runtime;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            @$body['security_group_id'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->serviceCidr)) {
            @$body['service_cidr'] = $request->serviceCidr;
        }
        if (!Utils::isUnset($request->snatEntry)) {
            @$body['snat_entry'] = $request->snatEntry;
        }
        if (!Utils::isUnset($request->sshFlags)) {
            @$body['ssh_flags'] = $request->sshFlags;
        }
        if (!Utils::isUnset($request->tags)) {
            @$body['tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->taints)) {
            @$body['taints'] = $request->taints;
        }
        if (!Utils::isUnset($request->timeoutMins)) {
            @$body['timeout_mins'] = $request->timeoutMins;
        }
        if (!Utils::isUnset($request->userData)) {
            @$body['user_data'] = $request->userData;
        }
        if (!Utils::isUnset($request->vpcid)) {
            @$body['vpcid'] = $request->vpcid;
        }
        if (!Utils::isUnset($request->vswitchIds)) {
            @$body['vswitch_ids'] = $request->vswitchIds;
        }
        if (!Utils::isUnset($request->workerAutoRenew)) {
            @$body['worker_auto_renew'] = $request->workerAutoRenew;
        }
        if (!Utils::isUnset($request->workerAutoRenewPeriod)) {
            @$body['worker_auto_renew_period'] = $request->workerAutoRenewPeriod;
        }
        if (!Utils::isUnset($request->workerDataDisks)) {
            @$body['worker_data_disks'] = $request->workerDataDisks;
        }
        if (!Utils::isUnset($request->workerInstanceChargeType)) {
            @$body['worker_instance_charge_type'] = $request->workerInstanceChargeType;
        }
        if (!Utils::isUnset($request->workerInstanceTypes)) {
            @$body['worker_instance_types'] = $request->workerInstanceTypes;
        }
        if (!Utils::isUnset($request->workerPeriod)) {
            @$body['worker_period'] = $request->workerPeriod;
        }
        if (!Utils::isUnset($request->workerPeriodUnit)) {
            @$body['worker_period_unit'] = $request->workerPeriodUnit;
        }
        if (!Utils::isUnset($request->workerSystemDiskCategory)) {
            @$body['worker_system_disk_category'] = $request->workerSystemDiskCategory;
        }
        if (!Utils::isUnset($request->workerSystemDiskSize)) {
            @$body['worker_system_disk_size'] = $request->workerSystemDiskSize;
        }
        if (!Utils::isUnset($request->workerVswitchIds)) {
            @$body['worker_vswitch_ids'] = $request->workerVswitchIds;
        }
        if (!Utils::isUnset($request->zoneId)) {
            @$body['zone_id'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CreateClusterResponse::fromMap($this->doROARequest('CreateCluster', '2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters', 'json', $req, $runtime));
    }

    /**
     * @param string                $ClusterId
     * @param UpgradeClusterRequest $request
     *
     * @return UpgradeClusterResponse
     */
    public function upgradeCluster($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->upgradeClusterWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string                $ClusterId
     * @param UpgradeClusterRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpgradeClusterResponse
     */
    public function upgradeClusterWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->componentName)) {
            @$body['component_name'] = $request->componentName;
        }
        if (!Utils::isUnset($request->nextVersion)) {
            @$body['next_version'] = $request->nextVersion;
        }
        if (!Utils::isUnset($request->version)) {
            @$body['version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return UpgradeClusterResponse::fromMap($this->doROARequest('UpgradeCluster', '2015-12-15', 'HTTPS', 'POST', 'AK', '/api/v2/clusters/' . $ClusterId . '/upgrade', 'none', $req, $runtime));
    }

    /**
     * @param string                 $ClusterId
     * @param AttachInstancesRequest $request
     *
     * @return AttachInstancesResponse
     */
    public function attachInstances($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->attachInstancesWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string                 $ClusterId
     * @param AttachInstancesRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return AttachInstancesResponse
     */
    public function attachInstancesWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cpuPolicy)) {
            @$body['cpu_policy'] = $request->cpuPolicy;
        }
        if (!Utils::isUnset($request->formatDisk)) {
            @$body['format_disk'] = $request->formatDisk;
        }
        if (!Utils::isUnset($request->imageId)) {
            @$body['image_id'] = $request->imageId;
        }
        if (!Utils::isUnset($request->instances)) {
            @$body['instances'] = $request->instances;
        }
        if (!Utils::isUnset($request->isEdgeWorker)) {
            @$body['is_edge_worker'] = $request->isEdgeWorker;
        }
        if (!Utils::isUnset($request->keepInstanceName)) {
            @$body['keep_instance_name'] = $request->keepInstanceName;
        }
        if (!Utils::isUnset($request->keyPair)) {
            @$body['key_pair'] = $request->keyPair;
        }
        if (!Utils::isUnset($request->nodepoolId)) {
            @$body['nodepool_id'] = $request->nodepoolId;
        }
        if (!Utils::isUnset($request->password)) {
            @$body['password'] = $request->password;
        }
        if (!Utils::isUnset($request->rdsInstances)) {
            @$body['rds_instances'] = $request->rdsInstances;
        }
        if (!Utils::isUnset($request->runtime)) {
            @$body['runtime'] = $request->runtime;
        }
        if (!Utils::isUnset($request->tags)) {
            @$body['tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->userData)) {
            @$body['user_data'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return AttachInstancesResponse::fromMap($this->doROARequest('AttachInstances', '2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $ClusterId . '/attach', 'json', $req, $runtime));
    }

    /**
     * @param DescribeTemplatesRequest $request
     *
     * @return DescribeTemplatesResponse
     */
    public function describeTemplates($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeTemplatesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeTemplatesRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeTemplatesResponse
     */
    public function describeTemplatesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->templateType)) {
            @$query['template_type'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeTemplatesResponse::fromMap($this->doROARequest('DescribeTemplates', '2015-12-15', 'HTTPS', 'GET', 'AK', '/templates', 'json', $req, $runtime));
    }

    /**
     * @param string $ClusterId
     *
     * @return PauseClusterUpgradeResponse
     */
    public function pauseClusterUpgrade($ClusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pauseClusterUpgradeWithOptions($ClusterId, $headers, $runtime);
    }

    /**
     * @param string         $ClusterId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return PauseClusterUpgradeResponse
     */
    public function pauseClusterUpgradeWithOptions($ClusterId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return PauseClusterUpgradeResponse::fromMap($this->doROARequest('PauseClusterUpgrade', '2015-12-15', 'HTTPS', 'POST', 'AK', '/api/v2/clusters/' . $ClusterId . '/upgrade/pause', 'none', $req, $runtime));
    }

    /**
     * @param string $TemplateId
     *
     * @return DescribeTemplateAttributeResponse
     */
    public function describeTemplateAttribute($TemplateId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeTemplateAttributeWithOptions($TemplateId, $headers, $runtime);
    }

    /**
     * @param string         $TemplateId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeTemplateAttributeResponse
     */
    public function describeTemplateAttributeWithOptions($TemplateId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeTemplateAttributeResponse::fromMap($this->doROARequest('DescribeTemplateAttribute', '2015-12-15', 'HTTPS', 'GET', 'AK', '/templates/' . $TemplateId . '', 'array', $req, $runtime));
    }

    /**
     * @param CreateTemplateRequest $request
     *
     * @return CreateTemplateResponse
     */
    public function createTemplate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTemplateWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateTemplateRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateTemplateResponse
     */
    public function createTemplateWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->name)) {
            @$body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->template)) {
            @$body['template'] = $request->template;
        }
        if (!Utils::isUnset($request->tags)) {
            @$body['tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->templateType)) {
            @$body['template_type'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CreateTemplateResponse::fromMap($this->doROARequestWithForm('CreateTemplate', '2015-12-15', 'HTTPS', 'POST', 'AK', '/templates', 'json', $req, $runtime));
    }

    /**
     * @param string                      $ClusterId
     * @param DescribeClusterNodesRequest $request
     *
     * @return DescribeClusterNodesResponse
     */
    public function describeClusterNodes($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterNodesWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string                      $ClusterId
     * @param DescribeClusterNodesRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeClusterNodesResponse
     */
    public function describeClusterNodesWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageSize)) {
            @$query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->nodepoolId)) {
            @$query['nodepool_id'] = $request->nodepoolId;
        }
        if (!Utils::isUnset($request->state)) {
            @$query['state'] = $request->state;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeClusterNodesResponse::fromMap($this->doROARequest('DescribeClusterNodes', '2015-12-15', 'HTTPS', 'GET', 'AK', '/clusters/' . $ClusterId . '/nodes', 'json', $req, $runtime));
    }

    /**
     * @param string               $ClusterId
     * @param DeleteClusterRequest $request
     *
     * @return DeleteClusterResponse
     */
    public function deleteCluster($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteClusterWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string               $ClusterId
     * @param DeleteClusterRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteClusterResponse
     */
    public function deleteClusterWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->retainResources)) {
            @$query['retain_resources'] = $request->retainResources;
        }
        $body = [];
        if (!Utils::isUnset($request->retainAllResources)) {
            @$body['retain_all_resources'] = $request->retainAllResources;
        }
        if (!Utils::isUnset($request->keepSlb)) {
            @$body['keep_slb'] = $request->keepSlb;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return DeleteClusterResponse::fromMap($this->doROARequestWithForm('DeleteCluster', '2015-12-15', 'HTTPS', 'DELETE', 'AK', '/clusters/' . $ClusterId . '', 'none', $req, $runtime));
    }

    /**
     * @param string $clusterid
     * @param string $componentid
     *
     * @return CancelComponentUpgradeResponse
     */
    public function cancelComponentUpgrade($clusterid, $componentid)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelComponentUpgradeWithOptions($clusterid, $componentid, $headers, $runtime);
    }

    /**
     * @param string         $clusterid
     * @param string         $componentid
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CancelComponentUpgradeResponse
     */
    public function cancelComponentUpgradeWithOptions($clusterid, $componentid, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return CancelComponentUpgradeResponse::fromMap($this->doROARequest('CancelComponentUpgrade', '2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $clusterid . '/components/{componentid}/cancel', 'none', $req, $runtime));
    }

    /**
     * @param string $ClusterId
     *
     * @return DescribeClusterAddonsVersionResponse
     */
    public function describeClusterAddonsVersion($ClusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterAddonsVersionWithOptions($ClusterId, $headers, $runtime);
    }

    /**
     * @param string         $ClusterId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeClusterAddonsVersionResponse
     */
    public function describeClusterAddonsVersionWithOptions($ClusterId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeClusterAddonsVersionResponse::fromMap($this->doROARequest('DescribeClusterAddonsVersion', '2015-12-15', 'HTTPS', 'GET', 'AK', '/clusters/' . $ClusterId . '/components/version', 'json', $req, $runtime));
    }

    /**
     * @param string                       $ClusterId
     * @param DescribeExternalAgentRequest $request
     *
     * @return DescribeExternalAgentResponse
     */
    public function describeExternalAgent($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeExternalAgentWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string                       $ClusterId
     * @param DescribeExternalAgentRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeExternalAgentResponse
     */
    public function describeExternalAgentWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->privateIpAddress)) {
            @$query['PrivateIpAddress'] = $request->privateIpAddress;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeExternalAgentResponse::fromMap($this->doROARequest('DescribeExternalAgent', '2015-12-15', 'HTTPS', 'GET', 'AK', '/k8s/' . $ClusterId . '/external/agent/deployment', 'json', $req, $runtime));
    }

    /**
     * @param string                        $ClusterId
     * @param UnInstallClusterAddonsRequest $request
     *
     * @return UnInstallClusterAddonsResponse
     */
    public function unInstallClusterAddons($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->unInstallClusterAddonsWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string                        $ClusterId
     * @param UnInstallClusterAddonsRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UnInstallClusterAddonsResponse
     */
    public function unInstallClusterAddonsWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::toArray($request->addons),
        ]);

        return UnInstallClusterAddonsResponse::fromMap($this->doROARequest('UnInstallClusterAddons', '2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $ClusterId . '/components/uninstall', 'none', $req, $runtime));
    }

    /**
     * @param string $clusterid
     * @param string $componentid
     *
     * @return ResumeComponentUpgradeResponse
     */
    public function resumeComponentUpgrade($clusterid, $componentid)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resumeComponentUpgradeWithOptions($clusterid, $componentid, $headers, $runtime);
    }

    /**
     * @param string         $clusterid
     * @param string         $componentid
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ResumeComponentUpgradeResponse
     */
    public function resumeComponentUpgradeWithOptions($clusterid, $componentid, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ResumeComponentUpgradeResponse::fromMap($this->doROARequest('ResumeComponentUpgrade', '2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $clusterid . '/components/{componentid}/resume', 'none', $req, $runtime));
    }

    /**
     * @param DescribeClustersV1Request $request
     *
     * @return DescribeClustersV1Response
     */
    public function describeClustersV1($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClustersV1WithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeClustersV1Request $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeClustersV1Response
     */
    public function describeClustersV1WithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            @$query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->clusterType)) {
            @$query['cluster_type'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['page_size'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$query['page_number'] = $request->pageNumber;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeClustersV1Response::fromMap($this->doROARequest('DescribeClustersV1', '2015-12-15', 'HTTPS', 'GET', 'AK', '/api/v1/clusters', 'json', $req, $runtime));
    }

    /**
     * @param string                            $ClusterId
     * @param ModifyClusterConfigurationRequest $request
     *
     * @return ModifyClusterConfigurationResponse
     */
    public function modifyClusterConfiguration($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyClusterConfigurationWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string                            $ClusterId
     * @param ModifyClusterConfigurationRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyClusterConfigurationResponse
     */
    public function modifyClusterConfigurationWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->configs)) {
            @$body['configs'] = $request->configs;
        }
        if (!Utils::isUnset($request->name)) {
            @$body['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return ModifyClusterConfigurationResponse::fromMap($this->doROARequest('ModifyClusterConfiguration', '2015-12-15', 'HTTPS', 'PUT', 'AK', '/clusters/' . $ClusterId . '/configuration', 'none', $req, $runtime));
    }

    /**
     * @param string $taskId
     *
     * @return DescribeTaskInfoResponse
     */
    public function describeTaskInfo($taskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeTaskInfoWithOptions($taskId, $headers, $runtime);
    }

    /**
     * @param string         $taskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeTaskInfoResponse
     */
    public function describeTaskInfoWithOptions($taskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeTaskInfoResponse::fromMap($this->doROARequest('DescribeTaskInfo', '2015-12-15', 'HTTPS', 'GET', 'AK', '/tasks/' . $taskId . '', 'json', $req, $runtime));
    }

    /**
     * @param string $ClusterId
     *
     * @return CancelClusterUpgradeResponse
     */
    public function cancelClusterUpgrade($ClusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelClusterUpgradeWithOptions($ClusterId, $headers, $runtime);
    }

    /**
     * @param string         $ClusterId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CancelClusterUpgradeResponse
     */
    public function cancelClusterUpgradeWithOptions($ClusterId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return CancelClusterUpgradeResponse::fromMap($this->doROARequest('CancelClusterUpgrade', '2015-12-15', 'HTTPS', 'POST', 'AK', '/api/v2/clusters/' . $ClusterId . '/upgrade/cancel', 'none', $req, $runtime));
    }

    /**
     * @param string                $TemplateId
     * @param UpdateTemplateRequest $request
     *
     * @return UpdateTemplateResponse
     */
    public function updateTemplate($TemplateId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTemplateWithOptions($TemplateId, $request, $headers, $runtime);
    }

    /**
     * @param string                $TemplateId
     * @param UpdateTemplateRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateTemplateResponse
     */
    public function updateTemplateWithOptions($TemplateId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            @$body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            @$body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->tags)) {
            @$body['tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->template)) {
            @$body['template'] = $request->template;
        }
        if (!Utils::isUnset($request->templateType)) {
            @$body['template_type'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return UpdateTemplateResponse::fromMap($this->doROARequest('UpdateTemplate', '2015-12-15', 'HTTPS', 'PUT', 'AK', '/templates/' . $TemplateId . '', 'none', $req, $runtime));
    }

    /**
     * @param string                      $ClusterId
     * @param UpgradeClusterAddonsRequest $request
     *
     * @return UpgradeClusterAddonsResponse
     */
    public function upgradeClusterAddons($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->upgradeClusterAddonsWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string                      $ClusterId
     * @param UpgradeClusterAddonsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpgradeClusterAddonsResponse
     */
    public function upgradeClusterAddonsWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::toArray($request->body),
        ]);

        return UpgradeClusterAddonsResponse::fromMap($this->doROARequest('UpgradeClusterAddons', '2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $ClusterId . '/components/upgrade', 'none', $req, $runtime));
    }

    /**
     * @param string $Id
     *
     * @return DeleteKubernetesTriggerResponse
     */
    public function deleteKubernetesTrigger($Id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteKubernetesTriggerWithOptions($Id, $headers, $runtime);
    }

    /**
     * @param string         $Id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteKubernetesTriggerResponse
     */
    public function deleteKubernetesTriggerWithOptions($Id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DeleteKubernetesTriggerResponse::fromMap($this->doROARequest('DeleteKubernetesTrigger', '2015-12-15', 'HTTPS', 'DELETE', 'AK', '/triggers/revoke/' . $Id . '', 'none', $req, $runtime));
    }

    /**
     * @return DescribeUserQuotaResponse
     */
    public function describeUserQuota()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeUserQuotaWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeUserQuotaResponse
     */
    public function describeUserQuotaWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeUserQuotaResponse::fromMap($this->doROARequest('DescribeUserQuota', '2015-12-15', 'HTTPS', 'GET', 'AK', '/quota', 'json', $req, $runtime));
    }

    /**
     * @param string $ClusterId
     * @param string $NodepoolId
     *
     * @return DeleteClusterNodepoolResponse
     */
    public function deleteClusterNodepool($ClusterId, $NodepoolId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteClusterNodepoolWithOptions($ClusterId, $NodepoolId, $headers, $runtime);
    }

    /**
     * @param string         $ClusterId
     * @param string         $NodepoolId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteClusterNodepoolResponse
     */
    public function deleteClusterNodepoolWithOptions($ClusterId, $NodepoolId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DeleteClusterNodepoolResponse::fromMap($this->doROARequest('DeleteClusterNodepool', '2015-12-15', 'HTTPS', 'DELETE', 'AK', '/clusters/' . $ClusterId . '/nodepools/{NodepoolId}', 'none', $req, $runtime));
    }

    /**
     * 批量查询集群Addon升级状态
     *
     * @param string                                    $ClusterId
     * @param DescribeClusterAddonsUpgradeStatusRequest $request
     *
     * @return DescribeClusterAddonsUpgradeStatusResponse
     */
    public function describeClusterAddonsUpgradeStatus($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterAddonsUpgradeStatusWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string                                    $ClusterId
     * @param DescribeClusterAddonsUpgradeStatusRequest $request
     * @param string[]                                  $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeClusterAddonsUpgradeStatusResponse
     */
    public function describeClusterAddonsUpgradeStatusWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->componentIds)) {
            @$query['componentIds'] = $request->componentIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeClusterAddonsUpgradeStatusResponse::fromMap($this->doROARequest('DescribeClusterAddonsUpgradeStatus', '2015-12-15', 'HTTPS', 'GET', 'AK', '/clusters/[ClusterId]/components/upgradestatus', 'none', $req, $runtime));
    }

    /**
     * @param string                      $ClusterId
     * @param InstallClusterAddonsRequest $request
     *
     * @return InstallClusterAddonsResponse
     */
    public function installClusterAddons($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->installClusterAddonsWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string                      $ClusterId
     * @param InstallClusterAddonsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return InstallClusterAddonsResponse
     */
    public function installClusterAddonsWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::toArray($request->body),
        ]);

        return InstallClusterAddonsResponse::fromMap($this->doROARequest('InstallClusterAddons', '2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $ClusterId . '/components/install', 'none', $req, $runtime));
    }

    /**
     * @param string $ClusterId
     *
     * @return DescribeClusterNodePoolsResponse
     */
    public function describeClusterNodePools($ClusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterNodePoolsWithOptions($ClusterId, $headers, $runtime);
    }

    /**
     * @param string         $ClusterId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeClusterNodePoolsResponse
     */
    public function describeClusterNodePoolsWithOptions($ClusterId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeClusterNodePoolsResponse::fromMap($this->doROARequest('DescribeClusterNodePools', '2015-12-15', 'HTTPS', 'GET', 'AK', '/clusters/' . $ClusterId . '/nodepools', 'json', $req, $runtime));
    }

    /**
     * @param string                                 $ClusterId
     * @param DescribeClusterV2UserKubeconfigRequest $request
     *
     * @return DescribeClusterV2UserKubeconfigResponse
     */
    public function describeClusterV2UserKubeconfig($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterV2UserKubeconfigWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string                                 $ClusterId
     * @param DescribeClusterV2UserKubeconfigRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeClusterV2UserKubeconfigResponse
     */
    public function describeClusterV2UserKubeconfigWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->privateIpAddress)) {
            @$query['PrivateIpAddress'] = $request->privateIpAddress;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeClusterV2UserKubeconfigResponse::fromMap($this->doROARequest('DescribeClusterV2UserKubeconfig', '2015-12-15', 'HTTPS', 'GET', 'AK', '/api/v2/k8s/' . $ClusterId . '/user_config', 'json', $req, $runtime));
    }

    /**
     * @param string                 $ClusterId
     * @param ScaleOutClusterRequest $request
     *
     * @return ScaleOutClusterResponse
     */
    public function scaleOutCluster($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->scaleOutClusterWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string                 $ClusterId
     * @param ScaleOutClusterRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ScaleOutClusterResponse
     */
    public function scaleOutClusterWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cloudMonitorFlags)) {
            @$body['cloud_monitor_flags'] = $request->cloudMonitorFlags;
        }
        if (!Utils::isUnset($request->count)) {
            @$body['count'] = $request->count;
        }
        if (!Utils::isUnset($request->cpuPolicy)) {
            @$body['cpu_policy'] = $request->cpuPolicy;
        }
        if (!Utils::isUnset($request->disableRollback)) {
            @$body['disable_rollback'] = $request->disableRollback;
        }
        if (!Utils::isUnset($request->imageId)) {
            @$body['image_id'] = $request->imageId;
        }
        if (!Utils::isUnset($request->keyPair)) {
            @$body['key_pair'] = $request->keyPair;
        }
        if (!Utils::isUnset($request->loginPassword)) {
            @$body['login_password'] = $request->loginPassword;
        }
        if (!Utils::isUnset($request->rdsInstances)) {
            @$body['rds_instances'] = $request->rdsInstances;
        }
        if (!Utils::isUnset($request->runtime)) {
            @$body['runtime'] = $request->runtime;
        }
        if (!Utils::isUnset($request->tags)) {
            @$body['tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->taints)) {
            @$body['taints'] = $request->taints;
        }
        if (!Utils::isUnset($request->userData)) {
            @$body['user_data'] = $request->userData;
        }
        if (!Utils::isUnset($request->vswitchIds)) {
            @$body['vswitch_ids'] = $request->vswitchIds;
        }
        if (!Utils::isUnset($request->workerAutoRenew)) {
            @$body['worker_auto_renew'] = $request->workerAutoRenew;
        }
        if (!Utils::isUnset($request->workerAutoRenewPeriod)) {
            @$body['worker_auto_renew_period'] = $request->workerAutoRenewPeriod;
        }
        if (!Utils::isUnset($request->workerDataDisk)) {
            @$body['worker_data_disk'] = $request->workerDataDisk;
        }
        if (!Utils::isUnset($request->workerDataDisks)) {
            @$body['worker_data_disks'] = $request->workerDataDisks;
        }
        if (!Utils::isUnset($request->workerInstanceChargeType)) {
            @$body['worker_instance_charge_type'] = $request->workerInstanceChargeType;
        }
        if (!Utils::isUnset($request->workerInstanceTypes)) {
            @$body['worker_instance_types'] = $request->workerInstanceTypes;
        }
        if (!Utils::isUnset($request->workerPeriod)) {
            @$body['worker_period'] = $request->workerPeriod;
        }
        if (!Utils::isUnset($request->workerPeriodUnit)) {
            @$body['worker_period_unit'] = $request->workerPeriodUnit;
        }
        if (!Utils::isUnset($request->workerSystemDiskCategory)) {
            @$body['worker_system_disk_category'] = $request->workerSystemDiskCategory;
        }
        if (!Utils::isUnset($request->workerSystemDiskSize)) {
            @$body['worker_system_disk_size'] = $request->workerSystemDiskSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return ScaleOutClusterResponse::fromMap($this->doROARequest('ScaleOutCluster', '2015-12-15', 'HTTPS', 'POST', 'AK', '/api/v2/clusters/' . $ClusterId . '', 'json', $req, $runtime));
    }

    /**
     * @param string                   $ClusterId
     * @param ModifyClusterTagsRequest $request
     *
     * @return ModifyClusterTagsResponse
     */
    public function modifyClusterTags($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyClusterTagsWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string                   $ClusterId
     * @param ModifyClusterTagsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyClusterTagsResponse
     */
    public function modifyClusterTagsWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::toArray($request->body),
        ]);

        return ModifyClusterTagsResponse::fromMap($this->doROARequest('ModifyClusterTags', '2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $ClusterId . '/tags', 'none', $req, $runtime));
    }

    /**
     * @param string                      $ClusterId
     * @param GetKubernetesTriggerRequest $request
     *
     * @return GetKubernetesTriggerResponse
     */
    public function getKubernetesTrigger($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getKubernetesTriggerWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string                      $ClusterId
     * @param GetKubernetesTriggerRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetKubernetesTriggerResponse
     */
    public function getKubernetesTriggerWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->namespace)) {
            @$query['Namespace'] = $request->namespace;
        }
        if (!Utils::isUnset($request->type)) {
            @$query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->name)) {
            @$query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetKubernetesTriggerResponse::fromMap($this->doROARequest('GetKubernetesTrigger', '2015-12-15', 'HTTPS', 'GET', 'AK', '/triggers/' . $ClusterId . '', 'json', $req, $runtime));
    }

    /**
     * @param string $ClusterId
     *
     * @return GetUpgradeStatusResponse
     */
    public function getUpgradeStatus($ClusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUpgradeStatusWithOptions($ClusterId, $headers, $runtime);
    }

    /**
     * @param string         $ClusterId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetUpgradeStatusResponse
     */
    public function getUpgradeStatusWithOptions($ClusterId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return GetUpgradeStatusResponse::fromMap($this->doROARequest('GetUpgradeStatus', '2015-12-15', 'HTTPS', 'GET', 'AK', '/api/v2/clusters/' . $ClusterId . '/upgrade/status', 'json', $req, $runtime));
    }

    /**
     * @param string $ClusterId
     *
     * @return DescribeClusterResourcesResponse
     */
    public function describeClusterResources($ClusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeClusterResourcesWithOptions($ClusterId, $headers, $runtime);
    }

    /**
     * @param string         $ClusterId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeClusterResourcesResponse
     */
    public function describeClusterResourcesWithOptions($ClusterId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeClusterResourcesResponse::fromMap($this->doROARequest('DescribeClusterResources', '2015-12-15', 'HTTPS', 'GET', 'AK', '/clusters/' . $ClusterId . '/resources', 'array', $req, $runtime));
    }

    /**
     * @param string                    $ClusterId
     * @param DeleteClusterNodesRequest $request
     *
     * @return DeleteClusterNodesResponse
     */
    public function deleteClusterNodes($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteClusterNodesWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string                    $ClusterId
     * @param DeleteClusterNodesRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteClusterNodesResponse
     */
    public function deleteClusterNodesWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->drainNode)) {
            @$body['drain_node'] = $request->drainNode;
        }
        if (!Utils::isUnset($request->releaseNode)) {
            @$body['release_node'] = $request->releaseNode;
        }
        if (!Utils::isUnset($request->nodes)) {
            @$body['nodes'] = $request->nodes;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return DeleteClusterNodesResponse::fromMap($this->doROARequest('DeleteClusterNodes', '2015-12-15', 'HTTPS', 'POST', 'AK', '/clusters/' . $ClusterId . '/nodes', 'json', $req, $runtime));
    }
}
