<html>

<head>
    <link rel="stylesheet" href="/css/main.css" />
    <link rel="stylesheet" href="/css/viewinventory.css" />

</head>

    <body>
    <h1>View Room Details</h1>

    <table border="1">
    <tr>
    <td>Id</td>
    <td>Room ID</td>
    <td>Floor Number</td>
    <td>Room Type</td>
    <td>Price</td>
    <td>Room Status</td>
    <td>Description</td>
    </tr>
    @foreach($Room_key as $room)
    <tr>
    <td>{{$room['ID']}}</td>
    <td>{{$room['RoomID']}}</td>
    <td>{{$room['FloorNumber']}}</td>
    <td>{{$room['RoomType']}}</td>
    <td>{{$room['Price']}}</td>
    <td>{{$room['RoomStatus']}}</td>
    <td>{{$room['RoomStatus']}}</td>
</tr>

</table>
@endforeach

</body>
</html>
