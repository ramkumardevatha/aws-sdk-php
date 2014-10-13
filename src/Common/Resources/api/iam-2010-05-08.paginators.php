<?php
return [
  'pagination' =>
  [
    'GetGroup' =>
    [
      'input_token' => 'Marker',
      'output_token' => 'Marker',
      'more_results' => 'IsTruncated',
      'limit_key' => 'MaxItems',
      'result_key' => 'Users',
    ],
    'ListAccessKeys' =>
    [
      'input_token' => 'Marker',
      'output_token' => 'Marker',
      'more_results' => 'IsTruncated',
      'limit_key' => 'MaxItems',
      'result_key' => 'AccessKeyMetadata',
    ],
    'ListAccountAliases' =>
    [
      'input_token' => 'Marker',
      'output_token' => 'Marker',
      'more_results' => 'IsTruncated',
      'limit_key' => 'MaxItems',
      'result_key' => 'AccountAliases',
    ],
    'ListGroupPolicies' =>
    [
      'input_token' => 'Marker',
      'output_token' => 'Marker',
      'more_results' => 'IsTruncated',
      'limit_key' => 'MaxItems',
      'result_key' => 'PolicyNames',
    ],
    'ListGroups' =>
    [
      'input_token' => 'Marker',
      'output_token' => 'Marker',
      'more_results' => 'IsTruncated',
      'limit_key' => 'MaxItems',
      'result_key' => 'Groups',
    ],
    'ListGroupsForUser' =>
    [
      'input_token' => 'Marker',
      'output_token' => 'Marker',
      'more_results' => 'IsTruncated',
      'limit_key' => 'MaxItems',
      'result_key' => 'Groups',
    ],
    'ListInstanceProfiles' =>
    [
      'input_token' => 'Marker',
      'output_token' => 'Marker',
      'more_results' => 'IsTruncated',
      'limit_key' => 'MaxItems',
      'result_key' => 'InstanceProfiles',
    ],
    'ListInstanceProfilesForRole' =>
    [
      'input_token' => 'Marker',
      'output_token' => 'Marker',
      'more_results' => 'IsTruncated',
      'limit_key' => 'MaxItems',
      'result_key' => 'InstanceProfiles',
    ],
    'ListMFADevices' =>
    [
      'input_token' => 'Marker',
      'output_token' => 'Marker',
      'more_results' => 'IsTruncated',
      'limit_key' => 'MaxItems',
      'result_key' => 'MFADevices',
    ],
    'ListRolePolicies' =>
    [
      'input_token' => 'Marker',
      'output_token' => 'Marker',
      'more_results' => 'IsTruncated',
      'limit_key' => 'MaxItems',
      'result_key' => 'PolicyNames',
    ],
    'ListRoles' =>
    [
      'input_token' => 'Marker',
      'output_token' => 'Marker',
      'more_results' => 'IsTruncated',
      'limit_key' => 'MaxItems',
      'result_key' => 'Roles',
    ],
    'ListSAMLProviders' =>
    [
      'result_key' => 'SAMLProviderList',
    ],
    'ListServerCertificates' =>
    [
      'input_token' => 'Marker',
      'output_token' => 'Marker',
      'more_results' => 'IsTruncated',
      'limit_key' => 'MaxItems',
      'result_key' => 'ServerCertificateMetadataList',
    ],
    'ListSigningCertificates' =>
    [
      'input_token' => 'Marker',
      'output_token' => 'Marker',
      'more_results' => 'IsTruncated',
      'limit_key' => 'MaxItems',
      'result_key' => 'Certificates',
    ],
    'ListUserPolicies' =>
    [
      'input_token' => 'Marker',
      'output_token' => 'Marker',
      'more_results' => 'IsTruncated',
      'limit_key' => 'MaxItems',
      'result_key' => 'PolicyNames',
    ],
    'ListUsers' =>
    [
      'input_token' => 'Marker',
      'output_token' => 'Marker',
      'more_results' => 'IsTruncated',
      'limit_key' => 'MaxItems',
      'result_key' => 'Users',
    ],
    'ListVirtualMFADevices' =>
    [
      'input_token' => 'Marker',
      'output_token' => 'Marker',
      'more_results' => 'IsTruncated',
      'limit_key' => 'MaxItems',
      'result_key' => 'VirtualMFADevices',
    ],
  ],
];