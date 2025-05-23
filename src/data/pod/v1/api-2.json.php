<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'pod',
        'protocol' => 'json',
//        'serviceFullName' => 'pod',
//        'serviceId' => 'pod',
    ],
    'operations' => [
        'CreateConfigFile' => [
            'name' => 'CreateConfigFile',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/configFiles',
            ],
            'input' => [ 'shape' => 'CreateConfigFileRequestShape', ],
            'output' => [ 'shape' => 'CreateConfigFileResponseShape', ],
        ],
        'DescribeConfigFile' => [
            'name' => 'DescribeConfigFile',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/configFiles/{name}',
            ],
            'input' => [ 'shape' => 'DescribeConfigFileRequestShape', ],
            'output' => [ 'shape' => 'DescribeConfigFileResponseShape', ],
        ],
        'DeleteConfigFile' => [
            'name' => 'DeleteConfigFile',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/configFiles/{name}',
            ],
            'input' => [ 'shape' => 'DeleteConfigFileRequestShape', ],
            'output' => [ 'shape' => 'DeleteConfigFileResponseShape', ],
        ],
        'UpdateConfigFile' => [
            'name' => 'UpdateConfigFile',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/configFiles/{name}:update',
            ],
            'input' => [ 'shape' => 'UpdateConfigFileRequestShape', ],
            'output' => [ 'shape' => 'UpdateConfigFileResponseShape', ],
        ],
        'DescribeContainer' => [
            'name' => 'DescribeContainer',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/pods/{podId}/containers/{containerName}',
            ],
            'input' => [ 'shape' => 'DescribeContainerRequestShape', ],
            'output' => [ 'shape' => 'DescribeContainerResponseShape', ],
        ],
        'Attach' => [
            'name' => 'Attach',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/pods/{podId}/containers/{containerName}:attach',
            ],
            'input' => [ 'shape' => 'AttachRequestShape', ],
            'output' => [ 'shape' => 'AttachResponseShape', ],
        ],
        'ExecCreate' => [
            'name' => 'ExecCreate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/pods/{podId}/containers/{containerName}:execCreate',
            ],
            'input' => [ 'shape' => 'ExecCreateRequestShape', ],
            'output' => [ 'shape' => 'ExecCreateResponseShape', ],
        ],
        'ExecGetExitCode' => [
            'name' => 'ExecGetExitCode',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/pods/{podId}/containers/{containerName}:execGetExitCode',
            ],
            'input' => [ 'shape' => 'ExecGetExitCodeRequestShape', ],
            'output' => [ 'shape' => 'ExecGetExitCodeResponseShape', ],
        ],
        'ExecStart' => [
            'name' => 'ExecStart',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/pods/{podId}/containers/{containerName}:execStart',
            ],
            'input' => [ 'shape' => 'ExecStartRequestShape', ],
            'output' => [ 'shape' => 'ExecStartResponseShape', ],
        ],
        'ResizeTTY' => [
            'name' => 'ResizeTTY',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/pods/{podId}/containers/{containerName}:resizeTTY',
            ],
            'input' => [ 'shape' => 'ResizeTTYRequestShape', ],
            'output' => [ 'shape' => 'ResizeTTYResponseShape', ],
        ],
        'CreateImageCache' => [
            'name' => 'CreateImageCache',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/imageCache',
            ],
            'input' => [ 'shape' => 'CreateImageCacheRequestShape', ],
            'output' => [ 'shape' => 'CreateImageCacheResponseShape', ],
        ],
        'DescribeImageCaches' => [
            'name' => 'DescribeImageCaches',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/imageCaches',
            ],
            'input' => [ 'shape' => 'DescribeImageCachesRequestShape', ],
            'output' => [ 'shape' => 'DescribeImageCachesResponseShape', ],
        ],
        'CreateImageCaches' => [
            'name' => 'CreateImageCaches',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/imageCaches',
            ],
            'input' => [ 'shape' => 'CreateImageCachesRequestShape', ],
            'output' => [ 'shape' => 'CreateImageCachesResponseShape', ],
        ],
        'DescribeImageCache' => [
            'name' => 'DescribeImageCache',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/imageCache/{imageCacheId}',
            ],
            'input' => [ 'shape' => 'DescribeImageCacheRequestShape', ],
            'output' => [ 'shape' => 'DescribeImageCacheResponseShape', ],
        ],
        'DeleteImageCache' => [
            'name' => 'DeleteImageCache',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/imageCache/{imageCacheId}',
            ],
            'input' => [ 'shape' => 'DeleteImageCacheRequestShape', ],
            'output' => [ 'shape' => 'DeleteImageCacheResponseShape', ],
        ],
        'GetMostSuitableImageCache' => [
            'name' => 'GetMostSuitableImageCache',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/imageCache:getMostSuitable',
            ],
            'input' => [ 'shape' => 'GetMostSuitableImageCacheRequestShape', ],
            'output' => [ 'shape' => 'GetMostSuitableImageCacheResponseShape', ],
        ],
        'UpdateImageCache' => [
            'name' => 'UpdateImageCache',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/imageCache/{imageCacheId}:update',
            ],
            'input' => [ 'shape' => 'UpdateImageCacheRequestShape', ],
            'output' => [ 'shape' => 'UpdateImageCacheResponseShape', ],
        ],
        'DescribeInstanceTypes' => [
            'name' => 'DescribeInstanceTypes',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instanceTypes',
            ],
            'input' => [ 'shape' => 'DescribeInstanceTypesRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceTypesResponseShape', ],
        ],
        'DescribePods' => [
            'name' => 'DescribePods',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/pods',
            ],
            'input' => [ 'shape' => 'DescribePodsRequestShape', ],
            'output' => [ 'shape' => 'DescribePodsResponseShape', ],
        ],
        'CreatePods' => [
            'name' => 'CreatePods',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/pods',
            ],
            'input' => [ 'shape' => 'CreatePodsRequestShape', ],
            'output' => [ 'shape' => 'CreatePodsResponseShape', ],
        ],
        'DescribePodsStatus' => [
            'name' => 'DescribePodsStatus',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/podsStatus',
            ],
            'input' => [ 'shape' => 'DescribePodsStatusRequestShape', ],
            'output' => [ 'shape' => 'DescribePodsStatusResponseShape', ],
        ],
        'CheckPodName' => [
            'name' => 'CheckPodName',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/pods:checkPodName',
            ],
            'input' => [ 'shape' => 'CheckPodNameRequestShape', ],
            'output' => [ 'shape' => 'CheckPodNameResponseShape', ],
        ],
        'DescribePod' => [
            'name' => 'DescribePod',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/pods/{podId}',
            ],
            'input' => [ 'shape' => 'DescribePodRequestShape', ],
            'output' => [ 'shape' => 'DescribePodResponseShape', ],
        ],
        'DeletePod' => [
            'name' => 'DeletePod',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/pods/{podId}',
            ],
            'input' => [ 'shape' => 'DeletePodRequestShape', ],
            'output' => [ 'shape' => 'DeletePodResponseShape', ],
        ],
        'StartPod' => [
            'name' => 'StartPod',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/pods/{podId}:startPod',
            ],
            'input' => [ 'shape' => 'StartPodRequestShape', ],
            'output' => [ 'shape' => 'StartPodResponseShape', ],
        ],
        'StopPod' => [
            'name' => 'StopPod',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/pods/{podId}:stopPod',
            ],
            'input' => [ 'shape' => 'StopPodRequestShape', ],
            'output' => [ 'shape' => 'StopPodResponseShape', ],
        ],
        'ModifyPodAttribute' => [
            'name' => 'ModifyPodAttribute',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/pods/{podId}:modifyPodAttribute',
            ],
            'input' => [ 'shape' => 'ModifyPodAttributeRequestShape', ],
            'output' => [ 'shape' => 'ModifyPodAttributeResponseShape', ],
        ],
        'AssociateElasticIp' => [
            'name' => 'AssociateElasticIp',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/pods/{podId}:associateElasticIp',
            ],
            'input' => [ 'shape' => 'AssociateElasticIpRequestShape', ],
            'output' => [ 'shape' => 'AssociateElasticIpResponseShape', ],
        ],
        'DisassociateElasticIp' => [
            'name' => 'DisassociateElasticIp',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/pods/{podId}:disassociateElasticIp',
            ],
            'input' => [ 'shape' => 'DisassociateElasticIpRequestShape', ],
            'output' => [ 'shape' => 'DisassociateElasticIpResponseShape', ],
        ],
        'GetContainerLogs' => [
            'name' => 'GetContainerLogs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/pods/{podId}/containers/{containerName}:getContainerLogs',
            ],
            'input' => [ 'shape' => 'GetContainerLogsRequestShape', ],
            'output' => [ 'shape' => 'GetContainerLogsResponseShape', ],
        ],
        'RebuildPod' => [
            'name' => 'RebuildPod',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/pods/{podId}:rebuild',
            ],
            'input' => [ 'shape' => 'RebuildPodRequestShape', ],
            'output' => [ 'shape' => 'RebuildPodResponseShape', ],
        ],
        'ResizePod' => [
            'name' => 'ResizePod',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/pods/{podId}:resize',
            ],
            'input' => [ 'shape' => 'ResizePodRequestShape', ],
            'output' => [ 'shape' => 'ResizePodResponseShape', ],
        ],
        'DescribePodTemplates' => [
            'name' => 'DescribePodTemplates',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/podTemplates',
            ],
            'input' => [ 'shape' => 'DescribePodTemplatesRequestShape', ],
            'output' => [ 'shape' => 'DescribePodTemplatesResponseShape', ],
        ],
        'CreatePodTemplate' => [
            'name' => 'CreatePodTemplate',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/podTemplates',
            ],
            'input' => [ 'shape' => 'CreatePodTemplateRequestShape', ],
            'output' => [ 'shape' => 'CreatePodTemplateResponseShape', ],
        ],
        'DescribePodTemplate' => [
            'name' => 'DescribePodTemplate',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/podTemplates/{podTemplateId}',
            ],
            'input' => [ 'shape' => 'DescribePodTemplateRequestShape', ],
            'output' => [ 'shape' => 'DescribePodTemplateResponseShape', ],
        ],
        'UpdatePodTemplate' => [
            'name' => 'UpdatePodTemplate',
            'http' => [
                'method' => 'PATCH',
                'requestUri' => '/v1/regions/{regionId}/podTemplates/{podTemplateId}',
            ],
            'input' => [ 'shape' => 'UpdatePodTemplateRequestShape', ],
            'output' => [ 'shape' => 'UpdatePodTemplateResponseShape', ],
        ],
        'DeletePodTemplate' => [
            'name' => 'DeletePodTemplate',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/podTemplates/{podTemplateId}',
            ],
            'input' => [ 'shape' => 'DeletePodTemplateRequestShape', ],
            'output' => [ 'shape' => 'DeletePodTemplateResponseShape', ],
        ],
        'VerifyPodTemplate' => [
            'name' => 'VerifyPodTemplate',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/podTemplates/{podTemplateId}:verify',
            ],
            'input' => [ 'shape' => 'VerifyPodTemplateRequestShape', ],
            'output' => [ 'shape' => 'VerifyPodTemplateResponseShape', ],
        ],
        'DescribeQuota' => [
            'name' => 'DescribeQuota',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/quotas',
            ],
            'input' => [ 'shape' => 'DescribeQuotaRequestShape', ],
            'output' => [ 'shape' => 'DescribeQuotaResponseShape', ],
        ],
        'DescribeSecrets' => [
            'name' => 'DescribeSecrets',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/secrets',
            ],
            'input' => [ 'shape' => 'DescribeSecretsRequestShape', ],
            'output' => [ 'shape' => 'DescribeSecretsResponseShape', ],
        ],
        'CreateSecret' => [
            'name' => 'CreateSecret',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/secrets',
            ],
            'input' => [ 'shape' => 'CreateSecretRequestShape', ],
            'output' => [ 'shape' => 'CreateSecretResponseShape', ],
        ],
        'DescribeSecret' => [
            'name' => 'DescribeSecret',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/secrets/{name}',
            ],
            'input' => [ 'shape' => 'DescribeSecretRequestShape', ],
            'output' => [ 'shape' => 'DescribeSecretResponseShape', ],
        ],
        'DeleteSecret' => [
            'name' => 'DeleteSecret',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/secrets/{name}',
            ],
            'input' => [ 'shape' => 'DeleteSecretRequestShape', ],
            'output' => [ 'shape' => 'DeleteSecretResponseShape', ],
        ],
    ],
    'shapes' => [
        'Ag' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'AvailablityGroup' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
            ],
        ],
        'BindInfo' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
            ],
        ],
        'Hh' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'Request' => [
            'type' => 'structure',
            'members' => [
                'cpu' => [ 'type' => 'string', 'locationName' => 'cpu', ],
                'memoryMB' => [ 'type' => 'string', 'locationName' => 'memoryMB', ],
            ],
        ],
        'ContainerState' => [
            'type' => 'structure',
            'members' => [
                'running' =>  [ 'shape' => 'ContainerStateRunning', ],
                'terminated' =>  [ 'shape' => 'ContainerStateTerminated', ],
                'waiting' =>  [ 'shape' => 'ContainerStateWaiting', ],
            ],
        ],
        'ContainerStateWaiting' => [
            'type' => 'structure',
            'members' => [
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'Hg' => [
            'type' => 'structure',
            'members' => [
                'scheme' => [ 'type' => 'string', 'locationName' => 'scheme', ],
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
                'httpHeader' => [ 'type' => 'list', 'member' => [ 'shape' => 'Hh', ], ],
            ],
        ],
        'ContainerStatus' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'restartCount' => [ 'type' => 'integer', 'locationName' => 'restartCount', ],
                'ready' => [ 'type' => 'boolean', 'locationName' => 'ready', ],
                'state' =>  [ 'shape' => 'ContainerState', ],
                'lastState' =>  [ 'shape' => 'ContainerState', ],
            ],
        ],
        'ResourceRequests' => [
            'type' => 'structure',
            'members' => [
                'requests' =>  [ 'shape' => 'Request', ],
                'limits' =>  [ 'shape' => 'Request', ],
            ],
        ],
        'BriefPodStatus' => [
            'type' => 'structure',
            'members' => [
                'podId' => [ 'type' => 'string', 'locationName' => 'podId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'ag' =>  [ 'shape' => 'AvailablityGroup', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'podStatus' =>  [ 'shape' => 'PodStatus', ],
                'containers' => [ 'type' => 'list', 'member' => [ 'shape' => 'Container', ], ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'ContainerStateTerminated' => [
            'type' => 'structure',
            'members' => [
                'signal' => [ 'type' => 'integer', 'locationName' => 'signal', ],
                'exitCode' => [ 'type' => 'integer', 'locationName' => 'exitCode', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'finishedAt' => [ 'type' => 'string', 'locationName' => 'finishedAt', ],
                'startedAt' => [ 'type' => 'string', 'locationName' => 'startedAt', ],
            ],
        ],
        'Probe' => [
            'type' => 'structure',
            'members' => [
                'initialDelaySeconds' => [ 'type' => 'integer', 'locationName' => 'initialDelaySeconds', ],
                'periodSeconds' => [ 'type' => 'integer', 'locationName' => 'periodSeconds', ],
                'timeoutSeconds' => [ 'type' => 'integer', 'locationName' => 'timeoutSeconds', ],
                'failureThreshold' => [ 'type' => 'integer', 'locationName' => 'failureThreshold', ],
                'successThreshold' => [ 'type' => 'integer', 'locationName' => 'successThreshold', ],
                'exec' =>  [ 'shape' => 'Exec', ],
                'httpGet' =>  [ 'shape' => 'Hg', ],
                'tcpSocket' =>  [ 'shape' => 'TcpSocket', ],
            ],
        ],
        'Exec' => [
            'type' => 'structure',
            'members' => [
                'command' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'VolumeMount' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
                'readOnly' => [ 'type' => 'boolean', 'locationName' => 'readOnly', ],
                'subPath' => [ 'type' => 'string', 'locationName' => 'subPath', ],
            ],
        ],
        'PodCondition' => [
            'type' => 'structure',
            'members' => [
                'lastProbeTime' => [ 'type' => 'string', 'locationName' => 'lastProbeTime', ],
                'lastTransitionTime' => [ 'type' => 'string', 'locationName' => 'lastTransitionTime', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'conditionType' => [ 'type' => 'string', 'locationName' => 'conditionType', ],
            ],
        ],
        'TcpSocket' => [
            'type' => 'structure',
            'members' => [
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
            ],
        ],
        'PodStatus' => [
            'type' => 'structure',
            'members' => [
                'phase' => [ 'type' => 'string', 'locationName' => 'phase', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'podIP' => [ 'type' => 'string', 'locationName' => 'podIP', ],
                'conditions' => [ 'type' => 'list', 'member' => [ 'shape' => 'PodCondition', ], ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
            ],
        ],
        'CloudDisk' => [
            'type' => 'structure',
            'members' => [
                'category' => [ 'type' => 'string', 'locationName' => 'category', ],
                'volumeId' => [ 'type' => 'string', 'locationName' => 'volumeId', ],
                'snapshotId' => [ 'type' => 'string', 'locationName' => 'snapshotId', ],
                'diskType' => [ 'type' => 'string', 'locationName' => 'diskType', ],
                'sizeGB' => [ 'type' => 'integer', 'locationName' => 'sizeGB', ],
                'fsType' => [ 'type' => 'string', 'locationName' => 'fsType', ],
                'iops' => [ 'type' => 'integer', 'locationName' => 'iops', ],
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
            ],
        ],
        'Container' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'command' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'args' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'env' => [ 'type' => 'list', 'member' => [ 'shape' => 'Env', ], ],
                'image' => [ 'type' => 'string', 'locationName' => 'image', ],
                'secret' => [ 'type' => 'string', 'locationName' => 'secret', ],
                'tty' => [ 'type' => 'boolean', 'locationName' => 'tty', ],
                'workingDir' => [ 'type' => 'string', 'locationName' => 'workingDir', ],
                'livenessProbe' =>  [ 'shape' => 'Probe', ],
                'readinessProbe' =>  [ 'shape' => 'Probe', ],
                'resources' =>  [ 'shape' => 'ResourceRequests', ],
                'systemDisk' =>  [ 'shape' => 'CloudDisk', ],
                'volumeMounts' => [ 'type' => 'list', 'member' => [ 'shape' => 'VolumeMount', ], ],
                'containerStatus' =>  [ 'shape' => 'ContainerStatus', ],
            ],
        ],
        'Env' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'ContainerStateRunning' => [
            'type' => 'structure',
            'members' => [
                'startedAt' => [ 'type' => 'string', 'locationName' => 'startedAt', ],
            ],
        ],
        'CFSVolumeSource' => [
            'type' => 'structure',
            'members' => [
                'mountTargetId' => [ 'type' => 'string', 'locationName' => 'mountTargetId', ],
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
            ],
        ],
        'CFSVolumeSourceSpec' => [
            'type' => 'structure',
            'members' => [
                'mountTargetId' => [ 'type' => 'string', 'locationName' => 'mountTargetId', ],
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
            ],
        ],
        'CloudDiskSpec' => [
            'type' => 'structure',
            'members' => [
                'category' => [ 'type' => 'string', 'locationName' => 'category', ],
                'volumeId' => [ 'type' => 'string', 'locationName' => 'volumeId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'snapshotId' => [ 'type' => 'string', 'locationName' => 'snapshotId', ],
                'diskType' => [ 'type' => 'string', 'locationName' => 'diskType', ],
                'sizeGB' => [ 'type' => 'integer', 'locationName' => 'sizeGB', ],
                'fsType' => [ 'type' => 'string', 'locationName' => 'fsType', ],
                'iops' => [ 'type' => 'integer', 'locationName' => 'iops', ],
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
            ],
        ],
        'ConfigFile' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConfigFileData', ], ],
            ],
        ],
        'ConfigFileData' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'ConfigFileToPathSource' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
                'mode' => [ 'type' => 'string', 'locationName' => 'mode', ],
            ],
        ],
        'ConfigFileToPathSpec' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
                'mode' => [ 'type' => 'string', 'locationName' => 'mode', ],
            ],
        ],
        'ConfigFileVolumeSource' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'defaultMode' => [ 'type' => 'string', 'locationName' => 'defaultMode', ],
                'fileToPath' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConfigFileToPathSource', ], ],
            ],
        ],
        'ConfigFileVolumeSourceSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'defaultMode' => [ 'type' => 'string', 'locationName' => 'defaultMode', ],
                'fileToPath' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConfigFileToPathSpec', ], ],
            ],
        ],
        'ResourceRequestsSpec' => [
            'type' => 'structure',
            'members' => [
                'requests' =>  [ 'shape' => 'RequestSpec', ],
                'limits' =>  [ 'shape' => 'RequestSpec', ],
            ],
        ],
        'ContainerResourceSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'resources' =>  [ 'shape' => 'ResourceRequestsSpec', ],
            ],
        ],
        'RequestSpec' => [
            'type' => 'structure',
            'members' => [
                'cpu' => [ 'type' => 'string', 'locationName' => 'cpu', ],
                'memoryMB' => [ 'type' => 'string', 'locationName' => 'memoryMB', ],
            ],
        ],
        'ExecSpec' => [
            'type' => 'structure',
            'members' => [
                'command' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'EnvSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'TcpSocketSpec' => [
            'type' => 'structure',
            'members' => [
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
            ],
        ],
        'VolumeMountSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'mountPath' => [ 'type' => 'string', 'locationName' => 'mountPath', ],
                'readOnly' => [ 'type' => 'boolean', 'locationName' => 'readOnly', ],
                'subPath' => [ 'type' => 'string', 'locationName' => 'subPath', ],
            ],
        ],
        'HhSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'ContainerSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'command' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'args' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'env' => [ 'type' => 'list', 'member' => [ 'shape' => 'EnvSpec', ], ],
                'image' => [ 'type' => 'string', 'locationName' => 'image', ],
                'secret' => [ 'type' => 'string', 'locationName' => 'secret', ],
                'imageCacheId' => [ 'type' => 'string', 'locationName' => 'imageCacheId', ],
                'tty' => [ 'type' => 'boolean', 'locationName' => 'tty', ],
                'workingDir' => [ 'type' => 'string', 'locationName' => 'workingDir', ],
                'livenessProbe' =>  [ 'shape' => 'ProbeSpec', ],
                'readinessProbe' =>  [ 'shape' => 'ProbeSpec', ],
                'resources' =>  [ 'shape' => 'ResourceRequestsSpec', ],
                'systemDisk' =>  [ 'shape' => 'CloudDiskSpec', ],
                'volumeMounts' => [ 'type' => 'list', 'member' => [ 'shape' => 'VolumeMountSpec', ], ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
            ],
        ],
        'ProbeSpec' => [
            'type' => 'structure',
            'members' => [
                'initialDelaySeconds' => [ 'type' => 'integer', 'locationName' => 'initialDelaySeconds', ],
                'periodSeconds' => [ 'type' => 'integer', 'locationName' => 'periodSeconds', ],
                'timeoutSeconds' => [ 'type' => 'integer', 'locationName' => 'timeoutSeconds', ],
                'failureThreshold' => [ 'type' => 'integer', 'locationName' => 'failureThreshold', ],
                'successThreshold' => [ 'type' => 'integer', 'locationName' => 'successThreshold', ],
                'exec' =>  [ 'shape' => 'ExecSpec', ],
                'httpGet' =>  [ 'shape' => 'HgSpec', ],
                'tcpSocket' =>  [ 'shape' => 'TcpSocketSpec', ],
            ],
        ],
        'HgSpec' => [
            'type' => 'structure',
            'members' => [
                'scheme' => [ 'type' => 'string', 'locationName' => 'scheme', ],
                'host' => [ 'type' => 'string', 'locationName' => 'host', ],
                'port' => [ 'type' => 'integer', 'locationName' => 'port', ],
                'path' => [ 'type' => 'string', 'locationName' => 'path', ],
                'httpHeader' => [ 'type' => 'list', 'member' => [ 'shape' => 'HhSpec', ], ],
            ],
        ],
        'PodDnsConfigOption' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'DnsConfig' => [
            'type' => 'structure',
            'members' => [
                'nameservers' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'searches' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'options' => [ 'type' => 'list', 'member' => [ 'shape' => 'PodDnsConfigOption', ], ],
            ],
        ],
        'PodDnsConfigOptionSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'DnsConfigSpec' => [
            'type' => 'structure',
            'members' => [
                'nameservers' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'searches' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'options' => [ 'type' => 'list', 'member' => [ 'shape' => 'PodDnsConfigOptionSpec', ], ],
            ],
        ],
        'DockerRegistryData' => [
            'type' => 'structure',
            'members' => [
                'server' => [ 'type' => 'string', 'locationName' => 'server', ],
                'username' => [ 'type' => 'string', 'locationName' => 'username', ],
                'password' => [ 'type' => 'string', 'locationName' => 'password', ],
                'email' => [ 'type' => 'string', 'locationName' => 'email', ],
            ],
        ],
        'ElasticIp' => [
            'type' => 'structure',
            'members' => [
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
                'elasticIpAddress' => [ 'type' => 'string', 'locationName' => 'elasticIpAddress', ],
            ],
        ],
        'ChargeSpec' => [
            'type' => 'structure',
            'members' => [
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'chargeUnit' => [ 'type' => 'string', 'locationName' => 'chargeUnit', ],
                'chargeDuration' => [ 'type' => 'integer', 'locationName' => 'chargeDuration', ],
                'autoRenew' => [ 'type' => 'boolean', 'locationName' => 'autoRenew', ],
                'autoChangeChargeMode' => [ 'type' => 'boolean', 'locationName' => 'autoChangeChargeMode', ],
                'autoChangeChargeModeDate' => [ 'type' => 'string', 'locationName' => 'autoChangeChargeModeDate', ],
                'buyScenario' => [ 'type' => 'string', 'locationName' => 'buyScenario', ],
            ],
        ],
        'ElasticIpSpec' => [
            'type' => 'structure',
            'members' => [
                'bandwidthMbps' => [ 'type' => 'integer', 'locationName' => 'bandwidthMbps', ],
                'provider' => [ 'type' => 'string', 'locationName' => 'provider', ],
                'chargeSpec' =>  [ 'shape' => 'ChargeSpec', ],
            ],
        ],
        'EmptyDirVolumeSource' => [
            'type' => 'structure',
            'members' => [
                'sizeMB' => [ 'type' => 'integer', 'locationName' => 'sizeMB', ],
            ],
        ],
        'EmptyDirVolumeSourceSpec' => [
            'type' => 'structure',
            'members' => [
                'sizeMB' => [ 'type' => 'integer', 'locationName' => 'sizeMB', ],
            ],
        ],
        'FileToPath' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'ImageCache' => [
            'type' => 'structure',
            'members' => [
                'imageCacheId' => [ 'type' => 'string', 'locationName' => 'imageCacheId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
                'imageName' => [ 'type' => 'string', 'locationName' => 'imageName', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'expireDateTime' => [ 'type' => 'string', 'locationName' => 'expireDateTime', ],
                'lastMatchedTime' => [ 'type' => 'string', 'locationName' => 'lastMatchedTime', ],
                'useCount' => [ 'type' => 'integer', 'locationName' => 'useCount', ],
                'snapShotId' => [ 'type' => 'string', 'locationName' => 'snapShotId', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
            ],
        ],
        'GetMostSuitableImageCache' => [
            'type' => 'structure',
            'members' => [
                'found' => [ 'type' => 'boolean', 'locationName' => 'found', ],
                'imageCache' =>  [ 'shape' => 'ImageCache', ],
            ],
        ],
        'HostAlias' => [
            'type' => 'structure',
            'members' => [
                'hostnames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
            ],
        ],
        'HostAliasSpec' => [
            'type' => 'structure',
            'members' => [
                'hostnames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ip' => [ 'type' => 'string', 'locationName' => 'ip', ],
            ],
        ],
        'ImageCacheSpec' => [
            'type' => 'structure',
            'members' => [
                'image' => [ 'type' => 'string', 'locationName' => 'image', ],
                'secret' => [ 'type' => 'string', 'locationName' => 'secret', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
                'retentionDays' => [ 'type' => 'integer', 'locationName' => 'retentionDays', ],
            ],
        ],
        'InstanceInfo' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'resourceName' => [ 'type' => 'string', 'locationName' => 'resourceName', ],
                'remark' => [ 'type' => 'string', 'locationName' => 'remark', ],
                'bind' => [ 'type' => 'list', 'member' => [ 'shape' => 'BindInfo', ], ],
            ],
        ],
        'SecurityGroupSimple' => [
            'type' => 'structure',
            'members' => [
                'groupId' => [ 'type' => 'string', 'locationName' => 'groupId', ],
                'groupName' => [ 'type' => 'string', 'locationName' => 'groupName', ],
            ],
        ],
        'InstanceNetworkInterface' => [
            'type' => 'structure',
            'members' => [
                'networkInterfaceId' => [ 'type' => 'string', 'locationName' => 'networkInterfaceId', ],
                'macAddress' => [ 'type' => 'string', 'locationName' => 'macAddress', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'securityGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'SecurityGroupSimple', ], ],
                'sanityCheck' => [ 'type' => 'boolean', 'locationName' => 'sanityCheck', ],
                'primaryIp' =>  [ 'shape' => 'NetworkInterfacePrivateIp', ],
                'secondaryIps' => [ 'type' => 'list', 'member' => [ 'shape' => 'NetworkInterfacePrivateIp', ], ],
                'ipv6Addresses' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ipv6AddressesInfo' => [ 'type' => 'list', 'member' => [ 'shape' => 'NetworkInterfaceIpv6Address', ], ],
            ],
        ],
        'NetworkInterfaceIpv6Address' => [
            'type' => 'structure',
            'members' => [
                'ipv6Id' => [ 'type' => 'string', 'locationName' => 'ipv6Id', ],
                'ipv6Address' => [ 'type' => 'string', 'locationName' => 'ipv6Address', ],
            ],
        ],
        'NetworkInterfacePrivateIp' => [
            'type' => 'structure',
            'members' => [
                'privateIpAddress' => [ 'type' => 'string', 'locationName' => 'privateIpAddress', ],
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
                'elasticIpAddress' => [ 'type' => 'string', 'locationName' => 'elasticIpAddress', ],
            ],
        ],
        'InstanceTypeState' => [
            'type' => 'structure',
            'members' => [
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'inStock' => [ 'type' => 'boolean', 'locationName' => 'inStock', ],
                'online' => [ 'type' => 'boolean', 'locationName' => 'online', ],
            ],
        ],
        'InstanceType' => [
            'type' => 'structure',
            'members' => [
                'family' => [ 'type' => 'string', 'locationName' => 'family', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'cpu' => [ 'type' => 'integer', 'locationName' => 'cpu', ],
                'memoryMB' => [ 'type' => 'integer', 'locationName' => 'memoryMB', ],
                'nicLimit' => [ 'type' => 'integer', 'locationName' => 'nicLimit', ],
                'desc' => [ 'type' => 'string', 'locationName' => 'desc', ],
                'state' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceTypeState', ], ],
                'cloudDiskTypes' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'JDCloudVolumeSource' => [
            'type' => 'structure',
            'members' => [
                'volumeId' => [ 'type' => 'string', 'locationName' => 'volumeId', ],
                'snapshotId' => [ 'type' => 'string', 'locationName' => 'snapshotId', ],
                'diskType' => [ 'type' => 'string', 'locationName' => 'diskType', ],
                'sizeGB' => [ 'type' => 'integer', 'locationName' => 'sizeGB', ],
                'fsType' => [ 'type' => 'string', 'locationName' => 'fsType', ],
                'formatVolume' => [ 'type' => 'boolean', 'locationName' => 'formatVolume', ],
                'iops' => [ 'type' => 'integer', 'locationName' => 'iops', ],
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
            ],
        ],
        'JDCloudVolumeSourceSpec' => [
            'type' => 'structure',
            'members' => [
                'volumeId' => [ 'type' => 'string', 'locationName' => 'volumeId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'snapshotId' => [ 'type' => 'string', 'locationName' => 'snapshotId', ],
                'diskType' => [ 'type' => 'string', 'locationName' => 'diskType', ],
                'sizeGB' => [ 'type' => 'integer', 'locationName' => 'sizeGB', ],
                'fsType' => [ 'type' => 'string', 'locationName' => 'fsType', ],
                'formatVolume' => [ 'type' => 'boolean', 'locationName' => 'formatVolume', ],
                'iops' => [ 'type' => 'integer', 'locationName' => 'iops', ],
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
            ],
        ],
        'LogConfig' => [
            'type' => 'structure',
            'members' => [
                'logDriver' => [ 'type' => 'string', 'locationName' => 'logDriver', ],
            ],
        ],
        'LogConfigSpec' => [
            'type' => 'structure',
            'members' => [
                'logDriver' => [ 'type' => 'string', 'locationName' => 'logDriver', ],
            ],
        ],
        'Logs' => [
            'type' => 'structure',
            'members' => [
                'content' => [ 'type' => 'string', 'locationName' => 'content', ],
            ],
        ],
        'NetworkInterfaceAttachment' => [
            'type' => 'structure',
            'members' => [
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
                'deviceIndex' => [ 'type' => 'integer', 'locationName' => 'deviceIndex', ],
                'attachStatus' => [ 'type' => 'string', 'locationName' => 'attachStatus', ],
                'attachTime' => [ 'type' => 'string', 'locationName' => 'attachTime', ],
                'networkInterface' =>  [ 'shape' => 'InstanceNetworkInterface', ],
            ],
        ],
        'NetworkInterfaceAttachmentSpec' => [
            'type' => 'structure',
            'members' => [
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
                'deviceIndex' => [ 'type' => 'integer', 'locationName' => 'deviceIndex', ],
                'networkInterface' =>  [ 'shape' => 'NetworkInterfaceSpec', ],
            ],
        ],
        'NetworkInterfaceSpec' => [
            'type' => 'structure',
            'members' => [
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'networkInterfaceName' => [ 'type' => 'string', 'locationName' => 'networkInterfaceName', ],
                'primaryIpAddress' => [ 'type' => 'string', 'locationName' => 'primaryIpAddress', ],
                'secondaryIpAddresses' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'secondaryIpCount' => [ 'type' => 'integer', 'locationName' => 'secondaryIpCount', ],
                'securityGroups' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'sanityCheck' => [ 'type' => 'integer', 'locationName' => 'sanityCheck', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'ipv6AddressCount' => [ 'type' => 'integer', 'locationName' => 'ipv6AddressCount', ],
                'ipv6Address' => [ 'type' => 'string', 'locationName' => 'ipv6Address', ],
            ],
        ],
        'Charge' => [
            'type' => 'structure',
            'members' => [
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'chargeStatus' => [ 'type' => 'string', 'locationName' => 'chargeStatus', ],
                'chargeStartTime' => [ 'type' => 'string', 'locationName' => 'chargeStartTime', ],
                'chargeExpiredTime' => [ 'type' => 'string', 'locationName' => 'chargeExpiredTime', ],
                'chargeRetireTime' => [ 'type' => 'string', 'locationName' => 'chargeRetireTime', ],
            ],
        ],
        'Tag' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'value' => [ 'type' => 'string', 'locationName' => 'value', ],
            ],
        ],
        'Pod' => [
            'type' => 'structure',
            'members' => [
                'podId' => [ 'type' => 'string', 'locationName' => 'podId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'hostname' => [ 'type' => 'string', 'locationName' => 'hostname', ],
                'ag' =>  [ 'shape' => 'AvailablityGroup', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'restartPolicy' => [ 'type' => 'string', 'locationName' => 'restartPolicy', ],
                'terminationGracePeriodSeconds' => [ 'type' => 'integer', 'locationName' => 'terminationGracePeriodSeconds', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'privateIpAddress' => [ 'type' => 'string', 'locationName' => 'privateIpAddress', ],
                'dnsConfig' =>  [ 'shape' => 'DnsConfig', ],
                'logConfig' =>  [ 'shape' => 'LogConfig', ],
                'hostAliases' => [ 'type' => 'list', 'member' => [ 'shape' => 'HostAlias', ], ],
                'volumes' => [ 'type' => 'list', 'member' => [ 'shape' => 'Volume', ], ],
                'containers' => [ 'type' => 'list', 'member' => [ 'shape' => 'Container', ], ],
                'podStatus' =>  [ 'shape' => 'PodStatus', ],
                'elasticIp' =>  [ 'shape' => 'ElasticIp', ],
                'primaryNetworkInterface' =>  [ 'shape' => 'NetworkInterfaceAttachment', ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'charge' =>  [ 'shape' => 'Charge', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
            ],
        ],
        'Volume' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'jdcloudDisk' =>  [ 'shape' => 'JDCloudVolumeSource', ],
                'cfs' =>  [ 'shape' => 'CFSVolumeSource', ],
                'configFile' =>  [ 'shape' => 'ConfigFileVolumeSource', ],
                'emptyDir' =>  [ 'shape' => 'EmptyDirVolumeSource', ],
            ],
        ],
        'PodBrief' => [
            'type' => 'structure',
            'members' => [
                'podId' => [ 'type' => 'string', 'locationName' => 'podId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'hostname' => [ 'type' => 'string', 'locationName' => 'hostname', ],
                'ag' =>  [ 'shape' => 'AvailablityGroup', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'restartPolicy' => [ 'type' => 'string', 'locationName' => 'restartPolicy', ],
                'terminationGracePeriodSeconds' => [ 'type' => 'integer', 'locationName' => 'terminationGracePeriodSeconds', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'privateIpAddress' => [ 'type' => 'string', 'locationName' => 'privateIpAddress', ],
                'dnsConfig' =>  [ 'shape' => 'DnsConfig', ],
                'logConfig' =>  [ 'shape' => 'LogConfig', ],
                'hostAliases' => [ 'type' => 'list', 'member' => [ 'shape' => 'HostAlias', ], ],
                'podStatus' =>  [ 'shape' => 'PodStatus', ],
                'primaryNetworkInterface' =>  [ 'shape' => 'NetworkInterfaceAttachment', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
            ],
        ],
        'PodSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'hostname' => [ 'type' => 'string', 'locationName' => 'hostname', ],
                'restartPolicy' => [ 'type' => 'string', 'locationName' => 'restartPolicy', ],
                'terminationGracePeriodSeconds' => [ 'type' => 'integer', 'locationName' => 'terminationGracePeriodSeconds', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'az' => [ 'type' => 'string', 'locationName' => 'az', ],
                'agId' => [ 'type' => 'string', 'locationName' => 'agId', ],
                'dnsConfig' =>  [ 'shape' => 'DnsConfigSpec', ],
                'logConfig' =>  [ 'shape' => 'LogConfigSpec', ],
                'hostAliases' => [ 'type' => 'list', 'member' => [ 'shape' => 'HostAliasSpec', ], ],
                'volumes' => [ 'type' => 'list', 'member' => [ 'shape' => 'VolumeSpec', ], ],
                'containers' => [ 'type' => 'list', 'member' => [ 'shape' => 'ContainerSpec', ], ],
                'charge' =>  [ 'shape' => 'ChargeSpec', ],
                'elasticIp' =>  [ 'shape' => 'ElasticIpSpec', ],
                'primaryNetworkInterface' =>  [ 'shape' => 'NetworkInterfaceAttachmentSpec', ],
                'secondaryNetworkInterfaces' => [ 'type' => 'list', 'member' => [ 'shape' => 'NetworkInterfaceAttachmentSpec', ], ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'resourceGroupId' => [ 'type' => 'string', 'locationName' => 'resourceGroupId', ],
                'autoMatchImageCache' => [ 'type' => 'boolean', 'locationName' => 'autoMatchImageCache', ],
                'autoCreateImageCache' => [ 'type' => 'boolean', 'locationName' => 'autoCreateImageCache', ],
            ],
        ],
        'VolumeSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'jdcloudDisk' =>  [ 'shape' => 'JDCloudVolumeSourceSpec', ],
                'cfs' =>  [ 'shape' => 'CFSVolumeSourceSpec', ],
                'configFile' =>  [ 'shape' => 'ConfigFileVolumeSourceSpec', ],
                'emptyDir' =>  [ 'shape' => 'EmptyDirVolumeSourceSpec', ],
            ],
        ],
        'PodTemplateNetworkInterfaceAttachment' => [
            'type' => 'structure',
            'members' => [
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
                'networkInterface' =>  [ 'shape' => 'PodTemplateNetworkInterface', ],
            ],
        ],
        'PodTemplateElasticIp' => [
            'type' => 'structure',
            'members' => [
                'bandwidthMbps' => [ 'type' => 'integer', 'locationName' => 'bandwidthMbps', ],
                'provider' => [ 'type' => 'string', 'locationName' => 'provider', ],
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
            ],
        ],
        'PodTemplateData' => [
            'type' => 'structure',
            'members' => [
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'restartPolicy' => [ 'type' => 'string', 'locationName' => 'restartPolicy', ],
                'terminationGracePeriodSeconds' => [ 'type' => 'integer', 'locationName' => 'terminationGracePeriodSeconds', ],
                'dnsConfig' =>  [ 'shape' => 'DnsConfig', ],
                'logConfig' =>  [ 'shape' => 'LogConfig', ],
                'hostAliases' => [ 'type' => 'list', 'member' => [ 'shape' => 'HostAlias', ], ],
                'containers' => [ 'type' => 'list', 'member' => [ 'shape' => 'PodTemplateContainer', ], ],
                'elasticIp' =>  [ 'shape' => 'PodTemplateElasticIp', ],
                'volumes' => [ 'type' => 'list', 'member' => [ 'shape' => 'PodTemplateVolume', ], ],
                'primaryNetworkInterface' =>  [ 'shape' => 'PodTemplateNetworkInterfaceAttachment', ],
                'secondaryNetworkInterfaces' => [ 'type' => 'list', 'member' => [ 'shape' => 'PodTemplateNetworkInterfaceAttachment', ], ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
            ],
        ],
        'PodTemplate' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'string', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'podTemplateData' =>  [ 'shape' => 'PodTemplateData', ],
                'ags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Ag', ], ],
                'createdTime' => [ 'type' => 'string', 'locationName' => 'createdTime', ],
            ],
        ],
        'PodTemplateNetworkInterface' => [
            'type' => 'structure',
            'members' => [
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'securityGroups' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ipv6AddressCount' => [ 'type' => 'integer', 'locationName' => 'ipv6AddressCount', ],
            ],
        ],
        'PodTemplateVolume' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'jdcloudDisk' =>  [ 'shape' => 'PodTemplateCloudDisk', ],
            ],
        ],
        'PodTemplateCloudDisk' => [
            'type' => 'structure',
            'members' => [
                'snapshotId' => [ 'type' => 'string', 'locationName' => 'snapshotId', ],
                'diskType' => [ 'type' => 'string', 'locationName' => 'diskType', ],
                'sizeGB' => [ 'type' => 'integer', 'locationName' => 'sizeGB', ],
                'fsType' => [ 'type' => 'string', 'locationName' => 'fsType', ],
                'iops' => [ 'type' => 'integer', 'locationName' => 'iops', ],
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
            ],
        ],
        'PodTemplateContainer' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'command' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'args' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'env' => [ 'type' => 'list', 'member' => [ 'shape' => 'Env', ], ],
                'image' => [ 'type' => 'string', 'locationName' => 'image', ],
                'secret' => [ 'type' => 'string', 'locationName' => 'secret', ],
                'imageCacheId' => [ 'type' => 'string', 'locationName' => 'imageCacheId', ],
                'tty' => [ 'type' => 'boolean', 'locationName' => 'tty', ],
                'workingDir' => [ 'type' => 'string', 'locationName' => 'workingDir', ],
                'livenessProbe' =>  [ 'shape' => 'Probe', ],
                'readinessProbe' =>  [ 'shape' => 'Probe', ],
                'resources' =>  [ 'shape' => 'ResourceRequests', ],
                'systemDisk' =>  [ 'shape' => 'PodTemplateCloudDisk', ],
                'volumeMounts' => [ 'type' => 'list', 'member' => [ 'shape' => 'VolumeMount', ], ],
            ],
        ],
        'PodTemplateCloudDiskSpec' => [
            'type' => 'structure',
            'members' => [
                'snapshotId' => [ 'type' => 'string', 'locationName' => 'snapshotId', ],
                'diskType' => [ 'type' => 'string', 'locationName' => 'diskType', ],
                'sizeGB' => [ 'type' => 'integer', 'locationName' => 'sizeGB', ],
                'fsType' => [ 'type' => 'string', 'locationName' => 'fsType', ],
                'iops' => [ 'type' => 'integer', 'locationName' => 'iops', ],
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
            ],
        ],
        'PodTemplateContainerSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'command' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'args' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'env' => [ 'type' => 'list', 'member' => [ 'shape' => 'EnvSpec', ], ],
                'image' => [ 'type' => 'string', 'locationName' => 'image', ],
                'secret' => [ 'type' => 'string', 'locationName' => 'secret', ],
                'imageCacheId' => [ 'type' => 'string', 'locationName' => 'imageCacheId', ],
                'tty' => [ 'type' => 'boolean', 'locationName' => 'tty', ],
                'workingDir' => [ 'type' => 'string', 'locationName' => 'workingDir', ],
                'livenessProbe' =>  [ 'shape' => 'ProbeSpec', ],
                'readinessProbe' =>  [ 'shape' => 'ProbeSpec', ],
                'resources' =>  [ 'shape' => 'ResourceRequestsSpec', ],
                'systemDisk' =>  [ 'shape' => 'PodTemplateCloudDiskSpec', ],
                'volumeMounts' => [ 'type' => 'list', 'member' => [ 'shape' => 'VolumeMountSpec', ], ],
            ],
        ],
        'PodTemplateElasticIpSpec' => [
            'type' => 'structure',
            'members' => [
                'bandwidthMbps' => [ 'type' => 'integer', 'locationName' => 'bandwidthMbps', ],
                'provider' => [ 'type' => 'string', 'locationName' => 'provider', ],
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
            ],
        ],
        'PodTemplateNetworkInterfaceSpec' => [
            'type' => 'structure',
            'members' => [
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'securityGroups' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'ipv6AddressCount' => [ 'type' => 'integer', 'locationName' => 'ipv6AddressCount', ],
            ],
        ],
        'PodTemplateNetworkInterfaceAttachmentSpec' => [
            'type' => 'structure',
            'members' => [
                'autoDelete' => [ 'type' => 'boolean', 'locationName' => 'autoDelete', ],
                'networkInterface' =>  [ 'shape' => 'PodTemplateNetworkInterfaceSpec', ],
            ],
        ],
        'PodTemplateSpec' => [
            'type' => 'structure',
            'members' => [
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'restartPolicy' => [ 'type' => 'string', 'locationName' => 'restartPolicy', ],
                'terminationGracePeriodSeconds' => [ 'type' => 'integer', 'locationName' => 'terminationGracePeriodSeconds', ],
                'dnsConfig' =>  [ 'shape' => 'DnsConfigSpec', ],
                'logConfig' =>  [ 'shape' => 'LogConfigSpec', ],
                'hostAliases' => [ 'type' => 'list', 'member' => [ 'shape' => 'HostAliasSpec', ], ],
                'volumes' => [ 'type' => 'list', 'member' => [ 'shape' => 'PodTemplateVolumeSpec', ], ],
                'containers' => [ 'type' => 'list', 'member' => [ 'shape' => 'PodTemplateContainerSpec', ], ],
                'elasticIp' =>  [ 'shape' => 'PodTemplateElasticIpSpec', ],
                'primaryNetworkInterface' =>  [ 'shape' => 'PodTemplateNetworkInterfaceAttachmentSpec', ],
                'secondaryNetworkInterfaces' => [ 'type' => 'list', 'member' => [ 'shape' => 'PodTemplateNetworkInterfaceAttachmentSpec', ], ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
            ],
        ],
        'PodTemplateVolumeSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'jdcloudDisk' =>  [ 'shape' => 'PodTemplateCloudDiskSpec', ],
            ],
        ],
        'Quota' => [
            'type' => 'structure',
            'members' => [
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'limit' => [ 'type' => 'integer', 'locationName' => 'limit', ],
                'used' => [ 'type' => 'integer', 'locationName' => 'used', ],
            ],
        ],
        'RebuildContainerSpec' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'command' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'args' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'env' => [ 'type' => 'list', 'member' => [ 'shape' => 'EnvSpec', ], ],
                'image' => [ 'type' => 'string', 'locationName' => 'image', ],
                'secret' => [ 'type' => 'string', 'locationName' => 'secret', ],
                'tty' => [ 'type' => 'boolean', 'locationName' => 'tty', ],
                'workingDir' => [ 'type' => 'string', 'locationName' => 'workingDir', ],
                'livenessProbe' =>  [ 'shape' => 'ProbeSpec', ],
                'readinessProbe' =>  [ 'shape' => 'ProbeSpec', ],
                'volumeMounts' => [ 'type' => 'list', 'member' => [ 'shape' => 'VolumeMountSpec', ], ],
            ],
        ],
        'Secret' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'createdAt' => [ 'type' => 'string', 'locationName' => 'createdAt', ],
                'data' =>  [ 'shape' => 'DockerRegistryData', ],
            ],
        ],
        'TagFilter' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'UpdatePodTemplateSpec' => [
            'type' => 'structure',
            'members' => [
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'restartPolicy' => [ 'type' => 'string', 'locationName' => 'restartPolicy', ],
                'terminationGracePeriodSeconds' => [ 'type' => 'integer', 'locationName' => 'terminationGracePeriodSeconds', ],
                'dnsConfig' =>  [ 'shape' => 'DnsConfigSpec', ],
                'logConfig' =>  [ 'shape' => 'LogConfigSpec', ],
                'hostAliases' => [ 'type' => 'list', 'member' => [ 'shape' => 'HostAliasSpec', ], ],
                'volumes' => [ 'type' => 'list', 'member' => [ 'shape' => 'PodTemplateVolumeSpec', ], ],
                'containers' => [ 'type' => 'list', 'member' => [ 'shape' => 'PodTemplateContainerSpec', ], ],
                'elasticIp' =>  [ 'shape' => 'PodTemplateElasticIpSpec', ],
                'noElasticIp' => [ 'type' => 'boolean', 'locationName' => 'noElasticIp', ],
                'primaryNetworkInterface' =>  [ 'shape' => 'PodTemplateNetworkInterfaceAttachmentSpec', ],
                'secondaryNetworkInterfaces' => [ 'type' => 'list', 'member' => [ 'shape' => 'PodTemplateNetworkInterfaceAttachmentSpec', ], ],
                'userTags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
                'removeUserTags' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'UserConfigure' => [
            'type' => 'structure',
            'members' => [
                'pin' => [ 'type' => 'string', 'locationName' => 'pin', ],
                'localDiskSize' => [ 'type' => 'integer', 'locationName' => 'localDiskSize', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'string', 'locationName' => 'updateTime', ],
                'status' => [ 'type' => 'integer', 'locationName' => 'status', ],
            ],
        ],
        'Status' => [
            'type' => 'structure',
            'members' => [
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'validity' => [ 'type' => 'boolean', 'locationName' => 'validity', ],
            ],
        ],
        'CreateConfigFileRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConfigFileData', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'UpdateConfigFileResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateConfigFileResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateConfigFileResultShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'DescribeConfigFileResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeConfigFileResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateConfigFileRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConfigFileData', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateConfigFileResultShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'DescribeConfigFileResultShape' => [
            'type' => 'structure',
            'members' => [
                'configFile' =>  [ 'shape' => 'ConfigFile', ],
            ],
        ],
        'CreateConfigFileResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateConfigFileResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteConfigFileResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeConfigFileRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'DeleteConfigFileResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteConfigFileRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'AttachResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ResizeTTYRequestShape' => [
            'type' => 'structure',
            'members' => [
                'height' => [ 'type' => 'integer', 'locationName' => 'height', ],
                'width' => [ 'type' => 'integer', 'locationName' => 'width', ],
                'execId' => [ 'type' => 'string', 'locationName' => 'execId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'podId' => [ 'type' => 'string', 'locationName' => 'podId', ],
                'containerName' => [ 'type' => 'string', 'locationName' => 'containerName', ],
            ],
        ],
        'ExecStartResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ExecGetExitCodeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ExecGetExitCodeResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ExecStartRequestShape' => [
            'type' => 'structure',
            'members' => [
                'execId' => [ 'type' => 'string', 'locationName' => 'execId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'podId' => [ 'type' => 'string', 'locationName' => 'podId', ],
                'containerName' => [ 'type' => 'string', 'locationName' => 'containerName', ],
            ],
        ],
        'ExecCreateResultShape' => [
            'type' => 'structure',
            'members' => [
                'execId' => [ 'type' => 'string', 'locationName' => 'execId', ],
            ],
        ],
        'ExecGetExitCodeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'execId' => [ 'type' => 'string', 'locationName' => 'execId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'podId' => [ 'type' => 'string', 'locationName' => 'podId', ],
                'containerName' => [ 'type' => 'string', 'locationName' => 'containerName', ],
            ],
        ],
        'ResizeTTYResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeContainerRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'podId' => [ 'type' => 'string', 'locationName' => 'podId', ],
                'containerName' => [ 'type' => 'string', 'locationName' => 'containerName', ],
            ],
        ],
        'ExecStartResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ExecCreateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'command' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'tty' => [ 'type' => 'boolean', 'locationName' => 'tty', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'podId' => [ 'type' => 'string', 'locationName' => 'podId', ],
                'containerName' => [ 'type' => 'string', 'locationName' => 'containerName', ],
            ],
        ],
        'ExecGetExitCodeResultShape' => [
            'type' => 'structure',
            'members' => [
                'execCode' => [ 'type' => 'integer', 'locationName' => 'execCode', ],
            ],
        ],
        'DescribeContainerResultShape' => [
            'type' => 'structure',
            'members' => [
                'container' =>  [ 'shape' => 'Container', ],
            ],
        ],
        'ExecCreateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'ExecCreateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ResizeTTYResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeContainerResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeContainerResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'AttachRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'podId' => [ 'type' => 'string', 'locationName' => 'podId', ],
                'containerName' => [ 'type' => 'string', 'locationName' => 'containerName', ],
            ],
        ],
        'AttachResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'Filter' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'operator' => [ 'type' => 'string', 'locationName' => 'operator', ],
                'values' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'UpdateImageCacheRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'retentionDays' => [ 'type' => 'integer', 'locationName' => 'retentionDays', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'imageCacheId' => [ 'type' => 'string', 'locationName' => 'imageCacheId', ],
            ],
        ],
        'DescribeImageCachesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeImageCacheResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeImageCacheResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetMostSuitableImageCacheRequestShape' => [
            'type' => 'structure',
            'members' => [
                'image' => [ 'type' => 'string', 'locationName' => 'image', ],
                'secret' => [ 'type' => 'string', 'locationName' => 'secret', ],
                'size' => [ 'type' => 'integer', 'locationName' => 'size', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeImageCachesResultShape' => [
            'type' => 'structure',
            'members' => [
                'imageCaches' => [ 'type' => 'list', 'member' => [ 'shape' => 'ImageCache', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'CreateImageCachesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'imageCacheSpecs' => [ 'type' => 'list', 'member' => [ 'shape' => 'ImageCacheSpec', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateImageCacheRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'imageCacheSpec' =>  [ 'shape' => 'ImageCacheSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateImageCachesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateImageCachesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetMostSuitableImageCacheResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetMostSuitableImageCacheResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteImageCacheResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'UpdateImageCacheResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateImageCachesResultShape' => [
            'type' => 'structure',
            'members' => [
                'imageCacheId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'GetMostSuitableImageCacheResultShape' => [
            'type' => 'structure',
            'members' => [
                'found' => [ 'type' => 'boolean', 'locationName' => 'found', ],
                'imageCache' =>  [ 'shape' => 'ImageCache', ],
            ],
        ],
        'DeleteImageCacheRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'imageCacheId' => [ 'type' => 'string', 'locationName' => 'imageCacheId', ],
            ],
        ],
        'DescribeImageCachesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeImageCachesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeImageCacheRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'imageCacheId' => [ 'type' => 'string', 'locationName' => 'imageCacheId', ],
            ],
        ],
        'DescribeImageCacheResultShape' => [
            'type' => 'structure',
            'members' => [
                'imageCache' =>  [ 'shape' => 'ImageCache', ],
            ],
        ],
        'UpdateImageCacheResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateImageCacheResultShape' => [
            'type' => 'structure',
            'members' => [
                'imageCacheId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DeleteImageCacheResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateImageCacheResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateImageCacheResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceTypesResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceTypes' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceType', ], ],
                'specificInstanceTypes' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceType', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeInstanceTypesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeInstanceTypesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeInstanceTypesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribePodRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'podId' => [ 'type' => 'string', 'locationName' => 'podId', ],
            ],
        ],
        'DisassociateElasticIpRequestShape' => [
            'type' => 'structure',
            'members' => [
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'podId' => [ 'type' => 'string', 'locationName' => 'podId', ],
            ],
        ],
        'CheckPodNameResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CheckPodNameResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RebuildPodRequestShape' => [
            'type' => 'structure',
            'members' => [
                'containers' => [ 'type' => 'list', 'member' => [ 'shape' => 'RebuildContainerSpec', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'podId' => [ 'type' => 'string', 'locationName' => 'podId', ],
            ],
        ],
        'RebuildPodResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribePodsResultShape' => [
            'type' => 'structure',
            'members' => [
                'pods' => [ 'type' => 'list', 'member' => [ 'shape' => 'Pod', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'GetContainerLogsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'tailLines' => [ 'type' => 'integer', 'locationName' => 'tailLines', ],
                'sinceSeconds' => [ 'type' => 'integer', 'locationName' => 'sinceSeconds', ],
                'limitBytes' => [ 'type' => 'integer', 'locationName' => 'limitBytes', ],
                'startTime' => [ 'type' => 'string', 'locationName' => 'startTime', ],
                'endTime' => [ 'type' => 'string', 'locationName' => 'endTime', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'podId' => [ 'type' => 'string', 'locationName' => 'podId', ],
                'containerName' => [ 'type' => 'string', 'locationName' => 'containerName', ],
            ],
        ],
        'DescribePodsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribePodsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'RebuildPodResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetContainerLogsResultShape' => [
            'type' => 'structure',
            'members' => [
                'logs' =>  [ 'shape' => 'Logs', ],
            ],
        ],
        'ResizePodRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'containerResources' => [ 'type' => 'list', 'member' => [ 'shape' => 'ContainerResourceSpec', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'podId' => [ 'type' => 'string', 'locationName' => 'podId', ],
            ],
        ],
        'CheckPodNameResultShape' => [
            'type' => 'structure',
            'members' => [
                'code' => [ 'type' => 'integer', 'locationName' => 'code', ],
                'reason' => [ 'type' => 'string', 'locationName' => 'reason', ],
            ],
        ],
        'StopPodResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DisassociateElasticIpResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'StopPodResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeletePodRequestShape' => [
            'type' => 'structure',
            'members' => [
                'deletePrimaryNetworkInterfaceAllElasticIp' => [ 'type' => 'boolean', 'locationName' => 'deletePrimaryNetworkInterfaceAllElasticIp', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'podId' => [ 'type' => 'string', 'locationName' => 'podId', ],
            ],
        ],
        'AssociateElasticIpRequestShape' => [
            'type' => 'structure',
            'members' => [
                'elasticIpId' => [ 'type' => 'string', 'locationName' => 'elasticIpId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'podId' => [ 'type' => 'string', 'locationName' => 'podId', ],
            ],
        ],
        'DescribePodsStatusResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribePodsStatusResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeletePodResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyPodAttributeResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ResizePodResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ModifyPodAttributeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'AssociateElasticIpResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribePodResultShape' => [
            'type' => 'structure',
            'members' => [
                'pod' =>  [ 'shape' => 'Pod', ],
            ],
        ],
        'DisassociateElasticIpResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CheckPodNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'podName' => [ 'type' => 'string', 'locationName' => 'podName', ],
                'maxCount' => [ 'type' => 'integer', 'locationName' => 'maxCount', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'ModifyPodAttributeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'podId' => [ 'type' => 'string', 'locationName' => 'podId', ],
            ],
        ],
        'DescribePodsStatusResultShape' => [
            'type' => 'structure',
            'members' => [
                'podsStatus' => [ 'type' => 'list', 'member' => [ 'shape' => 'BriefPodStatus', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribePodsStatusRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribePodResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribePodResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreatePodsResultShape' => [
            'type' => 'structure',
            'members' => [
                'podIds' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'AssociateElasticIpResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'StartPodResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreatePodsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'podSpec' =>  [ 'shape' => 'PodSpec', ],
                'maxCount' => [ 'type' => 'integer', 'locationName' => 'maxCount', ],
                'clientToken' => [ 'type' => 'string', 'locationName' => 'clientToken', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribePodsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetContainerLogsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetContainerLogsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeletePodResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreatePodsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreatePodsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'ResizePodResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'StartPodRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'podId' => [ 'type' => 'string', 'locationName' => 'podId', ],
            ],
        ],
        'StartPodResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'StopPodRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'podId' => [ 'type' => 'string', 'locationName' => 'podId', ],
            ],
        ],
        'DescribePodTemplatesResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribePodTemplatesResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreatePodTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'podTemplateId' => [ 'type' => 'string', 'locationName' => 'podTemplateId', ],
            ],
        ],
        'DeletePodTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'VerifyPodTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribePodTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'podTemplateId' => [ 'type' => 'string', 'locationName' => 'podTemplateId', ],
            ],
        ],
        'CreatePodTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreatePodTemplateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdatePodTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeletePodTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'podTemplateId' => [ 'type' => 'string', 'locationName' => 'podTemplateId', ],
            ],
        ],
        'UpdatePodTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'podTemplateSpec' =>  [ 'shape' => 'UpdatePodTemplateSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'podTemplateId' => [ 'type' => 'string', 'locationName' => 'podTemplateId', ],
            ],
        ],
        'VerifyPodTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'podTemplateId' => [ 'type' => 'string', 'locationName' => 'podTemplateId', ],
            ],
        ],
        'UpdatePodTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribePodTemplateResultShape' => [
            'type' => 'structure',
            'members' => [
                'podTemplate' =>  [ 'shape' => 'PodTemplate', ],
            ],
        ],
        'DescribePodTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribePodTemplateResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribePodTemplatesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribePodTemplatesResultShape' => [
            'type' => 'structure',
            'members' => [
                'podTemplates' => [ 'type' => 'list', 'member' => [ 'shape' => 'PodTemplate', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'VerifyPodTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreatePodTemplateRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'podTemplateSpec' =>  [ 'shape' => 'PodTemplateSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeletePodTemplateResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeQuotaResultShape' => [
            'type' => 'structure',
            'members' => [
                'quota' =>  [ 'shape' => 'Quota', ],
            ],
        ],
        'DescribeQuotaRequestShape' => [
            'type' => 'structure',
            'members' => [
                'resourceType' => [ 'type' => 'string', 'locationName' => 'resourceType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeQuotaResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeQuotaResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteSecretResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeSecretsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSecretsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateSecretResultShape' => [
            'type' => 'structure',
            'members' => [
                'secretName' => [ 'type' => 'string', 'locationName' => 'secretName', ],
            ],
        ],
        'DescribeSecretsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeSecretsResultShape' => [
            'type' => 'structure',
            'members' => [
                'secrets' => [ 'type' => 'list', 'member' => [ 'shape' => 'Secret', ], ],
                'totalCount' => [ 'type' => 'double', 'locationName' => 'totalCount', ],
            ],
        ],
        'DescribeSecretResultShape' => [
            'type' => 'structure',
            'members' => [
                'secret' =>  [ 'shape' => 'Secret', ],
            ],
        ],
        'DeleteSecretRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
        'DescribeSecretResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DescribeSecretResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DeleteSecretResponseShape' => [
            'type' => 'structure',
            'members' => [
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'CreateSecretRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'secretType' => [ 'type' => 'string', 'locationName' => 'secretType', ],
                'data' =>  [ 'shape' => 'DockerRegistryData', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateSecretResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateSecretResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'DescribeSecretRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
            ],
        ],
    ],
];
