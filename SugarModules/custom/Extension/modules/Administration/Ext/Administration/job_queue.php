<?php
$exists = false;
$count = 0;
foreach ($admin_group_header as $header) {
    if ($header[0] == 'LBL_ADMINISTRATION_HOME_TITLE') {
        $exists = true;
        $admin_group_header[$count][3]['Administration']['jobQueue']=array(
            'EmailMan',
            'LBL_JOBQUEUE_TITLE',
            'LBL_JOBQUEUE_DESC',
            'javascript:parent.SUGAR.App.router.navigate("job_queue", {trigger: true});'
        );
        break;
    }
    $count++;
}
