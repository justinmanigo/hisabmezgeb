<link rel="stylesheet" href="css/newcss.css">
<div>
<font face="times new roman" size="17" color="blue">
<table>
    <tr>
        <td><img src="https://img.icons8.com/ios/35/4a90e2/open-box.png"/></td>
        <td>Items</td>
    </tr>
</table>
</font>
<img src="https://img.icons8.com/external-tulpahn-detailed-outline-tulpahn/35/000000/external-setting-mobile-user-interface-tulpahn-detailed-outline-tulpahn.png" title="Settings">
Item Settings
<br>
[Item Setting] will help a user to set Inventory Value calculation for (LIFO, FIFO or AVARAGE METHOD). <br><br> By default
Avarage Method will be seleted unless a user change the setting.
<br><br>
Item list will help a user to sale or buy an Item.
<br> <br>
There will be 2 types of an Item (Inventory / Non-Inventory)
<br><br> <em>Inventory</em> <br>
For this type of Items the system will count (Adds and Purchased and Deducts when Item sold)
<br><br> <em>Non-INventory</em> <br>
For this type of Items no need to count Items it will display "----" in Quantity and Value Columns.
This could be a service or any other Items like Food (Breakfast / Lunch)
<br><br>
<p>List</p>
    <p>This will list available Items. Those <em>ITEMS</em> will available when making 
    new <em>RECEIPT</em> or <em>PURCHASE</em>. When making a Purchase item quntity will 
    increase and when making Sales/Receipt Item quntity will decrease.</p>

<font face="times new roman" align=right>

<hr><hr><hr><hr><hr><hr><hr>
<hr><hr><hr><hr><hr><hr><hr>
<hr><hr><hr><hr><hr><hr><hr>
<hr><hr><hr><hr><hr><hr><hr>

<!-- This will show TOTAL Value of inventory -->
<table width=100%> 
<tr>
        <td><b>Total Item Value</b></td>
    </tr>
    <tr>
        <td><b>5,093.66</b></td>
    </tr>
</table>
</font>

</div>
<br>
<!--
Fields for New Inventory Item
ItemCode*, ItemName*, Decription, Sales Price*, Purchase Price,
Inventory Type (Inventory Item or Non-Inventory Item), Quantity (Default Value = 0.00),
Notify me when quantity below, Tax (0%, 2%, 15%), Default Income Account,
Default Expense Account (Cost of Goods Sold, or Expense Account {lists selected from chart of account]), 
Picture, Status (Active/Inactive), Category

When Displaying Item list Please show Inventory Value in Bill According to Lifo, Fifo or Average Method. 
Top right corner show total Inventory Value in Birr

-->

<table width=100% border=1 class="table"> 
        <tr>
            <th>Item Code</th>
            <th>Item Name</th>
            <th>Sales Price</th>
            <th>Category</th>
            <th>Quantity</th>
            <th>Value</th> <!-- Value = Quantity * Sales Price -->
        </tr>

        <tr>
            <td>F001</td>
            <td>Fetira</td>
            <td>73.91</td>
            <td><span style="background-color:skyblue">&emsp;Break-Fast&emsp;</span></td>
            <td>-----</td>
            <td>-----</td>
        </tr>

        <tr>
            <td>F002</td>
            <td>Fuel</td>
            <td>34.78</td>
            <td><span style="background-color:skyblue">&emsp;Break-Fast&emsp;</span></td>
            <td>-----</td>
            <td>-----</td>
        </tr>

        <tr>
            <td>O001</td>
            <td>Omlet</td>
            <td>47.82</td>
            <td><span style="background-color:skyblue">&emsp;Break-Fast&emsp;</span></td>
            <td>-----</td>
            <td>-----</td>
        </tr>

        <tr>
            <td>T001</td>
            <td>Tea</td>
            <td>6.08</td>
            <td><span style="background-color:red">&emsp;Hot Drink&emsp;</span></td>
            <td>-----</td>
            <td>-----</td>

        </tr>

        <tr>
            <td>M001</td>
            <td>Milk</td>
            <td>15.65</td>
            <td><span style="background-color:red">&emsp;Hot Drink&emsp;</span></td>
            <td>-----</td>
            <td>-----</td>
        </tr>

        <tr>
            <td>C001</td>
            <td>Coffee</td>
            <td>15.65</td>
            <td><span style="background-color:red">&emsp;Hot Drink&emsp;</span></td>
            <td>-----</td>
            <td>-----</td>
        </tr>

        <tr>
            <td>S001</td>
            <td>Soft Drink</td>
            <td>13.04</td>
            <td><span style="background-color:yellow">&emsp;Cold Drink&emsp;</span></td>
            <td>150.00</td>
            <td>1,956.00</td>
        </tr>

        <tr>
            <td>A001</td>
            <td>Ambo</td>
            <td>13.04</td>
            <td><span style="background-color:yellow">&emsp;Cold Drink&emsp;</span></td>
            <td>40.00</td>
            <td>521.60</td>
        </tr>

        <tr>
            <td>W001</td>
            <td>Water</td>
            <td>14.78</td>
            <td><span style="background-color:yellow">&emsp;Cold Drink&emsp;</span></td>
            <td>177.00</td>
            <td>2,616.06</td>
        </tr>
    </table>

    
