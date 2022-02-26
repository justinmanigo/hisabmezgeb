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
        <a href="default_bill">&emsp;|&emsp;Bill</a>
        &emsp;|&emsp;<b><u>Payment</u></b>


<div>
<font face="times new roman" size="17" color="blue">
<table>
    <tr>
        <td><img src="https://img.icons8.com/color/35/4a90e2/verified-badge.png"/></td>
        <td>Default - Payment</td>
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

    Prefix for Payment Reference Number <br>
    <input type="text" value="PV#-">  <br> 
    like PV#-001, PV#-002, PV#-003 (Auto Increase when Creating new file) <br><br>




    <form>
        <input type="button" value="Set as Default"><br><br>
        <input type="button" value="Cancel">
        <input type="button" value="Save"> <br><br>

        <label>Cash on Hand: </label>
        <select>
            <option>1010 - Cash on Hand</option>
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

        <label>Salary Payable:</label>
        <select>
            <option>2101 - Salary Payable</option>
        </select><br><br>

        <label>Commission Payment:</label>
        <select>
            <option>6107 - Commission Expense</option>
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
        <hr><hr><b><i><h1>Bill Payment</h1></i></b> <hr><hr>
    </center>
    <center>
    <table width= 50%>
        <tr>
            <td></td>
            <td><b><u>Debit</u></b></td>
            <td><b><u>Credit</u></b></td>
        </tr>
        <tr>
            <td>2000 - Account Payable</td>
            <td>10,000.00</td>
            <td></td>
        </tr>
        <tr>
            <td>&emsp;&emsp;1010 - Cash on Hand</td>
            <td>_______</td>
            <td><u>10,000.00</u></td>
        </tr>
        <tr>
            <td><b>Total</b></td>
            <td><b><du>10,000.00</du></b></td>
            <td><b><du>10,000.00</du></b></td>
        </tr>

    </table>
    </center>

    <br><br>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>
    <center>
        <hr><hr><b><i><h1>VAT Payment</h1></i></b> <hr><hr>
    </center>
    <center>
    <table width= 50%>
        <tr>
            <td></td>
            <td><b><u>Debit</u></b></td>
            <td><b><u>Credit</u></b></td>
        </tr>
        <tr>
            <td>2104 - VAT Payable</td>
            <td>20,000.00</td>
            <td></td>
        </tr>
        <tr>
            <td>&emsp;&emsp;1204 - VAT Receivable</td>
            <td></td>
            <td>11,000.00</td>
        </tr>
        <tr>
            <td>&emsp;&emsp;1010 - Cash on Hand</td>
            <td>_______</td>
            <td><u>9,000.00</u></td>
        </tr>
        <tr>
            <td><b>Total</b></td>
            <td><b><du>20,000.00</du></b></td>
            <td><b><du>20,000.00</du></b></td>
        </tr>

    </table>
    </center>

    <br><br>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>
    <center>
        <hr><hr><b><i><h1>Withholding Payment</h1></i></b> <hr><hr>
    </center>
    <center>
    <table width= 50%>
        <tr>
            <td></td>
            <td><b><u>Debit</u></b></td>
            <td><b><u>Credit</u></b></td>
        </tr>
        <tr>
            <td>2105 - Withholding Tax Payable</td>
            <td>655.00</td>
            <td></td>
        </tr>
        <tr>
            <td>&emsp;&emsp;1010 - Cash on Hand</td>
            <td>_______</td>
            <td><u>655.00</u></td>
        </tr>
        <tr>
            <td><b>Total</b></td>
            <td><b><du>655.00</du></b></td>
            <td><b><du>655.00</du></b></td>
        </tr>

    </table>
    </center>

    <br><br>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>
    <center>
        <hr><hr><b><i><h1>Salary Payment</h1></i></b> <hr><hr>
    </center>
    <center>
    <table width= 50%>
        <tr>
            <td></td>
            <td><b><u>Debit</u></b></td>
            <td><b><u>Credit</u></b></td>
        </tr>
        <tr>
            <td>2101 - Salary Payable</td>
            <td>7,000.00</td>
            <td></td>
        </tr>
        <tr>
            <td>&emsp;&emsp;1010 - Cash on Hand</td>
            <td>_______</td>
            <td><u>7,000.00</u></td>
        </tr>
        <tr>
            <td><b>Total</b></td>
            <td><b><du>7,000.00</du></b></td>
            <td><b><du>7,000.00</du></b></td>
        </tr>

    </table>
    </center>

    <br><br>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>
    <center>
        <hr><hr><b><i><h1>Commission Payment</h1></i></b> <hr><hr>
    </center>
    <center>
    <table width= 50%>
        <tr>
            <td></td>
            <td><b><u>Debit</u></b></td>
            <td><b><u>Credit</u></b></td>
        </tr>
        <tr>
            <td>6107 - Commission Expense</td>
            <td>1,000.00</td>
            <td></td>
        </tr>
        <tr>
            <td>&emsp;&emsp;#### - Commission Tax Payable</td>
            <td></td>
            <td>20.00</td>
        </tr>
        <tr>
            <td>&emsp;&emsp;1010 - Cash on Hand</td>
            <td>_______</td>
            <td><u>980.00</u></td>
        </tr>
        <tr>
            <td><b>Total</b></td>
            <td><b><du>1,000.00</du></b></td>
            <td><b><du>1,000.00</du></b></td>
        </tr>

    </table>
    </center>
</div>