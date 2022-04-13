<!DOCTYPE html>
<html>


<head>
    <link rel="stylesheet" href="/css/main.css" />
    <link rel="stylesheet" href="/css/viewinventory.css" />
    <link rel="stylesheet" href="/css/popup.css" />
</head>

<body>

    <div class="background">
    </div>
    
        <div class="viewindashboardback">
        <div class="form-popup" id="myForm">
<form action="/action_page.php" class="form-container">

    <button type="submit" class="btn">@foreach($inventory_keys as $inventoryss)<span><td><a href={{"DeleteInventoryData/".$inventoryss['id']}}>@endforeach Delete</a></td></span></button>
    
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
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
                        <td>Delete</td>
                        

                    </tr>
                    @foreach($inventory_keys as $inventoryss)

                    <tr class="tablehead2">
                        <td>{{$inventoryss['id']}}</td>
                        <td>{{$inventoryss['Item_Type']}}</td>
                        <td>{{$inventoryss['Item_Name']}}</td>
                        <td>{{$inventoryss['Supplire_Name']}}</td>
                        <td>{{$inventoryss['Unit_Price']}}</td>
                        <td>{{$inventoryss['Quantity']}}</td>
                        <td>{{$inventoryss['Description']}}</td>
                        
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