<style>
du
{
    text-decoration-line: underline;
    text-decoration-style: double;
}
</style>

        <a href="default">Receipt</a>
        <a href="default_advance_receipt">&emsp;|&emsp;Advance Receipt</a>
        &emsp;|&emsp;<b><u>Credit Receipt</u></b>
        <a href="default_bill">&emsp;|&emsp;Bill</a>
        <a href="default_payment">&emsp;|&emsp;Payment</a>


<div>
<font face="times new roman" size="17" color="blue">
<table>
    <tr>
        <td><img src="https://img.icons8.com/color/35/4a90e2/verified-badge.png"/></td>
        <td>Default - Credit Receipt</td>
    </tr>
</table>
</font>
    <p>
        This is where we set the Default for all accounts like Receipts, Bills, Payments and soon! The 
        list box will show all chart of accounts values to let the user select as per there need.
    </p>

    <br><br>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>

    Prefix for Credit Receipt Reference Number <br>
    <input type="text" value="CrR#-">  <br> 
    like CrR#-001, CrR#-002, CrR#-003 (Auto Increase when Creating new file) <br><br>




    <form>
        <input type="button" value="Set as Default"><br><br>
        <input type="button" value="Cancel">
        <input type="button" value="Save"> <br><br>

        <label>Cash on Hand: </label>
        <select>
            <option>1010 - Cash on Hand</option>
        </select><br><br>

        <label>Account Receivable:</label>
        <select>
            <option>1110 - Account Receivable</option>
        </select><br><br>
  
        <input type="button" value="Set as Default"><br><br>
        <input type="button" value="Cancel">
        <input type="button" value="Save">
    </form>
    
    
    <br><br>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>
    <center>The Formart and Condition will goes like this accoring to the transactions. [System Data / 
        no need to display] </center>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>
    <center>
        <hr><hr><b><i><h1>Receipt - Cash Sales</h1></i></b> <hr><hr>
    </center>
    <center>
    <table width= 50%>
        <tr>
            <td></td>
            <td><b><u>Debit</u></b></td>
            <td><b><u>Credit</u></b></td>
        </tr>
        <tr>
            <td>1010 - Cash on Hand</td>
            <td>650.00</td>
            <td></td>
        </tr>
        <tr>
            <td>&emsp;&emsp;1110 - Account Receivable</td>
            <td>_______</td>
            <td><u>650.00</u></td>
        </tr>
        <tr>
            <td><b>Total</b></td>
            <td><b><du>650.00</du></b></td>
            <td><b><du>650.00</du></b></td>
        </tr>

    </table>
    </center>

</div>