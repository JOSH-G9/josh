<div id="main_registration">
    <article>
        <h2><strong>Member Registration</strong></h2>
        <form method="post" id="Registration" name="Registration" onsubmit="return validateForm()">
            <label for="FirstName">First Name:</label><br />
            <input id="FirstName" type="text" name="FirstName" placeholder="Donald"><br />
            <label for="LastName">Last Name:</label><br />
            <input id="LastName" type="text" name="LastName" placeholder="Trump"><br />
            <label for="Address">Address:</label><br />
            <input id="Address" type="text" name="Address" placeholder="123 Yonge St."><br />
            <label for="City">City:</label><br />
            <input id="City" type="text" name="City" placeholder="Toronto"><br />
            <label for="PostalCode">Postal Code:</label><br />
            <input id="PostalCode" type="text" name="PostalCode" placeholder="X0X0X0"><br />
            <label for="Province">Province:</label><br />
            <select id="Province" name="Province">
                <option value="Alberta">Alberta</option>
                <option value="British Columbia">British Columbia</option>
                <option value="Manitoba">Manitoba</option>
                <option value="New Brunswick">New Brunswick</option>
                <option value="Newfoundland and Labrador">Newfoundland and Labrador</option>
                <option value="Northwest Territories">Northwest Territories</option>
                <option value="Nunavut">Nunavut</option>
                <option value="Ontario">Ontario</option>
                <option value="Prince Edward Island">Prince Edward Island</option>
                <option value="Quebec">Quebec</option>
                <option value="Saskatchewan">Saskatchewan</option>
                <option value="Yukon">Yukon</option>
            </select><br />
            <label for="Age">Age:</label><br />
            <input id="Age" type="number" name="Age" placeholder="18"><br />
            <label for="Password">Password:</label><br />
            <input id="Password" type="password" name="Password"><br />
            <label for="Confirm">Confirm:</label><br />
            <input id="Confirm" type="password" name="confirm"><br />
            <label for="Email">Email:</label><br />
            <input id="Email" type="text" name="Email" placeholder="email@example.com"><br />
            <input id="submit" type="submit" name="submit" value="Register Now">
            <input id="reset" type="reset" name="clear" value="Clear Form">
        </form>
    </article>
</div>
<script>
    // Validate Input
    function validateForm()
    {
        // variables
        var a=document.forms["Registration"]["FirstName"].value;
        var b=document.forms["Registration"]["LastName"].value;
        var c=document.forms["Registration"]["Address"].value;
        var d=document.forms["Registration"]["City"].value;
        var e=document.forms["Registration"]["PostalCode"].value;
        var f=document.forms["Registration"]["Age"].value;
        var g=document.forms["Registration"]["Password"].value;
        var h=document.forms["Registration"]["Confirm"].value;
        var i=document.forms["Registration"]["Email"].value;
        var emailCheck = /^[_\w\-]+(\.[_\w\-]+)*@[\w\-]+(\.[\w\-]+)*(\.[\D]{2,6})$/;
        var postalCheck = /^[A-Za-z]\d[A-Za-z]\d[A-Za-z]\d$/;
        try {
            // check if the First Name is empty
            if ((a === '') || (a === null)) {
                throw new Error('First name must be filled out');
            }
            // check if the Last Name is empty
            if ((b === '') || (b === null)) {
                throw new Error('Last name must be filled out');
            }
            // check if the Address is empty
            if ((c === '') || (c === null)) {
                throw new Error('Adress must be filled out');
            }
            // check if the City is empty
            if ((d === '') || (d === null)) {
                throw new Error('City must be filled out');
            }
            // check if the Postal Code is empty
            if ((e === '') || (e === null)) {
                throw new Error('Postal Code must be filled out');
            }
            // check if the postal code is in valid format
            if (postalCheck.test(e) === false) {
                throw new Error('Invalid Postal Code! Please enter in A0A0A0 format');
            }
            // check if the Age is empty
            if ((f === '') || (f === null)) {
                throw new Error('Age must be filled out');
            }
            // check if the Age is at least 18
            if (f < 18) {
                throw new Error('Age has to be at least 18 years old');
            }
            // check if the Password is empty
            if ((g === '') || (g === null)) {
                throw new Error('Password must be filled out');
            }
            // check if the number of characters of Password is at least 6
            if (g.length < 6) {
                throw new Error('Passwords must have at least 6 characters');
            }
            // check if the Confirm is empty
            if ((h === '') || (h === null)) {
                throw new Error('Confirm must be filled out');
            }
            // check if the Password and Confirm are matched
            if (g != h) {
                throw new Error('The Confirm Password and Password fields should have identical input');
            }
            // check if the Email is empty
            if ((i === '') || (i === null)) {
                throw new Error('Email must be filled out');
            }
            // check if it is a valid email address
            if (emailCheck.test(i) === false) {
                throw new Error('Please provide a valid email address');
            }
            // alert that registration is completed
            alert("Thanks for the registration, your customer record is created successfully");
            return true;
        } // end try
        catch (formError) {
            // alert error message if applicable
            alert(formError.message);
            return false;
        } // end catch
    } // end validateForm()
</script>
