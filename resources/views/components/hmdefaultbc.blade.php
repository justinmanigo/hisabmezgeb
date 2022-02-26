<style>
du
{
    text-decoration-line: underline;
    text-decoration-style: double;
}
</style>

        <a href="default">Receipt</a>
        <a href="default_advance_receipt">&emsp;|&emsp;Advance Receipt</a>
        <a href="default_credit_receipt">&emsp;|&emsp;Credit Receipt</a>
        &emsp;|&emsp;<b><u>Bill</u></b>
        <a href="default_payment">&emsp;|&emsp;Payment</a>


<div>
<font face="times new roman" size="17" color="blue">
<table>
    <tr>
        <td><img src="https://img.icons8.com/color/35/4a90e2/verified-badge.png"/></td>
        <td>Default - Bill</td>
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

    Prefix for Bill Reference Number <br>
    <input type="text" value="Bill#-">  <br> 
    like Bill#-001, Bill#-002, Bill#-003 (Auto Increase when Creating new file) <br><br>





    <form>
        <input type="button" value="Set as Default"><br><br>
        <input type="button" value="Cancel">
        <input type="button" value="Save"> <br><br>

        <label>Cash on Hand: </label>
        <select>
            <option>1010 - Cash on Hand</option>
        </select><br><br>
        
        <label>Items for Sale:</label>
        <select>
            <option>5100 - Cost of Goods Sold</option>
        </select><br><br>

        <label>Freight Charge Expense:</label>
        <select>
            <option>5110 - Freight Charge</option>
        </select><br><br>

        <label>VAT Receivable:</label>
        <select>
            <option>1204 - VAT Receivable</option>
        </select><br><br>

        <label>Account Payable:</label>
        <select>
            <option>2000 - Account Payable</option>
        </select><br><br>

        <label>Withholding:</label>
        <select>
            <option>2105 - Withholding Tax Payable</option>
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
        <hr><hr><b><i><h1>Bill - Cash Purchase </h1></i></b> <hr><hr>
    </center>
    <center>
    <table width= 50%>
        <tr>
            <td></td>
            <td><b><u>Debit</u></b></td>
            <td><b><u>Credit</u></b></td>
        </tr>
        <tr>
            <td>5100 - Cost of Goods Sold</td>
            <td>2,000.00</td>
            <td></td>
        </tr>
        <tr>
            <td>1204 - VAT Receivable</td>
            <td>300.00</td>
            <td></td>
        </tr>
        <tr>
            <td>&emsp;&emsp;1010 - Cash on Hand</td>
            <td>_______</td>
            <td><u>2,300.00</u></td>
        </tr>
        <tr>
            <td><b>Total</b></td>
            <td><b><du>2,300.00</du></b></td>
            <td><b><du>2,300.00</du></b></td>
        </tr>

    </table>
    </center>

    <br><br>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>
    <center>
        <hr><hr><b><i><h1>Bill - Cash Expense</h1></i></b> <hr><hr>
    </center>
    <center>
    <table width= 50%>
        <tr>
            <td></td>
            <td><b><u>Debit</u></b></td>
            <td><b><u>Credit</u></b></td>
        </tr>
        <tr>
            <td>6117 - Telephone Expenses</td>
            <td>1,000.00</td>
            <td></td>
        </tr>
        <tr>
            <td>1204 - VAT Receivable</td>
            <td>150.00</td>
            <td></td>
        </tr>
        <tr>
            <td>&emsp;&emsp;1010 - Cash on Hand</td>
            <td>_______</td>
            <td><u>1,150.00</u></td>
        </tr>
        <tr>
            <td><b>Total</b></td>
            <td><b><du>1,150.00</du></b></td>
            <td><b><du>1,150.00</du></b></td>
        </tr>

    </table>
    </center>

    <br><br>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>
    <center>
        <hr><hr><b><i><h1>Bill - Credit Expense</h1></i></b> <hr><hr>
    </center>
    <center>
    <table width= 50%>
        <tr>
            <td></td>
            <td><b><u>Debit</u></b></td>
            <td><b><u>Credit</u></b></td>
        </tr>
        <tr>
            <td>6117 - Telephone Expenses</td>
            <td>1,000.00</td>
            <td></td>
        </tr>
        <tr>
            <td>1204 - VAT Receivable</td>
            <td>150.00</td>
            <td></td>
        </tr>
        <tr>
            <td>&emsp;&emsp;2000 - Account Payable</td>
            <td>_______</td>
            <td><u>1,150.00</u></td>
        </tr>
        <tr>
            <td><b>Total</b></td>
            <td><b><du>1,150.00</du></b></td>
            <td><b><du>1,150.00</du></b></td>
        </tr>

    </table>
    </center>


    
</div>