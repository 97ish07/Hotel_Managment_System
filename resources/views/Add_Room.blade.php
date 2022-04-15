<!DOCTYPE html>
<html>


    <head>
         <link rel="stylesheet" href="/css/main.css"/>
         <link rel="stylesheet" href="/css/addinventory.css"/>
        
    </head>

    <body >
    <div id="app">
       
    <span id="error_message" class="text-danger"></span>  
                     <span id="success_message" class="text-success"></span>
        <div class="background" >
        <div class="version-tag">Version 1.1.0</div>
            <div class="invdashboardback"></div>
                <div class="formbackground">
                  <div class="title">Add Room</div>
                  <div class="addlogo"></div>
                    <form action="addRoom" method="POST" id="submit_form" >
                            @csrf 
                            <label class="l1" ><span>*</span> Room type</label>
                             <select class="select" name="roomType" placeholder="Enter Item type">
                               <option selected>Select Room Type</option>
                                <option value="Food">Single Room</option>
                                <option value="Electric">Double Room</option>
                                <option value="inventory">Triple Room</option>
                             </select>
                             <span>@error('RoomType'){{$message}}@enderror</span>
                     <label class="l2" ><span>*</span> Room ID</label>
                     <div class="ItemName"><input type="text" name="roomID" placeholder="Enter Room ID" class="texbox"></div></br><div class="error2"><span>@error('RoomID'){{$message}}@enderror</span></div></br></br>
                     <label class="l3" ><span>*</span> Room Status</label>  
                     <div class="SupplireName"><input type="text" name="roomStatus" placeholder="Enter Room Status" class="texbox"></div></br><div class="error3"><span>@error('RoomStatus'){{$message}}@enderror</span></div></br></br>
                     <label class="l4" ><span>*</span> Floor Number</label>     
                     <div class="UnitPrice"><input type="text" name="floorNumber" placeholder="Enter Floor Number" class="texbox"></div></br><div class="error4"><span>@error('FloorNumber'){{$message}}@enderror</span></div></br></br>
                     <label class="l5" ><span>*</span> Price (Rs:)</label>           
                     <div class="Quantity"><input type="text" name="price" placeholder="Enter Price" class="texbox"></div></br><div class="error5"><span>@error('Price'){{$message}}@enderror</span></div></br></br>
                     <label class="l6" ><span>*</span> Description</label>                
                     <div class="Description"><input type="text" name="description" placeholder="Description" class="texbox"></div></br><div class="error6"><span>@error('Description'){{$message}}@enderror</span></div></br></br>
                      <button  type="submit" class="submitbtn">submit</button><div id="app">
        
    </div>
                      
                      
                      <button type="#" class="clearbtn">Cancel</button>
</form>

                </div>
                <div class="navigationbar">

                             <a href="dashboard">  <div class="logo"></div></a>
                             <a href="dashboard"> <div class="home" ><div class="homelogo" ></div>Home</div></a>
                             <a href="#"> <div class="RoomBooking" ><div class="RoomBookinglogo" ></div>Room Booking</div></a>
                             <a href="#"><div class="RoomManagement" ><div class="RoomManagementlogo" ></div>Room Management</div></a>
                             <a href="#"> <div class="Dining" ><div class="Dininglogo" ></div>Dining</div></a>
                             <a href="inventory_page"><div class="Inventory" ><div class="Inventorylogo" ></div>Inventory Management</div></a>


                </div>
        </div>
 
        
    </body>

</html>