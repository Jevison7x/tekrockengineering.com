<!DOCTYPE html>
<!--
 * Copyright (c) 2018, Xyneex Technologies. All rights reserved.
 * DO NOT ALTER OR REMOVE COPYRIGHT NOTICES OR THIS FILE HEADER.
 *
 * You are not meant to edit or modify this source code unless you are
 * authorized to do so.
 *
 * Please contact Xyneex Technologies, #1 Orok Orok Street, Calabar, Nigeria.
 * or visit www.xyneex.com if you need additional information or have any
 * questions.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>TekRockEngineering - Contact</title>
        <?php include './fragments/head-codes.php'; ?>
    </head>
    <body>
        <?php include './fragments/contact.php'; ?>
        <!-- Contact breadcrumb -->
        <section class="w3l-about-breadcrumb text-center">
            <div class="breadcrumb-bg breadcrumb-bg-about py-5">
                <div class="container py-lg-5 py-md-4">
                    <h2 class="title pt-md-5 pt-4">Contact Us</h2>
                    <p class="inner-page-para mt-2">We are a Mechanical, Electrical and Plumbing Design and Installation Company</p>
                </div>
                <div class="hero-overlay"></div>
            </div>
        </section>
        <!-- //Contact breadcrumb -->

        <section class="w3l-contact-main py-5" id="contact">
            <div class="container pt-lg-5 pt-md-3">
                <div class="title-content text-center mb-md-5 mb-4">
                    <h3 class="title-big mx-lg-5">Contact us for Your Full MEP Services</h3>
                </div>
                <div class="w3l-contact-info">
                    <div class="row contact-infos">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-contact-infos">
                                <div class="icon-box"> <span class="fa fa-location-arrow"></span></div>
                                <div class="text-box">
                                    <h3 class="mb-2">Our Location</h3>
                                    <p>AOU Quarters,Maitama, Abuja, Nigeria.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                            <div class="single-contact-infos">
                                <div class="icon-box"> <span class="fa fa-phone"></span></div>
                                <div class="text-box">
                                    <h3 class="mb-2">Mobile</h3>
                                    <p><a href="tel:08183356615">08183356615</a></p>
                                    <p><a href="tel:09077346346">09077346346</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                            <div class="single-contact-infos">
                                <div class="icon-box"> <span class="fa fa-envelope"></span></div>
                                <div class="text-box">
                                    <h3 class="mb-2">Help Desk</h3>
                                    <p> <a href="mailto:info@tekrockengineering.com">info@tekrockengineering.com</a></p>
                                    <p> <a href="www.tekrockengineering.com">tekrockengineering.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- contact map -->
        <section class="w3l-contact-main" id="contact">
            <div class="container">
                <div class="map pt-lg-3">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3939.725150296515!2d7.47843632408488!3d9.0887836880522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0af57bc5e875%3A0x87b5b4dee11fa03f!2sO.A.U.%20Quarters%2C%20Maitama%20904101%2C%20Abuja%2C%20Federal%20Capital%20Territory%2C%20Nigeria!5e0!3m2!1sen!2suk!4v1682683657291!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
        <!-- //contact map -->
        <!-- contact-form -->
        <section class="w3l-contact-main" id="contact">
            <div class="contact-infhny py-5">
                <div class="container py-lg-3">
                    <div class="top-map">
                        <div class="map-content-9">
                            <form action="https://info@tekrockengineering.com" method="post">
                                <div class="form-top1">
                                    <h3 class="title-big text-center mb-2">Let’s talk about your project</h3>
                                    <p class="mb-lg-5 mb-4 text-center">We have made it easy for clients to reach us and get their solutions
                                        weaved</p>
                                    <div class="form-top">
                                        <div class="form-top-left">
                                            <input type="text" name="w3lName" id="w3lName" placeholder="Name" required="">
                                            <input type="number" name="w3lPhone" placeholder="Your phone number" required="">
                                            <input type="email" name="w3lSender" id="w3lSender" placeholder="Email*" required="">
                                            <input type="text" name="w3lSubject" id="w3lName" placeholder="Subject" required="">
                                        </div>
                                        <div class="form-top-righ">
                                            <textarea name="w3lMessage" id="w3lMessage" placeholder="Message*" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="text-lg-right text-center">
                                        <a href="mailto:info@tekrockengineering.com" class="btn btn-style btn-primary">Submit Now</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include './fragments/footer.php'; ?>
        <?php include './fragments/scripts.php'; ?>
    </body>
</html>
