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
            <div class="invdashboardback2"></div>
                <div class="formbackground">
                  <div class="title">Add Room</div>
                  <div class="addlogo"></div>

                  
                  @if(session()->has('message'))
    <div class="susceessmg">
        {{ session()->get('message') }}
    </div>
@endif
                    <form action="Add_Room" method="POST" id="submit_form" >
                            @csrf 
                            <label class="l1" ><span>*</span> Room Type</label>
                             <select class="select" name="Room_Type" placeholder="Select Room type">
                               <option selected>Select Room Type</option>
                                <option value="Single Room">Single Room</option>
                                <option value="Double Room">Double Room</option>
                                <option value="Triple Room">Triple Room</option>
                                <option value="Quad Room">Quad Room</option>
                                <option value="King Room">King Room</option>
                             </select>
                             <span>@error('Room_Type'){{$message}}@enderror</span>
                     <label class="l2" ><span>*</span> Room ID</label>
                     <div class="ItemName"><input type="text" name="Room_ID" placeholder="Enter Room ID" class="texbox"></div></br><div class="error2"><span>@error('Room_ID'){{$message}}@enderror</span></div></br></br>
                     <label class="l3" ><span>*</span> Room Status</label>  
                     <div class="SupplireName"><input  type="text" name="Room_Status" placeholder="Enter Room Status" class="texbox"></div></br><div class="error3" ><span>@error('Room_Status'){{$message}}@enderror</span></div></br></br>
                     <label class="l4" ><span>*</span> Room Price</label>     
                     <div class="UnitPrice"><input id="numb" type="text" name="Pri_ce" placeholder="Enter Room Price(Rs)" class="texbox"></div></br><div class="error4"><span>@error('Pri_ce'){{$message}}@enderror</span></div></br></br>
                     <p id="demo"></p>
                     <label class="l5" ><span>*</span> Floor Number</label>           
                     <div class="Quantity"><input type="text" name="Floor_Number" placeholder="Enter Floor Number" class="texbox"></div></br><div class="error5"><span>@error('Floor_Number'){{$message}}@enderror</span></div></br></br>
                     <label class="l6" ><span>*</span> Description</label>                
                     <div class="Description"><input type="text" name="Descri_ption" placeholder="Enter Description" class="texbox"></div></br><div class="error6"><span>@error('Descri_ption'){{$message}}@enderror</span></div></br></br>
                      <button onsubmit="myFunction()" type="submit" class="submitbtn"> Submit</button><div id="app">
        
    </div>
                      
                      
                      <button type="reset" value="Reset" class="clearbtn">Clear</button>
</form>







                </div>
                <div class="navigationbar">

                             <a href="dashboard">  <div class="logo"></div></a>
                             <a href="dashboard"> <div class="home" ><div class="homelogo" ></div>Home</div></a>
                             <a href="#"> <div class="RoomBooking" ><div class="RoomBookinglogo" ></div>Room Booking</div></a>
                             <a href="Room_Dashboard"><div class="RoomManagement" ><div class="RoomManagementlogo" ></div>Room Management</div></a>
                             <a href="#"> <div class="Dining" ><div class="Dininglogo" ></div>Dining</div></a>
                             <a href="inventory_page"><div class="Inventory" ><div class="Inventorylogo" ></div>Inventory Management</div></a>


                </div>
        </div>
      


        <script>
function myFunction() {
  // Get the value of the input field with id="numb"
  let x = document.getElementById("numb").value;
  // If x is Not a Number or less than one or greater than 10
  let text;
  if (isNaN(x) || x < 1 || x > 10) {
    text = "Input not valid";
  } else {
    text = "Input OK";
  }
  document.getElementById("demo").innerHTML = text;
}
</script>
        
    </body>

</html>