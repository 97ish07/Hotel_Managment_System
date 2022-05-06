<!DOCTYPE html>
<html>


    <head>
         <link rel="stylesheet" href="/css/main.css"/>
         <link rel="stylesheet" href="/css/updateinventory.css"/>
        
    </head>

    <body >
    <div id="app">
       
    <span id="error_message" class="text-danger"></span>  
                     <span id="success_message" class="text-success"></span>
        <div class="background" >
        <div class="version-tag">Version 1.1.0</div>
            <div class="invdashboardback"></div>
                <div class="formbackground">
                  <div class="title">Update Room</div>
                  <div class="addlogo"></div>

                
   <form action="/updateRoom" method="POST" >
    @csrf 
    
    <input type="hidden" name="ID" value={{$update_key['id']}}></br></br></br>

<label class="l1" ><span>*</span> Room Type</label>    
<select class="select" name="roomType" placeholder="Enter Room type">
                               <option selected value={{$update_key['roomType']}} >Select Room Type</option>
                                <option value="Singale Room">Single Room</option>
                                <option value="Double Room">Double Room</option>
                                <option value="Trible Room">Trible Room</option>
                                <option value="Family Room">Family Room</option>
                                <option value="Other">Other</option>
                             </select>

   <label class="l2" ><span>*</span> Room ID</label>
   <div class="ItemName"><input type="text" name="roomID" value={{$update_key['RoomID']}} class="texbox"></div></br><div class="error2"><span>@error('roomID'){{$message}}@enderror</span></div></br></br>


    <label class="l3" ><span>*</span> Room Status</label>  
   <div class="SupplireName"><input type="text" name="roomStatus" value={{$update_key['RoomStatus']}} class="texbox"></div></br><div class="error3"><span>@error('roomStatus'){{$message}}@enderror</span></div></br></br>

  
    <label class="l4" ><span>*</span> Floor Number</label>     
   <div class="UnitPrice"><input type="text" name="floorNumber" value={{$update_key['FloorNumber']}} class="texbox"></div></br><div class="error4"><span>@error('floorNumber'){{$message}}@enderror</span></div></br></br>


    <label class="l5" ><span>*</span> Price (Rs:)</label>           
    <div class="Quantity"><input type="text" name="price" value={{$update_key['Price']}} class="texbox"></div></br><div class="error5"><span>@error('price'){{$message}}@enderror</span></div></br></br>


    <label class="l6" ><span>*</span> Description</label>                
   <div class="Description"><input type="text" name="description" value={{$update_key['Description']}} class="texbox"></div></br><div class="error6"><span>@error('description'){{$message}}@enderror</span></div></br></br>
    
    <button  type="submit" class="submitbtn">Update</button><div id="app"></div>

</form>
                </div>
                <div class="navigationbar">

                             <a href="/dashboard">  <div class="logo"></div></a>
                             <a href="/dashboard"> <div class="home" ><div class="homelogo" ></div>Home</div></a>
                             <a href="#"> <div class="RoomBooking" ><div class="RoomBookinglogo" ></div>Room Booking</div></a>
                             <a href="#"><div class="RoomManagement" ><div class="RoomManagementlogo" ></div>Room Management</div></a>
                             <a href="#"> <div class="Dining" ><div class="Dininglogo" ></div>Dining</div></a>
                             <a href="/inventory_page"><div class="Inventory" ><div class="Inventorylogo" ></div>Inventory Management</div></a>

                </div>
        </div>
        
    
    </body>

</html>