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
                <div class="titlelogoview"></div>  
                  <div class="title">Update Room</div>
                  <div class="addlogo"></div>


                   @if(session()->has('message'))
    <div class="susceessmg">
        {{ session()->get('message') }}
    </div>
@endif

                
   <form action="/Update_Room" method="POST" >
    @csrf 
    
    <input type="hidden" name="id" value={{$update_key['id']}}></br></br></br>

<label class="l1" ><span>*</span> Room Type</label>    
<select class="select" name="Room_Type" placeholder="Select Room type">
                               <option selected value={{$update_key['RoomType']}} >Select Room Type</option>
                                <option value="Single Room">Single Room</option>
                                <option value="Double Room">Double Room</option>
                                <option value="Triple Room">Triple Room</option>
                                <option value="Quad Room">Quad Room</option>
                                <option value="King Room">King Room</option>
                             </select>

   <label class="l2" ><span>*</span> Room ID</label>
   <div class="ItemName"><input type="text" name="Room_ID" value={{$update_key['RoomID']}} class="texbox"></div></br><div class="error2"><span>@error('Room_ID'){{$message}}@enderror</span></div></br></br>


    <label class="l3" ><span>*</span> Room Status</label>  
   <div class="SupplireName"><input type="text" name="Room_Status" value={{$update_key['RoomStatus']}} class="texbox"></div></br><div class="error3"><span>@error('Room_Status'){{$message}}@enderror</span></div></br></br>

  
    <label class="l4" ><span>*</span> Room Price</label>     
   <div class="UnitPrice"><input type="text" name="Pri_ce" value={{$update_key['Price']}} class="texbox"></div></br><div class="error4"><span>@error('Pri_ce'){{$message}}@enderror</span></div></br></br>


    <label class="l5" ><span>*</span> Floor Number</label>           
    <div class="Quantity"><input type="text" name="Floor_Number" value={{$update_key['FloorNumber']}} class="texbox"></div></br><div class="error5"><span>@error('Floor_Number'){{$message}}@enderror</span></div></br></br>


    <label class="l6" ><span>*</span> Description</label>                
   <div class="Description"><input type="text" name="Descri_ption" value={{$update_key['Description']}} class="texbox"></div></br><div class="error6"><span>@error('Descri_ption'){{$message}}@enderror</span></div></br></br>
    
    <button  type="submit" class="submitbtn">Update</button><div id="app"></div>

</form>
                </div>
                <div class="navigationbar">

                             <a href="/dashboard">  <div class="logo"></div></a>
                             <a href="/dashboard"> <div class="home" ><div class="homelogo" ></div>Home</div></a>
                             <a href="#"> <div class="RoomBooking" ><div class="RoomBookinglogo" ></div>Room Booking</div></a>
                             <a href="Room_Dashboard"><div class="RoomManagement" ><div class="RoomManagementlogo" ></div>Room Management</div></a>
                             <a href="#"> <div class="Dining" ><div class="Dininglogo" ></div>Dining</div></a>
                             <a href="/inventory_page"><div class="Inventory" ><div class="Inventorylogo" ></div>Inventory Management</div></a>

                </div>
        </div>
        
    
    </body>

</html>