<?php

include 'db.php';

function insert_courses($name, $teacher, $image_name, $description, $start, $db){
    $sql = "INSERT INTO courses (name, teacher, pic, description, start) VALUES (:name, :teacher, :pic, :description, :start)";
    $stmt = $db -> prepare($sql);
    $stmt -> execute([
        'name' => $name,
        'teacher' => $teacher,
        'pic' => $image_name,
        'description' => $description,
        'start' => $start,
    ]);

    header('Location: /panel');
}

function updateproduct($name, $teacher, $start, $description, $image_name, $db, $id){
    $sql = "UPDATE courses SET name = ?, teacher = ? , pic = ?, description = ?, start = ? WHERE id = ?";
    $stmt = $db -> prepare($sql);
    $stmt -> execute([
        $name,
        $teacher,
        $image_name,
        $description,
        $start,
        $id
    ]);

    header('Location: /panel');
}