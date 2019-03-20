<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"

        "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    
    <script src="https://cdn.jsdelivr.net/min/1.5/min.min.css"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.4.0/clipboard.min.js"></script>

    <style>
        #link-container { text-align: center;}
        #link {
                color: green;
                display: inline-block;
                padding: 10px;
            }
    </style>
    <link href="favicon.ico" rel="icon" type="image/x-icon" />
    <title>Ramen Ipsum Generator</title>

</head>

<body>
<div class="row">
    <div class="col c12"><img src="s00130-ramen.png" style=" display: block;
        margin-left: auto;
        margin-right: auto">
    </div>
     <!-- animatedramen.gif, ramen.jpg, ramen.png-->
</div>

<?php
<?php
$servername = "localhost";
$username = "mmartinez_ramen";
$password = "mickety";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";



<?php
function selectParagraph($db, $id) {
    $query = sprintf('SELECT content FROM paragraphs WHERE id = %d', $id);
    $result = $pdo->query($sql);
    $row = $result->fetch(PDO::FETCH_ASSOC);
    $result->closeCursor();
    return $row['content'];
    } 


<form method="post">
 <label for="slider">How many paragraphs do you want?</label>
 <input type="range" min="1" max="4" step="1" name="slider">
 <input type="submit" name="submit" value="Get Noodling">
</form>

<?php
if (isset($_POST['slider'])) {
    $i = $_POST['slider'];
    while ($i--) {
        $id = rand(1, $maxID);
        $paragraph = selectParagraph($db, $id);
        echo '<p>' . $paragraph . '</p>';
    }
} ?>

    <div id="link-container">
        <a href="https://www.linkedin.com/in/michaelmartinezcampos" id="link">Made by MMC - Ramen Otaku</a>
    </div>
</body>

</html>


