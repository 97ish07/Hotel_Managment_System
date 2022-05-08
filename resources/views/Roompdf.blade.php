<html>

<head>
    <link rel="stylesheet" href="/css/main.css" />
    <link rel="stylesheet" href="/css/viewinventory.css" />
    
</head>


<body>


<div class="title">Hotle Diyatha</div>
<img src="images\logo.jpg" alt="Italian Trulli" height="100" width="100"   style="position: absolute;  left:0px; box-shadow: 10px 5px 5px black;">




<table id="viewtable" class="table">
                    <tr style="background-color: lightslategray;">
                       
                        <td>Room ID</td>
                        <td>Room Type</td>
                        <td>Room Status</td>
                        <td>Room Price</td>
                        <td>Floor Number</td>
                       

                    </tr>
                    @foreach($data as $rooms)

                    <tr >
                        <!-- <td>{{$inventorys['id']}}</td> -->
                        <td>{{$rooms['RoomID']}}</td>
                        <td>{{$rooms['RoomType']}}</td>
                        <td>{{$rooms['RoomStatus']}}</td>
                        <td>{{$rooms['Price']}}</td>
                        <td>{{$rooms['FloorNumber']}}</td>
                        

                    </tr>

                    @endforeach


                </table>
               
                <style>
.title{
    font-size: 40px;
    color:black;
    position: absolute;
    top: 130px;
    
}
table {
    position: absolute;
    top: 250px;
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
</style>




</body>

</html>