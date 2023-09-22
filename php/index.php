// connect php to sign-up.html
$app->get('/signup', function() use ($app) {
    return $app['twig']->render('signup.html');  // render the signup page
    });
    });
    });
    });
    */
    ?><commit_msg>added login and logout routes<commit_after><?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/checklogin.php';
    ?>
    <!DOCTYPE html>
    <head lang="en">
        <meta charset="UTF-8" />
        <title></title>
        </head>
        <body style='background: url("http://www.wallpaperflare.com/static/763/159/20
        4/abstract-blue-sky-clouds-mountains-trees-watercolor-texture-hd-wallpape
        r.jpg")'>
        <div class = "container">
            <h1><a href="/">Home</a>&nbsp;&nbsp;<span>|&nbsp;</span><a href="/aboutus">About Us
                </a>&nbsp;&nbsp;|<span>|&nbsp;</span><a href="/contactus">Contact us</a>&nbsp;&nbsp;|&
                <span>|&nbsp;</span><?php if (isset($_SESSION["username"])) : ?><a href='/logout' >Logout</a>
                    <?php else :?>
                        <a href='/login'>Login</a> &nbsp;&nbsp;| |&nbsp;<a href='/signup'>Sign Up</a>
                        <!--                        <li><a href="/login">Log In</a></li>-->
                        <!--                    <ul id="navlist">-->
                            <!--                            <li><a href="#">Link One</a></li>-->
                            <!--                                <li><a href="#">Link Two</a></li>-->
                            <!--                                    <li><a href="/login">Log in</a></li>-->
                            <!--                                        <form action="" method="post">-->
                                <!--                                            <input type="text" name="email"/>-->
                                <!--                                            <input type="text"/>-->
                                <!--                                                <button name="submit"></button>-->
                                <!--                                                <button name="submit"></button>-->
                                <!--                                                <button name="submit" value="Submit"></button>-->
                                <!--                                                <button name="submit" value="Submit"></button>-->
                                <!--                                                <button name="submit" value="Submit"></button>-->
                                <!--<button name="submit"></button>-->
                                <!--                                                <label for="">Username:</label>-->
                                <!--<br/>-->
                                <!--<select name="">-->
                                    <!--                                                <option value=""></option>-->
                                    <!--                                                <option value=""></option>-->
                                    <!--<option value=""></option>-->
                                    <!--<option value="value1">Value one</option>-->
                                    <!--<option value="value2">Value two</option>-->
                                    <!--<option value="value3">Value three</option>-->
                                    <!--</select>-->
                                    <!--<label for="name">Name:</label>-->
                                    <!--<input type="checkbox" name="vehicle[]" value="Bike"> I have a bike<br>-->
                                    <!--<input type="text" placeholder="<NAME>" required/><br/>-->
                                    <!--<textarea rows=”5″ cols=”50″ ></textarea>-->
                                    <!--<input type="checkbox"><label for="vehicle1">I have read the terms of service.</label><br/>-->
                                    <!--<input type="checkbox"><label for="vehicle1">I have read the terms of service.</label><br/>-->
                                    <!--<table border="1px solid black;">-->
                                        <!--<tr>-->
                                            <!--                                                --><?//=$row['id']?>
                                            <!--                                                <th colspan="2"><b>Table Heading 1</b></th>-->
                                            <!--                                                <td colspan="2"><b>Table Heading 1</b></td>-->
                                            <!--                                                <th colspan="2"><center>Table Heading 1</center></th>-->
                                            <!--                                            --><!--                                                <td>--><!--                                                    Name--><!--                                                </td>-->
                                            <!--                                                --><?//=$this->session->flashdata('errors') ?>
                                            <!--                                                --><?//=$this->session->flashdata('errors') ?>
                                            <!--                                            --><?//= $this->render('index') ?>
                                            <!--                                            <td colspan="8"><b>Table Header 1</b></td>-->
                                            <!--                                            --><?//= "<td>".$row['id']."</td>"; ?>
                                            <!--                                            --><!--<th colspan="4"><center>--><?//= $title;?><!--</center></th>-->
                                            <!--                                            --><!--                                                <th>--><?//= $row['id']?><!--</th>-->
                                            <!--                                                <td colspan = "4"><b style ="color: red;" align="center">Table Header 1</b></td>-->
                                            <!--                                                --><?//=$this->renderSection('content') ?>
                                            <!--                                                --><?//=$this->renderSection('content') ?>
                                            <!--                                                <td colspan = "4"><b style='color:red;'>Enter your details below to get started!</b></td>-->
                                            <!--                                                <td colspan = "4"><b style ="color:red;font-size : 6pt;" >Total Amount :</b>&
                                            <!--                                                <td>First Name: </td>-->
                                            <!--                                                <td>First Name: </td>-->
                                            <!--                                                <td>Column 1</td>-->
                                            <!--                                                <th>First Name</th>-->
                                            <!--                                            <td>First Name</td>-->
                                            <!--                                                <td>First Name: </td><td></td>-->
                                            <!--                                        </tr>-->
                                            <!--                                    --><?php //foreach ($data as $key => $val): ?>
                                                <!--                                    </table>-->
                                                <div class="form-group">
                                                    <?php echo form_error('email', '<span style = "color:red">', '</span>'); ?>
                                                    <?php echo form_error('username', '<p style = "color:red">', '</p>'); ?>
                                                    <?php echo form_error('username'); ?>
                                                    <label>Username:
                                                        <span style='color:#FF0004'><?php if (isset($errors['username'])) {
                                                            <?= $this->session->userdata("user"); ?></label><span style='color:#FF0004'>*</span></p>
                                                            <?= $this->session->userdata['logged_in']['username']; ?></label><br />
                                                            <?= $this->session->userdata("user"); ?></label><br />
                                                            <?= $this->session->userdata("user"); ?></label><span style='color:#FF0004'><?php if (isset 
                                                            <?= $this->session->flashdata("user"); ?></label><span
                                                            <?= $this->session->flashdata("user"); ?></label><span
                                                            <span style='color:#FF0004'><?php //echo $this->session->flashdata("msg"); ?></span></label
                                                            <span style='color:#ff4d2f;'>*</span></label><br />
                                                            <span style='color:#FF0004;'><?php if (isset($errormsg)) {
                                                                <?= $this->session->flashdata("user"); ?></label><br />
                                                                <span style="color:#FF3A2D">*</span></label><br />
                                                                <span style='color:#FF0004'>*</span></label><br />
                                                                <input type='text' name='username'>
                                                                </label></p>
                                                                <span id='message'></span>
                                                                </div>
                                                                <!--<td><a href="<?php //echo base_url(); ?>/index.php/welcome/login" style="color:#0b5
                                                                <div class="form-group">
                                                                <?php echo form_error('password'); ?>
                                                                <label for="">Password:</label><br/>
                                                                <input type='password' name='<PASSWORD>' value=''>
                                                                <input type='hidden' value="<?php $this->session->set_userdata("id",$user['id']);?>" />
                                                                <!--<a href="<?php //echo base_url(); ?>/index.php/login/forgot" style="color:#039be5
                                                                <input  style=""type="password"
                                                                placeholder="<PASSWORD>"
                                                                value="<?php if(isset($user)) {echo $user->password;}?>"
                                                                maxlength="10" minlength="5"
                                                                required pattern="[a-zA-Z]+" title="Must contain only letters and numbers."
                                                                onkeyup="checkPass(); return false;"
                                                                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required title
                                                                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required title
                                                                pattern="[a-zA-Z]+" title="Must contain only letters and numbers."
                                                                title="Must contain at least one number and one uppercase and lowercase letter, and at least six characters" required pattern="(?=.*\d
                                                                pattern="[a-zA-Z]+"
                                                                title="Must contain only letters."
                                                                required
                                                                />
                                                                <!--<i class="fa fa-lock"></i>--><?php //echo $this->lang->line("login_password"); ?><!--<
                                                                <!--<small id="emailHelp2" class="form-text text-muted"></small>--->
                                                                </div>
                                                                <script language='javascript'>
                                                                function checkPass() {
                                                                    var pass = document.getElementById("pass");
                                                                    var password = document.getElementById("pass").value;
                                                                    var pass2=document.getElementById("pass");
                                                                    var pass2=document.getElementById("pass");
                                                                    var pass = document.getElementById("pass").value;
                                                                    //Store the password field objects into variables ...
                                                                    var pass2 = document.getElementById("pass");
                                                                    var pass = document.getElementById('<PASSWORD>');
                                                                    if (document.changepass.newpass.value !=
                                                                    document.changepass.confirmpass.value) {
                                                                        //alert ('New Password and Confirm Password field does not match.');
                                                                        alert('New Password and Confirm password fields must match.');
                                                                        alert('New password and confirm password fields must match.');
                                                                        alert('New password and confirm password fields must match.');
                                                                        //alert("New Password and Confirm Password field does not match");
                                                                        var message = "New Password and Confirm password fields do not match.";
                                                                        alert('New password and confirm password fields must match.');
                                                                        //alert("New Password and Confirm Password field does not match");
                                                                        //alert("New Password and Confirm Password field does not match");
                                                                        //alert("New Password and Confirm Password field does not match");
                                                                        alert("New password and confirm password fields do not match.");
                                                                        alert("New Password and Confirm password fields do not match.");
                                                                        //alert("New Password and Confirm Password field does not match");
                                                                        alert("New Password and Confirm Password field does not match");
                                                                        alert("New Password and Confirm password fields do not match.");
                                                                        //alert("New Password and Confirm Password field does not match");
                                                                        alert('New password and confirm pass does not match');
                                                                        alert('Passwords do not match!');
                                                                        // set focus to the first invalid field
                                                                        //                                                                    document.getElementById("submit").disabled = true;
                                                                        //                                                                        document.getElementById("submit").disabled = true;
                                                                        //                                                                        document.getElementById("submit").disabled = true;
                                                                        //                                                                        document.getElementById("submit").disabled = true;
                                                                        //document.getElementById("submit").disabled = true;
                                                                        //                                                                    document.getElementById("submit").disabled = true;
                                                                        // reset values to empty string
                                                                        return false;
                                                                        } else {
                                                                            var x = document.getElementById("myDIV");
                                                                            var pass = document.getElementById("password").value;
                                                                            var x = document.forms["changepass"]["oldpassword"].value;
                                                                            var pass = document.getElementById("password").value;
                                                                            var new_password = document.getElementById("newpass").value;
                                                                            var old_password = $('#old-password').val();
                                                                            var newpass = document.getElementById('newpass').value;
                                                                            var newpassword = document.getElementById("newpass").value;
                                                                            var password = document.getElementById("password").value;
                                                                            var password = $('#password').val();
                                                                            var password = $('#password').val();
                                                                            var dataString = 'old_password=' + old_password + '&new_password=' + new_<PASSWORD> + '&confirm_password
                                                                            $.ajax({
                                                                                type: "POST",
                                                                                //                                                                                url:"<?php echo base_url(); ?>index.php/welcome/updatepassword/",
                                                                                url:"<?php echo base_url(); ?>index.php/admin/updatepassword",
                                                                                url:"<?php echo base_url(); ?>index.php/login/updatepassword/",
                                                                                //                                                                                url:"<?php echo base_url(); ?>index.php/LoginController/updatepassword/",
                                                                                url:"<?php echo base_url(); ?>index.php/admin/updatepassword",
                                                                                url:"<?php echo base_url(); ?>index.php/login/updatepassword",
                                                                                //                                                                                url : "/user/updatepassword/",
                                                                                url:"<?php echo base_url(); ?>admin/changepassword",
                                                                                //                                                                                url: "<?php echo base_url(); ?>index.php/login/changepassword/",
                                                                                //                                                                                url: "<?php echo base_url(); ?>index.php/login/changepassword/",
                                                                                //                                                                                url:"<?php echo base_url(); ?>index.php/user/updatepassword/",
                                                                                url:"<?php echo base_url(); ?>admin/changepassword",
                                                                                //                                                                                url: "<?php echo base_url(); ?>index.php/admin/changepassword/",
                                                                                //                                                                                url:"/user-management/update_password/"+id,
                                                                                url:"<?php echo base_url(); ?>admin/changepassword",
                                                                                url: "<?php echo base_url(); ?>index.php/LoginController/changepassword?id=" + id,
                                                                                url: "<?php echo base_url(); ?>index.php/LoginController/updatepassword/" + id,
                                                                                //                                                                                url:"<?php echo base_url(); ?>index.php/admin/changepassword",
                                                                                //                                                                                url:"<?php echo base_url(); ?>index.php/admin/changepassword",
                                                                                url:"<?php echo base_url(); ?>admin/changepassword",
                                                                                //                                                                                url:"<?php echo base_url(); ?>index.php/LoginController/changepassword/",
                                                                                //                                                                                url:"<?php echo base_url(); ?>index.php/admin/changepassword",
                                                                                url:"<?php echo base_url(); ?>index.php/admin/updatepassword",
                                                                                //                                                                                url:"<?php echo base_url(); ?>index.php/login/changepassword/",
                                                                                //                                                                                url:"<?php echo base_url(); ?>index.php/admin/updatepassword/",
                                                                                url:"<?php echo base_url('index.php/admin/update_user')?>",
                                                                                //                                                                                url : "<?php echo base_url(); ?>index.php/admin/update_user/",
                                                                                //                                                                                url : "<?php echo base_url('index.php/admin/add_user')?>",
                                                                                //                                                                                url : "<?php echo base_url(); ?>index.php/admin/add_new_user/",
                                                                                //                                                                                url : "<?php echo base_url('index.php/admin/update_user'); ?>",
                                                                                url:"<?php echo base_url(); ?>index.php/admin/update_user/",
                                                                                //                                                                                url : "/admin/update-user-password/"+id,
                                                                                url:"<?php echo base_url('index.php/admin/update_status')?>",
                                                                                //                                                                                url : "<?php echo base_url('index.php/admin/update_user'); ?>",
                                                                                //                                                                                url: "<?php echo base_url(); ?>index.php/admin/delete_user/" + id,
                                                                                //                                                                                url: "<?php echo base_url(); ?>index.php/welcome/get_data/",
                                                                                url:"<?php echo base_url('index.php/login/checkLogin')?>",
                                                                                url:"<?php echo base_url('admin/checkOldPassword')?>",
                                                                                url: "../php/login_process.php?action=checkLogin&username=" + user + "&pass=" + <PASSWORD>,
                                                                                url:"<?php echo base_url(); ?>index.php/admin/changePassword",
                                                                                //                                                                                url : "<?php echo base_url('admin/changePassword'); ?>",
                                                                                //                                                                                url:"<?php echo base_url(); ?>index.php/LoginController/changePassword/",
                                                                                url:"<?php echo base_url(); ?>index.php/admin/changePasswordAdmin",
                                                                                url:"<?php echo base_url(); ?>index.php/login/checkLogin",
                                                                                url:"<?php echo base_url();?>index.php/login/checkLogin",
                                                                                //                                                                                url:"<?php echo base_url();?>index.php/LoginController/loginUser/",
                                                                                //                                                                                url : "<?php echo base_url(); ?>index.php/admin/changePassword/",
                                                                                //                                                                                url : "<?php echo base_url('index.php/admin/update_status'); ?>",
                                                                                url : "<?php echo site_url('admin/login') ?>",
                                                                                
                                                                                










