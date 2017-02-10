<?php
  var_dump($_GET);
  var_dump($_POST);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Practice</title>
</head>
    <body>  
        <!-- Form's acion is where the request goes 
        <form method="GET" action="form_practice.php">
        <p>
            <label for="property_type">Property Type</label>
            <input id="property_type" name="property_type" type="text">
        </p>
        <p>
            <label for="zipcode">Zip Code</label>
            <input id="zipcode" name="zipcode" type="password">
        </p>
        <p>
            <button type="submit">Search properties</button>
        </p>
        </form>

    
        <h1>Search BBC</h1>
        <form action="http://www.bbc.com/search" method="GET">
            <p>
                <label for="q">Search BBC</label>
                <input type="text" name="q" id="q">
            </p>
                <button type="submit">Search Now</button>
        </form>

        <h1>Search DuckDuckGo</h1>
        <form action="https://duckduckgo.com/" method="GET">
            <p>
                <label for="q">Search DuckDuckGo</label>
                <input type="text" name="q" id="q">
            </p>
                <button type="submit">Search!</button>-->


        <h1>Username and Password Practice</h1>
        <form action="form_practice.php" method="POST">
            <p>
                <label for="Username">Username</label>
                <input type="text" name="Username" id="Username" placeholder="Enter your username" required autofocus>
            </p>
            <p>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password" required>
            </p>

                <label for="email_body">Email body</label>
                <textarea id="email_body" placeholder="Write your message here"></textarea>

                <button type=submit>Login</button>
        </form>

        <h1>Compose an email</h1>
        <form action="form_practice.php" method="POST">
            <p>
                <label for="to">To</label>
                <input type="text" name="to" id="to" placeholder="Recipient">
            </p>
            <p>
                <label for="from">From</label>
                <input type="text" name="from" id="from" placeholder="Sender">
            </p>
            <p>
                <label for="subject">Subject</label>
                <input type="text" name="subject" id="subject" placeholder="Subject goes here">
            </p>
            <p>
                <label for="email_body">Email body</label>
                <br>
                <textarea id="email_body" placeholder="Write your message here"></textarea>
            </p>
                <button type=submit>Send Email</button> 
    </body>
</html>
