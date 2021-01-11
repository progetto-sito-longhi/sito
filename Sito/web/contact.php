<!DOCTYPE html>
<html lang="en">
<?php 
    include 'includes/head.php';
?>
<body data-spy="scroll" data-target=".fixed-top">
    
   <?php 
        include 'includes/navigation.php';
    ?>


    <!-- Header -->
    <header class="ex-header bg-dark-blue">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h1>Contact info</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <!-- Form -->
    <div class="ex-form-1 pt-6 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <p class="mb-5">We love to create dependable business are solutions for small and medium sized word companies. Email our office using <a href="mailto:contact@leno.com">contact@leno.com</a> or call us using <a href="tel:123-456-7890">+123-456-7890</a></p>
                    
                    <!-- Contact Form -->
                    <form id="contactForm" class="mb-6" data-toggle="validator" data-focus="false">
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="cname" required>
                            <label class="label-control" for="cname">Name</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="cemail" required>
                            <label class="label-control" for="cemail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" id="cmessage" required></textarea>
                            <label class="label-control" for="cmessage">Your message</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">Submit Message</button>
                        </div>
                        <div class="form-message">
                            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-form-1 -->
    <!-- end of form -->


    <!-- Basic -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h2 class="mb-4">Office location</h2>
                    <p class="mb-5">Are you looking for ways to grow the user base for your mobile application? Then you have arrived at the right place. Here you will find a curated collection of landing page HTML templates that will help you build an engaging online presentation for your mobile app and convince visitors to become users all templates.</p>
                        
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1241.5303553091994!2d-0.14076024298621118!3d51.51210217963597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604d502268421%3A0x6a7d62889992f993!2sRegent+St%2C+Soho%2C+London+W1B+5TH%2C+UK!5e0!3m2!1sen!2sro!4v1476174541049" allowfullscreen></iframe>
                    </div>
                        
                    <p class="mb-5">In the roundup are premium which means you need to pay for them but we're talking small amounts of money which won't break your bank account but will help authors make a living. In return you get a high quality, updated item together with technical support so needed when creating online projects.</p>
                    <a class="btn-solid-reg mb-6" href="index.php.html">Download</a>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of basic -->


    
<?php
    include 'includes/footer.php';
?>

</body>
</html>