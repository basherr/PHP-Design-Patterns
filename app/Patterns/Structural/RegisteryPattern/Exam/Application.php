<?php namespace App\Patterns\Structural\RegisteryPattern\Exam;

class Application
{
  public function run()
  {
    $registery = ExamRegistery::getInstance();
    $registery->set(ExamRegistery::MID_TERM_EXAM, ['math', 'physics', 'optional subject']);
    $registery->set(ExamRegistery::FINAL_EXAM, ['math', 'physics']);

    $subjects = $registery->get(ExamRegistery::FINAL_EXAM);
    echo "<pre>Final exam subject: ";print_r($subjects);
  }
}
