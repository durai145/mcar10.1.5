<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Task Timer</title>
    <link href="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.css" rel="stylesheet"/>
    <link href="http://code.jquery.com/mobile/1.3.0/jquery.mobile.structure-1.3.0.min.css" rel="stylesheet"/>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js"></script>    
</head>
<body>
    <div id="tasksPage" data-role="page">
        <div data-role="header" data-position="fixed">
            <a href="#" data-role="button">Edit</a>
            <h1>Task Timer</h1>
            <a href="#" data-role="button" data-icon="plus" data-iconpos="notext">Add</a>
        </div>
        <div data-role="content">
            <ul id="taskList" data-role="listview">
                <li>Task 1</li>
                <li>Task 2</li>
            </ul>
        </div>
        <div data-role="footer" data-position="fixed">
            <a href="#" data-role="button">About</a>
        </div>
    </div>
</body>
</html>
