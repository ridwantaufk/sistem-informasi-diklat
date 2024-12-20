<?php
$this->layout = false;
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    html {
        height: 100%;
    }

    body {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        background: url('<?php echo Yii::app()->baseUrl; ?>/assets/assets/img/login-signup.jpg');
        background-size: cover;
        color: grey;
    }

    .login-box {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 400px;
        padding: 40px;
        transform: translate(-50%, -50%);
        background: rgba(0, 0, 0, .5);
        box-sizing: border-box;
        box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
        border-radius: 10px;
        animation: moveSLide ease-in 1s;
    }

    @keyframes moveSLide {
        0% {
            left: 120%;
        }

        90% {
            left: 45%;
        }

        100% {
            left: 50%;
        }
    }

    .login-box h2 {
        margin: 0 0 30px;
        padding: 0;
        color: #fff;
        text-align: center;
    }

    .login-box .user-box {
        position: relative;
    }

    .login-box .user-box .input {
        width: 100%;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        margin-bottom: 30px;
        border: none;
        border-bottom: 1px solid #fff;
        outline: none;
        background: transparent;
    }

    .login-box .user-box .label {
        position: absolute;
        top: 0;
        left: 0;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        pointer-events: none;
        transition: .5s;
    }

    .login-box .user-box .input:focus~.label,
    .login-box .user-box .input:valid~.label {
        top: -20px;
        left: 0;
        color: #03e9f4;
        font-size: 12px;
    }

    .custom-button {
        position: relative;
        display: inline-block;
        padding: 10px 20px;
        color: #03e9f4;
        font-size: 16px;
        text-decoration: none;
        text-transform: uppercase;
        overflow: hidden;
        transition: .5s;
        letter-spacing: 4px;
        border: none;
        background: none;
        cursor: pointer;
    }

    .login-box form button {
        position: relative;
        display: inline-block;
        padding: 10px 20px;
        color: #03e9f4;
        font-size: 16px;
        text-decoration: none;
        text-transform: uppercase;
        overflow: hidden;
        transition: .5s;
        margin-top: 40px;
        letter-spacing: 4px
    }

    .transparent-button {
        border: none;
        cursor: pointer;
        position: relative;
        display: inline-block;
        color: #03e9f4;
        font-size: 16px;
        text-decoration: none;
        text-transform: uppercase;
        overflow: hidden;
        transition: .5s;
        letter-spacing: 4px;
        border: none;
        background: none;
    }

    .login-box button:hover {
        background: #03e9f4;
        color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 5px #03e9f4,
            0 0 25px #03e9f4,
            0 0 50px #03e9f4,
            0 0 100px #03e9f4;
    }

    .login-box button span {
        position: absolute;
        display: block;
    }

    .login-box button span:nth-child(1) {
        top: 0;
        left: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, transparent, #03e9f4);
        animation: btn-anim1 1s linear infinite;
    }

    @keyframes btn-anim1 {
        0% {
            left: -100%;
        }

        50%,
        100% {
            left: 100%;
        }
    }

    .login-box button span:nth-child(2) {
        top: -100%;
        right: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(180deg, transparent, #03e9f4);
        animation: btn-anim2 1s linear infinite;
        animation-delay: .25s
    }

    @keyframes btn-anim2 {
        0% {
            top: -100%;
        }

        50%,
        100% {
            top: 100%;
        }
    }

    .login-box button span:nth-child(3) {
        bottom: 0;
        right: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(270deg, transparent, #03e9f4);
        animation: btn-anim3 1s linear infinite;
        animation-delay: .5s
    }

    @keyframes btn-anim3 {
        0% {
            right: -100%;
        }

        50%,
        100% {
            right: 100%;
        }
    }

    .login-box button span:nth-child(4) {
        bottom: -100%;
        left: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(360deg, transparent, #03e9f4);
        animation: btn-anim4 1s linear infinite;
        animation-delay: .75s
    }

    @keyframes btn-anim4 {
        0% {
            bottom: -100%;
        }

        50%,
        100% {
            bottom: 100%;
        }
    }
</style>


<div class="login-box">
    <img src="<?php echo Yii::app()->baseUrl; ?>/assets/assets/img/logo.png" alt="Logo" height="30">
    <h2>Daftar Akun</h2>

    <?php $form = $this->beginWidget('CActiveForm', array(
        'id' => 'signup-form',
        'enableAjaxValidation' => false,
    )); ?>

    <div class="user-box">
        <?php echo $form->textField($model, 'username', array('class' => 'input')); ?>
        <?php echo $form->labelEx($model, 'username', array('class' => 'label')); ?>
        <?php // echo $form->error($model, 'username'); 
        ?>
    </div>

    <div class="user-box">
        <?php echo $form->passwordField($model, 'password', array('class' => 'input')); ?>
        <?php echo $form->labelEx($model, 'password', array('class' => 'label')); ?>
        <?php // echo $form->error($model, 'password'); 
        ?>
    </div>

    <div class="row buttons">
        <button type="submit" class="custom-button">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <?php echo CHtml::submitButton('Daftar', array('class' => 'transparent-button')); ?>
        </button>

        <!-- Tautan ke halaman login -->
    </div>

    <div class="text-info">
        Punya Akun? Silahkan <?php echo CHtml::link('Masuk', array('/site/login'), array('class' => 'btn btn-outline-light ml-2')); ?>
    </div>

    <?php $this->endWidget(); ?>
</div>