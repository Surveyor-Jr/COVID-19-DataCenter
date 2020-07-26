<?php require_once('header.php');
        require_once('config/database.php');

        $name = $_POST['fullname'];
        $email = $_POST['email'];
        //$category = $_POST['category'];
        $idea = $_POST['description'];

        $sql = "INSERT INTO suggestions (fullname, email, idea)
    VALUES('$name','$email', '$idea')";
    //removed category for now

    if ($conn->query($sql) === TRUE)
     {
        echo '<div class="alert alert-success" role="alert" style="text-align:center;">
        <h4 class="alert-heading">Received</h4>
        We value your contribution, it helps us improve. <br>Thank you very much & have a good day/night.
        <p>Automatically directing in <span id="countdown">10</span> seconds</p>. 
    </div>';
    echo '<script>
            setTimeout(function () {
                window.location.href="index.php";
            }, 10000);
            </script>';
        
    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
        echo '<div class="alert alert-danger" role="alert" style="text-align:center;">
        <h4 class="alert-heading">ERROR</h4>
        An unexpected Error occured. Please try again in <span id="countdown">10</span> seconds.
        <br> If this error persists please get in touch with us via email admin@africansurveyors.net
         
        </div>';
        echo '<script>
            setTimeout(function () {
                window.location.href="feedback.php";
            }, 10000);
            </script>';
       
    }

    $conn->close();
?>
<script>
	var seconds = document.getElementById("countdown").textContent;
	var countdown = setInterval(function() {
		seconds--;
		document.getElementById("countdown").textContent = seconds;
		if (seconds <= 0) clearInterval(countdown);
	}, 1000
	);
</script>

<?php require_once('footer.php');?>