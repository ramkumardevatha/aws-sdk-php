<?php
return [
  'metadata' =>
  [
    'apiVersion' => '2006-03-01',
    'checksumFormat' => 'md5',
    'endpointPrefix' => 's3',
    'globalEndpoint' => 's3.amazonaws.com',
    'serviceAbbreviation' => 'Amazon S3',
    'serviceFullName' => 'Amazon Simple Storage Service',
    'signatureVersion' => 's3',
    'timestampFormat' => 'rfc822',
    'protocol' => 'rest-xml',
  ],
  'operations' =>
  [
    'AbortMultipartUpload' =>
    [
      'name' => 'AbortMultipartUpload',
      'http' =>
      [
        'method' => 'DELETE',
        'requestUri' => '/{Bucket}/{Key+}',
      ],
      'input' =>
      [
        'shape' => 'AbortMultipartUploadRequest',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'NoSuchUpload',
          'exception' => true,
        ],
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/mpUploadAbort.html',
    ],
    'CompleteMultipartUpload' =>
    [
      'name' => 'CompleteMultipartUpload',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/{Bucket}/{Key+}',
      ],
      'input' =>
      [
        'shape' => 'CompleteMultipartUploadRequest',
      ],
      'output' =>
      [
        'shape' => 'CompleteMultipartUploadOutput',
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/mpUploadComplete.html',
    ],
    'CopyObject' =>
    [
      'name' => 'CopyObject',
      'http' =>
      [
        'method' => 'PUT',
        'requestUri' => '/{Bucket}/{Key+}',
      ],
      'input' =>
      [
        'shape' => 'CopyObjectRequest',
      ],
      'output' =>
      [
        'shape' => 'CopyObjectOutput',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'ObjectNotInActiveTierError',
          'exception' => true,
        ],
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTObjectCOPY.html',
      'alias' => 'PutObjectCopy',
    ],
    'CreateBucket' =>
    [
      'name' => 'CreateBucket',
      'http' =>
      [
        'method' => 'PUT',
        'requestUri' => '/{Bucket}',
      ],
      'input' =>
      [
        'shape' => 'CreateBucketRequest',
      ],
      'output' =>
      [
        'shape' => 'CreateBucketOutput',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'BucketAlreadyExists',
          'exception' => true,
        ],
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketPUT.html',
      'alias' => 'PutBucket',
    ],
    'CreateMultipartUpload' =>
    [
      'name' => 'CreateMultipartUpload',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/{Bucket}/{Key+}?uploads',
      ],
      'input' =>
      [
        'shape' => 'CreateMultipartUploadRequest',
      ],
      'output' =>
      [
        'shape' => 'CreateMultipartUploadOutput',
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/mpUploadInitiate.html',
      'alias' => 'InitiateMultipartUpload',
    ],
    'DeleteBucket' =>
    [
      'name' => 'DeleteBucket',
      'http' =>
      [
        'method' => 'DELETE',
        'requestUri' => '/{Bucket}',
      ],
      'input' =>
      [
        'shape' => 'DeleteBucketRequest',
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketDELETE.html',
    ],
    'DeleteBucketCors' =>
    [
      'name' => 'DeleteBucketCors',
      'http' =>
      [
        'method' => 'DELETE',
        'requestUri' => '/{Bucket}?cors',
      ],
      'input' =>
      [
        'shape' => 'DeleteBucketCorsRequest',
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketDELETEcors.html',
    ],
    'DeleteBucketLifecycle' =>
    [
      'name' => 'DeleteBucketLifecycle',
      'http' =>
      [
        'method' => 'DELETE',
        'requestUri' => '/{Bucket}?lifecycle',
      ],
      'input' =>
      [
        'shape' => 'DeleteBucketLifecycleRequest',
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketDELETElifecycle.html',
    ],
    'DeleteBucketPolicy' =>
    [
      'name' => 'DeleteBucketPolicy',
      'http' =>
      [
        'method' => 'DELETE',
        'requestUri' => '/{Bucket}?policy',
      ],
      'input' =>
      [
        'shape' => 'DeleteBucketPolicyRequest',
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketDELETEpolicy.html',
    ],
    'DeleteBucketTagging' =>
    [
      'name' => 'DeleteBucketTagging',
      'http' =>
      [
        'method' => 'DELETE',
        'requestUri' => '/{Bucket}?tagging',
      ],
      'input' =>
      [
        'shape' => 'DeleteBucketTaggingRequest',
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketDELETEtagging.html',
    ],
    'DeleteBucketWebsite' =>
    [
      'name' => 'DeleteBucketWebsite',
      'http' =>
      [
        'method' => 'DELETE',
        'requestUri' => '/{Bucket}?website',
      ],
      'input' =>
      [
        'shape' => 'DeleteBucketWebsiteRequest',
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketDELETEwebsite.html',
    ],
    'DeleteObject' =>
    [
      'name' => 'DeleteObject',
      'http' =>
      [
        'method' => 'DELETE',
        'requestUri' => '/{Bucket}/{Key+}',
      ],
      'input' =>
      [
        'shape' => 'DeleteObjectRequest',
      ],
      'output' =>
      [
        'shape' => 'DeleteObjectOutput',
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTObjectDELETE.html',
    ],
    'DeleteObjects' =>
    [
      'name' => 'DeleteObjects',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/{Bucket}?delete',
      ],
      'input' =>
      [
        'shape' => 'DeleteObjectsRequest',
      ],
      'output' =>
      [
        'shape' => 'DeleteObjectsOutput',
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/multiobjectdeleteapi.html',
      'alias' => 'DeleteMultipleObjects',
    ],
    'GetBucketAcl' =>
    [
      'name' => 'GetBucketAcl',
      'http' =>
      [
        'method' => 'GET',
        'requestUri' => '/{Bucket}?acl',
      ],
      'input' =>
      [
        'shape' => 'GetBucketAclRequest',
      ],
      'output' =>
      [
        'shape' => 'GetBucketAclOutput',
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketGETacl.html',
    ],
    'GetBucketCors' =>
    [
      'name' => 'GetBucketCors',
      'http' =>
      [
        'method' => 'GET',
        'requestUri' => '/{Bucket}?cors',
      ],
      'input' =>
      [
        'shape' => 'GetBucketCorsRequest',
      ],
      'output' =>
      [
        'shape' => 'GetBucketCorsOutput',
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketGETcors.html',
    ],
    'GetBucketLifecycle' =>
    [
      'name' => 'GetBucketLifecycle',
      'http' =>
      [
        'method' => 'GET',
        'requestUri' => '/{Bucket}?lifecycle',
      ],
      'input' =>
      [
        'shape' => 'GetBucketLifecycleRequest',
      ],
      'output' =>
      [
        'shape' => 'GetBucketLifecycleOutput',
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketGETlifecycle.html',
    ],
    'GetBucketLocation' =>
    [
      'name' => 'GetBucketLocation',
      'http' =>
      [
        'method' => 'GET',
        'requestUri' => '/{Bucket}?location',
      ],
      'input' =>
      [
        'shape' => 'GetBucketLocationRequest',
      ],
      'output' =>
      [
        'shape' => 'GetBucketLocationOutput',
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketGETlocation.html',
    ],
    'GetBucketLogging' =>
    [
      'name' => 'GetBucketLogging',
      'http' =>
      [
        'method' => 'GET',
        'requestUri' => '/{Bucket}?logging',
      ],
      'input' =>
      [
        'shape' => 'GetBucketLoggingRequest',
      ],
      'output' =>
      [
        'shape' => 'GetBucketLoggingOutput',
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketGETlogging.html',
    ],
    'GetBucketNotification' =>
    [
      'name' => 'GetBucketNotification',
      'http' =>
      [
        'method' => 'GET',
        'requestUri' => '/{Bucket}?notification',
      ],
      'input' =>
      [
        'shape' => 'GetBucketNotificationRequest',
      ],
      'output' =>
      [
        'shape' => 'GetBucketNotificationOutput',
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketGETnotification.html',
    ],
    'GetBucketPolicy' =>
    [
      'name' => 'GetBucketPolicy',
      'http' =>
      [
        'method' => 'GET',
        'requestUri' => '/{Bucket}?policy',
      ],
      'input' =>
      [
        'shape' => 'GetBucketPolicyRequest',
      ],
      'output' =>
      [
        'shape' => 'GetBucketPolicyOutput',
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketGETpolicy.html',
    ],
    'GetBucketRequestPayment' =>
    [
      'name' => 'GetBucketRequestPayment',
      'http' =>
      [
        'method' => 'GET',
        'requestUri' => '/{Bucket}?requestPayment',
      ],
      'input' =>
      [
        'shape' => 'GetBucketRequestPaymentRequest',
      ],
      'output' =>
      [
        'shape' => 'GetBucketRequestPaymentOutput',
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTrequestPaymentGET.html',
    ],
    'GetBucketTagging' =>
    [
      'name' => 'GetBucketTagging',
      'http' =>
      [
        'method' => 'GET',
        'requestUri' => '/{Bucket}?tagging',
      ],
      'input' =>
      [
        'shape' => 'GetBucketTaggingRequest',
      ],
      'output' =>
      [
        'shape' => 'GetBucketTaggingOutput',
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketGETtagging.html',
    ],
    'GetBucketVersioning' =>
    [
      'name' => 'GetBucketVersioning',
      'http' =>
      [
        'method' => 'GET',
        'requestUri' => '/{Bucket}?versioning',
      ],
      'input' =>
      [
        'shape' => 'GetBucketVersioningRequest',
      ],
      'output' =>
      [
        'shape' => 'GetBucketVersioningOutput',
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketGETversioningStatus.html',
    ],
    'GetBucketWebsite' =>
    [
      'name' => 'GetBucketWebsite',
      'http' =>
      [
        'method' => 'GET',
        'requestUri' => '/{Bucket}?website',
      ],
      'input' =>
      [
        'shape' => 'GetBucketWebsiteRequest',
      ],
      'output' =>
      [
        'shape' => 'GetBucketWebsiteOutput',
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketGETwebsite.html',
    ],
    'GetObject' =>
    [
      'name' => 'GetObject',
      'http' =>
      [
        'method' => 'GET',
        'requestUri' => '/{Bucket}/{Key+}',
      ],
      'input' =>
      [
        'shape' => 'GetObjectRequest',
      ],
      'output' =>
      [
        'shape' => 'GetObjectOutput',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'NoSuchKey',
          'exception' => true,
        ],
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTObjectGET.html',
    ],
    'GetObjectAcl' =>
    [
      'name' => 'GetObjectAcl',
      'http' =>
      [
        'method' => 'GET',
        'requestUri' => '/{Bucket}/{Key+}?acl',
      ],
      'input' =>
      [
        'shape' => 'GetObjectAclRequest',
      ],
      'output' =>
      [
        'shape' => 'GetObjectAclOutput',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'NoSuchKey',
          'exception' => true,
        ],
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTObjectGETacl.html',
    ],
    'GetObjectTorrent' =>
    [
      'name' => 'GetObjectTorrent',
      'http' =>
      [
        'method' => 'GET',
        'requestUri' => '/{Bucket}/{Key+}?torrent',
      ],
      'input' =>
      [
        'shape' => 'GetObjectTorrentRequest',
      ],
      'output' =>
      [
        'shape' => 'GetObjectTorrentOutput',
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTObjectGETtorrent.html',
    ],
    'HeadBucket' =>
    [
      'name' => 'HeadBucket',
      'http' =>
      [
        'method' => 'HEAD',
        'requestUri' => '/{Bucket}',
      ],
      'input' =>
      [
        'shape' => 'HeadBucketRequest',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'NoSuchBucket',
          'exception' => true,
        ],
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketHEAD.html',
    ],
    'HeadObject' =>
    [
      'name' => 'HeadObject',
      'http' =>
      [
        'method' => 'HEAD',
        'requestUri' => '/{Bucket}/{Key+}',
      ],
      'input' =>
      [
        'shape' => 'HeadObjectRequest',
      ],
      'output' =>
      [
        'shape' => 'HeadObjectOutput',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'NoSuchKey',
          'exception' => true,
        ],
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTObjectHEAD.html',
    ],
    'ListBuckets' =>
    [
      'name' => 'ListBuckets',
      'http' =>
      [
        'method' => 'GET',
        'requestUri' => '/',
      ],
      'output' =>
      [
        'shape' => 'ListBucketsOutput',
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTServiceGET.html',
      'alias' => 'GetService',
    ],
    'ListMultipartUploads' =>
    [
      'name' => 'ListMultipartUploads',
      'http' =>
      [
        'method' => 'GET',
        'requestUri' => '/{Bucket}?uploads',
      ],
      'input' =>
      [
        'shape' => 'ListMultipartUploadsRequest',
      ],
      'output' =>
      [
        'shape' => 'ListMultipartUploadsOutput',
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/mpUploadListMPUpload.html',
    ],
    'ListObjectVersions' =>
    [
      'name' => 'ListObjectVersions',
      'http' =>
      [
        'method' => 'GET',
        'requestUri' => '/{Bucket}?versions',
      ],
      'input' =>
      [
        'shape' => 'ListObjectVersionsRequest',
      ],
      'output' =>
      [
        'shape' => 'ListObjectVersionsOutput',
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketGETVersion.html',
      'alias' => 'GetBucketObjectVersions',
    ],
    'ListObjects' =>
    [
      'name' => 'ListObjects',
      'http' =>
      [
        'method' => 'GET',
        'requestUri' => '/{Bucket}',
      ],
      'input' =>
      [
        'shape' => 'ListObjectsRequest',
      ],
      'output' =>
      [
        'shape' => 'ListObjectsOutput',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'NoSuchBucket',
          'exception' => true,
        ],
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketGET.html',
      'alias' => 'GetBucket',
    ],
    'ListParts' =>
    [
      'name' => 'ListParts',
      'http' =>
      [
        'method' => 'GET',
        'requestUri' => '/{Bucket}/{Key+}',
      ],
      'input' =>
      [
        'shape' => 'ListPartsRequest',
      ],
      'output' =>
      [
        'shape' => 'ListPartsOutput',
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/mpUploadListParts.html',
    ],
    'PutBucketAcl' =>
    [
      'name' => 'PutBucketAcl',
      'http' =>
      [
        'method' => 'PUT',
        'requestUri' => '/{Bucket}?acl',
      ],
      'input' =>
      [
        'shape' => 'PutBucketAclRequest',
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketPUTacl.html',
    ],
    'PutBucketCors' =>
    [
      'name' => 'PutBucketCors',
      'http' =>
      [
        'method' => 'PUT',
        'requestUri' => '/{Bucket}?cors',
      ],
      'input' =>
      [
        'shape' => 'PutBucketCorsRequest',
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketPUTcors.html',
    ],
    'PutBucketLifecycle' =>
    [
      'name' => 'PutBucketLifecycle',
      'http' =>
      [
        'method' => 'PUT',
        'requestUri' => '/{Bucket}?lifecycle',
      ],
      'input' =>
      [
        'shape' => 'PutBucketLifecycleRequest',
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketPUTlifecycle.html',
    ],
    'PutBucketLogging' =>
    [
      'name' => 'PutBucketLogging',
      'http' =>
      [
        'method' => 'PUT',
        'requestUri' => '/{Bucket}?logging',
      ],
      'input' =>
      [
        'shape' => 'PutBucketLoggingRequest',
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketPUTlogging.html',
    ],
    'PutBucketNotification' =>
    [
      'name' => 'PutBucketNotification',
      'http' =>
      [
        'method' => 'PUT',
        'requestUri' => '/{Bucket}?notification',
      ],
      'input' =>
      [
        'shape' => 'PutBucketNotificationRequest',
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketPUTnotification.html',
    ],
    'PutBucketPolicy' =>
    [
      'name' => 'PutBucketPolicy',
      'http' =>
      [
        'method' => 'PUT',
        'requestUri' => '/{Bucket}?policy',
      ],
      'input' =>
      [
        'shape' => 'PutBucketPolicyRequest',
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketPUTpolicy.html',
    ],
    'PutBucketRequestPayment' =>
    [
      'name' => 'PutBucketRequestPayment',
      'http' =>
      [
        'method' => 'PUT',
        'requestUri' => '/{Bucket}?requestPayment',
      ],
      'input' =>
      [
        'shape' => 'PutBucketRequestPaymentRequest',
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTrequestPaymentPUT.html',
    ],
    'PutBucketTagging' =>
    [
      'name' => 'PutBucketTagging',
      'http' =>
      [
        'method' => 'PUT',
        'requestUri' => '/{Bucket}?tagging',
      ],
      'input' =>
      [
        'shape' => 'PutBucketTaggingRequest',
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketPUTtagging.html',
    ],
    'PutBucketVersioning' =>
    [
      'name' => 'PutBucketVersioning',
      'http' =>
      [
        'method' => 'PUT',
        'requestUri' => '/{Bucket}?versioning',
      ],
      'input' =>
      [
        'shape' => 'PutBucketVersioningRequest',
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketPUTVersioningStatus.html',
    ],
    'PutBucketWebsite' =>
    [
      'name' => 'PutBucketWebsite',
      'http' =>
      [
        'method' => 'PUT',
        'requestUri' => '/{Bucket}?website',
      ],
      'input' =>
      [
        'shape' => 'PutBucketWebsiteRequest',
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketPUTwebsite.html',
    ],
    'PutObject' =>
    [
      'name' => 'PutObject',
      'http' =>
      [
        'method' => 'PUT',
        'requestUri' => '/{Bucket}/{Key+}',
      ],
      'input' =>
      [
        'shape' => 'PutObjectRequest',
      ],
      'output' =>
      [
        'shape' => 'PutObjectOutput',
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTObjectPUT.html',
    ],
    'PutObjectAcl' =>
    [
      'name' => 'PutObjectAcl',
      'http' =>
      [
        'method' => 'PUT',
        'requestUri' => '/{Bucket}/{Key+}?acl',
      ],
      'input' =>
      [
        'shape' => 'PutObjectAclRequest',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'NoSuchKey',
          'exception' => true,
        ],
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTObjectPUTacl.html',
    ],
    'RestoreObject' =>
    [
      'name' => 'RestoreObject',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/{Bucket}/{Key+}?restore',
      ],
      'input' =>
      [
        'shape' => 'RestoreObjectRequest',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'ObjectAlreadyInActiveTierError',
          'exception' => true,
        ],
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTObjectRestore.html',
      'alias' => 'PostObjectRestore',
    ],
    'UploadPart' =>
    [
      'name' => 'UploadPart',
      'http' =>
      [
        'method' => 'PUT',
        'requestUri' => '/{Bucket}/{Key+}',
      ],
      'input' =>
      [
        'shape' => 'UploadPartRequest',
      ],
      'output' =>
      [
        'shape' => 'UploadPartOutput',
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/mpUploadUploadPart.html',
    ],
    'UploadPartCopy' =>
    [
      'name' => 'UploadPartCopy',
      'http' =>
      [
        'method' => 'PUT',
        'requestUri' => '/{Bucket}/{Key+}',
      ],
      'input' =>
      [
        'shape' => 'UploadPartCopyRequest',
      ],
      'output' =>
      [
        'shape' => 'UploadPartCopyOutput',
      ],
      'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/mpUploadUploadPartCopy.html',
    ],
  ],
  'shapes' =>
  [
    'AbortMultipartUploadRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
        1 => 'Key',
        2 => 'UploadId',
      ],
      'members' =>
      [
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
        'Key' =>
        [
          'shape' => 'ObjectKey',
          'location' => 'uri',
          'locationName' => 'Key',
        ],
        'UploadId' =>
        [
          'shape' => 'MultipartUploadId',
          'location' => 'querystring',
          'locationName' => 'uploadId',
        ],
      ],
    ],
    'AcceptRanges' =>
    [
      'type' => 'string',
    ],
    'AccessControlPolicy' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'Grants' =>
        [
          'shape' => 'Grants',
          'locationName' => 'AccessControlList',
        ],
        'Owner' =>
        [
          'shape' => 'Owner',
        ],
      ],
    ],
    'AllowedHeader' =>
    [
      'type' => 'string',
    ],
    'AllowedHeaders' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'AllowedHeader',
      ],
      'flattened' => true,
    ],
    'AllowedMethod' =>
    [
      'type' => 'string',
    ],
    'AllowedMethods' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'AllowedMethod',
      ],
      'flattened' => true,
    ],
    'AllowedOrigin' =>
    [
      'type' => 'string',
    ],
    'AllowedOrigins' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'AllowedOrigin',
      ],
      'flattened' => true,
    ],
    'Body' =>
    [
      'type' => 'blob',
    ],
    'Bucket' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'Name' =>
        [
          'shape' => 'BucketName',
        ],
        'CreationDate' =>
        [
          'shape' => 'CreationDate',
        ],
      ],
    ],
    'BucketAlreadyExists' =>
    [
      'type' => 'structure',
      'members' =>
      [
      ],
      'exception' => true,
    ],
    'BucketCannedACL' =>
    [
      'type' => 'string',
      'enum' =>
      [
        0 => 'private',
        1 => 'public-read',
        2 => 'public-read-write',
        3 => 'authenticated-read',
      ],
    ],
    'BucketLocationConstraint' =>
    [
      'type' => 'string',
      'enum' =>
      [
        0 => 'EU',
        1 => 'eu-west-1',
        2 => 'us-west-1',
        3 => 'us-west-2',
        4 => 'ap-southeast-1',
        5 => 'ap-southeast-2',
        6 => 'ap-northeast-1',
        7 => 'sa-east-1',
        8 => '',
      ],
    ],
    'BucketLoggingStatus' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'LoggingEnabled' =>
        [
          'shape' => 'LoggingEnabled',
        ],
      ],
    ],
    'BucketLogsPermission' =>
    [
      'type' => 'string',
      'enum' =>
      [
        0 => 'FULL_CONTROL',
        1 => 'READ',
        2 => 'WRITE',
      ],
    ],
    'BucketName' =>
    [
      'type' => 'string',
    ],
    'BucketVersioningStatus' =>
    [
      'type' => 'string',
      'enum' =>
      [
        0 => 'Enabled',
        1 => 'Suspended',
      ],
    ],
    'Buckets' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'Bucket',
        'locationName' => 'Bucket',
      ],
    ],
    'CORSConfiguration' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'CORSRules' =>
        [
          'shape' => 'CORSRules',
          'locationName' => 'CORSRule',
        ],
      ],
    ],
    'CORSRule' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'AllowedHeaders' =>
        [
          'shape' => 'AllowedHeaders',
          'locationName' => 'AllowedHeader',
        ],
        'AllowedMethods' =>
        [
          'shape' => 'AllowedMethods',
          'locationName' => 'AllowedMethod',
        ],
        'AllowedOrigins' =>
        [
          'shape' => 'AllowedOrigins',
          'locationName' => 'AllowedOrigin',
        ],
        'ExposeHeaders' =>
        [
          'shape' => 'ExposeHeaders',
          'locationName' => 'ExposeHeader',
        ],
        'MaxAgeSeconds' =>
        [
          'shape' => 'MaxAgeSeconds',
        ],
      ],
    ],
    'CORSRules' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'CORSRule',
      ],
      'flattened' => true,
    ],
    'CacheControl' =>
    [
      'type' => 'string',
    ],
    'Code' =>
    [
      'type' => 'string',
    ],
    'CommonPrefix' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'Prefix' =>
        [
          'shape' => 'Prefix',
        ],
      ],
    ],
    'CommonPrefixList' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'CommonPrefix',
      ],
      'flattened' => true,
    ],
    'CompleteMultipartUploadOutput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'Location' =>
        [
          'shape' => 'Location',
        ],
        'Bucket' =>
        [
          'shape' => 'BucketName',
        ],
        'Key' =>
        [
          'shape' => 'ObjectKey',
        ],
        'Expiration' =>
        [
          'shape' => 'Expiration',
          'location' => 'header',
          'locationName' => 'x-amz-expiration',
        ],
        'ETag' =>
        [
          'shape' => 'ETag',
        ],
        'ServerSideEncryption' =>
        [
          'shape' => 'ServerSideEncryption',
          'location' => 'header',
          'locationName' => 'x-amz-server-side-encryption',
        ],
        'VersionId' =>
        [
          'shape' => 'ObjectVersionId',
          'location' => 'header',
          'locationName' => 'x-amz-version-id',
        ],
      ],
    ],
    'CompleteMultipartUploadRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
        1 => 'Key',
        2 => 'UploadId',
      ],
      'members' =>
      [
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
        'Key' =>
        [
          'shape' => 'ObjectKey',
          'location' => 'uri',
          'locationName' => 'Key',
        ],
        'MultipartUpload' =>
        [
          'shape' => 'CompletedMultipartUpload',
          'locationName' => 'CompleteMultipartUpload',
          'xmlNamespace' =>
          [
            'uri' => 'http://s3.amazonaws.com/doc/2006-03-01/',
          ],
        ],
        'UploadId' =>
        [
          'shape' => 'MultipartUploadId',
          'location' => 'querystring',
          'locationName' => 'uploadId',
        ],
      ],
      'payload' => 'MultipartUpload',
    ],
    'CompletedMultipartUpload' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'Parts' =>
        [
          'shape' => 'CompletedPartList',
          'locationName' => 'Part',
        ],
      ],
    ],
    'CompletedPart' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'ETag' =>
        [
          'shape' => 'ETag',
        ],
        'PartNumber' =>
        [
          'shape' => 'PartNumber',
        ],
      ],
    ],
    'CompletedPartList' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'CompletedPart',
      ],
      'flattened' => true,
    ],
    'Condition' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'HttpErrorCodeReturnedEquals' =>
        [
          'shape' => 'HttpErrorCodeReturnedEquals',
        ],
        'KeyPrefixEquals' =>
        [
          'shape' => 'KeyPrefixEquals',
        ],
      ],
    ],
    'ContentDisposition' =>
    [
      'type' => 'string',
    ],
    'ContentEncoding' =>
    [
      'type' => 'string',
    ],
    'ContentLanguage' =>
    [
      'type' => 'string',
    ],
    'ContentLength' =>
    [
      'type' => 'integer',
    ],
    'ContentMD5' =>
    [
      'type' => 'string',
    ],
    'ContentType' =>
    [
      'type' => 'string',
    ],
    'CopyObjectOutput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'CopyObjectResult' =>
        [
          'shape' => 'CopyObjectResult',
        ],
        'Expiration' =>
        [
          'shape' => 'Expiration',
          'location' => 'header',
          'locationName' => 'x-amz-expiration',
        ],
        'CopySourceVersionId' =>
        [
          'shape' => 'CopySourceVersionId',
          'location' => 'header',
          'locationName' => 'x-amz-copy-source-version-id',
        ],
        'ServerSideEncryption' =>
        [
          'shape' => 'ServerSideEncryption',
          'location' => 'header',
          'locationName' => 'x-amz-server-side-encryption',
        ],
        'SSECustomerAlgorithm' =>
        [
          'shape' => 'SSECustomerAlgorithm',
          'location' => 'header',
          'locationName' => 'x-amz-server-side-encryption-customer-algorithm',
        ],
        'SSECustomerKeyMD5' =>
        [
          'shape' => 'SSECustomerKeyMD5',
          'location' => 'header',
          'locationName' => 'x-amz-server-side-encryption-customer-key-MD5',
        ],
      ],
      'payload' => 'CopyObjectResult',
    ],
    'CopyObjectRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
        1 => 'CopySource',
        2 => 'Key',
      ],
      'members' =>
      [
        'ACL' =>
        [
          'shape' => 'ObjectCannedACL',
          'location' => 'header',
          'locationName' => 'x-amz-acl',
        ],
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
        'CacheControl' =>
        [
          'shape' => 'CacheControl',
          'location' => 'header',
          'locationName' => 'Cache-Control',
        ],
        'ContentDisposition' =>
        [
          'shape' => 'ContentDisposition',
          'location' => 'header',
          'locationName' => 'Content-Disposition',
        ],
        'ContentEncoding' =>
        [
          'shape' => 'ContentEncoding',
          'location' => 'header',
          'locationName' => 'Content-Encoding',
        ],
        'ContentLanguage' =>
        [
          'shape' => 'ContentLanguage',
          'location' => 'header',
          'locationName' => 'Content-Language',
        ],
        'ContentType' =>
        [
          'shape' => 'ContentType',
          'location' => 'header',
          'locationName' => 'Content-Type',
        ],
        'CopySource' =>
        [
          'shape' => 'CopySource',
          'location' => 'header',
          'locationName' => 'x-amz-copy-source',
        ],
        'CopySourceIfMatch' =>
        [
          'shape' => 'CopySourceIfMatch',
          'location' => 'header',
          'locationName' => 'x-amz-copy-source-if-match',
        ],
        'CopySourceIfModifiedSince' =>
        [
          'shape' => 'CopySourceIfModifiedSince',
          'location' => 'header',
          'locationName' => 'x-amz-copy-source-if-modified-since',
        ],
        'CopySourceIfNoneMatch' =>
        [
          'shape' => 'CopySourceIfNoneMatch',
          'location' => 'header',
          'locationName' => 'x-amz-copy-source-if-none-match',
        ],
        'CopySourceIfUnmodifiedSince' =>
        [
          'shape' => 'CopySourceIfUnmodifiedSince',
          'location' => 'header',
          'locationName' => 'x-amz-copy-source-if-unmodified-since',
        ],
        'Expires' =>
        [
          'shape' => 'Expires',
          'location' => 'header',
          'locationName' => 'Expires',
        ],
        'GrantFullControl' =>
        [
          'shape' => 'GrantFullControl',
          'location' => 'header',
          'locationName' => 'x-amz-grant-full-control',
        ],
        'GrantRead' =>
        [
          'shape' => 'GrantRead',
          'location' => 'header',
          'locationName' => 'x-amz-grant-read',
        ],
        'GrantReadACP' =>
        [
          'shape' => 'GrantReadACP',
          'location' => 'header',
          'locationName' => 'x-amz-grant-read-acp',
        ],
        'GrantWriteACP' =>
        [
          'shape' => 'GrantWriteACP',
          'location' => 'header',
          'locationName' => 'x-amz-grant-write-acp',
        ],
        'Key' =>
        [
          'shape' => 'ObjectKey',
          'location' => 'uri',
          'locationName' => 'Key',
        ],
        'Metadata' =>
        [
          'shape' => 'Metadata',
          'location' => 'headers',
          'locationName' => 'x-amz-meta-',
        ],
        'MetadataDirective' =>
        [
          'shape' => 'MetadataDirective',
          'location' => 'header',
          'locationName' => 'x-amz-metadata-directive',
        ],
        'ServerSideEncryption' =>
        [
          'shape' => 'ServerSideEncryption',
          'location' => 'header',
          'locationName' => 'x-amz-server-side-encryption',
        ],
        'StorageClass' =>
        [
          'shape' => 'StorageClass',
          'location' => 'header',
          'locationName' => 'x-amz-storage-class',
        ],
        'WebsiteRedirectLocation' =>
        [
          'shape' => 'WebsiteRedirectLocation',
          'location' => 'header',
          'locationName' => 'x-amz-website-redirect-location',
        ],
        'SSECustomerAlgorithm' =>
        [
          'shape' => 'SSECustomerAlgorithm',
          'location' => 'header',
          'locationName' => 'x-amz-server-side-encryption-customer-algorithm',
        ],
        'SSECustomerKey' =>
        [
          'shape' => 'SSECustomerKey',
          'location' => 'header',
          'locationName' => 'x-amz-server-side-encryption-customer-key',
        ],
        'SSECustomerKeyMD5' =>
        [
          'shape' => 'SSECustomerKeyMD5',
          'location' => 'header',
          'locationName' => 'x-amz-server-side-encryption-customer-key-MD5',
        ],
        'CopySourceSSECustomerAlgorithm' =>
        [
          'shape' => 'CopySourceSSECustomerAlgorithm',
          'location' => 'header',
          'locationName' => 'x-amz-copy-source-server-side-encryption-customer-algorithm',
        ],
        'CopySourceSSECustomerKey' =>
        [
          'shape' => 'CopySourceSSECustomerKey',
          'location' => 'header',
          'locationName' => 'x-amz-copy-source-server-side-encryption-customer-key',
        ],
        'CopySourceSSECustomerKeyMD5' =>
        [
          'shape' => 'CopySourceSSECustomerKeyMD5',
          'location' => 'header',
          'locationName' => 'x-amz-copy-source-server-side-encryption-customer-key-MD5',
        ],
      ],
    ],
    'CopyObjectResult' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'ETag' =>
        [
          'shape' => 'ETag',
        ],
        'LastModified' =>
        [
          'shape' => 'LastModified',
        ],
      ],
    ],
    'CopyPartResult' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'ETag' =>
        [
          'shape' => 'ETag',
        ],
        'LastModified' =>
        [
          'shape' => 'LastModified',
        ],
      ],
    ],
    'CopySource' =>
    [
      'type' => 'string',
      'pattern' => '\\/.+\\/.+',
    ],
    'CopySourceIfMatch' =>
    [
      'type' => 'string',
    ],
    'CopySourceIfModifiedSince' =>
    [
      'type' => 'timestamp',
    ],
    'CopySourceIfNoneMatch' =>
    [
      'type' => 'string',
    ],
    'CopySourceIfUnmodifiedSince' =>
    [
      'type' => 'timestamp',
    ],
    'CopySourceRange' =>
    [
      'type' => 'string',
    ],
    'CopySourceSSECustomerAlgorithm' =>
    [
      'type' => 'string',
    ],
    'CopySourceSSECustomerKey' =>
    [
      'type' => 'string',
      'sensitive' => true,
    ],
    'CopySourceSSECustomerKeyMD5' =>
    [
      'type' => 'string',
    ],
    'CopySourceVersionId' =>
    [
      'type' => 'string',
    ],
    'CreateBucketConfiguration' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'LocationConstraint' =>
        [
          'shape' => 'BucketLocationConstraint',
        ],
      ],
    ],
    'CreateBucketOutput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'Location' =>
        [
          'shape' => 'Location',
          'location' => 'header',
          'locationName' => 'Location',
        ],
      ],
    ],
    'CreateBucketRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
      ],
      'members' =>
      [
        'ACL' =>
        [
          'shape' => 'BucketCannedACL',
          'location' => 'header',
          'locationName' => 'x-amz-acl',
        ],
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
        'CreateBucketConfiguration' =>
        [
          'shape' => 'CreateBucketConfiguration',
          'xmlNamespace' =>
          [
            'uri' => 'http://s3.amazonaws.com/doc/2006-03-01/',
          ],
          'locationName' => 'CreateBucketConfiguration',
        ],
        'GrantFullControl' =>
        [
          'shape' => 'GrantFullControl',
          'location' => 'header',
          'locationName' => 'x-amz-grant-full-control',
        ],
        'GrantRead' =>
        [
          'shape' => 'GrantRead',
          'location' => 'header',
          'locationName' => 'x-amz-grant-read',
        ],
        'GrantReadACP' =>
        [
          'shape' => 'GrantReadACP',
          'location' => 'header',
          'locationName' => 'x-amz-grant-read-acp',
        ],
        'GrantWrite' =>
        [
          'shape' => 'GrantWrite',
          'location' => 'header',
          'locationName' => 'x-amz-grant-write',
        ],
        'GrantWriteACP' =>
        [
          'shape' => 'GrantWriteACP',
          'location' => 'header',
          'locationName' => 'x-amz-grant-write-acp',
        ],
      ],
      'payload' => 'CreateBucketConfiguration',
    ],
    'CreateMultipartUploadOutput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'locationName' => 'Bucket',
        ],
        'Key' =>
        [
          'shape' => 'ObjectKey',
        ],
        'UploadId' =>
        [
          'shape' => 'MultipartUploadId',
        ],
        'ServerSideEncryption' =>
        [
          'shape' => 'ServerSideEncryption',
          'location' => 'header',
          'locationName' => 'x-amz-server-side-encryption',
        ],
        'SSECustomerAlgorithm' =>
        [
          'shape' => 'SSECustomerAlgorithm',
          'location' => 'header',
          'locationName' => 'x-amz-server-side-encryption-customer-algorithm',
        ],
        'SSECustomerKeyMD5' =>
        [
          'shape' => 'SSECustomerKeyMD5',
          'location' => 'header',
          'locationName' => 'x-amz-server-side-encryption-customer-key-MD5',
        ],
      ],
    ],
    'CreateMultipartUploadRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
        1 => 'Key',
      ],
      'members' =>
      [
        'ACL' =>
        [
          'shape' => 'ObjectCannedACL',
          'location' => 'header',
          'locationName' => 'x-amz-acl',
        ],
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
        'CacheControl' =>
        [
          'shape' => 'CacheControl',
          'location' => 'header',
          'locationName' => 'Cache-Control',
        ],
        'ContentDisposition' =>
        [
          'shape' => 'ContentDisposition',
          'location' => 'header',
          'locationName' => 'Content-Disposition',
        ],
        'ContentEncoding' =>
        [
          'shape' => 'ContentEncoding',
          'location' => 'header',
          'locationName' => 'Content-Encoding',
        ],
        'ContentLanguage' =>
        [
          'shape' => 'ContentLanguage',
          'location' => 'header',
          'locationName' => 'Content-Language',
        ],
        'ContentType' =>
        [
          'shape' => 'ContentType',
          'location' => 'header',
          'locationName' => 'Content-Type',
        ],
        'Expires' =>
        [
          'shape' => 'Expires',
          'location' => 'header',
          'locationName' => 'Expires',
        ],
        'GrantFullControl' =>
        [
          'shape' => 'GrantFullControl',
          'location' => 'header',
          'locationName' => 'x-amz-grant-full-control',
        ],
        'GrantRead' =>
        [
          'shape' => 'GrantRead',
          'location' => 'header',
          'locationName' => 'x-amz-grant-read',
        ],
        'GrantReadACP' =>
        [
          'shape' => 'GrantReadACP',
          'location' => 'header',
          'locationName' => 'x-amz-grant-read-acp',
        ],
        'GrantWriteACP' =>
        [
          'shape' => 'GrantWriteACP',
          'location' => 'header',
          'locationName' => 'x-amz-grant-write-acp',
        ],
        'Key' =>
        [
          'shape' => 'ObjectKey',
          'location' => 'uri',
          'locationName' => 'Key',
        ],
        'Metadata' =>
        [
          'shape' => 'Metadata',
          'location' => 'headers',
          'locationName' => 'x-amz-meta-',
        ],
        'ServerSideEncryption' =>
        [
          'shape' => 'ServerSideEncryption',
          'location' => 'header',
          'locationName' => 'x-amz-server-side-encryption',
        ],
        'StorageClass' =>
        [
          'shape' => 'StorageClass',
          'location' => 'header',
          'locationName' => 'x-amz-storage-class',
        ],
        'WebsiteRedirectLocation' =>
        [
          'shape' => 'WebsiteRedirectLocation',
          'location' => 'header',
          'locationName' => 'x-amz-website-redirect-location',
        ],
        'SSECustomerAlgorithm' =>
        [
          'shape' => 'SSECustomerAlgorithm',
          'location' => 'header',
          'locationName' => 'x-amz-server-side-encryption-customer-algorithm',
        ],
        'SSECustomerKey' =>
        [
          'shape' => 'SSECustomerKey',
          'location' => 'header',
          'locationName' => 'x-amz-server-side-encryption-customer-key',
        ],
        'SSECustomerKeyMD5' =>
        [
          'shape' => 'SSECustomerKeyMD5',
          'location' => 'header',
          'locationName' => 'x-amz-server-side-encryption-customer-key-MD5',
        ],
      ],
    ],
    'CreationDate' =>
    [
      'type' => 'timestamp',
    ],
    'Date' =>
    [
      'type' => 'timestamp',
      'timestampFormat' => 'iso8601',
    ],
    'Days' =>
    [
      'type' => 'integer',
    ],
    'Delete' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Objects',
      ],
      'members' =>
      [
        'Objects' =>
        [
          'shape' => 'ObjectIdentifierList',
          'locationName' => 'Object',
        ],
        'Quiet' =>
        [
          'shape' => 'Quiet',
        ],
      ],
    ],
    'DeleteBucketCorsRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
      ],
      'members' =>
      [
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
      ],
    ],
    'DeleteBucketLifecycleRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
      ],
      'members' =>
      [
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
      ],
    ],
    'DeleteBucketPolicyRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
      ],
      'members' =>
      [
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
      ],
    ],
    'DeleteBucketRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
      ],
      'members' =>
      [
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
      ],
    ],
    'DeleteBucketTaggingRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
      ],
      'members' =>
      [
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
      ],
    ],
    'DeleteBucketWebsiteRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
      ],
      'members' =>
      [
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
      ],
    ],
    'DeleteMarker' =>
    [
      'type' => 'boolean',
    ],
    'DeleteMarkerEntry' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'Owner' =>
        [
          'shape' => 'Owner',
        ],
        'Key' =>
        [
          'shape' => 'ObjectKey',
        ],
        'VersionId' =>
        [
          'shape' => 'ObjectVersionId',
        ],
        'IsLatest' =>
        [
          'shape' => 'IsLatest',
        ],
        'LastModified' =>
        [
          'shape' => 'LastModified',
        ],
      ],
    ],
    'DeleteMarkerVersionId' =>
    [
      'type' => 'string',
    ],
    'DeleteMarkers' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'DeleteMarkerEntry',
      ],
      'flattened' => true,
    ],
    'DeleteObjectOutput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'DeleteMarker' =>
        [
          'shape' => 'DeleteMarker',
          'location' => 'header',
          'locationName' => 'x-amz-delete-marker',
        ],
        'VersionId' =>
        [
          'shape' => 'ObjectVersionId',
          'location' => 'header',
          'locationName' => 'x-amz-version-id',
        ],
      ],
    ],
    'DeleteObjectRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
        1 => 'Key',
      ],
      'members' =>
      [
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
        'Key' =>
        [
          'shape' => 'ObjectKey',
          'location' => 'uri',
          'locationName' => 'Key',
        ],
        'MFA' =>
        [
          'shape' => 'MFA',
          'location' => 'header',
          'locationName' => 'x-amz-mfa',
        ],
        'VersionId' =>
        [
          'shape' => 'ObjectVersionId',
          'location' => 'querystring',
          'locationName' => 'versionId',
        ],
      ],
    ],
    'DeleteObjectsOutput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'Deleted' =>
        [
          'shape' => 'DeletedObjects',
        ],
        'Errors' =>
        [
          'shape' => 'Errors',
          'locationName' => 'Error',
        ],
      ],
    ],
    'DeleteObjectsRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
        1 => 'Delete',
      ],
      'members' =>
      [
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
        'Delete' =>
        [
          'shape' => 'Delete',
          'xmlNamespace' =>
          [
            'uri' => 'http://s3.amazonaws.com/doc/2006-03-01/',
          ],
          'locationName' => 'Delete',
        ],
        'MFA' =>
        [
          'shape' => 'MFA',
          'location' => 'header',
          'locationName' => 'x-amz-mfa',
        ],
      ],
      'payload' => 'Delete',
    ],
    'DeletedObject' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'Key' =>
        [
          'shape' => 'ObjectKey',
        ],
        'VersionId' =>
        [
          'shape' => 'ObjectVersionId',
        ],
        'DeleteMarker' =>
        [
          'shape' => 'DeleteMarker',
        ],
        'DeleteMarkerVersionId' =>
        [
          'shape' => 'DeleteMarkerVersionId',
        ],
      ],
    ],
    'DeletedObjects' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'DeletedObject',
      ],
      'flattened' => true,
    ],
    'Delimiter' =>
    [
      'type' => 'string',
    ],
    'DisplayName' =>
    [
      'type' => 'string',
    ],
    'ETag' =>
    [
      'type' => 'string',
    ],
    'EmailAddress' =>
    [
      'type' => 'string',
    ],
    'EncodingType' =>
    [
      'type' => 'string',
      'enum' =>
      [
        0 => 'url',
      ],
    ],
    'Error' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'Key' =>
        [
          'shape' => 'ObjectKey',
        ],
        'VersionId' =>
        [
          'shape' => 'ObjectVersionId',
        ],
        'Code' =>
        [
          'shape' => 'Code',
        ],
        'Message' =>
        [
          'shape' => 'Message',
        ],
      ],
    ],
    'ErrorDocument' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Key',
      ],
      'members' =>
      [
        'Key' =>
        [
          'shape' => 'ObjectKey',
        ],
      ],
    ],
    'Errors' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'Error',
      ],
      'flattened' => true,
    ],
    'Event' =>
    [
      'type' => 'string',
      'enum' =>
      [
        0 => 's3:ReducedRedundancyLostObject',
      ],
    ],
    'Expiration' =>
    [
      'type' => 'timestamp',
    ],
    'ExpirationStatus' =>
    [
      'type' => 'string',
      'enum' =>
      [
        0 => 'Enabled',
        1 => 'Disabled',
      ],
    ],
    'Expires' =>
    [
      'type' => 'timestamp',
    ],
    'ExposeHeader' =>
    [
      'type' => 'string',
    ],
    'ExposeHeaders' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'ExposeHeader',
      ],
      'flattened' => true,
    ],
    'GetBucketAclOutput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'Owner' =>
        [
          'shape' => 'Owner',
        ],
        'Grants' =>
        [
          'shape' => 'Grants',
          'locationName' => 'AccessControlList',
        ],
      ],
    ],
    'GetBucketAclRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
      ],
      'members' =>
      [
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
      ],
    ],
    'GetBucketCorsOutput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'CORSRules' =>
        [
          'shape' => 'CORSRules',
          'locationName' => 'CORSRule',
        ],
      ],
    ],
    'GetBucketCorsRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
      ],
      'members' =>
      [
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
      ],
    ],
    'GetBucketLifecycleOutput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'Rules' =>
        [
          'shape' => 'Rules',
          'locationName' => 'Rule',
        ],
      ],
    ],
    'GetBucketLifecycleRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
      ],
      'members' =>
      [
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
      ],
    ],
    'GetBucketLocationOutput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'LocationConstraint' =>
        [
          'shape' => 'BucketLocationConstraint',
        ],
      ],
    ],
    'GetBucketLocationRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
      ],
      'members' =>
      [
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
      ],
    ],
    'GetBucketLoggingOutput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'LoggingEnabled' =>
        [
          'shape' => 'LoggingEnabled',
        ],
      ],
    ],
    'GetBucketLoggingRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
      ],
      'members' =>
      [
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
      ],
    ],
    'GetBucketNotificationOutput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'TopicConfiguration' =>
        [
          'shape' => 'TopicConfiguration',
        ],
      ],
    ],
    'GetBucketNotificationRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
      ],
      'members' =>
      [
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
      ],
    ],
    'GetBucketPolicyOutput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'Policy' =>
        [
          'shape' => 'Policy',
        ],
      ],
      'payload' => 'Policy',
    ],
    'GetBucketPolicyRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
      ],
      'members' =>
      [
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
      ],
    ],
    'GetBucketRequestPaymentOutput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'Payer' =>
        [
          'shape' => 'Payer',
        ],
      ],
    ],
    'GetBucketRequestPaymentRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
      ],
      'members' =>
      [
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
      ],
    ],
    'GetBucketTaggingOutput' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'TagSet',
      ],
      'members' =>
      [
        'TagSet' =>
        [
          'shape' => 'TagSet',
        ],
      ],
    ],
    'GetBucketTaggingRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
      ],
      'members' =>
      [
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
      ],
    ],
    'GetBucketVersioningOutput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'Status' =>
        [
          'shape' => 'BucketVersioningStatus',
        ],
        'MFADelete' =>
        [
          'shape' => 'MFADeleteStatus',
          'locationName' => 'MfaDelete',
        ],
      ],
    ],
    'GetBucketVersioningRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
      ],
      'members' =>
      [
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
      ],
    ],
    'GetBucketWebsiteOutput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'RedirectAllRequestsTo' =>
        [
          'shape' => 'RedirectAllRequestsTo',
        ],
        'IndexDocument' =>
        [
          'shape' => 'IndexDocument',
        ],
        'ErrorDocument' =>
        [
          'shape' => 'ErrorDocument',
        ],
        'RoutingRules' =>
        [
          'shape' => 'RoutingRules',
        ],
      ],
    ],
    'GetBucketWebsiteRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
      ],
      'members' =>
      [
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
      ],
    ],
    'GetObjectAclOutput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'Owner' =>
        [
          'shape' => 'Owner',
        ],
        'Grants' =>
        [
          'shape' => 'Grants',
          'locationName' => 'AccessControlList',
        ],
      ],
    ],
    'GetObjectAclRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
        1 => 'Key',
      ],
      'members' =>
      [
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
        'Key' =>
        [
          'shape' => 'ObjectKey',
          'location' => 'uri',
          'locationName' => 'Key',
        ],
        'VersionId' =>
        [
          'shape' => 'ObjectVersionId',
          'location' => 'querystring',
          'locationName' => 'versionId',
        ],
      ],
    ],
    'GetObjectOutput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'Body' =>
        [
          'shape' => 'Body',
          'streaming' => true,
        ],
        'DeleteMarker' =>
        [
          'shape' => 'DeleteMarker',
          'location' => 'header',
          'locationName' => 'x-amz-delete-marker',
        ],
        'AcceptRanges' =>
        [
          'shape' => 'AcceptRanges',
          'location' => 'header',
          'locationName' => 'accept-ranges',
        ],
        'Expiration' =>
        [
          'shape' => 'Expiration',
          'location' => 'header',
          'locationName' => 'x-amz-expiration',
        ],
        'Restore' =>
        [
          'shape' => 'Restore',
          'location' => 'header',
          'locationName' => 'x-amz-restore',
        ],
        'LastModified' =>
        [
          'shape' => 'LastModified',
          'location' => 'header',
          'locationName' => 'Last-Modified',
        ],
        'ContentLength' =>
        [
          'shape' => 'ContentLength',
          'location' => 'header',
          'locationName' => 'Content-Length',
        ],
        'ETag' =>
        [
          'shape' => 'ETag',
          'location' => 'header',
          'locationName' => 'ETag',
        ],
        'MissingMeta' =>
        [
          'shape' => 'MissingMeta',
          'location' => 'header',
          'locationName' => 'x-amz-missing-meta',
        ],
        'VersionId' =>
        [
          'shape' => 'ObjectVersionId',
          'location' => 'header',
          'locationName' => 'x-amz-version-id',
        ],
        'CacheControl' =>
        [
          'shape' => 'CacheControl',
          'location' => 'header',
          'locationName' => 'Cache-Control',
        ],
        'ContentDisposition' =>
        [
          'shape' => 'ContentDisposition',
          'location' => 'header',
          'locationName' => 'Content-Disposition',
        ],
        'ContentEncoding' =>
        [
          'shape' => 'ContentEncoding',
          'location' => 'header',
          'locationName' => 'Content-Encoding',
        ],
        'ContentLanguage' =>
        [
          'shape' => 'ContentLanguage',
          'location' => 'header',
          'locationName' => 'Content-Language',
        ],
        'ContentType' =>
        [
          'shape' => 'ContentType',
          'location' => 'header',
          'locationName' => 'Content-Type',
        ],
        'Expires' =>
        [
          'shape' => 'Expires',
          'location' => 'header',
          'locationName' => 'Expires',
        ],
        'WebsiteRedirectLocation' =>
        [
          'shape' => 'WebsiteRedirectLocation',
          'location' => 'header',
          'locationName' => 'x-amz-website-redirect-location',
        ],
        'ServerSideEncryption' =>
        [
          'shape' => 'ServerSideEncryption',
          'location' => 'header',
          'locationName' => 'x-amz-server-side-encryption',
        ],
        'Metadata' =>
        [
          'shape' => 'Metadata',
          'location' => 'headers',
          'locationName' => 'x-amz-meta-',
        ],
        'SSECustomerAlgorithm' =>
        [
          'shape' => 'SSECustomerAlgorithm',
          'location' => 'header',
          'locationName' => 'x-amz-server-side-encryption-customer-algorithm',
        ],
        'SSECustomerKeyMD5' =>
        [
          'shape' => 'SSECustomerKeyMD5',
          'location' => 'header',
          'locationName' => 'x-amz-server-side-encryption-customer-key-MD5',
        ],
      ],
      'payload' => 'Body',
    ],
    'GetObjectRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
        1 => 'Key',
      ],
      'members' =>
      [
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
        'IfMatch' =>
        [
          'shape' => 'IfMatch',
          'location' => 'header',
          'locationName' => 'If-Match',
        ],
        'IfModifiedSince' =>
        [
          'shape' => 'IfModifiedSince',
          'location' => 'header',
          'locationName' => 'If-Modified-Since',
        ],
        'IfNoneMatch' =>
        [
          'shape' => 'IfNoneMatch',
          'location' => 'header',
          'locationName' => 'If-None-Match',
        ],
        'IfUnmodifiedSince' =>
        [
          'shape' => 'IfUnmodifiedSince',
          'location' => 'header',
          'locationName' => 'If-Unmodified-Since',
        ],
        'Key' =>
        [
          'shape' => 'ObjectKey',
          'location' => 'uri',
          'locationName' => 'Key',
        ],
        'Range' =>
        [
          'shape' => 'Range',
          'location' => 'header',
          'locationName' => 'Range',
        ],
        'ResponseCacheControl' =>
        [
          'shape' => 'ResponseCacheControl',
          'location' => 'querystring',
          'locationName' => 'response-cache-control',
        ],
        'ResponseContentDisposition' =>
        [
          'shape' => 'ResponseContentDisposition',
          'location' => 'querystring',
          'locationName' => 'response-content-disposition',
        ],
        'ResponseContentEncoding' =>
        [
          'shape' => 'ResponseContentEncoding',
          'location' => 'querystring',
          'locationName' => 'response-content-encoding',
        ],
        'ResponseContentLanguage' =>
        [
          'shape' => 'ResponseContentLanguage',
          'location' => 'querystring',
          'locationName' => 'response-content-language',
        ],
        'ResponseContentType' =>
        [
          'shape' => 'ResponseContentType',
          'location' => 'querystring',
          'locationName' => 'response-content-type',
        ],
        'ResponseExpires' =>
        [
          'shape' => 'ResponseExpires',
          'location' => 'querystring',
          'locationName' => 'response-expires',
        ],
        'VersionId' =>
        [
          'shape' => 'ObjectVersionId',
          'location' => 'querystring',
          'locationName' => 'versionId',
        ],
        'SSECustomerAlgorithm' =>
        [
          'shape' => 'SSECustomerAlgorithm',
          'location' => 'header',
          'locationName' => 'x-amz-server-side-encryption-customer-algorithm',
        ],
        'SSECustomerKey' =>
        [
          'shape' => 'SSECustomerKey',
          'location' => 'header',
          'locationName' => 'x-amz-server-side-encryption-customer-key',
        ],
        'SSECustomerKeyMD5' =>
        [
          'shape' => 'SSECustomerKeyMD5',
          'location' => 'header',
          'locationName' => 'x-amz-server-side-encryption-customer-key-MD5',
        ],
      ],
    ],
    'GetObjectTorrentOutput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'Body' =>
        [
          'shape' => 'Body',
          'streaming' => true,
        ],
      ],
      'payload' => 'Body',
    ],
    'GetObjectTorrentRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
        1 => 'Key',
      ],
      'members' =>
      [
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
        'Key' =>
        [
          'shape' => 'ObjectKey',
          'location' => 'uri',
          'locationName' => 'Key',
        ],
      ],
    ],
    'Grant' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'Grantee' =>
        [
          'shape' => 'Grantee',
        ],
        'Permission' =>
        [
          'shape' => 'Permission',
        ],
      ],
    ],
    'GrantFullControl' =>
    [
      'type' => 'string',
    ],
    'GrantRead' =>
    [
      'type' => 'string',
    ],
    'GrantReadACP' =>
    [
      'type' => 'string',
    ],
    'GrantWrite' =>
    [
      'type' => 'string',
    ],
    'GrantWriteACP' =>
    [
      'type' => 'string',
    ],
    'Grantee' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Type',
      ],
      'members' =>
      [
        'DisplayName' =>
        [
          'shape' => 'DisplayName',
        ],
        'EmailAddress' =>
        [
          'shape' => 'EmailAddress',
        ],
        'ID' =>
        [
          'shape' => 'ID',
        ],
        'Type' =>
        [
          'shape' => 'Type',
        ],
        'URI' =>
        [
          'shape' => 'URI',
        ],
      ],
      'xmlNamespace' =>
      [
        'prefix' => 'xsi',
        'uri' => 'http://www.w3.org/2001/XMLSchema-instance',
      ],
    ],
    'Grants' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'Grant',
        'locationName' => 'Grant',
      ],
    ],
    'HeadBucketRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
      ],
      'members' =>
      [
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
      ],
    ],
    'HeadObjectOutput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'DeleteMarker' =>
        [
          'shape' => 'DeleteMarker',
          'location' => 'header',
          'locationName' => 'x-amz-delete-marker',
        ],
        'AcceptRanges' =>
        [
          'shape' => 'AcceptRanges',
          'location' => 'header',
          'locationName' => 'accept-ranges',
        ],
        'Expiration' =>
        [
          'shape' => 'Expiration',
          'location' => 'header',
          'locationName' => 'x-amz-expiration',
        ],
        'Restore' =>
        [
          'shape' => 'Restore',
          'location' => 'header',
          'locationName' => 'x-amz-restore',
        ],
        'LastModified' =>
        [
          'shape' => 'LastModified',
          'location' => 'header',
          'locationName' => 'Last-Modified',
        ],
        'ContentLength' =>
        [
          'shape' => 'ContentLength',
          'location' => 'header',
          'locationName' => 'Content-Length',
        ],
        'ETag' =>
        [
          'shape' => 'ETag',
          'location' => 'header',
          'locationName' => 'ETag',
        ],
        'MissingMeta' =>
        [
          'shape' => 'MissingMeta',
          'location' => 'header',
          'locationName' => 'x-amz-missing-meta',
        ],
        'VersionId' =>
        [
          'shape' => 'ObjectVersionId',
          'location' => 'header',
          'locationName' => 'x-amz-version-id',
        ],
        'CacheControl' =>
        [
          'shape' => 'CacheControl',
          'location' => 'header',
          'locationName' => 'Cache-Control',
        ],
        'ContentDisposition' =>
        [
          'shape' => 'ContentDisposition',
          'location' => 'header',
          'locationName' => 'Content-Disposition',
        ],
        'ContentEncoding' =>
        [
          'shape' => 'ContentEncoding',
          'location' => 'header',
          'locationName' => 'Content-Encoding',
        ],
        'ContentLanguage' =>
        [
          'shape' => 'ContentLanguage',
          'location' => 'header',
          'locationName' => 'Content-Language',
        ],
        'ContentType' =>
        [
          'shape' => 'ContentType',
          'location' => 'header',
          'locationName' => 'Content-Type',
        ],
        'Expires' =>
        [
          'shape' => 'Expires',
          'location' => 'header',
          'locationName' => 'Expires',
        ],
        'WebsiteRedirectLocation' =>
        [
          'shape' => 'WebsiteRedirectLocation',
          'location' => 'header',
          'locationName' => 'x-amz-website-redirect-location',
        ],
        'ServerSideEncryption' =>
        [
          'shape' => 'ServerSideEncryption',
          'location' => 'header',
          'locationName' => 'x-amz-server-side-encryption',
        ],
        'Metadata' =>
        [
          'shape' => 'Metadata',
          'location' => 'headers',
          'locationName' => 'x-amz-meta-',
        ],
        'SSECustomerAlgorithm' =>
        [
          'shape' => 'SSECustomerAlgorithm',
          'location' => 'header',
          'locationName' => 'x-amz-server-side-encryption-customer-algorithm',
        ],
        'SSECustomerKeyMD5' =>
        [
          'shape' => 'SSECustomerKeyMD5',
          'location' => 'header',
          'locationName' => 'x-amz-server-side-encryption-customer-key-MD5',
        ],
      ],
    ],
    'HeadObjectRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
        1 => 'Key',
      ],
      'members' =>
      [
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
        'IfMatch' =>
        [
          'shape' => 'IfMatch',
          'location' => 'header',
          'locationName' => 'If-Match',
        ],
        'IfModifiedSince' =>
        [
          'shape' => 'IfModifiedSince',
          'location' => 'header',
          'locationName' => 'If-Modified-Since',
        ],
        'IfNoneMatch' =>
        [
          'shape' => 'IfNoneMatch',
          'location' => 'header',
          'locationName' => 'If-None-Match',
        ],
        'IfUnmodifiedSince' =>
        [
          'shape' => 'IfUnmodifiedSince',
          'location' => 'header',
          'locationName' => 'If-Unmodified-Since',
        ],
        'Key' =>
        [
          'shape' => 'ObjectKey',
          'location' => 'uri',
          'locationName' => 'Key',
        ],
        'Range' =>
        [
          'shape' => 'Range',
          'location' => 'header',
          'locationName' => 'Range',
        ],
        'VersionId' =>
        [
          'shape' => 'ObjectVersionId',
          'location' => 'querystring',
          'locationName' => 'versionId',
        ],
        'SSECustomerAlgorithm' =>
        [
          'shape' => 'SSECustomerAlgorithm',
          'location' => 'header',
          'locationName' => 'x-amz-server-side-encryption-customer-algorithm',
        ],
        'SSECustomerKey' =>
        [
          'shape' => 'SSECustomerKey',
          'location' => 'header',
          'locationName' => 'x-amz-server-side-encryption-customer-key',
        ],
        'SSECustomerKeyMD5' =>
        [
          'shape' => 'SSECustomerKeyMD5',
          'location' => 'header',
          'locationName' => 'x-amz-server-side-encryption-customer-key-MD5',
        ],
      ],
    ],
    'HostName' =>
    [
      'type' => 'string',
    ],
    'HttpErrorCodeReturnedEquals' =>
    [
      'type' => 'string',
    ],
    'HttpRedirectCode' =>
    [
      'type' => 'string',
    ],
    'ID' =>
    [
      'type' => 'string',
    ],
    'IfMatch' =>
    [
      'type' => 'string',
    ],
    'IfModifiedSince' =>
    [
      'type' => 'timestamp',
    ],
    'IfNoneMatch' =>
    [
      'type' => 'string',
    ],
    'IfUnmodifiedSince' =>
    [
      'type' => 'timestamp',
    ],
    'IndexDocument' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Suffix',
      ],
      'members' =>
      [
        'Suffix' =>
        [
          'shape' => 'Suffix',
        ],
      ],
    ],
    'Initiated' =>
    [
      'type' => 'timestamp',
    ],
    'Initiator' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'ID' =>
        [
          'shape' => 'ID',
        ],
        'DisplayName' =>
        [
          'shape' => 'DisplayName',
        ],
      ],
    ],
    'IsLatest' =>
    [
      'type' => 'boolean',
    ],
    'IsTruncated' =>
    [
      'type' => 'boolean',
    ],
    'KeyMarker' =>
    [
      'type' => 'string',
    ],
    'KeyPrefixEquals' =>
    [
      'type' => 'string',
    ],
    'LastModified' =>
    [
      'type' => 'timestamp',
    ],
    'LifecycleConfiguration' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Rules',
      ],
      'members' =>
      [
        'Rules' =>
        [
          'shape' => 'Rules',
          'locationName' => 'Rule',
        ],
      ],
    ],
    'LifecycleExpiration' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'Date' =>
        [
          'shape' => 'Date',
        ],
        'Days' =>
        [
          'shape' => 'Days',
        ],
      ],
    ],
    'ListBucketsOutput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'Buckets' =>
        [
          'shape' => 'Buckets',
        ],
        'Owner' =>
        [
          'shape' => 'Owner',
        ],
      ],
    ],
    'ListMultipartUploadsOutput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'Bucket' =>
        [
          'shape' => 'BucketName',
        ],
        'KeyMarker' =>
        [
          'shape' => 'KeyMarker',
        ],
        'UploadIdMarker' =>
        [
          'shape' => 'UploadIdMarker',
        ],
        'NextKeyMarker' =>
        [
          'shape' => 'NextKeyMarker',
        ],
        'Prefix' =>
        [
          'shape' => 'Prefix',
        ],
        'NextUploadIdMarker' =>
        [
          'shape' => 'NextUploadIdMarker',
        ],
        'MaxUploads' =>
        [
          'shape' => 'MaxUploads',
        ],
        'IsTruncated' =>
        [
          'shape' => 'IsTruncated',
        ],
        'Uploads' =>
        [
          'shape' => 'MultipartUploadList',
          'locationName' => 'Upload',
        ],
        'CommonPrefixes' =>
        [
          'shape' => 'CommonPrefixList',
        ],
        'EncodingType' =>
        [
          'shape' => 'EncodingType',
        ],
      ],
    ],
    'ListMultipartUploadsRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
      ],
      'members' =>
      [
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
        'Delimiter' =>
        [
          'shape' => 'Delimiter',
          'location' => 'querystring',
          'locationName' => 'delimiter',
        ],
        'EncodingType' =>
        [
          'shape' => 'EncodingType',
          'location' => 'querystring',
          'locationName' => 'encoding-type',
        ],
        'KeyMarker' =>
        [
          'shape' => 'KeyMarker',
          'location' => 'querystring',
          'locationName' => 'key-marker',
        ],
        'MaxUploads' =>
        [
          'shape' => 'MaxUploads',
          'location' => 'querystring',
          'locationName' => 'max-uploads',
        ],
        'Prefix' =>
        [
          'shape' => 'Prefix',
          'location' => 'querystring',
          'locationName' => 'prefix',
        ],
        'UploadIdMarker' =>
        [
          'shape' => 'UploadIdMarker',
          'location' => 'querystring',
          'locationName' => 'upload-id-marker',
        ],
      ],
    ],
    'ListObjectVersionsOutput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'IsTruncated' =>
        [
          'shape' => 'IsTruncated',
        ],
        'KeyMarker' =>
        [
          'shape' => 'KeyMarker',
        ],
        'VersionIdMarker' =>
        [
          'shape' => 'VersionIdMarker',
        ],
        'NextKeyMarker' =>
        [
          'shape' => 'NextKeyMarker',
        ],
        'NextVersionIdMarker' =>
        [
          'shape' => 'NextVersionIdMarker',
        ],
        'Versions' =>
        [
          'shape' => 'ObjectVersionList',
          'locationName' => 'Version',
        ],
        'DeleteMarkers' =>
        [
          'shape' => 'DeleteMarkers',
          'locationName' => 'DeleteMarker',
        ],
        'Name' =>
        [
          'shape' => 'BucketName',
        ],
        'Prefix' =>
        [
          'shape' => 'Prefix',
        ],
        'MaxKeys' =>
        [
          'shape' => 'MaxKeys',
        ],
        'CommonPrefixes' =>
        [
          'shape' => 'CommonPrefixList',
        ],
        'EncodingType' =>
        [
          'shape' => 'EncodingType',
        ],
      ],
    ],
    'ListObjectVersionsRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
      ],
      'members' =>
      [
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
        'Delimiter' =>
        [
          'shape' => 'Delimiter',
          'location' => 'querystring',
          'locationName' => 'delimiter',
        ],
        'EncodingType' =>
        [
          'shape' => 'EncodingType',
          'location' => 'querystring',
          'locationName' => 'encoding-type',
        ],
        'KeyMarker' =>
        [
          'shape' => 'KeyMarker',
          'location' => 'querystring',
          'locationName' => 'key-marker',
        ],
        'MaxKeys' =>
        [
          'shape' => 'MaxKeys',
          'location' => 'querystring',
          'locationName' => 'max-keys',
        ],
        'Prefix' =>
        [
          'shape' => 'Prefix',
          'location' => 'querystring',
          'locationName' => 'prefix',
        ],
        'VersionIdMarker' =>
        [
          'shape' => 'VersionIdMarker',
          'location' => 'querystring',
          'locationName' => 'version-id-marker',
        ],
      ],
    ],
    'ListObjectsOutput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'IsTruncated' =>
        [
          'shape' => 'IsTruncated',
        ],
        'Marker' =>
        [
          'shape' => 'Marker',
        ],
        'NextMarker' =>
        [
          'shape' => 'NextMarker',
        ],
        'Contents' =>
        [
          'shape' => 'ObjectList',
        ],
        'Name' =>
        [
          'shape' => 'BucketName',
        ],
        'Prefix' =>
        [
          'shape' => 'Prefix',
        ],
        'MaxKeys' =>
        [
          'shape' => 'MaxKeys',
        ],
        'CommonPrefixes' =>
        [
          'shape' => 'CommonPrefixList',
        ],
        'EncodingType' =>
        [
          'shape' => 'EncodingType',
        ],
      ],
    ],
    'ListObjectsRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
      ],
      'members' =>
      [
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
        'Delimiter' =>
        [
          'shape' => 'Delimiter',
          'location' => 'querystring',
          'locationName' => 'delimiter',
        ],
        'EncodingType' =>
        [
          'shape' => 'EncodingType',
          'location' => 'querystring',
          'locationName' => 'encoding-type',
        ],
        'Marker' =>
        [
          'shape' => 'Marker',
          'location' => 'querystring',
          'locationName' => 'marker',
        ],
        'MaxKeys' =>
        [
          'shape' => 'MaxKeys',
          'location' => 'querystring',
          'locationName' => 'max-keys',
        ],
        'Prefix' =>
        [
          'shape' => 'Prefix',
          'location' => 'querystring',
          'locationName' => 'prefix',
        ],
      ],
    ],
    'ListPartsOutput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'Bucket' =>
        [
          'shape' => 'BucketName',
        ],
        'Key' =>
        [
          'shape' => 'ObjectKey',
        ],
        'UploadId' =>
        [
          'shape' => 'MultipartUploadId',
        ],
        'PartNumberMarker' =>
        [
          'shape' => 'PartNumberMarker',
        ],
        'NextPartNumberMarker' =>
        [
          'shape' => 'NextPartNumberMarker',
        ],
        'MaxParts' =>
        [
          'shape' => 'MaxParts',
        ],
        'IsTruncated' =>
        [
          'shape' => 'IsTruncated',
        ],
        'Parts' =>
        [
          'shape' => 'Parts',
          'locationName' => 'Part',
        ],
        'Initiator' =>
        [
          'shape' => 'Initiator',
        ],
        'Owner' =>
        [
          'shape' => 'Owner',
        ],
        'StorageClass' =>
        [
          'shape' => 'StorageClass',
        ],
      ],
    ],
    'ListPartsRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
        1 => 'Key',
        2 => 'UploadId',
      ],
      'members' =>
      [
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
        'Key' =>
        [
          'shape' => 'ObjectKey',
          'location' => 'uri',
          'locationName' => 'Key',
        ],
        'MaxParts' =>
        [
          'shape' => 'MaxParts',
          'location' => 'querystring',
          'locationName' => 'max-parts',
        ],
        'PartNumberMarker' =>
        [
          'shape' => 'PartNumberMarker',
          'location' => 'querystring',
          'locationName' => 'part-number-marker',
        ],
        'UploadId' =>
        [
          'shape' => 'MultipartUploadId',
          'location' => 'querystring',
          'locationName' => 'uploadId',
        ],
      ],
    ],
    'Location' =>
    [
      'type' => 'string',
    ],
    'LoggingEnabled' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'TargetBucket' =>
        [
          'shape' => 'TargetBucket',
        ],
        'TargetGrants' =>
        [
          'shape' => 'TargetGrants',
        ],
        'TargetPrefix' =>
        [
          'shape' => 'TargetPrefix',
        ],
      ],
    ],
    'MFA' =>
    [
      'type' => 'string',
    ],
    'MFADelete' =>
    [
      'type' => 'string',
      'enum' =>
      [
        0 => 'Enabled',
        1 => 'Disabled',
      ],
    ],
    'MFADeleteStatus' =>
    [
      'type' => 'string',
      'enum' =>
      [
        0 => 'Enabled',
        1 => 'Disabled',
      ],
    ],
    'Marker' =>
    [
      'type' => 'string',
    ],
    'MaxAgeSeconds' =>
    [
      'type' => 'integer',
    ],
    'MaxKeys' =>
    [
      'type' => 'integer',
    ],
    'MaxParts' =>
    [
      'type' => 'integer',
    ],
    'MaxUploads' =>
    [
      'type' => 'integer',
    ],
    'Message' =>
    [
      'type' => 'string',
    ],
    'Metadata' =>
    [
      'type' => 'map',
      'key' =>
      [
        'shape' => 'MetadataKey',
      ],
      'value' =>
      [
        'shape' => 'MetadataValue',
      ],
    ],
    'MetadataDirective' =>
    [
      'type' => 'string',
      'enum' =>
      [
        0 => 'COPY',
        1 => 'REPLACE',
      ],
    ],
    'MetadataKey' =>
    [
      'type' => 'string',
    ],
    'MetadataValue' =>
    [
      'type' => 'string',
    ],
    'MissingMeta' =>
    [
      'type' => 'integer',
    ],
    'MultipartUpload' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'UploadId' =>
        [
          'shape' => 'MultipartUploadId',
        ],
        'Key' =>
        [
          'shape' => 'ObjectKey',
        ],
        'Initiated' =>
        [
          'shape' => 'Initiated',
        ],
        'StorageClass' =>
        [
          'shape' => 'StorageClass',
        ],
        'Owner' =>
        [
          'shape' => 'Owner',
        ],
        'Initiator' =>
        [
          'shape' => 'Initiator',
        ],
      ],
    ],
    'MultipartUploadId' =>
    [
      'type' => 'string',
    ],
    'MultipartUploadList' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'MultipartUpload',
      ],
      'flattened' => true,
    ],
    'NextKeyMarker' =>
    [
      'type' => 'string',
    ],
    'NextMarker' =>
    [
      'type' => 'string',
    ],
    'NextPartNumberMarker' =>
    [
      'type' => 'integer',
    ],
    'NextUploadIdMarker' =>
    [
      'type' => 'string',
    ],
    'NextVersionIdMarker' =>
    [
      'type' => 'string',
    ],
    'NoSuchBucket' =>
    [
      'type' => 'structure',
      'members' =>
      [
      ],
      'exception' => true,
    ],
    'NoSuchKey' =>
    [
      'type' => 'structure',
      'members' =>
      [
      ],
      'exception' => true,
    ],
    'NoSuchUpload' =>
    [
      'type' => 'structure',
      'members' =>
      [
      ],
      'exception' => true,
    ],
    'NoncurrentVersionExpiration' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'NoncurrentDays' =>
        [
          'shape' => 'Days',
        ],
      ],
    ],
    'NoncurrentVersionTransition' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'NoncurrentDays' =>
        [
          'shape' => 'Days',
        ],
        'StorageClass' =>
        [
          'shape' => 'TransitionStorageClass',
        ],
      ],
    ],
    'NotificationConfiguration' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'TopicConfiguration',
      ],
      'members' =>
      [
        'TopicConfiguration' =>
        [
          'shape' => 'TopicConfiguration',
        ],
      ],
    ],
    'Object' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'Key' =>
        [
          'shape' => 'ObjectKey',
        ],
        'LastModified' =>
        [
          'shape' => 'LastModified',
        ],
        'ETag' =>
        [
          'shape' => 'ETag',
        ],
        'Size' =>
        [
          'shape' => 'Size',
        ],
        'StorageClass' =>
        [
          'shape' => 'ObjectStorageClass',
        ],
        'Owner' =>
        [
          'shape' => 'Owner',
        ],
      ],
    ],
    'ObjectAlreadyInActiveTierError' =>
    [
      'type' => 'structure',
      'members' =>
      [
      ],
      'exception' => true,
    ],
    'ObjectCannedACL' =>
    [
      'type' => 'string',
      'enum' =>
      [
        0 => 'private',
        1 => 'public-read',
        2 => 'public-read-write',
        3 => 'authenticated-read',
        4 => 'bucket-owner-read',
        5 => 'bucket-owner-full-control',
      ],
    ],
    'ObjectIdentifier' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Key',
      ],
      'members' =>
      [
        'Key' =>
        [
          'shape' => 'ObjectKey',
        ],
        'VersionId' =>
        [
          'shape' => 'ObjectVersionId',
        ],
      ],
    ],
    'ObjectIdentifierList' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'ObjectIdentifier',
      ],
      'flattened' => true,
    ],
    'ObjectKey' =>
    [
      'type' => 'string',
    ],
    'ObjectList' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'Object',
      ],
      'flattened' => true,
    ],
    'ObjectNotInActiveTierError' =>
    [
      'type' => 'structure',
      'members' =>
      [
      ],
      'exception' => true,
    ],
    'ObjectStorageClass' =>
    [
      'type' => 'string',
      'enum' =>
      [
        0 => 'STANDARD',
        1 => 'REDUCED_REDUNDANCY',
        2 => 'GLACIER',
      ],
    ],
    'ObjectVersion' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'ETag' =>
        [
          'shape' => 'ETag',
        ],
        'Size' =>
        [
          'shape' => 'Size',
        ],
        'StorageClass' =>
        [
          'shape' => 'ObjectVersionStorageClass',
        ],
        'Key' =>
        [
          'shape' => 'ObjectKey',
        ],
        'VersionId' =>
        [
          'shape' => 'ObjectVersionId',
        ],
        'IsLatest' =>
        [
          'shape' => 'IsLatest',
        ],
        'LastModified' =>
        [
          'shape' => 'LastModified',
        ],
        'Owner' =>
        [
          'shape' => 'Owner',
        ],
      ],
    ],
    'ObjectVersionId' =>
    [
      'type' => 'string',
    ],
    'ObjectVersionList' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'ObjectVersion',
      ],
      'flattened' => true,
    ],
    'ObjectVersionStorageClass' =>
    [
      'type' => 'string',
      'enum' =>
      [
        0 => 'STANDARD',
      ],
    ],
    'Owner' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'DisplayName' =>
        [
          'shape' => 'DisplayName',
        ],
        'ID' =>
        [
          'shape' => 'ID',
        ],
      ],
    ],
    'Part' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'PartNumber' =>
        [
          'shape' => 'PartNumber',
        ],
        'LastModified' =>
        [
          'shape' => 'LastModified',
        ],
        'ETag' =>
        [
          'shape' => 'ETag',
        ],
        'Size' =>
        [
          'shape' => 'Size',
        ],
      ],
    ],
    'PartNumber' =>
    [
      'type' => 'integer',
    ],
    'PartNumberMarker' =>
    [
      'type' => 'integer',
    ],
    'Parts' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'Part',
      ],
      'flattened' => true,
    ],
    'Payer' =>
    [
      'type' => 'string',
      'enum' =>
      [
        0 => 'Requester',
        1 => 'BucketOwner',
      ],
    ],
    'Permission' =>
    [
      'type' => 'string',
      'enum' =>
      [
        0 => 'FULL_CONTROL',
        1 => 'WRITE',
        2 => 'WRITE_ACP',
        3 => 'READ',
        4 => 'READ_ACP',
      ],
    ],
    'Policy' =>
    [
      'type' => 'string',
    ],
    'Prefix' =>
    [
      'type' => 'string',
    ],
    'Protocol' =>
    [
      'type' => 'string',
      'enum' =>
      [
        0 => 'http',
        1 => 'https',
      ],
    ],
    'PutBucketAclRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
      ],
      'members' =>
      [
        'ACL' =>
        [
          'shape' => 'BucketCannedACL',
          'location' => 'header',
          'locationName' => 'x-amz-acl',
        ],
        'AccessControlPolicy' =>
        [
          'shape' => 'AccessControlPolicy',
          'xmlNamespace' =>
          [
            'uri' => 'http://s3.amazonaws.com/doc/2006-03-01/',
          ],
          'locationName' => 'AccessControlPolicy',
        ],
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
        'ContentMD5' =>
        [
          'shape' => 'ContentMD5',
          'location' => 'header',
          'locationName' => 'Content-MD5',
        ],
        'GrantFullControl' =>
        [
          'shape' => 'GrantFullControl',
          'location' => 'header',
          'locationName' => 'x-amz-grant-full-control',
        ],
        'GrantRead' =>
        [
          'shape' => 'GrantRead',
          'location' => 'header',
          'locationName' => 'x-amz-grant-read',
        ],
        'GrantReadACP' =>
        [
          'shape' => 'GrantReadACP',
          'location' => 'header',
          'locationName' => 'x-amz-grant-read-acp',
        ],
        'GrantWrite' =>
        [
          'shape' => 'GrantWrite',
          'location' => 'header',
          'locationName' => 'x-amz-grant-write',
        ],
        'GrantWriteACP' =>
        [
          'shape' => 'GrantWriteACP',
          'location' => 'header',
          'locationName' => 'x-amz-grant-write-acp',
        ],
      ],
      'payload' => 'AccessControlPolicy',
    ],
    'PutBucketCorsRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
      ],
      'members' =>
      [
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
        'CORSConfiguration' =>
        [
          'shape' => 'CORSConfiguration',
          'xmlNamespace' =>
          [
            'uri' => 'http://s3.amazonaws.com/doc/2006-03-01/',
          ],
          'locationName' => 'CORSConfiguration',
        ],
        'ContentMD5' =>
        [
          'shape' => 'ContentMD5',
          'location' => 'header',
          'locationName' => 'Content-MD5',
        ],
      ],
      'payload' => 'CORSConfiguration',
    ],
    'PutBucketLifecycleRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
      ],
      'members' =>
      [
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
        'ContentMD5' =>
        [
          'shape' => 'ContentMD5',
          'location' => 'header',
          'locationName' => 'Content-MD5',
        ],
        'LifecycleConfiguration' =>
        [
          'shape' => 'LifecycleConfiguration',
          'xmlNamespace' =>
          [
            'uri' => 'http://s3.amazonaws.com/doc/2006-03-01/',
          ],
          'locationName' => 'LifecycleConfiguration',
        ],
      ],
      'payload' => 'LifecycleConfiguration',
    ],
    'PutBucketLoggingRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
        1 => 'BucketLoggingStatus',
      ],
      'members' =>
      [
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
        'BucketLoggingStatus' =>
        [
          'shape' => 'BucketLoggingStatus',
          'xmlNamespace' =>
          [
            'uri' => 'http://s3.amazonaws.com/doc/2006-03-01/',
          ],
          'locationName' => 'BucketLoggingStatus',
        ],
        'ContentMD5' =>
        [
          'shape' => 'ContentMD5',
          'location' => 'header',
          'locationName' => 'Content-MD5',
        ],
      ],
      'payload' => 'BucketLoggingStatus',
    ],
    'PutBucketNotificationRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
        1 => 'NotificationConfiguration',
      ],
      'members' =>
      [
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
        'ContentMD5' =>
        [
          'shape' => 'ContentMD5',
          'location' => 'header',
          'locationName' => 'Content-MD5',
        ],
        'NotificationConfiguration' =>
        [
          'shape' => 'NotificationConfiguration',
          'xmlNamespace' =>
          [
            'uri' => 'http://s3.amazonaws.com/doc/2006-03-01/',
          ],
          'locationName' => 'NotificationConfiguration',
        ],
      ],
      'payload' => 'NotificationConfiguration',
    ],
    'PutBucketPolicyRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
        1 => 'Policy',
      ],
      'members' =>
      [
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
        'ContentMD5' =>
        [
          'shape' => 'ContentMD5',
          'location' => 'header',
          'locationName' => 'Content-MD5',
        ],
        'Policy' =>
        [
          'shape' => 'Policy',
        ],
      ],
      'payload' => 'Policy',
    ],
    'PutBucketRequestPaymentRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
        1 => 'RequestPaymentConfiguration',
      ],
      'members' =>
      [
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
        'ContentMD5' =>
        [
          'shape' => 'ContentMD5',
          'location' => 'header',
          'locationName' => 'Content-MD5',
        ],
        'RequestPaymentConfiguration' =>
        [
          'shape' => 'RequestPaymentConfiguration',
          'xmlNamespace' =>
          [
            'uri' => 'http://s3.amazonaws.com/doc/2006-03-01/',
          ],
          'locationName' => 'RequestPaymentConfiguration',
        ],
      ],
      'payload' => 'RequestPaymentConfiguration',
    ],
    'PutBucketTaggingRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
        1 => 'Tagging',
      ],
      'members' =>
      [
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
        'ContentMD5' =>
        [
          'shape' => 'ContentMD5',
          'location' => 'header',
          'locationName' => 'Content-MD5',
        ],
        'Tagging' =>
        [
          'shape' => 'Tagging',
          'xmlNamespace' =>
          [
            'uri' => 'http://s3.amazonaws.com/doc/2006-03-01/',
          ],
          'locationName' => 'Tagging',
        ],
      ],
      'payload' => 'Tagging',
    ],
    'PutBucketVersioningRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
        1 => 'VersioningConfiguration',
      ],
      'members' =>
      [
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
        'ContentMD5' =>
        [
          'shape' => 'ContentMD5',
          'location' => 'header',
          'locationName' => 'Content-MD5',
        ],
        'MFA' =>
        [
          'shape' => 'MFA',
          'location' => 'header',
          'locationName' => 'x-amz-mfa',
        ],
        'VersioningConfiguration' =>
        [
          'shape' => 'VersioningConfiguration',
          'xmlNamespace' =>
          [
            'uri' => 'http://s3.amazonaws.com/doc/2006-03-01/',
          ],
          'locationName' => 'VersioningConfiguration',
        ],
      ],
      'payload' => 'VersioningConfiguration',
    ],
    'PutBucketWebsiteRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
        1 => 'WebsiteConfiguration',
      ],
      'members' =>
      [
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
        'ContentMD5' =>
        [
          'shape' => 'ContentMD5',
          'location' => 'header',
          'locationName' => 'Content-MD5',
        ],
        'WebsiteConfiguration' =>
        [
          'shape' => 'WebsiteConfiguration',
          'xmlNamespace' =>
          [
            'uri' => 'http://s3.amazonaws.com/doc/2006-03-01/',
          ],
          'locationName' => 'WebsiteConfiguration',
        ],
      ],
      'payload' => 'WebsiteConfiguration',
    ],
    'PutObjectAclRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
        1 => 'Key',
      ],
      'members' =>
      [
        'ACL' =>
        [
          'shape' => 'ObjectCannedACL',
          'location' => 'header',
          'locationName' => 'x-amz-acl',
        ],
        'AccessControlPolicy' =>
        [
          'shape' => 'AccessControlPolicy',
          'xmlNamespace' =>
          [
            'uri' => 'http://s3.amazonaws.com/doc/2006-03-01/',
          ],
          'locationName' => 'AccessControlPolicy',
        ],
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
        'ContentMD5' =>
        [
          'shape' => 'ContentMD5',
          'location' => 'header',
          'locationName' => 'Content-MD5',
        ],
        'GrantFullControl' =>
        [
          'shape' => 'GrantFullControl',
          'location' => 'header',
          'locationName' => 'x-amz-grant-full-control',
        ],
        'GrantRead' =>
        [
          'shape' => 'GrantRead',
          'location' => 'header',
          'locationName' => 'x-amz-grant-read',
        ],
        'GrantReadACP' =>
        [
          'shape' => 'GrantReadACP',
          'location' => 'header',
          'locationName' => 'x-amz-grant-read-acp',
        ],
        'GrantWrite' =>
        [
          'shape' => 'GrantWrite',
          'location' => 'header',
          'locationName' => 'x-amz-grant-write',
        ],
        'GrantWriteACP' =>
        [
          'shape' => 'GrantWriteACP',
          'location' => 'header',
          'locationName' => 'x-amz-grant-write-acp',
        ],
        'Key' =>
        [
          'shape' => 'ObjectKey',
          'location' => 'uri',
          'locationName' => 'Key',
        ],
      ],
      'payload' => 'AccessControlPolicy',
    ],
    'PutObjectOutput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'Expiration' =>
        [
          'shape' => 'Expiration',
          'location' => 'header',
          'locationName' => 'x-amz-expiration',
        ],
        'ETag' =>
        [
          'shape' => 'ETag',
          'location' => 'header',
          'locationName' => 'ETag',
        ],
        'ServerSideEncryption' =>
        [
          'shape' => 'ServerSideEncryption',
          'location' => 'header',
          'locationName' => 'x-amz-server-side-encryption',
        ],
        'VersionId' =>
        [
          'shape' => 'ObjectVersionId',
          'location' => 'header',
          'locationName' => 'x-amz-version-id',
        ],
        'SSECustomerAlgorithm' =>
        [
          'shape' => 'SSECustomerAlgorithm',
          'location' => 'header',
          'locationName' => 'x-amz-server-side-encryption-customer-algorithm',
        ],
        'SSECustomerKeyMD5' =>
        [
          'shape' => 'SSECustomerKeyMD5',
          'location' => 'header',
          'locationName' => 'x-amz-server-side-encryption-customer-key-MD5',
        ],
      ],
    ],
    'PutObjectRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
        1 => 'Key',
      ],
      'members' =>
      [
        'ACL' =>
        [
          'shape' => 'ObjectCannedACL',
          'location' => 'header',
          'locationName' => 'x-amz-acl',
        ],
        'Body' =>
        [
          'shape' => 'Body',
          'streaming' => true,
        ],
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
        'CacheControl' =>
        [
          'shape' => 'CacheControl',
          'location' => 'header',
          'locationName' => 'Cache-Control',
        ],
        'ContentDisposition' =>
        [
          'shape' => 'ContentDisposition',
          'location' => 'header',
          'locationName' => 'Content-Disposition',
        ],
        'ContentEncoding' =>
        [
          'shape' => 'ContentEncoding',
          'location' => 'header',
          'locationName' => 'Content-Encoding',
        ],
        'ContentLanguage' =>
        [
          'shape' => 'ContentLanguage',
          'location' => 'header',
          'locationName' => 'Content-Language',
        ],
        'ContentLength' =>
        [
          'shape' => 'ContentLength',
          'location' => 'header',
          'locationName' => 'Content-Length',
        ],
        'ContentMD5' =>
        [
          'shape' => 'ContentMD5',
          'location' => 'header',
          'locationName' => 'Content-MD5',
        ],
        'ContentType' =>
        [
          'shape' => 'ContentType',
          'location' => 'header',
          'locationName' => 'Content-Type',
        ],
        'Expires' =>
        [
          'shape' => 'Expires',
          'location' => 'header',
          'locationName' => 'Expires',
        ],
        'GrantFullControl' =>
        [
          'shape' => 'GrantFullControl',
          'location' => 'header',
          'locationName' => 'x-amz-grant-full-control',
        ],
        'GrantRead' =>
        [
          'shape' => 'GrantRead',
          'location' => 'header',
          'locationName' => 'x-amz-grant-read',
        ],
        'GrantReadACP' =>
        [
          'shape' => 'GrantReadACP',
          'location' => 'header',
          'locationName' => 'x-amz-grant-read-acp',
        ],
        'GrantWriteACP' =>
        [
          'shape' => 'GrantWriteACP',
          'location' => 'header',
          'locationName' => 'x-amz-grant-write-acp',
        ],
        'Key' =>
        [
          'shape' => 'ObjectKey',
          'location' => 'uri',
          'locationName' => 'Key',
        ],
        'Metadata' =>
        [
          'shape' => 'Metadata',
          'location' => 'headers',
          'locationName' => 'x-amz-meta-',
        ],
        'ServerSideEncryption' =>
        [
          'shape' => 'ServerSideEncryption',
          'location' => 'header',
          'locationName' => 'x-amz-server-side-encryption',
        ],
        'StorageClass' =>
        [
          'shape' => 'StorageClass',
          'location' => 'header',
          'locationName' => 'x-amz-storage-class',
        ],
        'WebsiteRedirectLocation' =>
        [
          'shape' => 'WebsiteRedirectLocation',
          'location' => 'header',
          'locationName' => 'x-amz-website-redirect-location',
        ],
        'SSECustomerAlgorithm' =>
        [
          'shape' => 'SSECustomerAlgorithm',
          'location' => 'header',
          'locationName' => 'x-amz-server-side-encryption-customer-algorithm',
        ],
        'SSECustomerKey' =>
        [
          'shape' => 'SSECustomerKey',
          'location' => 'header',
          'locationName' => 'x-amz-server-side-encryption-customer-key',
        ],
        'SSECustomerKeyMD5' =>
        [
          'shape' => 'SSECustomerKeyMD5',
          'location' => 'header',
          'locationName' => 'x-amz-server-side-encryption-customer-key-MD5',
        ],
      ],
      'payload' => 'Body',
    ],
    'Quiet' =>
    [
      'type' => 'boolean',
    ],
    'Range' =>
    [
      'type' => 'string',
    ],
    'Redirect' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'HostName' =>
        [
          'shape' => 'HostName',
        ],
        'HttpRedirectCode' =>
        [
          'shape' => 'HttpRedirectCode',
        ],
        'Protocol' =>
        [
          'shape' => 'Protocol',
        ],
        'ReplaceKeyPrefixWith' =>
        [
          'shape' => 'ReplaceKeyPrefixWith',
        ],
        'ReplaceKeyWith' =>
        [
          'shape' => 'ReplaceKeyWith',
        ],
      ],
    ],
    'RedirectAllRequestsTo' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'HostName',
      ],
      'members' =>
      [
        'HostName' =>
        [
          'shape' => 'HostName',
        ],
        'Protocol' =>
        [
          'shape' => 'Protocol',
        ],
      ],
    ],
    'ReplaceKeyPrefixWith' =>
    [
      'type' => 'string',
    ],
    'ReplaceKeyWith' =>
    [
      'type' => 'string',
    ],
    'RequestPaymentConfiguration' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Payer',
      ],
      'members' =>
      [
        'Payer' =>
        [
          'shape' => 'Payer',
        ],
      ],
    ],
    'ResponseCacheControl' =>
    [
      'type' => 'string',
    ],
    'ResponseContentDisposition' =>
    [
      'type' => 'string',
    ],
    'ResponseContentEncoding' =>
    [
      'type' => 'string',
    ],
    'ResponseContentLanguage' =>
    [
      'type' => 'string',
    ],
    'ResponseContentType' =>
    [
      'type' => 'string',
    ],
    'ResponseExpires' =>
    [
      'type' => 'timestamp',
    ],
    'Restore' =>
    [
      'type' => 'string',
    ],
    'RestoreObjectRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
        1 => 'Key',
      ],
      'members' =>
      [
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
        'Key' =>
        [
          'shape' => 'ObjectKey',
          'location' => 'uri',
          'locationName' => 'Key',
        ],
        'VersionId' =>
        [
          'shape' => 'ObjectVersionId',
          'location' => 'querystring',
          'locationName' => 'versionId',
        ],
        'RestoreRequest' =>
        [
          'shape' => 'RestoreRequest',
          'xmlNamespace' =>
          [
            'uri' => 'http://s3.amazonaws.com/doc/2006-03-01/',
          ],
          'locationName' => 'RestoreRequest',
        ],
      ],
      'payload' => 'RestoreRequest',
    ],
    'RestoreRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Days',
      ],
      'members' =>
      [
        'Days' =>
        [
          'shape' => 'Days',
        ],
      ],
    ],
    'RoutingRule' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Redirect',
      ],
      'members' =>
      [
        'Condition' =>
        [
          'shape' => 'Condition',
        ],
        'Redirect' =>
        [
          'shape' => 'Redirect',
        ],
      ],
    ],
    'RoutingRules' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'RoutingRule',
        'locationName' => 'RoutingRule',
      ],
    ],
    'Rule' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Prefix',
        1 => 'Status',
      ],
      'members' =>
      [
        'Expiration' =>
        [
          'shape' => 'LifecycleExpiration',
        ],
        'ID' =>
        [
          'shape' => 'ID',
        ],
        'Prefix' =>
        [
          'shape' => 'Prefix',
        ],
        'Status' =>
        [
          'shape' => 'ExpirationStatus',
        ],
        'Transition' =>
        [
          'shape' => 'Transition',
        ],
        'NoncurrentVersionTransition' =>
        [
          'shape' => 'NoncurrentVersionTransition',
        ],
        'NoncurrentVersionExpiration' =>
        [
          'shape' => 'NoncurrentVersionExpiration',
        ],
      ],
    ],
    'Rules' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'Rule',
      ],
      'flattened' => true,
    ],
    'SSECustomerAlgorithm' =>
    [
      'type' => 'string',
    ],
    'SSECustomerKey' =>
    [
      'type' => 'string',
      'sensitive' => true,
    ],
    'SSECustomerKeyMD5' =>
    [
      'type' => 'string',
    ],
    'ServerSideEncryption' =>
    [
      'type' => 'string',
      'enum' =>
      [
        0 => 'AES256',
      ],
    ],
    'Size' =>
    [
      'type' => 'integer',
    ],
    'StorageClass' =>
    [
      'type' => 'string',
      'enum' =>
      [
        0 => 'STANDARD',
        1 => 'REDUCED_REDUNDANCY',
      ],
    ],
    'Suffix' =>
    [
      'type' => 'string',
    ],
    'Tag' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Key',
        1 => 'Value',
      ],
      'members' =>
      [
        'Key' =>
        [
          'shape' => 'ObjectKey',
        ],
        'Value' =>
        [
          'shape' => 'Value',
        ],
      ],
    ],
    'TagSet' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'Tag',
        'locationName' => 'Tag',
      ],
    ],
    'Tagging' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'TagSet',
      ],
      'members' =>
      [
        'TagSet' =>
        [
          'shape' => 'TagSet',
        ],
      ],
    ],
    'TargetBucket' =>
    [
      'type' => 'string',
    ],
    'TargetGrant' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'Grantee' =>
        [
          'shape' => 'Grantee',
        ],
        'Permission' =>
        [
          'shape' => 'BucketLogsPermission',
        ],
      ],
    ],
    'TargetGrants' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'TargetGrant',
        'locationName' => 'Grant',
      ],
    ],
    'TargetPrefix' =>
    [
      'type' => 'string',
    ],
    'Topic' =>
    [
      'type' => 'string',
    ],
    'TopicConfiguration' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'Event' =>
        [
          'shape' => 'Event',
        ],
        'Topic' =>
        [
          'shape' => 'Topic',
        ],
      ],
    ],
    'Transition' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'Date' =>
        [
          'shape' => 'Date',
        ],
        'Days' =>
        [
          'shape' => 'Days',
        ],
        'StorageClass' =>
        [
          'shape' => 'TransitionStorageClass',
        ],
      ],
    ],
    'TransitionStorageClass' =>
    [
      'type' => 'string',
      'enum' =>
      [
        0 => 'GLACIER',
      ],
    ],
    'Type' =>
    [
      'type' => 'string',
      'enum' =>
      [
        0 => 'CanonicalUser',
        1 => 'AmazonCustomerByEmail',
        2 => 'Group',
      ],
      'xmlAttribute' => true,
      'locationName' => 'xsi:type',
    ],
    'URI' =>
    [
      'type' => 'string',
    ],
    'UploadIdMarker' =>
    [
      'type' => 'string',
    ],
    'UploadPartCopyOutput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'CopySourceVersionId' =>
        [
          'shape' => 'CopySourceVersionId',
          'location' => 'header',
          'locationName' => 'x-amz-copy-source-version-id',
        ],
        'CopyPartResult' =>
        [
          'shape' => 'CopyPartResult',
        ],
        'ServerSideEncryption' =>
        [
          'shape' => 'ServerSideEncryption',
          'location' => 'header',
          'locationName' => 'x-amz-server-side-encryption',
        ],
        'SSECustomerAlgorithm' =>
        [
          'shape' => 'SSECustomerAlgorithm',
          'location' => 'header',
          'locationName' => 'x-amz-server-side-encryption-customer-algorithm',
        ],
        'SSECustomerKeyMD5' =>
        [
          'shape' => 'SSECustomerKeyMD5',
          'location' => 'header',
          'locationName' => 'x-amz-server-side-encryption-customer-key-MD5',
        ],
      ],
      'payload' => 'CopyPartResult',
    ],
    'UploadPartCopyRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
        1 => 'CopySource',
        2 => 'Key',
        3 => 'PartNumber',
        4 => 'UploadId',
      ],
      'members' =>
      [
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
        'CopySource' =>
        [
          'shape' => 'CopySource',
          'location' => 'header',
          'locationName' => 'x-amz-copy-source',
        ],
        'CopySourceIfMatch' =>
        [
          'shape' => 'CopySourceIfMatch',
          'location' => 'header',
          'locationName' => 'x-amz-copy-source-if-match',
        ],
        'CopySourceIfModifiedSince' =>
        [
          'shape' => 'CopySourceIfModifiedSince',
          'location' => 'header',
          'locationName' => 'x-amz-copy-source-if-modified-since',
        ],
        'CopySourceIfNoneMatch' =>
        [
          'shape' => 'CopySourceIfNoneMatch',
          'location' => 'header',
          'locationName' => 'x-amz-copy-source-if-none-match',
        ],
        'CopySourceIfUnmodifiedSince' =>
        [
          'shape' => 'CopySourceIfUnmodifiedSince',
          'location' => 'header',
          'locationName' => 'x-amz-copy-source-if-unmodified-since',
        ],
        'CopySourceRange' =>
        [
          'shape' => 'CopySourceRange',
          'location' => 'header',
          'locationName' => 'x-amz-copy-source-range',
        ],
        'Key' =>
        [
          'shape' => 'ObjectKey',
          'location' => 'uri',
          'locationName' => 'Key',
        ],
        'PartNumber' =>
        [
          'shape' => 'PartNumber',
          'location' => 'querystring',
          'locationName' => 'partNumber',
        ],
        'UploadId' =>
        [
          'shape' => 'MultipartUploadId',
          'location' => 'querystring',
          'locationName' => 'uploadId',
        ],
        'SSECustomerAlgorithm' =>
        [
          'shape' => 'SSECustomerAlgorithm',
          'location' => 'header',
          'locationName' => 'x-amz-server-side-encryption-customer-algorithm',
        ],
        'SSECustomerKey' =>
        [
          'shape' => 'SSECustomerKey',
          'location' => 'header',
          'locationName' => 'x-amz-server-side-encryption-customer-key',
        ],
        'SSECustomerKeyMD5' =>
        [
          'shape' => 'SSECustomerKeyMD5',
          'location' => 'header',
          'locationName' => 'x-amz-server-side-encryption-customer-key-MD5',
        ],
        'CopySourceSSECustomerAlgorithm' =>
        [
          'shape' => 'CopySourceSSECustomerAlgorithm',
          'location' => 'header',
          'locationName' => 'x-amz-copy-source-server-side-encryption-customer-algorithm',
        ],
        'CopySourceSSECustomerKey' =>
        [
          'shape' => 'CopySourceSSECustomerKey',
          'location' => 'header',
          'locationName' => 'x-amz-copy-source-server-side-encryption-customer-key',
        ],
        'CopySourceSSECustomerKeyMD5' =>
        [
          'shape' => 'CopySourceSSECustomerKeyMD5',
          'location' => 'header',
          'locationName' => 'x-amz-copy-source-server-side-encryption-customer-key-MD5',
        ],
      ],
    ],
    'UploadPartOutput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'ServerSideEncryption' =>
        [
          'shape' => 'ServerSideEncryption',
          'location' => 'header',
          'locationName' => 'x-amz-server-side-encryption',
        ],
        'ETag' =>
        [
          'shape' => 'ETag',
          'location' => 'header',
          'locationName' => 'ETag',
        ],
        'SSECustomerAlgorithm' =>
        [
          'shape' => 'SSECustomerAlgorithm',
          'location' => 'header',
          'locationName' => 'x-amz-server-side-encryption-customer-algorithm',
        ],
        'SSECustomerKeyMD5' =>
        [
          'shape' => 'SSECustomerKeyMD5',
          'location' => 'header',
          'locationName' => 'x-amz-server-side-encryption-customer-key-MD5',
        ],
      ],
    ],
    'UploadPartRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'Bucket',
        1 => 'Key',
        2 => 'PartNumber',
        3 => 'UploadId',
      ],
      'members' =>
      [
        'Body' =>
        [
          'shape' => 'Body',
          'streaming' => true,
        ],
        'Bucket' =>
        [
          'shape' => 'BucketName',
          'location' => 'uri',
          'locationName' => 'Bucket',
        ],
        'ContentLength' =>
        [
          'shape' => 'ContentLength',
          'location' => 'header',
          'locationName' => 'Content-Length',
        ],
        'ContentMD5' =>
        [
          'shape' => 'ContentMD5',
          'location' => 'header',
          'locationName' => 'Content-MD5',
        ],
        'Key' =>
        [
          'shape' => 'ObjectKey',
          'location' => 'uri',
          'locationName' => 'Key',
        ],
        'PartNumber' =>
        [
          'shape' => 'PartNumber',
          'location' => 'querystring',
          'locationName' => 'partNumber',
        ],
        'UploadId' =>
        [
          'shape' => 'MultipartUploadId',
          'location' => 'querystring',
          'locationName' => 'uploadId',
        ],
        'SSECustomerAlgorithm' =>
        [
          'shape' => 'SSECustomerAlgorithm',
          'location' => 'header',
          'locationName' => 'x-amz-server-side-encryption-customer-algorithm',
        ],
        'SSECustomerKey' =>
        [
          'shape' => 'SSECustomerKey',
          'location' => 'header',
          'locationName' => 'x-amz-server-side-encryption-customer-key',
        ],
        'SSECustomerKeyMD5' =>
        [
          'shape' => 'SSECustomerKeyMD5',
          'location' => 'header',
          'locationName' => 'x-amz-server-side-encryption-customer-key-MD5',
        ],
      ],
      'payload' => 'Body',
    ],
    'Value' =>
    [
      'type' => 'string',
    ],
    'VersionIdMarker' =>
    [
      'type' => 'string',
    ],
    'VersioningConfiguration' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'MFADelete' =>
        [
          'shape' => 'MFADelete',
          'locationName' => 'MfaDelete',
        ],
        'Status' =>
        [
          'shape' => 'BucketVersioningStatus',
        ],
      ],
    ],
    'WebsiteConfiguration' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'ErrorDocument' =>
        [
          'shape' => 'ErrorDocument',
        ],
        'IndexDocument' =>
        [
          'shape' => 'IndexDocument',
        ],
        'RedirectAllRequestsTo' =>
        [
          'shape' => 'RedirectAllRequestsTo',
        ],
        'RoutingRules' =>
        [
          'shape' => 'RoutingRules',
        ],
      ],
    ],
    'WebsiteRedirectLocation' =>
    [
      'type' => 'string',
    ],
  ],
];