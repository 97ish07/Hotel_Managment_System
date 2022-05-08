<html>

<head>
    <link rel="stylesheet" href="/css/main.css" />
    <link rel="stylesheet" href="/css/viewinventory.css" />
    <!-- <link rel="stylesheet" href="/css/inventoryReport.css" /> -->
</head>


<body>


<div class="title">Hotel Diyatha</div>
<img src="images\logo.jpg" alt="Italian Trulli" height="100" width="100"   style="position: absolute;  right:0px; border-style:groove; border-radius:6px;">
<div class="pr1">Inventory item details.</div>


<div class="title3"> 
        </div>

<p class="date1"><?php
echo "Date  :". date("y-m-d");
?></p></p>


<p class="time1"><?php
echo "Time :". date("h:i:sa");
?></p>
<!-- <p id="demo" class="dttt"></p> -->



<table id="viewtable" class="table">
                    <tr style="background-color: lightslategray;">
                        <!-- <td>Id</td> -->
                        <td>Item Type</td>
                        <td>Item Name</td>
                        <td>Supplire Name</td>
                        <td>Unit Price</td>
                        <td>Quantity</td>
                        <!-- <td>Description</td> -->
                        <!-- <td>Delete</td> -->
                        <!-- <td>Update</td> -->

                    </tr>
                    @foreach($data as $inventorys)

                    <tr >
                        <!-- <td>{{$inventorys['id']}}</td> -->
                        <td>{{$inventorys['Item_Type']}}</td>
                        <td>{{$inventorys['Item_Name']}}</td>
                        <td>{{$inventorys['Supplire_Name']}}</td>
                        <td>{{$inventorys['Unit_Price']}}</td>
                        <td>{{$inventorys['Quantity']}}</td>
                        <!-- <td>{{$inventorys['Description']}}</td> -->
                        <!-- <td><a href={{"DeleteInventoryData/".$inventorys['id']}}>Delete</a></td> -->
                        <!-- <td><a  href={{"update_inventory/".$inventorys['id']}}><div class="updte"></div></a></td> -->

                    </tr>

                    @endforeach


                </table>
               
                <style>

/* .dttt {
  padding: 0;
  font-size: 24pt;
}
@element 'footer' {
  $this:before {
    content: '© eval("new Date().getFullYear()")\ '
  }
} */

.title{
    font-size: 40px;
    color:black;
    position: absolute;
    top: 0px;
    
}
.pr1{
    font-size: 20px;
    color:black;
    position: absolute;
    top: 165px;
    
}
.date1{
    font-size: 15px;
    color:black;
    position: absolute;
    top: 100px;
    
}
.time1{
    font-size: 15px;
    color:black;
    position: absolute;
    top: 120px;
    
}
table {
    position: absolute;
    top: 220px;
  border-collapse: collapse;
  border: 1px solid black;
  width: 100%;
}

#body{
    padding: 30px;
}

td {
  border: 1px solid black;
  padding: 10px;
  text-align: center;
  
}
.date{
    position: absolute;
    top: 120px;
    color: black;
    font-size: larger;
}


</style>


<!-- <script>
const months = ["January","February","March","April","May","June","July","August","September","October","November","December"];

const d = new Date();
let month = months[d.getMonth()];
document.getElementById("demo").innerHTML = month;

</script> -->

</body>

</html>