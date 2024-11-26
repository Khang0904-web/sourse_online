<?php

namespace App\Models;

class Lesson extends BaseModel
{
    protected $table = 'lessons';
    protected $id = 'id';

    public function getAllLesson()
    {
        return $this->getAll();
    }
    public function getOneLesson($id)
    {
        return $this->getOne($id);
    }

    public function createLesson($data)
    {
        return $this->create($data);
    }
    public function updateLesson($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteLesson($id)
    {
        return $this->delete($id);
    }
    public function getAllLessonByStatus()
    {
        $result = [];
        try {
            $sql = "SELECT sourse.* FROM sourse INNER JOIN categories ON sourse.category_id=categories.id WHERE sourse.status=" . self::STATUS_ENABLE . " AND categories.status=" . self::STATUS_ENABLE;
            $result = $this->_conn->MySQLi()->query($sql);
            return $result->fetch_all(MYSQLI_ASSOC);
        } catch (\Throwable $th) {
            error_log('Lỗi khi hiển thị tất cả dữ liệu: ' . $th->getMessage());
            return $result;
        }
    }


    public function getOneLessonByName($name)
    {
        return $this->getOneByName($name);
    }


    public function getAllLessonJoinCategory()
    {
        $result = [];
        try {
            $sql = "SELECT lessons.*, sourse.name AS sourse_name 
        FROM lessons
        INNER JOIN sourse 
        ON lessons.course_id = sourse.id;";
            $result = $this->_conn->MySQLi()->query($sql);
            return $result->fetch_all(MYSQLI_ASSOC);
        } catch (\Throwable $th) {
            error_log('Lỗi khi hiển thị tất cả dữ liệu: ' . $th->getMessage());
            return $result;
        }
    }

    public function getAllLessonByCategoryAndStatus(int $id)
    {
        $result = [];
        try {
            $sql = "SELECT sourse.*, categories.name AS category_name FROM sourse INNER JOIN categories ON sourse.category_id=categories.id WHERE sourse.status=" . self::STATUS_ENABLE . " AND categories.status=" . self::STATUS_ENABLE . " AND sourse.category_id=?";
            $conn = $this->_conn->MySQLi();
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('i', $id);
            $stmt->execute();
            return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        } catch (\Throwable $th) {
            error_log('Lỗi khi hiển thị chi tiết dữ liệu: ' . $th->getMessage());
            return $result;
        }
    }

    public function getOneLessonByStatus(int $id)
    {
        $result = [];
        try {
            $sql = "SELECT sourse.*, categories.name AS category_name FROM sourse INNER JOIN categories ON sourse.category_id=categories.id WHERE sourse.status=" . self::STATUS_ENABLE . " AND categories.status=" . self::STATUS_ENABLE . " AND sourse.id=?";
            $conn = $this->_conn->MySQLi();
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('i', $id);
            $stmt->execute();
            return $stmt->get_result()->fetch_assoc();
        } catch (\Throwable $th) {
            error_log('Lỗi khi hiển thị chi tiết dữ liệu: ' . $th->getMessage());
            return $result;
        }
    }

}
