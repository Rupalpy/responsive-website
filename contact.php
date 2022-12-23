<?php include'header.php' ?>
<?php include'functions.php' ?>


<?php 
			$Msg="";
			if(isset($_GET['error'])){
				$Msg="please fill blanks";
				echo '<div class="alert alert-danger">'.$Msg.'</div>';
			}
			if(isset($_GET['success']))
            {
                $Msg = " Your Message Has Been Sent ";
                echo '<div class="alert alert-success">'.$Msg.'</div>';
            }
			?>


    <section class="contact " id="contact">
        <h2 class="textcenter">Contact Us</h2>
        <form action="contactprocess.php">
        <div class="form">
            <input type="text" name="UName" id="name" placeholder="Enter your name">
            <input type="email" name="Email" id="email" placeholder="Enter your email">
            <input type="number" name="phoneNo" id="phone" placeholder="Enter your phone">
            <textarea  name="msg" id="area" cols="30" rows="10" placeholder="elaborate your concern"></textarea>
            <button type="submit" class="btn btndark" name="btn-send" >Submit</button>
        </div>
        </form>
    </section>
    <footer class="background">
        <p class="textcenter">
            Copyright &copy; 2027 -All Rights Reserved
        </p>
    </footer>
    <script src="js/resp.js"></script>
</body>

</html>