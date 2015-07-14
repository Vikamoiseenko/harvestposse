<!DOCTYPE html>
<?php
  include_once ("includes/globals.php");  
  get_header();
?>

    <div class="container theme-showcase" role="main">
      
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">How to become a Vendor</h3>
        </div>
        <div class="panel-body">
        
        <div class="row">
           <!-- <div class="col-md-4"> -->
                <div id="accordion" class="panel-group">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">
                            <a href="#first"
                               data-toggle="collapse"
                               data-parent="#accordion">Section 1</a>
                            </div>
                        </div>
                        <div class="panel-collapse collapse" id="first">
                            <div class="panel-body">
                                <p>     Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
    ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
    amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
    odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate. </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <a href="#second"
                                   data-toggle="collapse"
                                   data-parent="#accordion">Section 2</a>
                            </div>
                        </div>
                        <div class="panel-collapse collapse" id="second">
                            <div class="panel-body">
                                <p>     Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
    ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
    amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
    odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate. </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <a href="#third"
                                   data-toggle="collapse"
                                   data-parent="#accordion">Section 3</a>
                            </div>
                        </div>
                        <div class="panel-collapse collapse" id="third">
                            <div class="panel-body">
                                <p>     Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
    ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
    amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
    odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate. </p>
                            </div>
                        </div>
                    </div>
                                        <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <a href="#third"
                                   data-toggle="collapse"
                                   data-parent="#accordion">Section 4</a>
                            </div>
                        </div>
                        <div class="panel-collapse collapse" id="third">
                            <div class="panel-body">
                                <p>     Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
    ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
    amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
    odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate. </p>
                            </div>
                        </div>
                    </div>

                </div>
           <!-- </div> -->


        </div>
    
    <script src="lib/jquery-ui-1.10.4/jquery-1.10.2.js"></script>
    <script src="lib/jquery-ui-1.10.4/ui/minified/jquery-ui.min.js"></script>
    <script src="lib/jquery-ui-1.10.4/ui/jquery.ui.core.js"></script>
    <script src="lib/jquery-ui-1.10.4/ui/jquery.ui.widget.js"></script>
    <script src="lib/jquery-ui-1.10.4/ui/jquery.ui.accordion.js"></script>
    <script src="lib/bootstrap.min.js"></script>
    <script src="lib/fabric.min.js"></script>
                

    <h3>Please fill out the form</h3>
    <p>Space is limited, and our market schedules are usually set for the year by February.  We are always interested in hearing from farmers, and each year our markets include new farms and new food products.  Our application period is generally October-February, although occasionally we may offer applications at other times to farmers or producers when we have the opportunity/need for a particular type of product.</p>
    
    <?php
    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $human = intval($_POST['human']);
        $from = 'Demo Contact Form'; 
        $to = 'moiseenkovika@gmail.com'; 
        $subject = 'Message from Contact Demo ';
        
        $body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
        // Check if name has been entered
        if (!$_POST['name']) {
            $errName = 'Please enter your name';
        }
        
        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }
        
        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Please enter your message';
        }
        //Check if simple anti-bot test is correct
        if ($human !== 5) {
            $errHuman = 'Your anti-spam is incorrect';
        }
 
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    }
}
    }
?>
    <form class="form-horizontal" role="form" method="post" action="newvendors.php">
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
            <?php echo "<p class='text-danger'>$errName</p>";?>
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
            <?php echo "<p class='text-danger'>$errEmail</p>";?>
        </div>
    </div>
    <div class="form-group">
        <label for="message" class="col-sm-2 control-label">Message</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
            <?php echo "<p class='text-danger'>$errMessage</p>";?>
        </div>
    </div>
    <div class="form-group">
        <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
            <?php echo "<p class='text-danger'>$errHuman</p>";?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <?php echo $result; ?>    
        </div>
    </div>
</form> 

    </div>
    </div>
    
<?php
  get_footer();
?>