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
                <form class="search_inventory" type="get" action="{{ url('/eventSearch') }}">
                    <input type="search" name="query" placeholder="Search.." class="searchbox">
                    <button type="submit" class="searchbtn"><i class="fa-search"></i> </button>
            </div>

        <div class="form-popup" id="myForm">
        
        <div class="back">
        
        <form action="/action_page.php" class="form-container">
    <!-- <div class="back"></div> -->
    <div class="popupbox">
        <div class="text1">Delete Confirmation</div>
        <div class="text2">Are you sure you want to delete this room details ?</div>
    <button type="submit" class="btn">@foreach($Room_key as $rooms)<span><td><a  class ="textdec" href={{"DeleteRoomData/".$rooms['ID']}}>@endforeach Delete</a></td></span></button>
    
    <button type="button" class="btncancel" onclick="closeForm()">Close</button>
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
                        <td>Id</td>
                        <td>Room ID</td>
                        <td>Floor Number</td>
                        <td>Room Type</td>
                        <td>Price</td>
                        <td>Room Status</td>
                        <td>Description</td>
                        <td>Update</td>
                        

                    </tr>
                    @foreach($Room_key as $room)

                    <tr class="tablehead2">
                        <td>{{$room['ID']}}</td>
                        <td>{{$room['RoomID']}}</td>
                        <td>{{$room['FloorNumber']}}</td>
                        <td>{{$room['RoomType']}}</td>
                        <td>{{$room['Price']}}</td>
                        <td>{{$room['RoomStatus']}}</td>
                        <td>{{$room['Description']}}</td>
                        
                        <!-- <td><a href={{"ShowUpdateInventoryData/".$inventoryss['id']}}>Update</a></td> -->
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
            <a href="#">
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