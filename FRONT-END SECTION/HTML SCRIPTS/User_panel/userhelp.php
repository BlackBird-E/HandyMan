<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS SCRIPTS/user_panel/userhelpdesign.css">
    <link rel="shortcut icon" type="image/x-icon" href="../../ICONS/worker.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <title>Help</title>
</head>

<body>
    <div class="bg-img">
        <div class="container">
            <div class="topnav">
                <a href="userProfile.php"><i class="fa  fa-user"></i>Profile</a>
                <a href="index.php"><i class="fa  fa-house-user"></i>Home</a>
                <a href="#"><i class="fa  fa-shopping-cart"></i>My Orders</a>
                <a href="About us.php" class="constant"><i class="fa  fa-users"></i>About Us</a>
                <a href="contactUs.php"><i class="fa fa-phone-square"></i>Contact Us</a>
                <a href="userTerms&policy.php" class="constant"><i class="fa fa-file-signature"></i>Terms & Policy</a>
                <a href="userhelp.php"><i class="fa fa-question-circle"></i>Help</a>

                <?php
                session_start();

                if (isset($_SESSION['uID'])) {
                    echo "<a href='../../Inc/logout.php'><i class='fa fa-lock'></i>Sign out</a>";
                } else {
                    echo "<a href='./chooseusertype2.php'><i class='fa fa-lock'></i>Sign in</a>";
                    echo "<a href='chooseUserType.php'><i class='fa fa-clipboard'></i>Register</a>";
                }

                ?>

            </div>
        </div>
    </div>
    <div class="section">
        <div class="container-2">
            <div class="content-section">
                <div class="title">
                    <h2>FAQ</h2>
                </div>
                <div class="content">
                    <h3>Q. How does the site work?</h3>
                    <p>
                        You can browse the site or use our search engine to find your desired products. You can then add
                        them to your shopping bag and click on place order. You let us know your address, select a
                        delivery time – and voila, you are done. A Chaldal representative will then deliver your order
                        right to your home or office.
                    </p>
                    <h3>Q.How much do deliveries cost? </h3>
                    <p>There is a BDT 9 delivery fee if the order value is BDT 400 or more. If the order value is less
                        than BDT 400, we charge BDT 19 delivery fee.</p>
                    <h3>Q.How can I contact you?</h3>
                    <p>You can always call +880-188-1234-567 or mail us at support@chaldal.com. </p>
                    <h3>Q.How do I know when my order is here? </h3>
                    <p> A Chaldal representative will call you as soon as they are at your house to let you know about
                        your delivery. </p>
                    <h3>Q.What are your delivery hours? </h3>
                    <p>We deliver from 8 am to 10 pm every day. You can choose from available slots to find something
                        that is convenient to you. </p>
                    <h3>Q. How do I pay? </h3>
                    <p>We accept cash on delivery and we also have Online Credit Card and Online bKash service. Don’t
                        worry, our Chaldal representatives should always carry enough change. </p>
                    <h3>Q. What if the item is out of stock? </h3>
                    <p>
                        We hold our own inventory in 9 of our warehouses, so we rarely run of out stock. However, we
                        will try our best to source what you need. If we cannot find it, we will SMS/call you and let
                        you know what substitutes are available.
                    </p>
                    <h3>Q. My order is wrong. What do I do? </h3>
                    <p>Please Immediately call +880-188-1234-567 and let us know the problem.</p>
                    <h3>Q. What happens during a hartal? </h3>
                    <p>We work during hartals. That’s how dedicated we are. </p>
                    <h3>Q. What is your policy on refunds?</h3>
                    <p>
                        You may get a refund within seven (7) days on unopened or spoilt packaged products. For diapers
                        and perishable products, such as milk, fruits and fresh vegetables, we have a one (1) day return
                        policy. We will not accept any diaper items as return if more than 20% of the pack has been
                        used. We reserve the right to refuse a refund. Please contact us at +880-188-1234-567 if you
                        want to return an item.
                    </p>
                    <h3>Q. Do you serve my area? </h3>
                    <p>We are currently serving all of Dhaka city, except certain parts of Old town. </p>
                    <h3>Q. Why should we buy from you when I have a store nearby? </h3>
                    <p>Well, that is up to you but you can also be a couch potato like our founders and have your items
                        delivered to your house for free. Our prices are sometimes lower than that of major superstores
                        in the city. We also carry a larger variety than the average corner-store. So, there is really
                        no reason to not buy from us. </p>
                    <h3>Q. Can I get a refund via cash? </h3>
                    <p>No, for any sort of issue, we will update the credit to your Chaldal account. </p>
                    <h3>Q. Can I order over the phone? </h3>
                    <p>Absolutely. Our hotline is +880-188-1234-567.</p>
                    <h3>Q. I can’t find the product I am looking for. What do I do? </h3>
                    <p>We are always open to new suggestions and will add an item to our inventory just for you. There
                        is a "Product Request" feature that you can use to inform us of your requirement. You can also
                        call +880-188-1234-567 or mail us at support@chaldal.com to add an item to our inventory.
                    </p>
                    <h3>Q. How are you sourcing your products? </h3>
                    <p>We have deals with whole-sellers, manufacturers and importers. We only sell authentic products.
                    </p>
                    <h3>Q. Should I tip the delivery representative? </h3>
                    <p>Tips are not required. But our delivery team members appreciate recognition for their hard work.
                        Delivery representatives keep the entire tip amount.</p>
                    <!--<div class="button">
                     <a href="">Connect with us</a>
                     </div>-->
                </div>
                <!--<div class="social-media">
                  <a href=""><i class="fab fa-facebook"></i></a>
                  <a href=""><i class="fab fa-linkedin"></i></a>
                  <a href=""><i class="fab fa-instagram-square"></i></a>
                  <a href=""><i class="fab fa-twitter-square"></i></a>
                  </div>-->
            </div>
            <div class="img-section">
                <img src="policyposter4.png">
            </div>
        </div>
    </div>
</body>

</html>