@extends('layouts.frontend')

@section('title', 'FAQs | Gudpanda')

@section('content')
    <section class="page-header">
        <x-bg-page-header />
        <div class="container">
            <div class="page-header-content">
                <h1 class="title">Frequently asked questions</h1>
                <h4 class="sub-title">
                    <span class="home">
                        <a href="/" wire:navigate>
                        <span>Home</span>
                        </a>
                    </span>
                    <span class="icon"><i class="fa-solid fa-angle-right"></i></span>
                    <span class="inner">
                        <span>Faq</span>
                    </span>
                </h4>
            </div>
        </div>
    </section>
    <!-- ./ page-header -->

    <div class="faq-section pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <div class="faq-content">
                        <div class="accordion" id="accordionExampleTwo">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        What is Gudpanda?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExampleOne">
                                    <div class="accordion-body">
                                        Gudpanda is an e-commerce platform but it extends beyond being just another
                                        regular e-commerce platform. It is a community where people can either gift
                                        items, receive items, sell items (used/new) and also bid items. It connects
                                        people with different needs with target to Nigeria and Africa at large.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        How does Gudpanda work?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExampleTwo">
                                    <div class="accordion-body">
                                        In the everyday home, people have valuable items/property laying around, some new
                                        and some used, it just occupies space and no longer serves any use, so why leave
                                        these items to rot away when you can just list them out on Gudpanda platform and
                                        either give it out for free or sell it out for a token amount or bid so it becomes
                                        useful to someone else. Users who produce new items from wears, products, decorative
                                        items etc to everyday products can list and sell their products on the platform.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Who can use Gudpanda?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#accordionExampleThree">
                                    <div class="accordion-body">
                                        Everyone and anyone can make use of the platform, as long as the person is above age
                                        18, and has valid email address.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                        How do I sign up?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExampleTwo">
                                    <div class="accordion-body">
                                        Gudpanda is easy to get on, all you need is an valid email address and be above 18,
                                        Click on the "Sign Up" button on the top right corner of our homepage, fill in your
                                        details, and verify your email address.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        How can I bid on items?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExampleTwo">
                                    <div class="accordion-body">
                                        To bid on items, browse or search for products you're interested in, click on the
                                        item, and enter your bid amount. Ensure you're logged in to place a bid.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        What payment methods are accepted?
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                    data-bs-parent="#accordionExampleTwo">
                                    <div class="accordion-body">
                                        We accept major credit cards, PayPal, and other secure payment gateways to ensure a
                                        smooth transaction experience.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        What fees are associated with selling?
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                    data-bs-parent="#accordionExampleTwo">
                                    <div class="accordion-body">
                                        We charge a nominal listing fee and a small commission on the final sale price.
                                        Details can be found on our "Fees" page.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Is my personal information secure?
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                    data-bs-parent="#accordionExampleTwo">
                                    <div class="accordion-body">
                                        Yes, we use industry-standard encryption and security protocols to protect your
                                        personal information and payment details.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        How can I contact customer support?
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                    data-bs-parent="#accordionExampleTwo">
                                    <div class="accordion-body">
                                        You can reach our customer support via the "Contact Us" page, email us at
                                        support@gudpanda.com, or call our helpline at 1-800-GUDPANDA.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        What should I do if I encounter an issue?
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                    data-bs-parent="#accordionExampleTwo">
                                    <div class="accordion-body">
                                        If you face any issues, please contact our support team with detailed information
                                        about the problem, and we will assist you promptly.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12">
                    <div class="faq-form">
                        <form action="mail.php">
                            <div class="form-item">
                                <input type="text" id="fullname" name="fullname" class="form-control"
                                    placeholder="Your Name">
                            </div>
                            <div class="form-item">
                                <input type="text" id="email" name="email" class="form-control"
                                    placeholder="Email address*">
                            </div>
                            <div class="form-item">
                                <textarea id="message" name="message" cols="30" rows="5" class="form-control address"
                                    placeholder="Message"></textarea>
                            </div>
                            <div class="submit-btn">
                                <button class="submit rr-primary-btn">Submit Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
