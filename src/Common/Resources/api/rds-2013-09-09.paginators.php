<?php
return [
  'pagination' =>
  [
    'DescribeDBEngineVersions' =>
    [
      'input_token' => 'Marker',
      'output_token' => 'Marker',
      'limit_key' => 'MaxRecords',
      'result_key' => 'DBEngineVersions',
    ],
    'DescribeDBInstances' =>
    [
      'input_token' => 'Marker',
      'output_token' => 'Marker',
      'limit_key' => 'MaxRecords',
      'result_key' => 'DBInstances',
    ],
    'DescribeDBLogFiles' =>
    [
      'input_token' => 'Marker',
      'output_token' => 'Marker',
      'limit_key' => 'MaxRecords',
      'result_key' => 'DescribeDBLogFiles',
    ],
    'DescribeDBParameterGroups' =>
    [
      'input_token' => 'Marker',
      'output_token' => 'Marker',
      'limit_key' => 'MaxRecords',
      'result_key' => 'DBParameterGroups',
    ],
    'DescribeDBParameters' =>
    [
      'input_token' => 'Marker',
      'output_token' => 'Marker',
      'limit_key' => 'MaxRecords',
      'result_key' => 'Parameters',
    ],
    'DescribeDBSecurityGroups' =>
    [
      'input_token' => 'Marker',
      'output_token' => 'Marker',
      'limit_key' => 'MaxRecords',
      'result_key' => 'DBSecurityGroups',
    ],
    'DescribeDBSnapshots' =>
    [
      'input_token' => 'Marker',
      'output_token' => 'Marker',
      'limit_key' => 'MaxRecords',
      'result_key' => 'DBSnapshots',
    ],
    'DescribeDBSubnetGroups' =>
    [
      'input_token' => 'Marker',
      'output_token' => 'Marker',
      'limit_key' => 'MaxRecords',
      'result_key' => 'DBSubnetGroups',
    ],
    'DescribeEngineDefaultParameters' =>
    [
      'input_token' => 'Marker',
      'output_token' => 'EngineDefaults.Marker',
      'limit_key' => 'MaxRecords',
      'result_key' => 'EngineDefaults.Parameters',
    ],
    'DescribeEventSubscriptions' =>
    [
      'input_token' => 'Marker',
      'output_token' => 'Marker',
      'limit_key' => 'MaxRecords',
      'result_key' => 'EventSubscriptionsList',
    ],
    'DescribeEvents' =>
    [
      'input_token' => 'Marker',
      'output_token' => 'Marker',
      'limit_key' => 'MaxRecords',
      'result_key' => 'Events',
    ],
    'DescribeOptionGroupOptions' =>
    [
      'input_token' => 'Marker',
      'output_token' => 'Marker',
      'limit_key' => 'MaxRecords',
      'result_key' => 'OptionGroupOptions',
    ],
    'DescribeOptionGroups' =>
    [
      'input_token' => 'Marker',
      'output_token' => 'Marker',
      'limit_key' => 'MaxRecords',
      'result_key' => 'OptionGroupsList',
    ],
    'DescribeOrderableDBInstanceOptions' =>
    [
      'input_token' => 'Marker',
      'output_token' => 'Marker',
      'limit_key' => 'MaxRecords',
      'result_key' => 'OrderableDBInstanceOptions',
    ],
    'DescribeReservedDBInstances' =>
    [
      'input_token' => 'Marker',
      'output_token' => 'Marker',
      'limit_key' => 'MaxRecords',
      'result_key' => 'ReservedDBInstances',
    ],
    'DescribeReservedDBInstancesOfferings' =>
    [
      'input_token' => 'Marker',
      'output_token' => 'Marker',
      'limit_key' => 'MaxRecords',
      'result_key' => 'ReservedDBInstancesOfferings',
    ],
    'DownloadDBLogFilePortion' =>
    [
      'input_token' => 'Marker',
      'output_token' => 'Marker',
      'limit_key' => 'NumberOfLines',
      'more_results' => 'AdditionalDataPending',
      'result_key' => 'LogFileData',
    ],
    'ListTagsForResource' =>
    [
      'result_key' => 'TagList',
    ],
  ],
];