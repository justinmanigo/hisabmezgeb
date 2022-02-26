<style>
    .conta {padding: 30px;}
</style>

<div class="conta"> 
    

    <!--Descriptions About New Advance Receipt-->
    <em>Form</em>
    <p>This is where we create a new JV</p>
    <br>
    <p>
        each row have debit/credit value. can not have both values at a time. If there is Debit Value and a user
        try to enter Credit Value then the Debit Value have to be null automatically "".
    </p>
    <br>
    <p>
        when a record value is Debit the account name will not be indented. but if the record value is Credit
        let the account name will be indented automatically <br>like shown below <br>
        Cash on Hand is not indented (Debit Value) <br>
        VAT Payable and Sales is Indented (It is Credit Value)
    </p>
    <br>
    <p>
        Account# (1st Column) <br>
        Searchable List Box, this will list from Chart of Accounts,<br>
        when account# is selected automatically fill Account Name from Chart of Accounts
        <br><br>
        Account Name (2nd Column) <br>
        Searchable List Box, this will list Account Name from Chart of Accounts, <br>
        when Chart of Account Name is selected auto fill Account# from Chart of Accounts,
        <br><br>
        Debit/Credit (3rd & 4th Column) <br>
        Let the user enter a Number Value, but not that Total Debit and Total Credit have to be equal
        to save the record.
    </p>


</div>

<div class="conta">
    <!--Save and Cancel Buttons-->
    <input type="button" value="Save & New"> &emsp; <input type="button" value="Save & Close"> &emsp; 
    <input type="button" value="Cancel">

    <embed src="pdf/jv.pdf" type="application/pdf" width=100% height=1200px />

    <input type="button" value="Save & New"> &emsp; <input type="button" value="Save & Close"> &emsp; 
    <input type="button" value="Cancel">
</div>