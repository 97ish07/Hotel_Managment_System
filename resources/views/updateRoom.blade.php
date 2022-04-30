<h1>Update Room</h1>
<form action="" method="POST"> 
   <input type="text" name="RoomID" value={{$data['RoomID']}}> <br> <br> <br>
   <input type="text" name="FloorNumber" value={{$data['FloorNumber']}}> <br> <br> <br>
   <input type="text" name="RoomType" value={{$data['RoomType']}}> <br> <br> <br> 
   <input type="text" name="Price" value={{$data['Price']}}> <br> <br> <br> 
   <input type="text" name="RoomStatus" value={{$data['RoomStatus']}}> <br> <br> <br>

   <input type="text" name="Description" value={{$data['Description']}}> <br> <br>

   <button type="submit">Update</button>

  </form>