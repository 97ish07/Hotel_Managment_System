<h1>inventory</h1>




<table border='1px'>
    <tr>
        <td>Id</td>
        <td>Item Type</td>
        <td>Item Name</td>
        <td>Supplire Name</td>
        <td>Unit Price</td>
        <td>Quantity</td>
        <td>Description</td>
        <td>Delete</td>
        <td>Update</td>

    </tr>
    @foreach($inventory_key as $inventorys)

    <tr>
        <td>{{$inventorys['id']}}</td>
        <td>{{$inventorys['Item_Type']}}</td>
        <td>{{$inventorys['Item_Name']}}</td>
        <td>{{$inventorys['Supplire_Name']}}</td>
        <td>{{$inventorys['Unit_Price']}}</td>
        <td>{{$inventorys['Quantity']}}</td>
        <td>{{$inventorys['Description']}}</td>
        <td><a href={{"DeleteInventoryData/".$inventorys['id']}}>Delete</a></td>
        <td><a href={{"ShowUpdateInventoryData/".$inventorys['id']}}>Update</a></td>

    </tr>

    @endforeach


</table>