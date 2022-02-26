<style>
du
{
    text-decoration-line: underline;
    text-decoration-style: double;
}
</style>

        <b><u>Receipt</u></b>
        <a href="default_advance_receipt">&emsp;|&emsp;Advance Receipt</a>
        <a href="default_credit_receipt">&emsp;|&emsp;Credit Receipt</a>
        <a href="default_bill">&emsp;|&emsp;Bill</a>
        <a href="default_payment">&emsp;|&emsp;Payment</a>


<div>
<font face="times new roman" size="17" color="blue">
<table>
    <tr>
        <td><img src="https://img.icons8.com/color/35/4a90e2/verified-badge.png"/></td>
        <td>Default - Receipt</td>
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

    Prefix for Receipt Reference Number <br>
    <input type="text" value="Fs#-">  <br> 
    like Fs#-001, Fs#-002, Fs#-003 (Auto Increase when Creating new file) <br><br>




    <form>
        <input type="button" value="Set as Default"><br><br>
        <input type="button" value="Cancel">
        <input type="button" value="Save"> <br><br>

        <label>Cash on Hand: </label>
        <select>
            <option>1010 - Cash on Hand</option>
        </select><br><br>

        <label>VAT Payable:</label>
        <select>
            <option>2100 - VAT Payable</option>
        </select><br><br>

        <label>Sales:</label>
        <select>
            <option>4100 - Sales</option>
        </select><br><br>

        <label>Account Receivable:</label>
        <select>
            <option>1110 - Account Receivable</option>
        </select><br><br>

        <label>Sales Discount:</label>
        <select>
            <option>4102 - Sales Discount</option>
        </select><br><br>

        <label>Withholding:</label>
        <select>
            <option>1400 - Prepaid Tax</option>
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
            <td>115.00</td>
            <td></td>
        </tr>
        <tr>
            <td>&emsp;&emsp;2100 - VAT Payable</td>
            <td></td>
            <td>15.00</td>
        </tr>
        <tr>
            <td>&emsp;&emsp;4100 - Sales</td>
            <td>_______</td>
            <td><u>100.00</u></td>
        </tr>
        <tr>
            <td><b>Total</b></td>
            <td><b><du>115.00</du></b></td>
            <td><b><du>115.00</du></b></td>
        </tr>

    </table>
    </center>

    <br><br>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>
    <center>
        <hr><hr><b><i><h1>Receipt - Credit Sales</h1></i></b> <hr><hr>
    </center>
    <center>
    <table width= 50%>
        <tr>
            <td></td>
            <td><b><u>Debit</u></b></td>
            <td><b><u>Credit</u></b></td>
        </tr>
        <tr>
            <td>1110 - Account Receivable</td>
            <td>115.00</td>
            <td></td>
        </tr>
        <tr>
            <td>&emsp;&emsp;2104 - VAT Payable</td>
            <td></td>
            <td>15.00</td>
        </tr>
        <tr>
            <td>&emsp;&emsp;4100 - Sales</td>
            <td>_______</td>
            <td><u>100.00</u></td>
        </tr>
        <tr>
            <td><b>Total</b></td>
            <td><b><du>115.00</du></b></td>
            <td><b><du>115.00</du></b></td>
        </tr>

    </table>
    </center>

    <br><br>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>
    <center>
        <hr><hr><b><i><h1>Receipt - Partaily Paid Sales</h1></i></b> <hr><hr>
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
            <td>65.00</td>
            <td></td>
        </tr>
        <tr>
            <td>1110 - Account Receivable</td>
            <td>50.00</td>
            <td></td>
        </tr>
        <tr>
            <td>&emsp;&emsp;2104 - VAT Payable</td>
            <td></td>
            <td>15.00</td>
        </tr>
        <tr>
            <td>&emsp;&emsp;4100 - Sales</td>
            <td>_______</td>
            <td><u>100.00</u></td>
        </tr>
        <tr>
            <td><b>Total</b></td>
            <td><b><du>115.00</du></b></td>
            <td><b><du>115.00</du></b></td>
        </tr>

    </table>
    </center>

    <br><br>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>
    <center>
        <hr><hr><b><i><h1>Receipt - Sales with Discount</h1></i></b> <hr><hr>
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
            <td>95.00</td>
            <td></td>
        </tr>
        <tr>
            <td>4102 - Sales Discount</td>
            <td>20.00</td>
            <td></td>
        </tr>
        <tr>
            <td>&emsp;&emsp;2104 - VAT Payable</td>
            <td></td>
            <td>15.00</td>
        </tr>
        <tr>
            <td>&emsp;&emsp;4100 - Sales</td>
            <td>_______</td>
            <td><u>100.00</u></td>
        </tr>
        <tr>
            <td><b>Total</b></td>
            <td><b><du>115.00</du></b></td>
            <td><b><du>115.00</du></b></td>
        </tr>

    </table>
    </center>

    <br><br>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>
    <center>
        <hr><hr><b><i><h1>Receipt - Sales if it has Withholding Transaction</h1></i></b> <hr><hr>
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
            <td>1,130.00</td>
            <td></td>
        </tr>
        <tr>
            <td>1400 - Prepaid Tax</td>
            <td>20.00</td>
            <td></td>
        </tr>
        <tr>
            <td>&emsp;&emsp;2104 - VAT Payable</td>
            <td></td>
            <td>150.00</td>
        </tr>
        <tr>
            <td>&emsp;&emsp;4100 - Sales</td>
            <td>_______</td>
            <td><u>1,000.00</u></td>
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
        <hr><hr><b><i><h1>Receipt - Sales with Discount, Withholding & Partialy Paid</h1></i></b> <hr><hr>
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
            <td>65.00</td>
            <td></td>
        </tr>
        <tr>
            <td>1110 - Account Receivable</td>
            <td>28.00</td>
            <td></td>
        </tr>
        <tr>
            <td>4102 - Sales Discount</td>
            <td>20.00</td>
            <td></td>
        </tr>
        <tr>
            <td>1400 - Prepaid Tax</td>
            <td>2.00</td>
            <td></td>
        </tr>
        <tr>
            <td>&emsp;&emsp;2104 - VAT Payable</td>
            <td></td>
            <td>15.00</td>
        </tr>
        <tr>
            <td>&emsp;&emsp;4100 - Sales</td>
            <td>_______</td>
            <td><u>100.00</u></td>
        </tr>
        <tr>
            <td><b>Total</b></td>
            <td><b><du>115.00</du></b></td>
            <td><b><du>115.00</du></b></td>
        </tr>
    </table>
    </center>
</div>