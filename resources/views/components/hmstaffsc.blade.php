<div>
<font face="times new roman" size="17" color="blue">
<table>
    <tr>
        <td><img src="https://img.icons8.com/external-becris-lineal-becris/35/4a90e2/external-staff-hotel-service-becris-lineal-becris.png"/></td>
        <td>Staffs</td>
    </tr>
</table>
</font>
    <p>List</p>
    <p>This will list Staffs Some Basic Details. <br>
    Fields:- First Name*, Father Name*, G. Father Name*, Date of Birth, Mobile#*, Telephone, 
    email, Tin#**, Type (Employee, Commission Agent) *, Basic Salary, Date Started Working*, 
    Date Ended Working (Default Text=“Still Working”), Emergency Contact Person, Contact Number
    <br><br>
    If “Employee” is selected in “Type” field, Basic Salary will be active field to enter salary 
    agreed & commission will be calculated for employees as a bonus along with Payroll (if any). 
    If “Commission Agent” is selected in “Type” field, Basic Salary will be inactive field and only 
    commission will be paid to him from Payment sub menu under Vendor.
    </p>

    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>

    <u><b>Payroll</b></u>
    <hr><hr><hr>
    Payroll Part will show another list/page. In the list each row will represent each Period/Month Total Salary. 
    For example when Payroll is generated for a Single Month/Period, the system will Calculate = Salary + Addition + Overtime - Tax - Deductions - Loan 
    to generate the NET PAY for each staff accordingly.
    <br><br>
    <a href="reference/Salary_Template.xlsx">Download Here</a> the Excel file format for Payroll including
    Calculation sample. 

    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>

    <u><b>Over Time (OT)</b></u>
    <hr><hr><hr>
    Over Time (OT) page/part will show another list. In this part if there is any staff works for over time 
    it will be recorded here. (Daily Activity) <br> <br>
    <u><b>Calculation</b></u> <br>
    Y = Basic Salary / 26 / 8 <br>
    Over Time (OT) = (Y) * (worked hour) * (rate) <br><br>
    <b><u>RATE</u></b> [Please make this Rate Editable in Payroll Rules page]<br>
    Day Rate before 6pm (18:00) = 1.25 <br>
    Night Rate after 6pm (18:00) = 1.50 <br> 
    Holiday / Weekend Rate = 2.00 <br>
    <center><img src="img/overtime.jpg" alt="Over Time Sample"></center>

    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>

    <u><b>Addition</b></u>
    <hr><hr><hr>
    Addition is what every is add to a staff for any reason other than basic salary. This list is also 
    a daily activity which will be calculated along the Payroll at the end of the month. <br>
    <center><img src="img/addition.jpg" alt="Addition Sample"></center>

    
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>

    <u><b>Deduction</b></u>
    <hr><hr><hr>
    Deduction is what every is deducted from a staff for any reason other than tax. This list is also 
    a daily activity which will be calculated along the Payroll at the end of the month. <br>
    <center><img src="img/deduction.jpg" alt="Deduction Sample"></center>
    
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>

    <u><b>Loan</b></u>
    <hr><hr><hr>
    According to “Paid in” option, the system will automatically deduct from staff net pay salary (payroll)  
     until the loan amount gets Zero. <br>
    <center><img src="img/loan.jpg" alt="Loan Sample"></center>
    
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>
    <hr><hr><hr><hr><hr><hr><hr>

    <u><b>Payroll Rules</b></u>
    <hr><hr><hr>
    In Payroll Rules This will show Tax Rules and Over Time Rules. <br><br>
    Please make 2 Columns for each rules (Tax Rules and Over Time Rules) <br>
    for the 1st Column it will be uneditable (Only can be edited from Control Panel) which is a government 
    rule. If a client wants to use there own rule editable by themselves. <br>

    and soon...
    <center><img src="img/payrollrules.jpg" alt="Payroll Rules Sample"></center>
</div>