<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Mailer with Codeigniter 3</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
<header>
	<div>
		<h1>PHP Mail library example</h1>
	</div>
</header>
<section>

<div class="container">
	<div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
          <form class="form-horizontal" method="post">
          <fieldset>
            <legend class="text-center">PHPMail library from: <a href="https://github.com/PHPMailer/PHPMailer" target="_blank">PHPMailer</a></legend>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Name</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
              </div>
            </div>

			<!-- Subject input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="subject">Subject</label>
              <div class="col-md-9">
                <input id="subject" name="subject" type="text" placeholder="Your subject" class="form-control">
              </div>
            </div>
    
			<!-- Email to input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">E-mail to</label>
              <div class="col-md-9">
                <input id="email2" name="email2" type="text" placeholder="Email-to" class="form-control">
              </div>
            </div>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Your message</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" id="sender" name="sender" class="btn btn-primary btn-lg" Value="Sender">Submit</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
</div>
</section>
<footer>
	<p>PHPMailer library configuration and Installation method could be seen on: <a href="https://github.com/PHPMailer/PHPMailer" target="_blank">PHPMailer repository</a></p>
</footer>

<!-- SCRIPTS -->

<script>

</script>

<!-- -->

</body>
</html>
