<?php
session_start();

if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}

if (isset($_POST['submit_task'])) {
    $new_task = htmlspecialchars($_POST['new_task']);
    if (!empty($new_task)) {
        $_SESSION['tasks'][] = $new_task;
    }
}

if (isset($_GET['delete_task'])) {
    $task_index = (int)$_GET['delete_task'];
    unset($_SESSION['tasks'][$task_index]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e9ecef;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .wrapper {
            background-color: #ffffff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 3px 7px rgba(0, 0, 0, 0.15);
            max-width: 450px;
            width: 100%;
        }
        h2 {
            text-align: center;
            color: #444;
        }
        form {
            display: flex;
            margin-bottom: 15px;
        }
        input[type="text"] {
            flex-grow: 1;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-right: 8px;
        }
        input[type="submit"] {
            padding: 12px 18px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            background-color: #f1f3f5;
            margin-bottom: 10px;
            padding: 12px;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: 1px solid #ced4da;
        }
        a {
            text-decoration: none;
            color: #dc3545;
        }
        a:hover {
            color: #b02a37;
        }
    </style>
</head>
<body>

<div class="wrapper">
    <h2>Task Manager</h2>

    <form action="" method="POST">
        <input type="text" name="new_task" placeholder="Add a task" required>
        <input type="submit" name="submit_task" value="Add">
    </form>

    <ul>
        <?php foreach ($_SESSION['tasks'] as $index => $task) : ?>
            <li>
                <?php echo $task; ?>
                <a href="?delete_task=<?php echo $index; ?>">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>

</div>

</body>
</html>
