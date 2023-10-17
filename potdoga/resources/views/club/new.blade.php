<form action="/api/clubs" method="post">
    {{csrf_field()}}
    <input type="text" name="establishment" placeholder="Establishment">
    <input type="text" name="location" placeholder="Location">
    <input type="text" name="max_number" placeholder="max_number">
       
    <input type="submit" value="Ok">
</form>