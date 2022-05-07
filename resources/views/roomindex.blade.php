<!DOCTYPE html>
<html>


    <head>
         <link rel="stylesheet" href="/css/index.css"/>
    </head>

    <body >
    
        <div class="background" >
            <divc class="container">
                
                <div class="navigationbar">

                    <div class="logo-wrapper"><div class="logo"></div></div>
                    <div class="flex-row" ><div class="homelogo" ></div><div>Home</div></div>
                    <div class="flex-row" ><div class="RoomBookinglogo" ></div><div>Room Booking</div></div>
                    <div class="flex-row" ><div class="RoomManagementlogo" ></div><div>Room Management</div></div>
                    <div class="flex-row" ><div class="Dininglogo" ></div><div>Dining</div></div>
                    <div class="flex-row border-bottom"  ><div class="Inventorylogo" ></div><div>Inventory</div></div>

                </div>
            <div class="dashboardback">
            <div class="table-wrapper">
                <div class="search-wrapper"><div class="title">Booking List</div><div style="display:flex;"><input id="srch" type="text" placeholder="Search "/>
                <button onclick="(()=>{
                    window.location.href=`/roomindex?search=${document.getElementById('srch').value}`
                })()" class="btn-primary">Search</button></div></div>
                <table border="1">
                    <tr>
                        <td class="row-color">Customer ID</td>
                        <td class="row-color">Name</td>
                        <td class="row-color">Contact No</td>
                        <td class="row-color">Email</td>
                        <td class="row-color">Address</td>
                        <td class="row-color">Booking ID</td>
                        <td class="row-color">Room ID</td>
                        <td class="row-color">Checked In Date</td>
                        <td class="row-color">Checked Out Date</td>
                        <td class="row-color">Operation</td>
    
                    </tr>
                    @foreach ($bookings as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->cus_name}}</td>
                        <td>{{$item->contact_No}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->address}}</td>
                        <td>{{$item->book_ID}}</td>
                        <td>{{$item->room_ID}}</td>
                        <td>{{$item->checked_in}}</td>
                        <td>{{$item->checked_out}}</td>
                        <td><a href={{"deletelist/".$item['id']}}><i class="fa fa-trash">Delete</i></a>
                            <a href={{"editlist/".$item['id']}}><i class="fa fa-edit">Edit</i></a>
                        </td>
  
                    </tr>
                    @endforeach
                </table>
                <div class="b_container">
                    <button class="btn-primary" onclick="(()=>{window.location.href='/create'})()">Add details</button>
                    <button class="btn-danger" onclick="(()=>{window.location.href='/bookPdf'})()">Generate Report</button>
                </div>
            </div>    
            </div>    
        </div>
            </div>
    </body>

</html>