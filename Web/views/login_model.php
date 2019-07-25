<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikh
 * Date: 29/07/2018
 * Time: 12:26
 */

?>


<!--  model -->
<div id="login-Modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->


        <div class="wrapper fadeInDown">
            <div id="formContent">
                <!-- Tabs Titles -->

                <div class="row">
                    <div class="col-xs-11"> <h2 class="active" id="h2_signin"> Sign In
                            <button type="button"  class="close " style="     margin-right: -90px; margin-top: -36px;" data-dismiss="modal">&times;</button>
                        </h2></div>

                </div>
                <!-- Icon -->
                <div class="fadeIn first">

                    <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
                </div>

                <!-- Login Form -->
                <form id="login-form" onsubmit="return false" method="post" action="">
                    <input type="text" id="Nom d'utilisateur" class="fadeIn second" name="user" placeholder="login">
                    <input type="text" id="mot de passe" class="fadeIn third" name="pass" placeholder="password">
                    <input type="submit" id="input-submit-form"  class="fadeIn fourth" value="Log In">
                </form>
                <div class="alert alert-danger" role="alert" style="display:none;" id="alert"></div>

                <!-- Remind Passowrd -->
                <div id="formFooter">
                    <a class="underlineHover" href="#"   onclick="switch_model()" id="forget-form">create an account</a>

                </div>

            </div>
        </div>


    </div>
</div>
<!--end model-->

