<!DOCTYPE html>
<html>


<head>
    <link rel="stylesheet" href="/css/main.css" />
    <link rel="stylesheet" href="/css/viewinventory.css" />
</head>

<body>

    <div class="background">
        <div class="version-tag">Version 1.2.0</div>
        <div class="viewindashboardback">
            <div class="titlelogoview"></div>
            <div class="titleview">View Inventory</div>

            @if(session()->has('message'))
            <div class="susceessmg">
                {{ session()->get('message') }}
            </div>
            @endif


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
                        <td>Item Type</td>
                        <td>Item Name</td>
                        <td>Supplire Name</td>
                        <td>Unit Price</td>
                        <td>Quantity</td>
                        <td>Description</td>
                        <!-- <td>Delete</td> -->
                        <td>Update</td>

                    </tr>
                    @foreach($inventory_key as $inventorys)

                    <tr class="tablehead2">
                        <td>{{$inventorys['id']}}</td>
                        <td>{{$inventorys['Item_Type']}}</td>
                        <td>{{$inventorys['Item_Name']}}</td>
                        <td>{{$inventorys['Supplire_Name']}}</td>
                        <td>{{$inventorys['Unit_Price']}}</td>
                        <td>{{$inventorys['Quantity']}}</td>
                        <td>{{$inventorys['Description']}}</td>
                        <!-- <td><a href={{"DeleteInventoryData/".$inventorys['id']}}>Delete</a></td> -->
                        <td><a href={{"update_inventory/".$inventorys['id']}}>
                                <div class="updte"></div>
                            </a></td>

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

    </div>


</body>

</html>