<?php
return [
  'waiters' =>
  [
    '__default__' =>
    [
      'interval' => 20,
      'max_attempts' => 25,
    ],
    '__TableState' =>
    [
      'operation' => 'DescribeTable',
    ],
    'TableExists' =>
    [
      'extends' => '__TableState',
      'ignore_errors' =>
      [
        0 => 'ResourceNotFoundException',
      ],
      'success_type' => 'output',
      'success_path' => 'Table.TableStatus',
      'success_value' => 'ACTIVE',
    ],
    'TableNotExists' =>
    [
      'extends' => '__TableState',
      'success_type' => 'error',
      'success_value' => 'ResourceNotFoundException',
    ],
  ],
];