<html>

<head>
    <link rel="stylesheet" href="/css/main.css" />
    <link rel="stylesheet" href="/css/viewinventory.css" />
    
</head>


<body>


<div class="title">Hotel Diyatha</div>
<div class="title2">Room List Report</div>
<img src="images\logo.jpg" alt="Italian Trulli" height="100" width="100"   style="position: absolute;  left:600px; box-shadow: 10px 5px 5px black;">




<table id="viewtable" class="table">
                    <tr style="background-color: lightslategray;">
                       
                        <td>Room ID</td>
                        <td>Room Type</td>
                        <td>Room Status</td>
                        <td>Room Price</td>
                        <td>Floor Number</td>
                        <td> Description</td>
                       

                    </tr>
                    @foreach($data as $rooms)

                    <tr >
                        
                        <td>{{$rooms['RoomID']}}</td>
                        <td>{{$rooms['RoomType']}}</td>
                        <td>{{$rooms['RoomStatus']}}</td>
                        <td>{{$rooms['Price']}}</td>
                        <td>{{$rooms['FloorNumber']}}</td>
                        <td>{{$rooms['Description']}}</td>
                        

                    </tr>

                    @endforeach


                </table>
               
                <style>
.title{
    font-size: 40px;
    color:black;
    position: absolute;
    top: 10px;
    
}
table {
    position: absolute;
    top: 175px;
  border-collapse: collapse;
  border: 1px solid black;
  width: 100%;
}
#body{
    padding: 30px;
}
td {
  border: 1px solid black;
  padding: 10px;
  text-align: center;
  
}
.date{
    position: absolute;
    top: 120px;
    color: black;
    font-size: larger;
}

.title2{
    font-size: 20px;
    color:black;
    position: absolute;
    top: 60px;
}
</style>




</body>

</html>