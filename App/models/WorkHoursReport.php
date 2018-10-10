<?php


class WorkHoursReport
{
  public static function FetchByProjectId (int $projectId){
    $db = new PDO(DB_SERVER, DB_USER, DB_PW);

  $sql = 'SELECT DATE (start_date) AS date,
    sum(hours) AS hours
    FROM Work, Tasks
    WHERE Work.task_id = Tasks.id
    AND Tasks.project_id = ?
    GROUP BY DATE(start_date)
    ORDER BY date';

    $statement = $db->prepare($sql);

    $success = $statement->execute(
      [project_id]
    );

    $arr = $statement -> fetchAll(PDO::FETCH_ASSOC);

    return $arr;
      )
  }
}
