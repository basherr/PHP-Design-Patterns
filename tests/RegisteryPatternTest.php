<?php

use App\Factory\Structural\RegisteryPattern\Exam\ExamRegistery;
use PHPUnit\Framework\TestCase;

class RegisteryPatternTest extends TestCase {
  private static $registery;

  public function setUp(): void
  {
    self::$registery = ExamRegistery::getInstance();
  }

  public function testCanAddAllowedKeys()
  {
    $final_exam_subjects = ['math', 'abc'];
    self::$registery->setExam(ExamRegistery::FINAL_EXAM, $final_exam_subjects);

    $this->assertSame($final_exam_subjects, self::$registery->getExam(ExamRegistery::FINAL_EXAM));
  }

  public function testCanThrowExceptionForInvalidKeys()
  {
    $this->expectException(\InvalidArgumentException::class);

    self::$registery->setExam('test', '');
  }

  public function tearDown(): void
  {
    self::$registery = null;
  }
}