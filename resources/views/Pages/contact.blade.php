@extends('layouts.frontend')

@section('title', 'Contact | Gudpanda')

@section('content')

    <section class="page-header">
        <x-bg-page-header />
        <div class="container">
            <div class="page-header-content">
                <h1 class="title">Contact</h1>
                <h4 class="sub-title">
                    <span class="home">
                        <a href="/" wire:navigate>
                        <span>Home</span>
                        </a>
                    </span>
                    <span class="icon"><i class="fa-solid fa-angle-right"></i></span>
                    <span class="inner">
                        <span>Contact</span>
                    </span>
                </h4>
            </div>
        </div>
    </section>
    <!-- ./ page-header -->

    <section class="contact-section pt-100 pb-100">
        <div class="container">
            <div class="row contact-wrap">
                <div class="col-lg-8 col-md-12">
                    <div class="blog-contact-form form-2">
                        <div class="request-form">
                            <h2 class="form-title">Get in Touch</h2>
                            <form action="mail.php" method="post" id="ajax_contact" class="form-horizontal">
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <div class="form-item">
                                            <h4 class="form-header">Your name</h4>
                                            <input type="text" id="fullname" name="fullname" class="form-control"
                                                placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-item">
                                            <h4 class="form-header">Email address</h4>
                                            <input type="text" id="email" name="email" class="form-control"
                                                placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="form-item">
                                            <h4 class="form-header">Subject</h4>
                                            <input type="text" id="subject" name="subject" class="form-control"
                                                placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="form-item message-item">
                                            <h4 class="form-header">Write Your Message</h4>
                                            <textarea id="message" name="message" cols="30" rows="5" class="form-control address" placeholder=""></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="submit-btn">
                                    <button id="submit" class="rr-primary-btn" type="submit">Submit Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="contact-content">
                        <div class="contact-img">
                            <img :src="contactImg" alt="">
                        </div>
                        <div class="contact-info-box">
                            <h3 class="title">Clothing Store</h3>
                            <ul>
                                <li>Germany — 785 15h Street, Office 478/B <br> Green Mall Berlin, De 81566</li>
                                <li>Phone: <a href="tel:+1123456788">+1 1234 567 88</a></li>
                                <li>Email: <a href="mailto:contact@example.com">contact@example.com</a></li>
                            </ul>
                        </div>
                        <div class="contact-info-box">
                            <h3 class="title">Opening Hours</h3>
                            <ul>
                                <li>Monday - Friday : 9am - 5pm <br>Weekend Closed</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ contact-section -->

    <div class="map-wrapper pb-130">
        <div class="container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8826.923787362664!2d-118.27754354757262!3d34.03471770929568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos%20Angeles%2C%20California%2C%20Hoa%20K%E1%BB%B3!5e0!3m2!1svi!2s!4v1566525118697!5m2!1svi!2s"
                width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>
    <!-- ./ map-wrapper -->
@endsection
