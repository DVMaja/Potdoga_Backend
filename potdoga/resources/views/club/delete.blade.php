@foreach($clubs as $club)
<form method="post" action="/api/lesson/{{ $club->club_id }}">
    {{csrf_field()}}
    @method('DELETE')

    <p>
        Club_ID: {{ $club->club_id }} <br>
        establishment: {{ $club->establishment }} <br>
        location: {{ $club->location }}<br>
        max_number: {{ $club->max_number }}
    </p>

    <input type="submit" value="Delete">

</form>
@endforeach