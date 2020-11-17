<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap4\Modal;
use common\models\User;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MessagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Messages');
$this->params['breadcrumbs'][] = $this->title;

?>


	<!-- Content
	================================================== -->
	<div class="dashboard-content">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Messages</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Dashboard</a></li>
							<li>Messages</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		

      

<div class="dashboard-content">

		<!-- Titlebar -->
		
		<div class="row">
			
			<!-- Listings -->
			<div class="col-lg-12 col-md-12">

				<div class="messages-container margin-top-0">
					<div class="messages-headline">
						<h4>Kathy Brown</h4>
						<a href="#" class="message-action"><i class="sl sl-icon-trash"></i> Delete Conversation</a>
					</div>

					<div class="messages-container-inner">

						<!-- Messages -->
						<div class="messages-inbox">
                        <ul>
<?php foreach ($message as $messages ){?>
    <?php foreach ($people as $user ){?>
    <li class="unread">
        <a href="/venu1/messages/conversation">
            <div class="message-avatar"><img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /></div>

            <div class="message-by">
                <div class="message-by-headline">
                    <h5><?= $user->email ?><i>Unread</i></h5>
                    <span>2 hours ago</span>
                </div>
                <p><?=$messages->message ?></p>
            </div>
        </a>
    </li>
    <?php }?>
    <?php }?>
							</ul>
						</div>
						<!-- Messages / End -->

						<!-- Message Content -->
						<div class="message-content">

							<div class="message-bubble">
								<div class="message-avatar"><img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /></div>
								<div class="message-text"><p>Hello, I want to talk about your great listing! Morbi velit eros, sagittis in facilisis non, rhoncus et erat. Nam posuere tristique sem, eu ultricies tortor lacinia neque imperdiet vitae.</p></div>
							</div>

							<div class="message-bubble me">
								<div class="message-avatar"><img src="images/dashboard-avatar.jpg" alt="" /></div>
								<div class="message-text"><p>Nam ut hendrerit orci, ac gravida orci. Cras tristique rutrum libero at consequat. Vestibulum vehicula neque maximus sapien iaculis, nec vehicula sapien fringilla.</p></div>
							</div>

							<div class="message-bubble me">
								<div class="message-avatar"><img src="images/dashboard-avatar.jpg" alt="" /></div>
								<div class="message-text"><p>Accumsan et porta ac, volutpat id ligula. Donec neque neque, blandit eu pharetra in, tristique id enim.</p></div>
							</div>

							<div class="message-bubble">
								<div class="message-avatar"><img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /></div>
								<div class="message-text"><p>Vivamus lobortis vel nibh nec maximus. Donec dolor erat, rutrum ut feugiat sed, ornare vitae nunc. Donec massa nisl, bibendum id ultrices sed, accumsan sed dolor.</p></div>
							</div>

							<div class="message-bubble me">
								<div class="message-avatar"><img src="images/dashboard-avatar.jpg" alt="" /></div>
								<div class="message-text"><p>Nunc pulvinar, velit sit amet tristique tristique, nisi odio luctus odio, vel vulputate purus enim vestibulum est. Pellentesque non mollis ipsum, vitae tristique sapien.</p></div>
							</div>

							<div class="message-bubble">
								<div class="message-avatar"><img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /></div>
								<div class="message-text"><p>Donec eget consequat magna. Integer luctus neque vel nulla malesuada imperdiet. </p></div>
							</div>

							<div class="message-bubble me">
								<div class="message-avatar"><img src="images/dashboard-avatar.jpg" alt="" /></div>
								<div class="message-text"><p>Accumsan et porta ac, volutpat id ligula. Donec neque neque, blandit eu pharetra in, tristique id enim nulla magna interdum leo, sed tincidunt purus elit vitae magna. Donec eget consequat magna. Integer luctus neque vel nulla malesuada imperdiet. .</p></div>
							</div>

							<div class="message-bubble">
								<div class="message-avatar"><img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /></div>
								<div class="message-text"><p>Nulla eget erat consequat quam feugiat dapibus eget sed mauris.</p></div>
							</div>
							
							<!-- Reply Area -->
                            <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Chat App</title>
  <script defer src="http://localhost:3000/socket.io/socket.io.js"></script>
  <script defer src="script.js"></script>
 
</head>
<body>
  <div id="message-container"></div>
  <form id="send-container">
    <input type="text" id="message-input">
    <button type="submit" id="send-button">Send</button>
  </form>
</body>
</html>
						<!-- Message Content -->

					</div>

				</div>

			</div>

			<!-- Copyrights -->
		
		</div>

	</div>
   
<!-- Dashboard / End -->

]
<!-- Wrapper / End -->




</body>

<!-- Mirrored from www.vasterad.com/themes/listeo/dashboard-messages-conversation.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Aug 2020 10:08:30 GMT -->
</html>