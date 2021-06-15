<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Linking  -->
    
    <link rel="stylesheet" href="css/style.css">
    <title>P&#8377;ofit Bank</title>
    <link rel="shortcut icon" href="static/logo1.png" type="image/x-icon">
</head>
<body>

    <!-- Navigation -->
    <header>
        <div class="logoimg">
            <img src="static/logo1.png" alt="logo">
        </div>
        <div class="logo">P&#8377;ofit Bank</div>
        <div class="navigation">
            <ul>
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="createuser.php">Create User</a></li>
                <li><a href="transfermoney.php">Transfer Money</a></li>
                <li><a href="transactionhistory.php">Transaction History</a></li>
            </ul>
        </div>
    </header>

    <!-- Middle Content -->

    <section class="home">
        <img src="static/bank.jpg" class="home-img" alt="">
        <div class="home-content">
            <h1>Welcome to <span style="color: #6501E5;">P&#8377;ofit Bank</span>!</h1>
            <p>Save <span style="color: #6501E5;">Money </span> For Tomorrow.</p>
        </div>
    </section>

    <section>
        <img src="static/bank1.jpg" class='mid-img1' alt="">
        <div class="middle-content">
            <h2>You’ll Benefit From <span style="color: #6501E5;">These Great Features :</span></h2>
            <p> &#10004 Easy online lending and membership applications</p>
            <p> &#10004 Simple and secure online and mobile banking</p>
            <p> &#10004 Access to over 23k ATMs nationwide</p>
            <p> &#10004 Survey programs to ensure your voice is heard</p>
        </div>
    </section>

    <!-- Services  -->

    <section class="service-sect">
        <p>Our Services</p>
        <div class="services">
            <div class="service">
                <div class="icon">
                    <img src="static/add-user.png" width="130px" alt="error">
                </div>
                <a class="btn-services" href="createuser.php">Create User</a>
            </div>
            <div class="service">
                <div class="icon">
                    <img src="static/money-transfer.png" width="130px" alt="error">
                </div>
                <a class="btn-services" href="transfermoney.php">Make a Transaction</a>
            </div>
            <div class="service">
                <div class="icon">
                    <img src="static/transaction.png" width="130px" alt="error">
                </div>
                <a class="btn-services" href="transactionhistory.php">Transaction History</a>
            </div>
        </div>
    </section>

    <!-- Footer -->

    <footer class="footer">
        <p> &copy;2021 Made by <a id="footer-link" href="https://www.linkedin.com/in/bhumit-bedse-a049081a7/">Bhumit Bedse</a>  <br>The Sparks Foundation </p>
    </footer>
    
</body>
</html>