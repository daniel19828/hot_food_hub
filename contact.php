   
  <?php include 'includes/header.php';?>          
              
<h2>Contact Hot Food Hub Inc., Today!</h2>
    <div class="form_margin"></div>
        <div class="dlb_gallery" style="width: 95%; height: auto; float: left; clear: both; margin: .5em; margin-bottom: 1.5em; padding: .5em;">
            <div class="crip_box" style="text-align: left; border-style: solid; border-width: 2px; border-color: black; background-color: skyblue;">
                
                
            <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "batemandaniel387@gmail.com";  //place your/your client's email address here
        $toName = "Daniel Bateman"; //place your client's name here
        $website = "hotfoodhub.com";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
            
          </div>
        </div>
                    
 <!--***********work experience*******************************************-->
        
    
 <!--*********footer starts here******************************************-->       
 <?php include 'includes/footer.php';?>
