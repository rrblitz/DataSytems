<?php

require '../../app/common.php';

$projectId = iintval($_GET['projectId'] ?? 0);

if ($projectId < 1) {
    throw new Exception ('Indvalid Project ID in URL');
}

$workArr = WorkHoursReport::FetchByProjectId($projectId);
$JSON
