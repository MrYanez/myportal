
<?php include 'portal-config.php';?>
<?php include 'includes/header.php';?>
<h2 class="subheader"><?=$PageID?>Contact.php</h2>
        <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "yaneznahum123@gmail.com";  //place your/your client's email address here
        $toName = "Nahum"; //place your client's name here
        $website = "IT162 Contact form";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>

<?php include 'includes/footer.php';?>