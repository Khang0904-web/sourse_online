<?php

namespace App\Models;

class CourseModel extends BaseModel
{
    
 

    public function getCourseByCourseId($courseId)
    {
        $sql = "SELECT * FROM `sourse` WHERE id = ?;";
        $conn = $this->_conn->MySQLi();
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $courseId);
        $stmt->execute();
        return  $stmt->get_result()->fetch_all(); // Array
    }


    public function getAllCourse()
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
}
