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
                  <div class="title">Update Inventory</div>
                  <div class="addlogo"></div>

                
   <form action="/update_inventory" method="POST" >
    @csrf 
    
    <input type="hidden" name="id" value={{$update_key['id']}}></br></br></br>

<label class="l1" ><span>*</span> Item Type</label>    
<select class="select" name="ItemType" placeholder="Enter Item type">
                               <option selected value={{$update_key['Item_Type']}} >Select Item Type</option>
                                <option value="Food">Food</option>
                                <option value="Electric">Electrical</option>
                                <option value="Furniture">Furniture</option>
                                <option value="Stationary">Stationary</option>
                                <option value="Other">Other</option>
                             </select>

   <label class="l2" ><span>*</span> Item Name</label>
   <div class="ItemName"><input type="text" name="ItemName" value={{$update_key['Item_Name']}} class="texbox"></div></br><div class="error2"><span>@error('ItemName'){{$message}}@enderror</span></div></br></br>


    <label class="l3" ><span>*</span> Supplire Name</label>  
   <div class="SupplireName"><input type="text" name="SupplireName" value={{$update_key['Supplire_Name']}} class="texbox"></div></br><div class="error3"><span>@error('SupplireName'){{$message}}@enderror</span></div></br></br>

  
    <label class="l4" ><span>*</span> Unit Price</label>     
   <div class="UnitPrice"><input type="text" name="UnitPrice" value={{$update_key['Unit_Price']}} class="texbox"></div></br><div class="error4"><span>@error('UnitPrice'){{$message}}@enderror</span></div></br></br>


    <label class="l5" ><span>*</span> Quantity</label>           
    <div class="Quantity"><input type="text" name="Quantity" value={{$update_key['Quantity']}} class="texbox"></div></br><div class="error5"><span>@error('Quantity'){{$message}}@enderror</span></div></br></br>


    <label class="l6" ><span>*</span> Description</label>                
   <div class="Description"><input type="text" name="Description" value={{$update_key['Description']}} class="texbox"></div></br><div class="error6"><span>@error('Description'){{$message}}@enderror</span></div></br></br>
    
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