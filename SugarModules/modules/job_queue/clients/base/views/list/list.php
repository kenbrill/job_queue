<?php
$module_name = 'job_queue';
$viewdefs[$module_name] =
    array (
        'base' =>
            array (
                'view' =>
                    array (
                        'list' =>
                            array (
                                'panels' =>
                                    array (
                                        0 =>
                                            array (
                                                'label' => 'LBL_PANEL_1',
                                                'fields' =>
                                                    array (
                                                        0 =>
                                                            array (
                                                                'name' => 'name',
                                                                'label' => 'LBL_NAME',
                                                                'default' => true,
                                                                'enabled' => true,
                                                                'link' => true,
                                                                'width' => 'large',
                                                            ),
                                                        1 =>
                                                            array (
                                                                'name' => 'date_modified',
                                                                'enabled' => true,
                                                                'default' => true,
                                                            ),
                                                        2 =>
                                                            array (
                                                                'name' => 'execute_time',
                                                                'label' => 'LBL_EXECUTE_TIME',
                                                                'enabled' => true,
                                                                'default' => true,
                                                            ),
                                                        3 =>
                                                            array (
                                                                'name' => 'status',
                                                                'label' => 'LBL_STATUS',
                                                                'enabled' => true,
                                                                'readonly' => false,
                                                                'default' => true,
                                                                'width' => 'small',
                                                            ),
                                                        4 =>
                                                            array (
                                                                'name' => 'resolution',
                                                                'label' => 'LBL_RESOLUTION',
                                                                'enabled' => true,
                                                                'readonly' => false,
                                                                'default' => true,
                                                                'width' => 'small',
                                                            ),
                                                        5 =>
                                                            array (
                                                                'name' => 'run_now',
                                                                'label' => 'LBL_RUNNOW',
                                                                'enabled' => true,
                                                                'readonly' => false,
                                                                'default' => true,
                                                                'width' => 'small',
                                                            ),
                                                        6 =>
                                                            array (
                                                                'name' => 'message',
                                                                'label' => 'LBL_MESSAGE',
                                                                'enabled' => true,
                                                                'sortable' => false,
                                                                'default' => true,
                                                            ),
                                                        7 =>
                                                            array (
                                                                'name' => 'date_entered',
                                                                'enabled' => true,
                                                                'default' => false,
                                                            ),
                                                        8 =>
                                                            array (
                                                                'name' => 'data',
                                                                'label' => 'LBL_DATA',
                                                                'enabled' => true,
                                                                'default' => false,
                                                            ),
                                                        9 =>
                                                            array (
                                                                'name' => 'retry_count',
                                                                'label' => 'LBL_RETRY_COUNT',
                                                                'enabled' => true,
                                                                'readonly' => false,
                                                                'default' => false,
                                                            ),
                                                        10 =>
                                                            array (
                                                                'name' => 'requeue',
                                                                'label' => 'LBL_REQUEUE',
                                                                'enabled' => true,
                                                                'default' => false,
                                                            ),
                                                        11 =>
                                                            array (
                                                                'name' => 'failure_count',
                                                                'label' => 'LBL_FAIL_COUNT',
                                                                'enabled' => true,
                                                                'readonly' => false,
                                                                'default' => false,
                                                            ),
                                                        12 =>
                                                            array (
                                                                'name' => 'target',
                                                                'label' => 'LBL_TARGET_ACTION',
                                                                'enabled' => true,
                                                                'default' => false,
                                                            ),
                                                        13 =>
                                                            array (
                                                                'name' => 'job_delay',
                                                                'label' => 'LBL_INTERVAL',
                                                                'enabled' => true,
                                                                'default' => false,
                                                            ),
                                                        14 =>
                                                            array (
                                                                'name' => 'module',
                                                                'label' => 'LBL_MODULE',
                                                                'enabled' => true,
                                                                'default' => false,
                                                            ),
                                                        15 =>
                                                            array (
                                                                'name' => 'interface',
                                                                'label' => 'LBL_INTERFACE',
                                                                'enabled' => true,
                                                                'default' => false,
                                                            ),
                                                        16 =>
                                                            array (
                                                                'name' => 'rerun',
                                                                'label' => 'LBL_RERUN',
                                                                'enabled' => true,
                                                                'default' => false,
                                                            ),
                                                        17 =>
                                                            array (
                                                                'name' => 'percent_complete',
                                                                'label' => 'LBL_PERCENT',
                                                                'enabled' => true,
                                                                'default' => false,
                                                            ),
                                                        18 =>
                                                            array (
                                                                'name' => 'fallible',
                                                                'label' => 'LBL_FALLIBLE',
                                                                'enabled' => true,
                                                                'default' => false,
                                                            ),
                                                        19 =>
                                                            array (
                                                                'name' => 'assigned_user_name',
                                                                'label' => 'LBL_ASSIGNED_TO_NAME',
                                                                'default' => false,
                                                                'enabled' => true,
                                                                'link' => true,
                                                            ),
                                                    ),
                                            ),
                                    ),
                                'orderBy' =>
                                    array (
                                        'field' => 'date_modified',
                                        'direction' => 'desc',
                                    ),
                            ),
                    ),
            ),
    );
