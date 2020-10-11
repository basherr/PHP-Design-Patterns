<?php namespace App\Factory\Structural\RegisteryPattern\Exam;

class ExamRegistery
{
  const MID_TERM_EXAM = 'mid_term';
  const FINAL_EXAM = 'final_exam';
  private static $_services = [];
  private static $_allowedExams = [self::MID_TERM_EXAM, self::FINAL_EXAM];
  private static $_instance = null;

  public static function getInstance()
  {
    if(self::$_instance === null) {
      return new static;
    }
    return self::$_instance;
  }

  public static function setExam($key, $value)
  {
    if(!\in_array($key, self::$_allowedExams)) {
      throw new \InvalidArgumentException();
    }
    self::$_services[$key] = $value;
  }

  public static function getExam($key)
  {
    if(!\array_key_exists($key, self::$_services)) {
      throw new \InvalidArgumentException();
    }
    return self::$_services[$key];
  }
}
