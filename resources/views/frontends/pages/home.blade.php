@extends('frontends.master')
@section('page_title')
    <title>Home - DB Best Host</title>
@endsection
@section('main_contents')
<section class="banner-part section-mb-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="banner-content">
                    <h1>find your perfect domain name</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, ullam sapiente! Sapiente molestias consectetur, quaerat, numquam modi obcaecati recusandae officiis quo libero</p>
                    <ul class="nav nav-tabs plan-tabs banner-tabs">
                        <li><a href="#register" class="tab-link active" data-bs-toggle="tab"><i class="fas fa-user-edit"></i><span>register</span></a></li>
                        <li><a href="#transfer" class="tab-link" data-bs-toggle="tab"><i class="fas fa-random"></i><span>Transfer</span></a></li>
                    </ul>
                    <div class="tab-pane fade show active" id="register">
                        <form class="banner-form">
                            <div class="banner-input-group">
                                <div class="banner-input">
                                    <input type="text" placeholder="Enter Domain Address">
                                    <select class="select">
                                        <option value="com" selected>.com</option>
                                        <option value="net">.net</option>
                                        <option value="org">.org</option>
                                        <option value="info">.info</option>
                                        <option value="store">.store</option>
                                        <option value="online">.online</option>
                                    </select>
                                </div>
                                <div class="banner-suggest">
                                    <a href="#">
                                        <h5>.io <span>- $9.45</span></h5>
                                    </a>
                                    <a href="#">
                                        <h5>.com <span>- $12.76</span></h5>
                                    </a>
                                    <a href="#">
                                        <h5>.net <span>- $10.23</span></h5>
                                    </a>
                                    <a href="#">
                                        <h5>.org <span>- $11.18</span></h5>
                                    </a>
                                </div>
                            </div>
                            <button type="submit" title="Search Domain"><i class="fas fa-search"></i><span>search</span></button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="transfer">
                        <form class="banner-form">
                            <div class="banner-input-group">
                                <div class="banner-input"><input type="text" placeholder="Enter Your Domain to Transfer"></div>
                                <div class="banner-suggest">
                                    <a href="#">
                                        <h5>.io <span>- $9.45</span></h5>
                                    </a>
                                    <a href="#">
                                        <h5>.com <span>- $12.76</span></h5>
                                    </a>
                                    <a href="#">
                                        <h5>.net <span>- $10.23</span></h5>
                                    </a>
                                    <a href="#">
                                        <h5>.org <span>- $11.18</span></h5>
                                    </a>
                                </div>
                            </div>
                            <button type="submit" title="Transfer Domain"><i class="fas fa-random"></i><span>Transfer</span></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="banner-image">
                    <img src="{{ asset('frontends/images/hero/01.png') }}" alt="hero">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="price-part section-mb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="section-subtitle">hosting plan</h2>
                    <h3 class="section-title">our <span>best pricing</span></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav nav-tabs plan-tabs">
                    <li><a href="#monthly" class="tab-link active" data-bs-toggle="tab"><i class="far fa-calendar-alt"></i><span>monthly</span></a></li>
                    <li><a href="#yearly" class="tab-link" data-bs-toggle="tab"><i class="far fa-calendar-alt"></i><span>yearly</span></a></li>
                </ul>
            </div>
        </div>
        <div class="tab-pane fade show active" id="monthly">
            <div class="price-slider slider-arrow">
                <div class="price-card">
                    <i class="flaticon-servers"></i>
                    <h3>starter</h3>
                    <p>Perfect for getting start</p>
                    <ul>
                        <li><span>5 addon domains</span></li>
                        <li><span>10GB SSD Storage</span></li>
                        <li><span>250GB Data Transfer</span></li>
                        <li><del>unlimited sub domains</del></li>
                        <li><del>free weekly backup</del></li>
                        <li><span>24/7 customer care</span></li>
                    </ul>
                    <h4>25% discount <del>$23.74</del></h4>
                    <h5>$35<sub>/mo</sub></h5>
                    <h6>vat not included</h6>
                    <a href="cartlist.html">get now</a>
                </div>
                <div class="price-card active">
                    <i class="flaticon-servers"></i>
                    <h3>popular</h3>
                    <p>Perfect for growing sites</p>
                    <ul>
                        <li><span>10 addon domains</span></li>
                        <li><span>15GB SSD Storage</span></li>
                        <li><span>500GB Data Transfer</span></li>
                        <li><del>unlimited sub domains</del></li>
                        <li><span>free weekly backup</span></li>
                        <li><span>24/7 customer care</span></li>
                    </ul>
                    <h4>25% discount <del>$35.62</del></h4>
                    <h5>$49<sub>/mo</sub></h5>
                    <h6>vat not included</h6>
                    <a href="cartlist.html">get now</a><small>most popular</small>
                </div>
                <div class="price-card">
                    <i class="flaticon-servers"></i>
                    <h3>ultimate</h3>
                    <p>Perfect for online stores</p>
                    <ul>
                        <li><span>25 addon domains</span></li>
                        <li><span>30GB SSD Storage</span></li>
                        <li><span>800GB Data Transfer</span></li>
                        <li><span>unlimited sub domains</span></li>
                        <li><span>free weekly backup</span></li>
                        <li><span>VIP customer care</span></li>
                    </ul>
                    <h4>25% discount <del>$49.85</del></h4>
                    <h5>$68<sub>/mo</sub></h5>
                    <h6>vat not included</h6>
                    <a href="cartlist.html">get now</a>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="yearly">
            <div class="price-slider slider-arrow">
                <div class="price-card">
                    <i class="flaticon-servers"></i>
                    <h3>starter</h3>
                    <p>Perfect for getting start</p>
                    <ul>
                        <li><span>5 addon domains</span></li>
                        <li><span>10GB SSD Storage</span></li>
                        <li><span>250GB Data Transfer</span></li>
                        <li><del>unlimited sub domains</del></li>
                        <li><del>free weekly backup</del></li>
                        <li><span>24/7 customer care</span></li>
                    </ul>
                    <h4>25% discount <del>$23.74</del></h4>
                    <h5>$135<sub>/yr</sub></h5>
                    <h6>vat not included</h6>
                    <a href="cartlist.html">get now</a>
                </div>
                <div class="price-card active">
                    <i class="flaticon-servers"></i>
                    <h3>popular</h3>
                    <p>Perfect for growing sites</p>
                    <ul>
                        <li><span>10 addon domains</span></li>
                        <li><span>15GB SSD Storage</span></li>
                        <li><span>500GB Data Transfer</span></li>
                        <li><del>unlimited sub domains</del></li>
                        <li><span>free weekly backup</span></li>
                        <li><span>24/7 customer care</span></li>
                    </ul>
                    <h4>25% discount <del>$35.62</del></h4>
                    <h5>$249<sub>/yr</sub></h5>
                    <h6>vat not included</h6>
                    <a href="cartlist.html">get now</a><small>most popular</small>
                </div>
                <div class="price-card">
                    <i class="flaticon-servers"></i>
                    <h3>ultimate</h3>
                    <p>Perfect for online stores</p>
                    <ul>
                        <li><span>25 addon domains</span></li>
                        <li><span>30GB SSD Storage</span></li>
                        <li><span>800GB Data Transfer</span></li>
                        <li><span>unlimited sub domains</span></li>
                        <li><span>free weekly backup</span></li>
                        <li><span>VIP customer care</span></li>
                    </ul>
                    <h4>25% discount <del>$49.85</del></h4>
                    <h5>$368<sub>/yr</sub></h5>
                    <h6>vat included</h6>
                    <a href="cartlist.html">get now</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="price-btn">
                    <p>Want to details or compare the above plans?</p>
                    <a href="pricing-plan.html" class="btn btn-inline"><i class="fas fa-eye"></i><span>see here</span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="feature-part section-mb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="section-subtitle">hosting feature</h2>
                    <h3 class="section-title">our <span>top features</span></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="feature-wrap">
                    <div class="feature-icon"><i class="flaticon-secure"></i></div>
                    <div class="feature-text">
                        <h5>uptime guarantee</h5>
                        <p>Loncidunt accusamus cum non maiores consectetur magnam eaque maxime.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="feature-wrap">
                    <div class="feature-icon"><i class="flaticon-computer"></i></div>
                    <div class="feature-text">
                        <h5>secure and safety</h5>
                        <p>Loncidunt accusamus cum non maiores consectetur magnam eaque maxime.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="feature-wrap">
                    <div class="feature-icon"><i class="flaticon-customer-service"></i></div>
                    <div class="feature-text">
                        <h5>dedicated support</h5>
                        <p>Loncidunt accusamus cum non maiores consectetur magnam eaque maxime.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="feature-wrap">
                    <div class="feature-icon"><i class="flaticon-online-shopping"></i></div>
                    <div class="feature-text">
                        <h5>eCommerce Tools</h5>
                        <p>Loncidunt accusamus cum non maiores consectetur magnam eaque maxime.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="feature-wrap">
                    <div class="feature-icon"><i class="flaticon-refund"></i></div>
                    <div class="feature-text">
                        <h5>easy refund policy</h5>
                        <p>Loncidunt accusamus cum non maiores consectetur magnam eaque maxime.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="feature-wrap">
                    <div class="feature-icon"><i class="flaticon-key"></i></div>
                    <div class="feature-text">
                        <h5>cpanel access</h5>
                        <p>Loncidunt accusamus cum non maiores consectetur magnam eaque maxime.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="feature-wrap">
                    <div class="feature-icon"><i class="flaticon-businessmen"></i></div>
                    <div class="feature-text">
                        <h5>Discussion Boards</h5>
                        <p>Loncidunt accusamus cum non maiores consectetur magnam eaque maxime.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="feature-wrap">
                    <div class="feature-icon"><i class="flaticon-easy-installation"></i></div>
                    <div class="feature-text">
                        <h5>onclick installation</h5>
                        <p>Loncidunt accusamus cum non maiores consectetur magnam eaque maxime.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
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
<section class="about-part section-mb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-image">
                    <img class="company" src="{{ asset('frontends/images/about/01.jpg') }}" alt="about">
                    <img class="people" src="{{ asset('frontends/images/about/02.jpg') }}" alt="about"></div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <h2 class="section-subtitle">about domhost</h2>
                    <h3 class="section-title"><span>Domhost believes</span>in your right ideas online.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil nemo, animi maiores saepe debitis libero necessitatibus rerum dolores ex. Nisi eveniet mollitia voluptatum. Error, accusamus repudiandae molestias excepturi beatae similique illo quo provident architecto fugiat.</p>
                    <ul>
                        <li>
                            <h5>2343+</h5>
                            <p>registered users</p>
                        </li>
                        <li>
                            <h5>7685+</h5>
                            <p>currently hosted</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-mb-120">
    <div class="container">
        <div class="video-content">
            <img src="{{ asset('frontends/images/video.jpg') }}" alt="video">
            <a href="https://youtu.be/C4lPnr7qgwM" class="venobox" data-autoplay="true" data-vbtype="video">
                <i class="fas fa-play"></i>
            </a>
        </div>
    </div>
</section>
<section class="service-part section-mb-95">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="section-subtitle">service provide</h2>
                    <h3 class="section-title">our <span>best service</span></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="service-card">
                    <i class="flaticon-web-hosting"></i>
                    <h4>shared hosting</h4>
                    <p>Lorem ipsum dolor sit amet elit expedita quas eos quos animi Nesciunt veniam voluptatem aliquam assumenda.</p>
                    <a href="shared-hosting.html">know more</a>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="service-card">
                    <i class="flaticon-cloud-network"></i>
                    <h4>cloud hosting</h4>
                    <p>Lorem ipsum dolor sit amet elit expedita quas eos quos animi Nesciunt veniam voluptatem aliquam assumenda.</p>
                    <a href="cloud-hosting.html">know more</a>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="service-card">
                    <i class="flaticon-vps"></i>
                    <h4>VPS hosting</h4>
                    <p>Lorem ipsum dolor sit amet elit expedita quas eos quos animi Nesciunt veniam voluptatem aliquam assumenda.</p>
                    <a href="shared-hosting.html">know more</a>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="service-card">
                    <i class="flaticon-shared-folder"></i>
                    <h4>reseller hosting</h4>
                    <p>Lorem ipsum dolor sit amet elit expedita quas eos quos animi Nesciunt veniam voluptatem aliquam assumenda.</p>
                    <a href="reseller-hosting.html">know more</a>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="service-card">
                    <i class="flaticon-database"></i>
                    <h4>dedicated hosting</h4>
                    <p>Lorem ipsum dolor sit amet elit expedita quas eos quos animi Nesciunt veniam voluptatem aliquam assumenda.</p>
                    <a href="cloud-hosting.html">know more</a>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="service-card">
                    <i class="flaticon-domain"></i>
                    <h4>domain name</h4>
                    <p>Lorem ipsum dolor sit amet elit expedita quas eos quos animi Nesciunt veniam voluptatem aliquam assumenda.</p>
                    <a href="domain-search.html">know more</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="support-part section-mb-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4 col-lg-5">
                <div class="support-image">
                    <img src="{{ asset('frontends/images/support.png') }}" alt="support">
                </div>
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
<section class="info-part section-mb-120">
    <div class="container">
        <div class="row align-items-center section-mb-100">
            <div class="col-sm-6 col-lg-6">
                <div class="info-content info-left">
                    <h2 class="section-subtitle">hosting info</h2>
                    <h3 class="section-title">Built for speed and security.</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit Cupiditate quam id fuga doloribus modi libero eligendi Modi minima quaerat nihil assumenda voluptatem!</p>
                    <a href="shared-hosting.html" class="btn btn-inline"><i class="fas fa-external-link-alt"></i><span>get started</span></a>
                </div>
            </div>
            <div class="col-sm-6 col-lg-6">
                <div class="info-image info-right">
                    <img src="{{ asset('frontends/images/info/hosting.png') }}" alt="info">
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-sm-6 col-lg-6">
                <div class="info-image info-left">
                    <img src="{{ asset('frontends/images/info/domain.png') }}" alt="info">
                </div>
            </div>
            <div class="col-sm-6 col-lg-6">
                <div class="info-content info-right">
                    <h2 class="section-subtitle">domain info</h2>
                    <h3 class="section-title">Start your business with own identity.</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit Cupiditate quam id fuga doloribus modi libero eligendi Modi minima quaerat nihil assumenda voluptatem!</p>
                    <a href="domain-search.html" class="btn btn-inline"><i class="fas fa-external-link-alt"></i><span>get started</span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="testi-part">
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
                    <a href="#">
                        <img src="{{ asset('frontends/images/avatar/01.jpg') }}" alt="avatar">
                    </a>
                    <h5>miron mahmud <span>Hechinger</span></h5>
                </div>
            </div>
            <div class="testi-card">
                <i class="fas fa-quote-left"></i>
                <div class="testi-rating"><a href="#" class="fas fa-star"></a><a href="#" class="fas fa-star"></a><a href="#" class="fas fa-star"></a><a href="#" class="fas fa-star"></a><a href="#" class="fas fa-star"></a></div>
                <p class="testi-desc">Our best-in-class WordPress solution with additio nal optiz ation to make an running a WooCommerce</p>
                <div class="testi-user">
                    <a href="#">
                        <img src="{{ asset('frontends/images/avatar/02.jpg') }}" alt="avatar">
                    </a>
                    <h5>tahmina bonny <span>Hechinger</span></h5>
                </div>
            </div>
            <div class="testi-card">
                <i class="fas fa-quote-left"></i>
                <div class="testi-rating"><a href="#" class="fas fa-star"></a><a href="#" class="fas fa-star"></a><a href="#" class="fas fa-star"></a><a href="#" class="fas fa-star"></a><a href="#" class="fas fa-star"></a></div>
                <p class="testi-desc">Our best-in-class WordPress solution with additio nal optiz ation to make an running a WooCommerce</p>
                <div class="testi-user">
                    <a href="#">
                        <img src="{{ asset('frontends/images/avatar/03.jpg') }}" alt="avatar">
                    </a>
                    <h5>jane alom <span>Hechinger</span></h5>
                </div>
            </div>
            <div class="testi-card">
                <i class="fas fa-quote-left"></i>
                <div class="testi-rating">
                    <a href="#" class="fas fa-star"></a>
                    <a href="#" class="fas fa-star"></a>
                    <a href="#" class="fas fa-star"></a>
                    <a href="#" class="fas fa-star"></a>
                    <a href="#" class="fas fa-star"></a>
                </div>
                <p class="testi-desc">Our best-in-class WordPress solution with additio nal optiz ation to make an running a WooCommerce</p>
                <div class="testi-user">
                    <a href="#">
                        <img src="{{ asset('frontends/images/avatar/04.jpg') }}" alt="avatar"></a>
                    <h5>labonno khan <span>Hechinger</span></h5>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container section-mb-120">
    <div class="clients-slider">
        <a href="#">
            <img src="{{ asset('frontends/images/client/01.png') }}" alt="client">
        </a>
        <a href="#">
            <img src="{{ asset('frontends/images/client/02.png') }}" alt="client">
        </a>
        <a href="#">
            <img src="{{ asset('frontends/images/client/03.png') }}" alt="client">
        </a>
        <a href="#">
            <img src="{{ asset('frontends/images/client/04.png') }}" alt="client">
        </a>
        <a href="#">
            <img src="{{ asset('frontends/images/client/05.png') }}" alt="client">
        </a>
    </div>
</div>
<section class="faq-part section-mb-95">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="section-subtitle">client's faqs</h2>
                    <h3 class="section-title">most <span>asked question</span></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="faq-child">
                    <div class="faq-que">
                        <h4>How to buy a domain in cheap price?</h4>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-ans">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt enim ut aspernatur expedita nam mollitia pariatur Sequi hic nobis aperiam numquam aliquam.</p>
                    </div>
                </div>
                <div class="faq-child">
                    <div class="faq-que">
                        <h4>How do I set up a URL redirect for a domain?</h4>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-ans">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt enim ut aspernatur expedita nam mollitia pariatur Sequi hic nobis aperiam numquam aliquam.</p>
                    </div>
                </div>
                <div class="faq-child">
                    <div class="faq-que">
                        <h4>How does WhoisGuard work for keep secure?</h4>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-ans">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt enim ut aspernatur expedita nam mollitia pariatur Sequi hic nobis aperiam numquam aliquam.</p>
                    </div>
                </div>
                <div class="faq-child">
                    <div class="faq-que">
                        <h4>How do I generate a CSR code?</h4>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-ans">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt enim ut aspernatur expedita nam mollitia pariatur Sequi hic nobis aperiam numquam aliquam.</p>
                    </div>
                </div>
                <div class="faq-child">
                    <div class="faq-que">
                        <h4>How to upload file via ftp in cPanel?</h4>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-ans">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt enim ut aspernatur expedita nam mollitia pariatur Sequi hic nobis aperiam numquam aliquam.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="faq-child">
                    <div class="faq-que">
                        <h4>How can I change the nameservers for domain?</h4>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-ans">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt enim ut aspernatur expedita nam mollitia pariatur Sequi hic nobis aperiam numquam aliquam.</p>
                    </div>
                </div>
                <div class="faq-child">
                    <div class="faq-que">
                        <h4>How to transfer an existing hosting account?</h4>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-ans">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt enim ut aspernatur expedita nam mollitia pariatur Sequi hic nobis aperiam numquam aliquam.</p>
                    </div>
                </div>
                <div class="faq-child">
                    <div class="faq-que">
                        <h4>How to set up Free Email Forwarding?</h4>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-ans">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt enim ut aspernatur expedita nam mollitia pariatur Sequi hic nobis aperiam numquam aliquam.</p>
                    </div>
                </div>
                <div class="faq-child">
                    <div class="faq-que">
                        <h4>Does Domhost provide an uptime guarantee?</h4>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-ans">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt enim ut aspernatur expedita nam mollitia pariatur Sequi hic nobis aperiam numquam aliquam.</p>
                    </div>
                </div>
                <div class="faq-child">
                    <div class="faq-que">
                        <h4>How to add Multiple user in cPanel?</h4>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-ans">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt enim ut aspernatur expedita nam mollitia pariatur Sequi hic nobis aperiam numquam aliquam.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="blog-part section-mb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="section-subtitle">domhost article</h2>
                    <h3 class="section-title">our <span>latest blogs</span></h3>
                </div>
            </div>
        </div>
        <div class="blog-slider slider-arrow">
            <div class="blog-card">
                <div class="blog-media">
                    <a href="blog-details.html">
                        <img src="{{ asset('frontends/images/blog/01.jpg') }}" alt="blog">
                    </a>
                </div>
                <div class="blog-content">
                    <ul>
                        <li><i class="fas fa-tags"></i><a href="#">theme plugin</a></li>
                        <li><i class="fas fa-calendar-alt"></i><span>feb 02, 2021</span></li>
                    </ul>
                    <h4><a href="blog-details.html">Maiores modi pariatur alias sapiente vero tenetur</a></h4>
                    <p>Lorem ipsum dolor amet consectetur adipisicing elit Quibusdam deleniti possimus porro <a href="blog-details.html">...read more</a></p>
                </div>
            </div>
            <div class="blog-card">
                <div class="blog-media">
                    <a href="blog-details.html">
                        <img src="{{ asset('frontends/images/blog/02.jpg') }}" alt="blog">
                    </a>
                </div>
                <div class="blog-content">
                    <ul>
                        <li><i class="fas fa-tags"></i><a href="#">cloud hosting</a></li>
                        <li><i class="fas fa-calendar-alt"></i><span>dec 26, 2020</span></li>
                    </ul>
                    <h4><a href="blog-details.html">Maiores modi pariatur alias sapiente vero tenetur</a></h4>
                    <p>Lorem ipsum dolor amet consectetur adipisicing elit Quibusdam deleniti possimus porro <a href="blog-details.html">...read more</a></p>
                </div>
            </div>
            <div class="blog-card">
                <div class="blog-media">
                    <a href="blog-details.html">
                        <img src="{{ asset('frontends/images/blog/03.jpg') }}" alt="blog">
                    </a>
                </div>
                <div class="blog-content">
                    <ul>
                        <li><i class="fas fa-tags"></i><a href="#">domain name</a></li>
                        <li><i class="fas fa-calendar-alt"></i><span>jan 18, 2021</span></li>
                    </ul>
                    <h4><a href="blog-details.html">Maiores modi pariatur alias sapiente vero tenetur</a></h4>
                    <p>Lorem ipsum dolor amet consectetur adipisicing elit Quibusdam deleniti possimus porro <a href="blog-details.html">...read more</a></p>
                </div>
            </div>
            <div class="blog-card">
                <div class="blog-media">
                    <a href="blog-details.html">
                        <img src="{{ asset('frontends/images/blog/04.jpg') }}" alt="blog">
                    </a>
                </div>
                <div class="blog-content">
                    <ul>
                        <li><i class="fas fa-tags"></i><a href="#">Reseller hosting</a></li>
                        <li><i class="fas fa-calendar-alt"></i><span>feb 02, 2021</span></li>
                    </ul>
                    <h4><a href="blog-details.html">Maiores modi pariatur alias sapiente vero tenetur</a></h4>
                    <p>Lorem ipsum dolor amet consectetur adipisicing elit Quibusdam deleniti possimus porro <a href="blog-details.html">...read more</a></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-btn"><a href="blog-list.html" class="btn btn-inline"><i class="fas fa-eye"></i><span>show more</span></a></div>
            </div>
        </div>
    </div>
</section>
<section class="call2action-part">
    <div class="container">
        <h2>want to get achieve your ideas online?</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit ncidunt neque atque cum nulla temporibus cupiditate excepturi quibusdam magni beatae mollitia</p>
        <a href="pricing-plan.html" class="btn btn-inline"><i class="fas fa-external-link-alt"></i><span>get started</span></a>
    </div>
</section>
@endsection
