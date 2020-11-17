<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap4\Modal;
use common\models\User;
use frontend\models\Messages;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MessagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Messages');
$this->params['breadcrumbs'][] = $this->title;
?>




    <div class="container">
    <div id="titlebar">
        <div class="row">
            <div class="col-md-12">
                <h2>Messages</h2>
                <!-- Breadcrumbs -->
                <nav id="breadcrumbs">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Messages</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <div class="row">

    <!-- Listings -->
    <div class="col-lg-12 col-md-12">

    <div class="messages-container margin-top-0">
    <div class="messages-headline">
        <a id="Earth">Inbox</a>

        <!-- <h4>Inbox</h4> -->
        <a href="venu1/messages/create" class="button border with-icon compose">Compose <i class="sl sl-icon-plus"></i></a>
    </div>
    <div class="messages-inbox">

    <ul>
        <script>
            function someRandomfunction() {
                var page = document.getElementById('hey').value;;
                location.href = page + '.html';
                return false;
            }
        </script>
        <?php foreach ($message as $messages ){?>
            <?php foreach ($people as $user ){?>
                <li class="unread">
                    <a>

                        <script>
                            document.getElementById('Earth').href=''+window.location.origin+':5000';
                        </script>
                        <div class="message-avatar"><img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /></div>

                        <div class="message-by">
                            <div class="message-by-headline">
                                <h5><?= $user->email ?><i>Unread</i></h5>
                                <span><?php
                                    echo "Sent On" . date("Y/m/d") . "<br>";
                                    ?><br>

                            </div>
                            <p><?=$messages->message ?></p>
                        </div>
                    </a>
                </li>
            <?php }?>
        <?php }?>
    </ul>






<?php
Modal::begin([
    'id'=>'compose',
    'size'=>'modal-lg',
]);
['class' => 'modal-dialog'];

echo "<div id='composeContent'></div>";
Modal::end();
?>