<div id="main_home">
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
                <option value="Ontario">Ontario</option>
                <option value="Quebec">Quebec</option>
                <option value="Saskatchewan">Saskatchewan</option>
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
