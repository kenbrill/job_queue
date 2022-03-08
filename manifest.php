<?php
$manifest = array(
    'acceptable_sugar_flavors'  => array(
        0 => 'CE',
        1 => 'PRO',
        2 => 'ENT',
        3 => 'DEV'
    ),

    'acceptable_sugar_versions' => [
        'regex_matches' => ['7.*', '8.*', '9.*', '10.*', '11.*']
    ],

    'readme'                    => '',
    'key'                       => 'job05171967',
    'author'                    => 'Kenneth Brill [ken.brill@gmail.com]',
    'description'               => 'Give the Job_Queue a nice Sugar module front end',
    'icon'                      => '',
    'is_uninstallable'          => true,
    'name'                      => 'Job_Queue',
    'published_date'            => '2022-03-01 08:17:31',
    'type'                      => 'module',
    'version'                   => '1.2',
    'remove_tables'             => 'false',
);


$installdefs = array(
    'id'             => 'Job_Queue',
    'administration' => array(
        array(
            'from' => '<basepath>/SugarModules/custom/Extension/modules/Administration/Ext/Administration/job_queue.php'
        )
    ),
    'beans'          =>
        array(
            0 =>
                array(
                    'module' => 'job_queue',
                    'class'  => 'job_queue',
                    'path'   => 'modules/job_queue/job_queue.php',
                    'tab'    => false,
                ),
        ),
    'layoutdefs'     =>
        array(),
    'relationships'  =>
        array(),
    'copy'           =>
        array(
            0 =>
                array(
                    'from' => '<basepath>/SugarModules/modules/job_queue',
                    'to'   => 'modules/job_queue',
                ),
        ),
    'language'       =>
        array(
            0 =>
                array(
                    'from'      => '<basepath>/SugarModules/language/application/en_us.lang.php',
                    'to_module' => 'application',
                    'language'  => 'en_us',
                ),
            1 =>
                array(
                    'from'      => '<basepath>/SugarModules/custom/Extension/modules/Administration/Ext/Language/en_us.job_queue.php',
                    'to_module' => 'Administration',
                    'language'  => 'en_us'
                ),
            2 =>
                array(
                    'from' => '<basepath>/SugarModules/custom/Extension/Language/en_us.job_queue.php',
                    'to_module' => 'application',
                    'language' => 'en_us'
                )
        ),
    'image_dir'      => '<basepath>/icons',
);