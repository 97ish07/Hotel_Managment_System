
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
        <div class="version-tag">Version 1.2.0</div>
       
            <div class="invdashboardback"></div>
           
                <div class="formbackground">
                  <div class="title">Add Inventory</div>
                  <div class="addlogo"></div>

                  
                  @if(session()->has('message'))
    <div class="susceessmg">
        {{ session()->get('message') }}
    </div>
@endif
                    <form action="add_inventory" method="POST" id="submit_form" >
                            @csrf 
                            <label class="l1" ><span>*</span> Item Type</label>
                             <select class="select" name="ItemType" placeholder="Enter Item type">
                               <option selected>Select Item Type</option>
                                <option value="Food">Food</option>
                                <option value="Electric">Electrical</option>
                                <option value="Furniture">Furniture</option>
                                <option value="Stationary">Stationary</option>
                                <option value="Other">Other</option>
                             </select>
                             <span>@error('ItemType'){{$message}}@enderror</span>
                     <label class="l2" ><span>*</span> Item Name</label>
                     <div class="ItemName"><input type="text" name="ItemName" placeholder="Enter Item Name" class="texbox"></div></br><div class="error2"><span>@error('ItemName'){{$message}}@enderror</span></div></br></br>
                     <label class="l3" ><span>*</span> Supplire Name</label>  
                     <div class="SupplireName"><input  type="text" name="SupplireName" placeholder="Enter Supplire Name" class="texbox"></div></br><div class="error3" ><span>@error('SupplireName'){{$message}}@enderror</span></div></br></br>
                     <label class="l4" ><span>*</span> Unit Price</label>     
                     <div class="UnitPrice"><input id="numb" type="text" name="UnitPrice" placeholder="Enter Unit Price(Rs)" class="texbox"></div></br><div class="error4"><span>@error('UnitPrice'){{$message}}@enderror</span></div></br></br>
                     <p id="demo"></p>
                     <label class="l5" ><span>*</span> Quantity</label>           
                     <div class="Quantity"><input type="text" name="Quantity" placeholder="Enter Quantity" class="texbox"></div></br><div class="error5"><span>@error('Quantity'){{$message}}@enderror</span></div></br></br>
                     <label class="l6" ><span>*</span> Description</label>                
                     <div class="Description"><input type="text" name="Description" placeholder="Description" class="texbox"></div></br><div class="error6"><span>@error('Description'){{$message}}@enderror</span></div></br></br>
                      <button onsubmit="myFunction()" type="submit" class="submitbtn"> Submit</button><div id="app">
        
    </div>
                      
                      
                      <button type="reset" value="Reset" class="clearbtn">Clear</button>
</form>



<!-- <form action="add_inventory" method="POST" id="submit_form" >
                           
                            <label class="l1" ><span>*</span> Item Type</label>
                             <select class="select" name="ItemType" placeholder="Enter Item type">
                               <option selected>Select Item Type</option>
                                <option value="Food">Food</option>
                                <option value="Electric">Electrical</option>
                                <option value="Furniture">Furniture</option>
                                <option value="Stationary">Stationary</option>
                                <option value="Other">Other</option>
                             </select>
                             <span><p id="demo"></p></span>

                     <label class="l2" ><span>*</span> Item Name</label>
                     <div class="ItemName"><input id="numb" type="text" name="ItemName" placeholder="Enter Item Name" class="texbox"></div></br><div class="error2"><span><p id="demo"></p></span></div></br></br>


                     <label class="l3" ><span>*</span> Supplire Name</label>  
                     <div class="SupplireName"><input  id="numb" type="text" name="SupplireName" placeholder="Enter Supplire Name" class="texbox"></div></br><div class="error3" ><span><p id="demo"></p></span></div></br></br>


                     <label class="l4" ><span>*</span> Unit Price</label>     
                     <div class="UnitPrice"><input id="numb" type="text" name="UnitPrice" placeholder="Enter Unit Price(Rs)" class="texbox"></div></br><div class="error4"><span><p id="demo"></p></span></div></br></br>
                     <p id="demo"></p>


                     <label class="l5" ><span>*</span> Quantity</label>           
                     <div class="Quantity"><input id="numb" type="text" name="Quantity" placeholder="Enter Quantity" class="texbox"></div></br><div class="error5"><span><p id="demo"></p></span></div></br></br>


                     <label class="l6" ><span>*</span> Description</label>                
                     <div class="Description"><input  id="numb" type="text" name="Description" placeholder="Description" class="texbox"></div></br><div class="error6"><span><p id="demo"></p></span></div></br></br>


                      <button onclick="myFunction()" type="Button" class="submitbtn"> Submit</button><div id="app">
        
    </div>
                      
                      
                      <button type="reset" value="Reset" class="clearbtn">Clear</button>
</form> -->




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
      


        <!-- <script>
function myFunction() {

  let x = document.getElementById("numb").value;
  
  let text;
  if (isNaN(x) || x < 1 || x > 10) {
    text = "Input not valid";
  } else {
    text = "Input OK";
  }
  document.getElementById("demo").innerHTML = text;
}
</script> -->
        
    </body>

</html>