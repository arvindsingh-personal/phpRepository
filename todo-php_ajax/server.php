<?php
    session_start();

    function displayTodoTasks() {
        print_r(json_encode($_SESSION['todo']));
    }

    function displayCompletedTasks() {
        print_r(json_encode($_SESSION['completed']));
    }

    if(isset($_POST['task'])) {
        $task1 = $_POST['task'];
        $_SESSION['todo'][] = $task1;
        displayTodoTasks();
    }

    if(isset($_POST['updateData'])) {
        $id = $_POST['ID'];
        $task = $_POST['updateData'];
        $_SESSION['todo'][$id] = $task;
        displayTodoTasks();
    }

    if(isset($_POST['id2'])) {
        $id = $_POST['id2'];
        $_SESSION['completed'][] = $_SESSION['todo'][$id];
        array_splice($_SESSION['todo'],$id,1);
        displayCompletedTasks();
    }

    if(isset($_POST['id1'])) {
        displayTodoTasks();
    }

    if(isset($_POST['id3'])) {
        $id = $_POST['id3'];
        array_splice($_SESSION['todo'],$id,1);
        displayTodoTasks();
    }

    if(isset($_POST['id4'])) {
        $id = $_POST['id4'];
        array_splice($_SESSION['completed'],$id,1);
        displayCompletedTasks();
    }

    if(isset($_POST['updatedData2'])) {
        $id = $_POST['id5'];
        $task = $_POST['updatedData2'];
        $_SESSION['completed'][$id] = $task;
        displayCompletedTasks();
    }
    if(isset($_POST['id6'])) {
        $id = $_POST['id6'];
        $_SESSION['todo'][] = $_SESSION['completed'][$id];
        array_splice($_SESSION['completed'],$id,1);
        displayTodoTasks();
    }

    if(isset($_POST['id7'])) {
        displayCompletedTasks();

    }
?>