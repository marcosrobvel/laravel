<!DOCTYPE html>
<html>
    <head>
        <title>Details Activity</title>
    </head>
    <body>
        <ul>
            <li><strong>Type:</strong> {{ $activity->type}}</li>
            <li><strong>Date:</strong> {{ $activity->dateTime}}</li>
            <li><strong>Paid:</strong> {{ $activity->paid ? 'Yes' : 'No' }}</li>
            <li><strong>Notes:</strong> {{ $activity->notes}}</li>
            <li><strong>Satisfaction:</strong> {{ $activity->satisfaction}}</li>
            <li><strong>User:</strong> {{ $activity->user?->name ?? 'No user'}}</li>
        </ul>

        <a href="{{ route('activities.index') }}">Return to list</a>
    </body>
</html>