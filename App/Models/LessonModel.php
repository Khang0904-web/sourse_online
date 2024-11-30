<?php

namespace App\Models;

class LessonModel extends BaseModel{


    public function getLessonByCourseId($courseId){
        $sql = "SELECT * FROM `lessons` WHERE course_id  = ?;";
        $conn = $this->_conn->MySQLi();
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $courseId);
        $stmt->execute();
        return  $stmt->get_result()->fetch_all(); 
    }


    public function getLessonDetail($lessonId){
        $sql = "SELECT * FROM `lessons` WHERE id = ?;";
        $conn = $this->_conn->MySQLi();
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $lessonId);
        $stmt->execute();
        return  $stmt->get_result()->fetch_all(); 
    }
}