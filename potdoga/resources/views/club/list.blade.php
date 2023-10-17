@foreach ($clubs as $clubs)
    <form action="/api/clubs/{{$clubs->club_id}}" method="post">
        {{csrf_field()}}
        {{method_field('GET')}}
        <div class="form-group">
            <input type="submit" value="{{$clubs->establishment}}">
            <input type="submit" value="{{$clubs->location}}">
            <input type="submit" value="{{$clubs->max_number}}">
        </div>
    </form>
    @endforeach