<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class StartWorkflowRequest extends Model
{
    /**
     * @description The name of the output BAM file.
     *
     * @example abc.bam
     *
     * @var string
     */
    public $mappingBamOutFilename;

    /**
     * @description The output path of the Binary Alignment Map (BAM) file.
     *
     * @example output/bamDirName
     *
     * @var string
     */
    public $mappingBamOutPath;

    /**
     * @description The name of the OSS bucket that stores the data of the mapping workflow.
     *
     * @example gene-shenzhen
     *
     * @var string
     */
    public $mappingBucketName;

    /**
     * @description The name of the first FASTQ file of the mapping workflow.
     *
     * @example MGISEQ2000_PCR-free_NA12878_1_V100003043_L01_1.fq.gz
     *
     * @var string
     */
    public $mappingFastqFirstFilename;

    /**
     * @description The path of the FASTQ files of the mapping workflow.
     *
     * @example fastq/MGISEQ2000
     *
     * @var string
     */
    public $mappingFastqPath;

    /**
     * @description The name of the second FASTQ file of the mapping workflow.
     *
     * @example MGISEQ2000_PCR-free_NA12878_1_V100003043_L01_2.fq.gz
     *
     * @var string
     */
    public $mappingFastqSecondFilename;

    /**
     * @description Specifies whether to mark duplicate values.
     *
     * @example true
     *
     * @var string
     */
    public $mappingIsMarkDup;

    /**
     * @description The region where the Object Storage Service (OSS) bucket that stores the data of the mapping workflow is deployed.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $mappingOssRegion;

    /**
     * @description The path of the reference files of the mapping workflow.
     *
     * @example reference/hg19
     *
     * @var string
     */
    public $mappingReferencePath;

    /**
     * @description The type of service-level agreement (SLA). Valid values:
     *
     *   s: the silver level (S-level). It requires 1 extra minute to process every 1.5 billion base pairs beyond the limit of 90 billion base pairs.
     *   g: the gold level (G-level). It requires 1 extra minute to process every 2 billion base pairs beyond the limit of 90 billion base pairs.
     *   p: the platinum level (P-level). It requires 1 extra minute to process every 3 billion base pairs beyond the limit of 90 billion base pairs.
     *
     * @example s
     *
     * @var string
     */
    public $service;

    /**
     * @description The name of the OSS bucket that stores the data of the WGS workflow.
     *
     * @example gene-shenzhen
     *
     * @var string
     */
    public $wgsBucketName;

    /**
     * @description The name of the first FASTQ file of the WGS workflow.
     *
     * @example MGISEQ2000_PCR-free_NA12878_1_V100003043_L01_1.fq.gz
     *
     * @var string
     */
    public $wgsFastqFirstFilename;

    /**
     * @description The path of the FASTQ files of the WGS workflow.
     *
     * @example fastq/MGISEQ2000
     *
     * @var string
     */
    public $wgsFastqPath;

    /**
     * @description The name of the second FASTQ file of the WGS workflow.
     *
     * @example MGISEQ2000_PCR-free_NA12878_1_V100003043_L01_2.fq.gz
     *
     * @var string
     */
    public $wgsFastqSecondFilename;

    /**
     * @description The region where the OSS bucket that stores the data of the whole genome sequencing (WGS) workflow is deployed.
     *
     * @example cn-shenzhen
     *
     * @var string
     */
    public $wgsOssRegion;

    /**
     * @description The path of the reference files of the WGS workflow.
     *
     * @example reference/hg19
     *
     * @var string
     */
    public $wgsReferencePath;

    /**
     * @description The name of the output VCF file.
     *
     * @example abc.vcf
     *
     * @var string
     */
    public $wgsVcfOutFilename;

    /**
     * @description The output path of the Variant Call Format (VCF) file.
     *
     * @example output/vcf
     *
     * @var string
     */
    public $wgsVcfOutPath;

    /**
     * @description The type of workflow. Valid values: wgs and mapping.
     *
     * @example mapping
     *
     * @var string
     */
    public $workflowType;
    protected $_name = [
        'mappingBamOutFilename'      => 'mapping_bam_out_filename',
        'mappingBamOutPath'          => 'mapping_bam_out_path',
        'mappingBucketName'          => 'mapping_bucket_name',
        'mappingFastqFirstFilename'  => 'mapping_fastq_first_filename',
        'mappingFastqPath'           => 'mapping_fastq_path',
        'mappingFastqSecondFilename' => 'mapping_fastq_second_filename',
        'mappingIsMarkDup'           => 'mapping_is_mark_dup',
        'mappingOssRegion'           => 'mapping_oss_region',
        'mappingReferencePath'       => 'mapping_reference_path',
        'service'                    => 'service',
        'wgsBucketName'              => 'wgs_bucket_name',
        'wgsFastqFirstFilename'      => 'wgs_fastq_first_filename',
        'wgsFastqPath'               => 'wgs_fastq_path',
        'wgsFastqSecondFilename'     => 'wgs_fastq_second_filename',
        'wgsOssRegion'               => 'wgs_oss_region',
        'wgsReferencePath'           => 'wgs_reference_path',
        'wgsVcfOutFilename'          => 'wgs_vcf_out_filename',
        'wgsVcfOutPath'              => 'wgs_vcf_out_path',
        'workflowType'               => 'workflow_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mappingBamOutFilename) {
            $res['mapping_bam_out_filename'] = $this->mappingBamOutFilename;
        }
        if (null !== $this->mappingBamOutPath) {
            $res['mapping_bam_out_path'] = $this->mappingBamOutPath;
        }
        if (null !== $this->mappingBucketName) {
            $res['mapping_bucket_name'] = $this->mappingBucketName;
        }
        if (null !== $this->mappingFastqFirstFilename) {
            $res['mapping_fastq_first_filename'] = $this->mappingFastqFirstFilename;
        }
        if (null !== $this->mappingFastqPath) {
            $res['mapping_fastq_path'] = $this->mappingFastqPath;
        }
        if (null !== $this->mappingFastqSecondFilename) {
            $res['mapping_fastq_second_filename'] = $this->mappingFastqSecondFilename;
        }
        if (null !== $this->mappingIsMarkDup) {
            $res['mapping_is_mark_dup'] = $this->mappingIsMarkDup;
        }
        if (null !== $this->mappingOssRegion) {
            $res['mapping_oss_region'] = $this->mappingOssRegion;
        }
        if (null !== $this->mappingReferencePath) {
            $res['mapping_reference_path'] = $this->mappingReferencePath;
        }
        if (null !== $this->service) {
            $res['service'] = $this->service;
        }
        if (null !== $this->wgsBucketName) {
            $res['wgs_bucket_name'] = $this->wgsBucketName;
        }
        if (null !== $this->wgsFastqFirstFilename) {
            $res['wgs_fastq_first_filename'] = $this->wgsFastqFirstFilename;
        }
        if (null !== $this->wgsFastqPath) {
            $res['wgs_fastq_path'] = $this->wgsFastqPath;
        }
        if (null !== $this->wgsFastqSecondFilename) {
            $res['wgs_fastq_second_filename'] = $this->wgsFastqSecondFilename;
        }
        if (null !== $this->wgsOssRegion) {
            $res['wgs_oss_region'] = $this->wgsOssRegion;
        }
        if (null !== $this->wgsReferencePath) {
            $res['wgs_reference_path'] = $this->wgsReferencePath;
        }
        if (null !== $this->wgsVcfOutFilename) {
            $res['wgs_vcf_out_filename'] = $this->wgsVcfOutFilename;
        }
        if (null !== $this->wgsVcfOutPath) {
            $res['wgs_vcf_out_path'] = $this->wgsVcfOutPath;
        }
        if (null !== $this->workflowType) {
            $res['workflow_type'] = $this->workflowType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartWorkflowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['mapping_bam_out_filename'])) {
            $model->mappingBamOutFilename = $map['mapping_bam_out_filename'];
        }
        if (isset($map['mapping_bam_out_path'])) {
            $model->mappingBamOutPath = $map['mapping_bam_out_path'];
        }
        if (isset($map['mapping_bucket_name'])) {
            $model->mappingBucketName = $map['mapping_bucket_name'];
        }
        if (isset($map['mapping_fastq_first_filename'])) {
            $model->mappingFastqFirstFilename = $map['mapping_fastq_first_filename'];
        }
        if (isset($map['mapping_fastq_path'])) {
            $model->mappingFastqPath = $map['mapping_fastq_path'];
        }
        if (isset($map['mapping_fastq_second_filename'])) {
            $model->mappingFastqSecondFilename = $map['mapping_fastq_second_filename'];
        }
        if (isset($map['mapping_is_mark_dup'])) {
            $model->mappingIsMarkDup = $map['mapping_is_mark_dup'];
        }
        if (isset($map['mapping_oss_region'])) {
            $model->mappingOssRegion = $map['mapping_oss_region'];
        }
        if (isset($map['mapping_reference_path'])) {
            $model->mappingReferencePath = $map['mapping_reference_path'];
        }
        if (isset($map['service'])) {
            $model->service = $map['service'];
        }
        if (isset($map['wgs_bucket_name'])) {
            $model->wgsBucketName = $map['wgs_bucket_name'];
        }
        if (isset($map['wgs_fastq_first_filename'])) {
            $model->wgsFastqFirstFilename = $map['wgs_fastq_first_filename'];
        }
        if (isset($map['wgs_fastq_path'])) {
            $model->wgsFastqPath = $map['wgs_fastq_path'];
        }
        if (isset($map['wgs_fastq_second_filename'])) {
            $model->wgsFastqSecondFilename = $map['wgs_fastq_second_filename'];
        }
        if (isset($map['wgs_oss_region'])) {
            $model->wgsOssRegion = $map['wgs_oss_region'];
        }
        if (isset($map['wgs_reference_path'])) {
            $model->wgsReferencePath = $map['wgs_reference_path'];
        }
        if (isset($map['wgs_vcf_out_filename'])) {
            $model->wgsVcfOutFilename = $map['wgs_vcf_out_filename'];
        }
        if (isset($map['wgs_vcf_out_path'])) {
            $model->wgsVcfOutPath = $map['wgs_vcf_out_path'];
        }
        if (isset($map['workflow_type'])) {
            $model->workflowType = $map['workflow_type'];
        }

        return $model;
    }
}
