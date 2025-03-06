<!DOCTYPE html>
<html>
<head>
    <title>{{ $isReassigned ? 'Task Updated' : 'New Task Assigned'}}</title>
</head>
<body>
    <h1>{{ $isReassigned ? 'Task Updated' : 'Task Created' }}</h1>
    <p>
        Hello {{ $task->employee->name }},
    </p>
    <p>You have been assigned a new task:</p>
    <p><strong>Task:</strong> {{ $task->title }}</p>
    <p><strong>Description:</strong> {{ $task->description }}</p>
    <p>Best regards,<br>{{ config('app.name') }}</p>
    <p>
        <a href="{{ url('/tasks/' . $task->id) }}">View Task</a>
    </p>
</body>
</html>
