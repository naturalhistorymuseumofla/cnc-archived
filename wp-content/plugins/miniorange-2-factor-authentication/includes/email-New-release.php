<?php
function mail_tem()
{
return '<!DOCTYPE html>
        <html>
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        </head>
        <body style="background-color: white; margin: 0%;">

        	<style>
        	.mo_2fa_description
        	{
        		
        		margin: 0%;
        		text-align: center;

        	}
        	.mo_2fa_email_top
        	{
        	    height: 10px;
        	    margin:0 auto;
        	    display:block;
        	    text-align:center;
        	    background-color:#20b2aa
        	}
        	.mo_2fa_hr
        	{
                color:#aaa;
                border:1px solid #aaaaaa;
                margin:0%
        	}
        	.mo_2fa_email_content
        	{
        	    width:800px ;
        	    font-family: Calibri;
        	    background-color: #f5f3f3;
        	    padding-bottom: 3%;
        	}
        	.mo_2fa_feature_backup_codes
        	{
        	    text-align: left;
        	    padding-left: 15%;
        	    margin-top: 18%;
        	    padding-right: 7%;
        	}
        	.mo_2fa_feature
        	{
        		width: 100%;
        		float: left;
        		
        		min-height: 270px;
            	overflow: hidden;
        	}
        	.mo_2fa_feature_MA
        	{
        	    text-align: left;
        	    margin-top:-4%;
        	    padding-left: 15%;
        	    padding-right: 7%;
        	}
        	.mo_2fa_feature_EN
        	{
        	    text-align: left;

        	    padding-left: 15%;
                margin-top: -4%;
        	    padding-right: 7%;
        	}
        	.mo_2fa_feature_MFA
        	{
        	   text-align: left;
        	   padding-left: 15%;
        	   margin-top: 15%;
        	   padding-right: 7%;
        	}
        	.mo_2fa_email_template_details
        	{
        		width: 40%;
        		margin: 1%;
        		float: left;
        		background-color: white;
        		border-top: 5px solid #20b2aa;
        		min-height: 320px;
        		text-align: center;
        		overflow: hidden;
        		font-size:23px;
        	}
        	.mo_2fa_email_icon
        	{
        	    font-size:50px;
        	    color: black;
        	    margin-top: 6%
        	}
        	.mo_2fa_email_template_details:hover
        	{
        		border-top: 4px solid #20b2aa;
        	}
        	.mo_2fa_email_feature_details
        	{
        		width: 30%;
        		margin: 1%;
        		margin-bottom: 5%;
                margin-bottom: 21px;
        		float: left;
        		background-color: white;
        		text-align: center;
        		min-height: 250px;
        		overflow: hidden;
        		color: black;
            	font-family: inherit;
            	border-radius: 15px;

        		border: 1px solid #20b2aa;
        		font-size:17px;

        	}
        	.mo_2fa_email_feature_title
        	{
        	    margin-top: 2%;
        	    text-align: center;
        	    padding:0% 2%
        	}
        	.mo_2fa_ef_button:hover
        	{
        		color: #20b2aa;
        	}
        	.mo_2fa_feature_block
        	{
        		/*width: 91%;*/

        	    display: flex;
                margin: 0% 4%;
        	    margin-top: 4%;
        	    color:white;
                justify-content: space-around;
        	}
        	.mo_2fa_feature_text
        	{
        	    color: black;
        	    padding: 0px 27px;
        	    text-align: center;
        	}
        	.mo_2fa_ef_h2
        	{
        		color: #ad2100;
        		font-family: cursive;
        	}
        	.mo_2fa_ef_h1
        	{
        		color: #100505;
        		font-size: 30px;
        	}
        	.mo_2fa_ef_button
        	{
        		font-size: x-large;
        	    color: black;
        	    margin-left: -23px;
        	}
        	.mo_2fa_ef_read_more
        	{
        	    color: black;
        	}
        	.mo_2fa_ef_read_more:hover
        	{
        	    color: #20b2aa;``
        	}
            .mo_2fa_ef_hr
            {
        		border: 2px solid #100505;
        	    margin: 0px 7%;
            }
            .myDiv
            {
                height: 106px;
        		background-color: #20b2aa;
        		text-align: center;
        		color: white;
        		padding: 1px;
        		margin-top:0px;
        		font-family: Arial;
            }
        </style>
        <div style="background-color: white">

            <div class="mo_2fa_email_top">
                <hr class="mo_2fa_hr">
            </div>

                <center><div class="mo_2fa_email_content">
                    <center><img src="https://s3.amazonaws.com/Snowcovered_C_Images/40290_shield.png" alt="miniorange" width="240" height="130" ></center>
                    <div>
                        <div class="mo_2fa_description">
                        <h1 class="mo_2fa_ef_h1">miniOrange 2FA Plugin List of Latest Features</h1>
                        </div>
                    </div>

                <div class="mo_2fa_feature_block">

                        <div class="mo_2fa_email_feature_details">
                            <h2>Backup Codes</h2>
                            <ul class="mo_2fa_feature_backup_codes">
                                <li> Helps you to come out from locked out situation </li>
                                <li> Provide five backup codes </li>
                                <li> All are one time usable </li>
                            </ul>
                        </div>
                        <div class="mo_2fa_email_feature_details">
                            <h2 class="mo_2fa_email_feature_title">Microsoft Authenticator</h2>
                            <ul class="mo_2fa_feature_MA">
                                <li>Generates the OTP on every login</li>
                                <li>Provides multifactor authentication with extra layer</li>
                                <li> Very easy to use and secure access</li>
                            </ul>
                        </div>
                        <div class="mo_2fa_email_feature_details">
                            <h2 class="mo_2fa_email_feature_title">Email Notification</h2>
                            <ul class="mo_2fa_feature_EN">
                                <li>Gives you important alerts via email</li>
                                <li>Very helpful for the user to know about account acitivities</li>

                            </ul>
                        </div>
                        <div class="mo_2fa_email_feature_details">
                            <h2>MFA</h2>
                            <ul class="mo_2fa_feature_MFA">
                                <li>Login with any of the configured methods: <br>Authenticator Apps, OTP over Email and SMS, KBA, etc. </li>

                            </ul>
                        </div>

                </div>
                <div style="float: center;text-align: center">
                    <a class="mo_2fa_ef_button" href="https://plugins.miniorange.com/2-factor-authentication-for-wordpress">More Feature Details</a>
                </div>
                <!-- <hr class="mo_2fa_ef_hr"> -->
                <br>
                <div class="mo_2fa_feature_block">
                    <div class="mo_2fa_email_template_details">
                            <i class="fa fa-globe mo_2fa_email_icon"></i>
                            <div style="min-height: 150px;">
                                <h2 style="color: black;margin: 2%;">Website</h2>
                                <p class="mo_2fa_feature_text">miniOrange provides easy to use 2 Factor authentication for secure login to your WordPress site
                                <br><a class="mo_2fa_ef_read_more" href="https://plugins.miniorange.com/">...Know More</a></p>
                            </div>
                    </div>
                    <div class="mo_2fa_email_template_details">
                        <i class="fa fa-headphones mo_2fa_email_icon"></i>
                        <div style="min-height: 150px;">
                            <h2 style="color: black;margin: 2%;">Documentation</h2>
                            <p class="mo_2fa_feature_text">miniOrange Two-Factor Authentication in which you have to provide two factors to gain the access <br>
                            <br><a class="mo_2fa_ef_read_more" href="https://developers.miniorange.com/docs/security/wordpress/wp-security">...Know More</a></p>
                        </div>
                    </div>
                </div>
                <div class="mo_2fa_feature_block">
                    <div class="mo_2fa_email_template_details">
                        <i class="fa fa-file-text mo_2fa_email_icon"></i>
                        <div style="min-height: 120px;">
                            <h2 style="color: black;margin: 2%;">Support</h2>
                            <p class="mo_2fa_feature_text">You are not going to hit a ridiculously long phone menu when you call us or contact us.<br>
                            <br><a class="mo_2fa_ef_read_more" href="https://www.miniorange.com/contact">...Know More</a></p>
                        </div>
                </div>
                <div class="mo_2fa_email_template_details">
                        <i class="fa fa-shield mo_2fa_email_icon"></i>
                        <div style="min-height: 110px;">
                            <h2 style="color: black;margin: 2%;">Security site</h2>
                            <p class="mo_2fa_feature_text">miniOrange combines Web Application Firewall (WAF), Malware Scanner, Encrypted Database and File backup<br>
                            <a class="mo_2fa_ef_read_more" href="https://security.miniorange.com/">...Know More</a></p>
                        </div>
                </div>
                </div>


            </div></center>
            <div class="myDiv">
                <p style=" margin: 1%;"><b>You are welcome to use our New Features</b></p>
                <p style="margin: 0% 6%;font-size: 17px;">If you need any help we are just a mail away <p> <br>
                <p style="margin-top: -47px;margin-bottom: -7px;font-size: 17px;"> Contact us at :-  <b>info@xecurify.com /2fasupport@xecurify.com<b></p><br>
                <hr style="border-bottom:2px solid white; margin-top: -1%;">
                <p style="margin-top: -7px;font-size: small;"> If you want to disable this notification please turn off the toggle of email from Notification Tab
                </p>

            </div>
        </div>
        </body>
    </html>';
}
?>