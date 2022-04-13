<head>
    <link rel="stylesheet" href="/css/viewinventory.css" />
    <link rel="stylesheet" href="resources/js/bootstrap.js"/>
    <link rel="stylesheet" href="/css/popup.css" />
    <link href="/css/app.css" rel="stylesheet">
</head>
<h2>edit page</h2>
<form action="/update_inventory" method="POST" >
    @csrf 
    
    <input type="hidden" name="id" value={{$update_key['id']}}></br></br></br>
    <input type="text" name="ItemType" value={{$update_key['Item_Type']}}></br></br></br>
    <input type="text" name="ItemName" value={{$update_key['Item_Name']}}></br></br></br>
    <input type="text" name="SupplireName" value={{$update_key['Supplire_Name']}}></br></br></br>
    <input type="text" name="UnitPrice" value={{$update_key['Unit_Price']}}></br></br></br>
    <input type="text" name="Quantity" value={{$update_key['Quantity']}}></br></br></br>
    <input type="text" name="Description" value={{$update_key['Description']}}></br></br></br>
    <button type="submit">Update</button>
</form>



<button class="open-button" onclick="openForm()">Open Form</button>

<div class="form-popup" id="myForm">
<form action="/action_page.php" class="form-container">
    <button type="submit" class="btn">Delete</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
