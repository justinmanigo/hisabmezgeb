<style>
    .conta {padding: 30px;}
    table tr#ROW1  {background-color:lightgray; color:black; border:inset 4px black;}

    /* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

table td#CELL9 {border:inset 4px black; background-color:lightgray;}
</style>


<div class="conta"> 
    

    <!--Descriptions About New Receipt-->
    <h1>This is where we can create a new Receipt (Cash/Credit or Partialy Paid.</h1>
 
    <br>

</div>

<hr><hr><hr><hr><hr><hr><hr>
<hr><hr><hr><hr><hr><hr><hr>
<hr><hr><hr><hr><hr><hr><hr>
<hr><hr><hr><hr><hr><hr><hr>

<!-- Form Test -->
<div class="conta"
<font face="times new roman" color="red">
    [Company Logo], [Company Name] <br> [address], [Tel], [Tin#], 
</font>
<center>
    <font size=20>Receipt</font>
</center>
<form action="">
    <table width=100%>
        <tr>
            <td colspan=3><b><u>Customer Details</u></b> :</td>
            <td align=right>Date : </td>
            <td><input type="date"></td>
        </tr>

        <tr>
            <td align=right>Customer : </td>
            <td><input type="text" placeholder="searchable"> +</td>
            <td></td>
            <td align=right>Reference# : </td>
            <td><input type="text"></td>
        </tr>

        <tr>
            <td align=right>Tin# : </td>
            <td><input type="number" placeholder="0042101026" disabled></td>
            <td></td>
            <td align=right>Proforma# : </td>
            <td><input type="text" placeholder="[if any]"></td>
        </tr>

        <tr>
            <td align=right>Contact Person : </td>
            <td><input type="text" disabled></td>
            <td></td>
            <td align=right>Due Date : </td>
            <td><input type="date"></td>
        </tr>

        <tr>
            <td align=right>Contact# : </td>
            <td><input type="number" placeholder="0911223344" disabled></td>
            <td></td>
            <td align=right>Account : </td>
            <td>
                <select>
                    <option>1010 - Cash on Hand</option>
                    <option>1020 - Petty Cash</option>
                    <option>1030 - Commercial Bank of Ethiopia</option>
                    <option>1031 - Wegagen Bank</option>
                    <option>1032 - United Bank</option>
                    <option>1033 - Corporative Bank of Oromia</option>
                </select>
            </td>
        </tr>

        <tr>
            <td colspan=5><br><br>Item :</td>
        </tr>

        <tr id="ROW1">
            <td>Item Code & Name</td>
            <td align=center>Qty</td>
            <td>Price</td>
            <td>Tax</td>
            <td>Total</td>
        </tr>

        <tr>
            <td><input type="text" placeholder="S01     Service Charge"></td>
            <td align=center><input type="number" value="2"></td>
            <td><input type="number" value="15000"></td>
            <td><input type="text" value="VAT (15%)" align=right readonly></td>
            <td><input type="text" value="30,000 (=Qty * Price)" align=right readonly>
            <button title="Delete Row"><img src="https://img.icons8.com/fluency/23/000000/minus.png"/></button></td>
        </tr>

        <tr>
            <td><input type="text" placeholder="M01     Misc. Service Charge"></td>
            <td align=center><input type="number" value="1"></td>
            <td><input type="number" value="100"></td>
            <td><input type="text" value="VAT (15%)" align=right readonly></td>
            <td><input type="text" value="100" align=right readonly>
            <button title="Delete Row"><img src="https://img.icons8.com/fluency/23/000000/minus.png"/></button>
            <button title="Delete Row"><img src="https://img.icons8.com/color/23/000000/plus--v3.png"/></button></td>
        </tr> 

        <tr>
            <td colspan=4 align=right>Sub Total :</td>
            <td><input type="text" value="30,100 (sum above)" align=right readonly></td>
        </tr>

        <tr>
            <td colspan=4 align=right>
            <label class="switch">
                <input type="checkbox">
                <span class="slider"></span>
                </label>
                Discount : </td>
            <td><input type="text" align=right readonly></td>
        </tr>

        <tr>
            <td colspan=4 align=right>
            <label class="switch">
                <input type="checkbox">
                <span class="slider"></span>
                </label>
                Withholding : </td>
            <td><input type="text" align=right readonly></td>
        </tr>


        <tr>
            <td colspan=4 align=right>Non-Taxable :</td>
            <td><input type="text" value="=sum item value with non-tax" align=right readonly></td>
        </tr>

        <tr>
            <td colspan=4 align=right>Tax :</td>
            <td><input type="text" value="4,515.00" align=right readonly></td>
        </tr>

        <tr>
            <td colspan=4 align=right>Total :</td>
            <td><input type="text" value="34,615.00" align="right" readonly></td>
        </tr>

        <tr>
            <td>.</td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td align=center  id="CELL9">
                <br>
                <b><u>Payment Type</u></b>
                <br>
                Credit
                <label class="switch">
                <input type="checkbox" checked align=center>
                <span class="slider"></span>
                </label>
                Cash
                <br>
                <input type="text" value=34,615.00> <br><br>
            </td>
        </tr>

        <tr>
            <td colspan=5>Remark:</td>
        </tr>

        <tr>
            <td colspan=5><input type="text" size=100%></td>
        </tr>

        <tr>
            <td colspan=5> <br><br> Attachment:</td>
        </tr>

        <tr>
            <td colspan=5><input type="file"></td>
        </tr>

        <tr>
            <td colspan=2><br><br><br><b><u>Chart of Accounts# & Name</u></b></td>
            <td><br><br><br><b><u>Debit</u></b></td>
            <td><br><br><br><b><u>Credit</u></b></td>
        </tr>

        <tr>
            <td colspan=2>1010 - Cash on Hand</td>
            <td>1,150.00</td>
        </tr>

        <tr>
            <td colspan=2>&emsp;&emsp;&emsp;2104 - VAT Payable</td>
            <td></td>
            <td>150.00</td>
        </tr>

        <tr>
            <td colspan=2>&emsp;&emsp;&emsp;4100 - Sales</td>
            <td>____________</td>
            <td><u>1,000.00</u></td>
        </tr>

        <tr>
            <td colspan=2><b>Total</b></td>
            <td><b>1,150.00</b></td>
            <td><b>1,150.00</b></td>
        </tr>

    </table>


</form>
</div>

<hr><hr><hr><hr><hr><hr><hr>
<hr><hr><hr><hr><hr><hr><hr>
<hr><hr><hr><hr><hr><hr><hr>
<hr><hr><hr><hr><hr><hr><hr>

<center>
    <p>PDF Format</p>
    <img src="https://img.icons8.com/officel/30/000000/down--v2.png"/>
</center>

<div class="conta">
    <!--Save and Cancel Buttons-->
    <input type="button" value="Save & New"> &emsp; <input type="button" value="Save & Close"> &emsp; 
    <input type="button" value="Cancel">

    <embed src="pdf/receipt.pdf" type="application/pdf" width=100% height=1200px />

    <input type="button" value="Save & New"> &emsp; <input type="button" value="Save & Close"> &emsp; 
    <input type="button" value="Cancel">
</div>