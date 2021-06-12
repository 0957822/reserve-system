<?php
include_once 'header.php';
?>

<body  id="bubbleteaFlavours">

<div class="container">
    <div class="app-title">
        <p>Weather</p>
    </div>
    <div class="notification"> </div>
    <div class="weather-container"></div>
        <div class="temperature-value">
            <p>- °<span>C</span></p>
        </div>
        <div class="temperature-description">
            <p> - </p>
        </div>
        <div class="location">
            <p>-</p>
        </div>
    </div>
</div>


<h1> </h1><br><br>
<h1>To reserve</h1>
    <p>If want to order large amounts of bubbltea you are at the right place.<br>
        - Simply select the amount off bubbletea you'd like to have.<br>
        - Select the size.<br>
        - Select the flavour of the drink.<br>
        - Select the flavour of the bubbles.<br>
        - fill in the form <br>
        After you filled in everything you will receive a email regarding your reservation.<br>
        The payment will be done when we deliver the bubbltea.</p>
<hr>
<div>
    <form>
        <input type="image" src="image\Middel3.png"  width="30%" >
        <input type="image" src="image\Middel4.png"  width="30%" >
    </form>
</div>
<hr>
<h1> Order </h1>
<h2 class="bubbleteaorder"> Bubble tea </h2>
<div class="row">
    <h3 class="sizes" id="size"> Medium <span class="tab">  Large </span></h3>
    <h3 class="price" id="price"> 3,80  <span class="tab">4,30   </span> </h3>
</div>
<ul>
<div style="align-content: center;">
    <form action="includes/customer.inc.php" method="POST">
        <p id="amount">Amount</p>
        <input type="text" name="Amount" placeholder="50"><br>
        <p id="size">size</p>
        <input type="text" name="sizem" value="Medium: 50">
        <input type="text" name="sizel" value="Large: 0"> <br>
        <p id="flavour">Flavour</p>
        <input class="ml" type=" text" name="flavourm" placeholder="Medium">
        <input class="amount" type=" text" name="flavourl" placeholder="Large"><br>
        <input class="ml" type="radio" name="size" value="Medium" checked="checked"> Medium
       <input class="ml" type="radio" name="size" value="Large" > Large<span class="tab1">
        <input class="amount"type="radio" name="amount" value="All" checked="checked"> All
            <input class="amount"type="radio" name="amount" value="Other"> Other </span><br>
        <br>
    <br>
    </form>
</div>
</ul>
<div class="container, ftflavours">
    <form action="includes/customer.inc.php" method="POST">
        <fieldset>
        <h3 class="ftflavours"> Fruit teas </h3><br><br>
            <input type="radio"  name="teas">Green Apple<br>
            <input type="radio" name="teas">Honeydew<br>
            <input type="radio" name="teas">Kumquat<br>
            <input type="radio" name="teas">Lychee<br>
            <input type="radio" name="teas">Mango<br>
            <input type="radio"  name="teas" checked="checked">Peach<br>
            <input type="radio" name="teas">Pineapple<br>
            <input type="radio" name="teas">Strawberry<br>
            <input type="radio" name="teas">Passion fruit<br>
            <input type="radio" name="teas">Watermelon
        </form>
</div>
<div class="container, mtflavours">
    <form>
        <fieldset>
        <h3 class="mtflavours"> Milk teas </h3><br><br>
            <input type="radio" name="teas">Coconut<br>
            <input type="radio" name="teas">Honeydew<br>
            <input type="radio" name="teas">Mango<br>
            <input type="radio" name="teas">Strawberry<br>
            <input type="radio" name="teas">Taiwanese Classic<br>
            <input type="radio" name="teas">Taro<br>
            <input type="radio" name="teas">Vanilla<br>
        </fieldset>
    </form>
</div>
    <br>
<div>
    <form>
        <fieldset>
        <h3 class="bubbles"> Bubbles </h3><br>
        <p class="bubbles"> * Extra bubbles =+0,50</p><br>
            <input type="checkbox" name="bubbles" >Strawberry<br>
            <input type="checkbox" name="bubbles">Green apple<br>
            <input type="checkbox" name="bubbles">Mango<br>
            <input type="checkbox" name="bubbles" checked="checked">Lychee<br>
            <input type="checkbox" name="busbbles">Passion Fruit<br>
            <input type="checkbox" name="bubbles">Cherry<br>
            <input type="checkbox" name="bubbles">Blueberry<br>
            <input type="checkbox" name="bubbles">Aloe vera<br>
            <input type="checkbox" name="bubbles">Tapioca<br>
        </fieldset>
    </form>
</div>

    <br><br>
    <p> Your selected bubbletea:</p>
        <?php
        //fruittea
        $x = "Medium";
        if ($x == "Medium") {
            echo "Medium, ";
        }
        elseif ($x == "Large") {
            echo "Large";
        }
        $x = "Peach";
        if ($x == "Green apple") {
            echo "green apple fruit tea";
        }
        elseif ($x == "Honeydew") {
            echo "honeydew fruit tea";
        }
        elseif ($x == "Kumquat") {
            echo "kumquat fruit tea";
        }
        elseif ($x == "Lychee") {
            echo "lychee fruit tea";
        }
        elseif ($x == "Mango") {
            echo "mango fruit tea";
        }
        elseif ($x == "Peach") {
            echo "peach fruit tea";
        }
        elseif ($x == "Pineapple") {
            echo "pineapple fruit tea";
        }
        elseif ($x == "Strawberry") {
            echo "strawberry fruit tea";
        }
        elseif ($x == "Passion fruit") {
            echo "passion fruit fruit tea";
        }
        elseif ($x == "Watermelon") {
            echo "watermelon fruit tea";
        }
    //milktea
        elseif ($x == "Coconut") {
            echo ", Coconut milk tea";
        }
        elseif ($x == "Honeydew") {
            echo ", Honeydew milk tea";
        }
        elseif ($x == "Mango") {
            echo ", Mango milk tea";
        }
        elseif ($x == "Strawberry") {
            echo ", Strawberry milk tea";
        }
        elseif ($x == "Taiwanese classic") {
            echo ", Taiwanese classic milk tea";
        }
        elseif ($x == "Taro") {
            echo ", Taro milk tea";
        }
        elseif ($x == "Vanilla") {
            echo ", Vanilla milk tea";
        }
        else {
            echo ", Choose tea";
        }
        // Bubbles
        $y = "Lychee";

        if ($y == "Strawberry") {
            echo ", with strawberry bubbles";
        }
        elseif ($y == "Green apple") {
            echo ", with green apple bubbles";
        }
        elseif ($y == "Mango") {
            echo ", with mango bubbles";
        }
        elseif ($y == "Lychee") {
            echo ", with lychee bubbles";
        }
        elseif ($y == "Passion fruit") {
            echo ", with passion fruit bubbles";
        }
        elseif ($y == "Cherry") {
            echo ", with cherry bubbles";
        }
        elseif ($y == "Blueberry") {
            echo ", with blueberry bubbles";
        }
        elseif ($y == "Aloë vera") {
            echo ", with aloë vera bubbles";
        }
        elseif ($y == "Tapioca") {
            echo ", with tapioca bubbles";
        }
        else {
            echo ", Choose Bubble";
        }
        ?>
    <p> Total: €
        <?php
        if ($x &= $y){
            $x=array ("x"=> 3.80,"b"=>0.50);
            echo array_sum($x);
        } else{
            echo "Select one tea flavour and one bubble flavour.";
        }
        ?>
    </p>
    <h1>Order information</h1>
    <form action="includes/customer.inc.php" method="POST" class="form"">
        First name:
        <input type="text" name="first"  placeholder="Jane">
        <br>
        Last name:
        <input type="text" name="last"  placeholder="Doe">
        <br>
        E-mail
        <input type="text" name="email"  placeholder="example@hotmail.com">
        <br>
        Address
        <input type="text" name="address"  placeholder="Addressstreet 25A ">
        <br>
        Zip code
        <input type="text" name="zipcode"  placeholder="1234AB">
        <br><br>
        Date:
        <input type="date" name="date" placeholder="Date">
        <br>
        Time:
        <input type="time" name="time" placeholder="time">
        <br><br>
        <button type="submit" name="submit">Submit</button>
        <br>
    </form>
<br>
<script src="app.js"></script>
</body>
</html>