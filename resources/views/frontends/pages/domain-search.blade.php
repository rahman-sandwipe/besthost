@extends('frontends.master')
@section('page_title')
    <title>Domain Search</title>
@endsection
@section('main_contents')
<section class="single-banner">
    <h1>domain search</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">domain search</li>
    </ol>
</section>
<section class="domain-part section-mb-100">
    <div class="domain-overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs plan-tabs">
                        <li><a href="#register" class="tab-link active" data-bs-toggle="tab"><i class="fas fa-user-edit"></i><span>register</span></a></li>
                        <li><a href="#transfer" class="tab-link" data-bs-toggle="tab"><i class="fas fa-random"></i><span>Transfer</span></a></li>
                    </ul>
                    <div class="tab-pane fade show active" id="register">
                        <form class="domain-form">
                            <input type="text" placeholder="Find Your Perfect Domain Name">
                            <select class="select">
                                <option value="com" selected>.com</option>
                                <option value="net">.net</option>
                                <option value="org">.org</option>
                                <option value="info">.info</option>
                                <option value="store">.store</option>
                                <option value="online">.online</option>
                            </select>
                            <button type="submit" title="Search Domain"><i class="fas fa-search"></i><span>search</span></button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="transfer">
                        <form class="domain-form"><input type="text" placeholder="Enter Your Domain to Transfer"><button type="submit" title="Transfer Domain"><i class="fas fa-random"></i><span>Transfer</span></button></form>
                    </div>
                    <ul class="domain-suggest-slider slider-arrow">
                        <li><img src="images/domain/co.png" alt="domain"><strong>$5.34</strong></li>
                        <li><img src="images/domain/com.png" alt="domain"><strong>$9.56</strong></li>
                        <li><img src="images/domain/net.png" alt="domain"><strong>$7.89</strong></li>
                        <li><img src="images/domain/info.png" alt="domain"><strong>$6.47</strong></li>
                        <li><img src="images/domain/store.png" alt="domain"><strong>$8.12</strong></li>
                        <li><img src="images/domain/store.png" alt="domain"><strong>$8.12</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="feature-part section-mb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="section-subtitle">hosting feature</h2>
                    <h3 class="section-title">our <span>top features</span></h3>
                </div>
            </div>
        </div>
        <div class="row row-cols-sm-2 row-cols-md-2 row-cols-lg-3">
            <div class="col">
                <div class="feature-wrap">
                    <div class="feature-icon"><i class="flaticon-secure"></i></div>
                    <div class="feature-text">
                        <h5>uptime guarantee</h5>
                        <p>Loncidunt accusamus cum non maiores consectetur magnam eaque maxime.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="feature-wrap">
                    <div class="feature-icon"><i class="flaticon-computer"></i></div>
                    <div class="feature-text">
                        <h5>secure and safety</h5>
                        <p>Loncidunt accusamus cum non maiores consectetur magnam eaque maxime.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="feature-wrap">
                    <div class="feature-icon"><i class="flaticon-customer-service"></i></div>
                    <div class="feature-text">
                        <h5>dedicated support</h5>
                        <p>Loncidunt accusamus cum non maiores consectetur magnam eaque maxime.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="feature-wrap">
                    <div class="feature-icon"><i class="flaticon-online-shopping"></i></div>
                    <div class="feature-text">
                        <h5>eCommerce Tools</h5>
                        <p>Loncidunt accusamus cum non maiores consectetur magnam eaque maxime.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="feature-wrap">
                    <div class="feature-icon"><i class="flaticon-refund"></i></div>
                    <div class="feature-text">
                        <h5>easy refund policy</h5>
                        <p>Loncidunt accusamus cum non maiores consectetur magnam eaque maxime.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="feature-wrap">
                    <div class="feature-icon"><i class="flaticon-key"></i></div>
                    <div class="feature-text">
                        <h5>cpanel access</h5>
                        <p>Loncidunt accusamus cum non maiores consectetur magnam eaque maxime.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="feature-wrap">
                    <div class="feature-icon"><i class="flaticon-businessmen"></i></div>
                    <div class="feature-text">
                        <h5>Discussion Boards</h5>
                        <p>Loncidunt accusamus cum non maiores consectetur magnam eaque maxime.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="feature-wrap">
                    <div class="feature-icon"><i class="flaticon-easy-installation"></i></div>
                    <div class="feature-text">
                        <h5>onclick installation</h5>
                        <p>Loncidunt accusamus cum non maiores consectetur magnam eaque maxime.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="feature-wrap">
                    <div class="feature-icon"><i class="flaticon-speedometer"></i></div>
                    <div class="feature-text">
                        <h5>fast speed meter</h5>
                        <p>Loncidunt accusamus cum non maiores consectetur magnam eaque maxime.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="domain-price section-ptb-100 section-mb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="section-subtitle">pricing plan</h2>
                    <h3 class="section-title">domain <span>pricing list</span></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive-lg">
                    <table class="table table-bordered table-hover domain-table mb-0">
                        <thead>
                            <tr>
                                <th scope="col">name</th>
                                <th scope="col">register</th>
                                <th scope="col">transfer</th>
                                <th scope="col">renew</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><img src="images/domain/biz.png" alt="domain"></th>
                                <td>$19.95</td>
                                <td>$19.95</td>
                                <td>$19.95</td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="images/domain/co.png" alt="domain"></th>
                                <td>$19.95</td>
                                <td>$19.95</td>
                                <td>$19.95</td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="images/domain/com.png" alt="domain"></th>
                                <td>$19.95</td>
                                <td>$19.95</td>
                                <td>$19.95</td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="images/domain/info.png" alt="domain"></th>
                                <td>$19.95</td>
                                <td>$19.95</td>
                                <td>$19.95</td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="images/domain/me.png" alt="domain"></th>
                                <td>$19.95</td>
                                <td>$19.95</td>
                                <td>$19.95</td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="images/domain/mobi.png" alt="domain"></th>
                                <td>$19.95</td>
                                <td>$19.95</td>
                                <td>$19.95</td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="images/domain/net.png" alt="domain"></th>
                                <td>$19.95</td>
                                <td>$19.95</td>
                                <td>$19.95</td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="images/domain/store.png" alt="domain"></th>
                                <td>$19.95</td>
                                <td>$19.95</td>
                                <td>$19.95</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="info-part section-mb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-6 col-lg-6">
                <div class="info-content info-left">
                    <h2 class="section-subtitle">hosting info</h2>
                    <h3 class="section-title">Built for speed and security.</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit Cupiditate quam id fuga doloribus modi libero eligendi Modi minima quaerat nihil assumenda voluptatem!</p>
                    <a href="pricing-plan.html" class="btn btn-inline"><i class="fas fa-external-link-alt"></i><span>get started</span></a>
                </div>
            </div>
            <div class="col-sm-6 col-lg-6">
                <div class="info-image info-right"><img src="images/info/hosting.png" alt="info"></div>
            </div>
        </div>
    </div>
</section>
<section class="testi-part ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="section-subtitle">client's feedback</h2>
                    <h3 class="section-title">our <span>testimonials</span></h3>
                </div>
            </div>
        </div>
        <div class="testi-slider slider-arrow">
            <div class="testi-card">
                <i class="fas fa-quote-left"></i>
                <div class="testi-rating"><a href="#" class="fas fa-star"></a><a href="#" class="fas fa-star"></a><a href="#" class="fas fa-star"></a><a href="#" class="fas fa-star"></a><a href="#" class="fas fa-star"></a></div>
                <p class="testi-desc">Our best-in-class WordPress solution with additio nal optiz ation to make an running a WooCommerce</p>
                <div class="testi-user">
                    <a href="#"><img src="images/avatar/01.jpg" alt="avatar"></a>
                    <h5>miron mahmud <span>Hechinger</span></h5>
                </div>
            </div>
            <div class="testi-card">
                <i class="fas fa-quote-left"></i>
                <div class="testi-rating"><a href="#" class="fas fa-star"></a><a href="#" class="fas fa-star"></a><a href="#" class="fas fa-star"></a><a href="#" class="fas fa-star"></a><a href="#" class="fas fa-star"></a></div>
                <p class="testi-desc">Our best-in-class WordPress solution with additio nal optiz ation to make an running a WooCommerce</p>
                <div class="testi-user">
                    <a href="#"><img src="images/avatar/02.jpg" alt="avatar"></a>
                    <h5>tahmina bonny <span>Hechinger</span></h5>
                </div>
            </div>
            <div class="testi-card">
                <i class="fas fa-quote-left"></i>
                <div class="testi-rating"><a href="#" class="fas fa-star"></a><a href="#" class="fas fa-star"></a><a href="#" class="fas fa-star"></a><a href="#" class="fas fa-star"></a><a href="#" class="fas fa-star"></a></div>
                <p class="testi-desc">Our best-in-class WordPress solution with additio nal optiz ation to make an running a WooCommerce</p>
                <div class="testi-user">
                    <a href="#"><img src="images/avatar/03.jpg" alt="avatar"></a>
                    <h5>jane alom <span>Hechinger</span></h5>
                </div>
            </div>
            <div class="testi-card">
                <i class="fas fa-quote-left"></i>
                <div class="testi-rating"><a href="#" class="fas fa-star"></a><a href="#" class="fas fa-star"></a><a href="#" class="fas fa-star"></a><a href="#" class="fas fa-star"></a><a href="#" class="fas fa-star"></a></div>
                <p class="testi-desc">Our best-in-class WordPress solution with additio nal optiz ation to make an running a WooCommerce</p>
                <div class="testi-user">
                    <a href="#"><img src="images/avatar/04.jpg" alt="avatar"></a>
                    <h5>labonno khan <span>Hechinger</span></h5>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="clients-slider"><a href="#"><img src="images/client/01.png" alt="client"></a><a href="#"><img src="images/client/02.png" alt="client"></a><a href="#"><img src="images/client/03.png" alt="client"></a><a href="#"><img src="images/client/04.png" alt="client"></a><a href="#"><img src="images/client/05.png" alt="client"></a></div>
</div>
<section class="support-part">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4 col-lg-5">
                <div class="support-image"><img src="images/support.png" alt="support"></div>
            </div>
            <div class="col-md-8 col-lg-7">
                <div class="support-content">
                    <h2>why you with domhost?</h2>
                    <p>Because we know that even the best technology is only as good as the people behind it. That’s why we offer expert, 24/7 phone support, plus a lot more.</p>
                    <ul class="support-info">
                        <li><span>for call</span><a href="tel:0209-4215-5596">0209-4215-5596</a></li>
                        <li><span>for mail</span><a href="mailto:info@domhost.com">info@domhost.com</a></li>
                    </ul>
                    <div class="support-btn"><a href="#" class="btn btn-inline"><i class="fas fa-comments"></i><span>live chating</span></a><a href="contact.html" class="btn btn-inline"><i class="fas fa-file-signature"></i><span>contact us</span></a></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection