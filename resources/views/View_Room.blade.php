<html>

<head>
    <link rel="stylesheet" href="/css/main.css" />
    <link rel="stylesheet" href="/css/viewinventory.css" />

</head>

    <body>
    <div class="background">
    <div class="version-tag">Version 1.1.0</div>
        <div class="viewindashboardback">
        <div class="titlelogoview"></div>       
        <div class="titleview">View Rooms</div>
            <div class="search">
                <form class="search_inventory" type="get" action="{{ url('/eventSearch') }}">
                    <input type="search" name="query" placeholder="Search.." class="searchbox">
                    <button type="submit" class="searchbtn"><i class="fa-search"></i> </button>
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

        <td>
            <a  href={{"updateRoom/".$room['ID']}}><div class="updte"></div></a>

        </td>
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

    </div>

    </body>
    </html>
