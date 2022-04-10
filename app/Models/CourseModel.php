<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class CourseModel
{
    private $courseID;
    private $subject;
    private $courseName;
    private $period;
    private $teacherID;
    
    
    
    public function getCourseID()
    {
        return $this->courseID;
    }

    public function setCourseID($courseID)
    {
        $this->courseID = $courseID;
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function getCourseName()
    {
        return $this->courseName;
    }

    public function getPeriod()
    {
        return $this->period;
    }

    public function getTeacherID()
    {
        return $this->teacherID;
    }

    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    public function setCourseName($courseName)
    {
        $this->courseName = $courseName;
    }

    public function setPeriod($period)
    {
        $this->period = $period;
    }

    public function setTeacherID($teacherID)
    {
        $this->teacherID = $teacherID;
    }

    public function __construct($courseID, $subject, $courseName, $period, $teacherID) { // A constructor.
        $this->courseID = $courseID;
        $this->subject = $subject;
        $this->courseName = $courseName;
        $this->period = $period;
        $this->teacherID = $teacherID;
    }
    
    
    
}