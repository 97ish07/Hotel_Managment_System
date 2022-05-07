<!DOCTYPE html>
<html>


<head>
    <link rel="stylesheet" href="/css/main.css" />
    <link rel="stylesheet" href="/css/deleteinventory.css" />
    <link rel="stylesheet" href="/css/popup.css" />
</head>

<body>

    <div class="background">
    <div class="version-tag">Version 1.1.0</div>
        <div class="viewindashboardback">
        <div class="titlelogoview"></div>       
        <div class="titleview">Delete Room</div>
        <div class="search">
                <form class="Search_Room" type="get" action="{{ url('/RoomSearch') }}">
                    <input type="search" name="query" placeholder="Search.." class="searchbox">
                    <button type="submit" class="searchbtn"><i class="fa-search"></i> </button>
            </div>

        <div class="form-popup" id="myForm">
        
        <div class="back">
        
        <form action="/action_page.php" class="form-container">
    
    <div class="popupbox">
        <div class="text1">Delete Confirmation</div>
        <div class="text2">Are you sure you want to delete this room details ?</div>
    <button type="submit" class="btn">@foreach($room_keys as $roomss)<span><td><a  class ="textdec" href={{"DeleteRoomData/".$roomss['id']}}>@endforeach Delete</a></td></span></button>
    
    <button type="button" class="btncancel" onclick="closeForm()">Cancel</button>
    <button type="button" class="btncance3" onclick="closeForm()"><span class="btnpopuplogo1"></span></button>
    </div>
  </form>
  </div>
  
</div>
            </form>
            </center>
            <div class="viewintable">
                <table id="viewtable">
                    <tr class="tablehead">
                        <td>ID</td>
                        <td>Room ID</td>
                        <td>Room Type</td>
                        <td>Room Status</td>
                        <td>Room Price</td>
                        <td>Floor Number</td>
                        <td>Description</td>
                        <td>Delete</td>
                        

                    </tr>
                    @foreach($room_keys as $roomss)

                    <tr class="tablehead2">
                         <td>{{$roomss['id']}}</td>
                        <td>{{$roomss['RoomID']}}</td>
                        <td>{{$roomss['RoomType']}}</td>
                        <td>{{$roomss['RoomStatus']}}</td>
                        <td>{{$roomss['Price']}}</td>
                        <td>{{$roomss['FloorNumber']}}</td>
                        <td>{{$roomss['Description']}}</td>
                        
                        
                        <td><button  onclick="openForm()">delete</button></td>
            
                    </tr>

                    @endforeach
                    



                </table>
            </div>
        </div>


        <div class="navigationbar">

            <a href="dashboard">
                <div class="logo"></div>
            </a>
            <a href="dashboard">
                <div class="home">
                    <div class="homelogo"></div>Home
                </div>
            </a>
            <a href="#">
                <div class="RoomBooking">
                    <div class="RoomBookinglogo"></div>Room Booking
                </div>
            </a>
            <a href="Room_Dashboard">
                <div class="RoomManagement">
                    <div class="RoomManagementlogo"></div>Room Management
                </div>
            </a>
            <a href="#">
                <div class="Dining">
                    <div class="Dininglogo"></div>Dining
                </div>
            </a>
            <a href="inventory_page">
                <div class="Inventory">
                    <div class="Inventorylogo"></div>Inventory Management
                </div>
            </a>


        </div>

    
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}
function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>


</body>

</html>