<!DOCTYPE html>
<html>
<head>
    <title>Activity List</title>
</head>
<body>

<h1>Activities</h1>

<a href="{{ route('activities.create') }}">Create New Activity</a>

@if($activities->count())
    <ul>
        @foreach($activities as $activity)
            <li>
                {{ $activity->type }} - {{ $activity->datetime->format('d/m/Y H:i') }}
                <a href="{{ route('activities.show', $activity->id) }}">Details</a>
                <form action="{{ route('activities.destroy', $activity->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onClick="return confirm('Are you sure you want to delete this activity?')">
                        Delete
                    </button>
                </form>
            </li>
        @endforeach
    </ul>
@else
    <p>No activities</p>
@endif

</body>
</html>


<!--
    @if(count($activities) > 0)
        <ul>
            @foreach($activities as $activity)
                <li>
                    {{ $activity->type }} - {{ $activity->datetime }}
                    <a href="{{ route('activities.show', $activity->id) }}">Details</a>
                    <a href="{{ route('activities.edit', $activity->id) }}">Edit</a>
                    <form action="{{ route('activities.destroy', $activity->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onClick="return confirm('Are you sure you want to delete this activity')">
                            Delete
                        </button>
                    </form>
                </li>
            @endforeach
        </ul>
    @else
        <p>No activities</p>
    @endif
</body>
</html>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
-->