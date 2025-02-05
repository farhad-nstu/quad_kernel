@extends('frontend.layouts.master')
@section('content')
<!--Start Hero-->
    <section class="hero-section hero-bg-bg1 bg-gradient dark-bg1">
      <div class="text-block">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 v-center">
              <div class="header-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".2s">
                  Quad Kernel | Four Cores, Infinite Possibilities
                </h1>
                <p class="wow fadeInUp" data-wow-delay=".4s">
                  Built on four core principles | efficiency, reliability, adaptability, 
                  and excellence. we unlock infinite possibilities for your businesses to flourish in the digital era.
                </p>
                <a
                  href="#"
                  class="btn-main bg-btn lnk wow fadeInUp"
                  data-wow-delay=".6s"
                  >View Case Studies <i class="fas fa-chevron-right fa-icon"></i
                  ><span class="circle"></span
                ></a>
              </div>
            </div>
            <div class="col-lg-6 v-center">
              <div class="single-image wow fadeIn" data-wow-delay=".5s">
                <img
                  src="{{ asset('/frontend') }}/images/hero/hero-image.png"
                  alt="web development"
                  class="img-fluid"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End Hero-->
    <!--Start About-->
    <section class="about-agency pad-tb" id="about-us">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 v-center">
            <div class="image-block">
              <img
                src="{{ asset('/frontend') }}/images/about/about-image.png"
                alt="about"
                class="img-fluid no-shadow"
              />
            </div>
          </div>
          <div class="col-lg-6">
            <div class="common-heading text-l">
              <span>Welcome to Quadkernel!!</span>
              <h2>About Us</h2>
              <p>
                At Quad Kernel, we are a passionate team dedicated to transforming innovative ideas into cutting-edge software solutions. Our vision is to revolutionize the tech industry by leveraging the latest advancements in artificial intelligence, cloud computing, and cybersecurity.
Our agency combines creativity and technical expertise to deliver projects that not only meet our clients' needs but also exceed their expectations. With a team of forward-thinking professionals, we push the boundaries of software development and digital transformation, empowering businesses worldwide.
              </p>
                <strong>
                    Our Mission
                </strong>
                <p>
                    We believe in the power of technology to enhance lives and drive business success. Our mission is to provide high-quality software development services that help our clients innovate, grow, and achieve their goals. 
                </p>
                 <strong>
                    Why Choose Us?
                </strong>
                <p>
                    Expertise & Experience: With years of collective experience in the industry, we stay up-to-date with the latest technologies and trends to deliver best-in-class solutions.
Customer-Centric Approach: We view our clients as partners and are committed to providing personalized service tailored to each project's unique requirements.
Innovative Solutions: Our creative minds thrive on problem-solving, allowing us to develop inventive solutions that make a true impact on your business.
Get in Touch
Whether you're a startup looking for your first product or an established business seeking to enhance your software capabilities, Quadkernel is here to help. Let's bring your ideas to life together!

                </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End About-->
    <!--Start Service-->
    <section class="service-section web-servic pad-tb">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="common-heading">
              <span>Services We’re Provided</span>
              <h2 class="mb30">Our Design & Development Services</h2>
            </div>
          </div>
        </div>
        <div class="row upset link-hover shape-num justify-content-center">

          <div
            class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp"
            data-wow-delay="0.4s"
          >
            <div
              class="s-block"
              data-tilt
              data-tilt-max="5"
              data-tilt-speed="1000"
            >
              <div class="s-card-icon">
                <img
                  src="{{ asset('/frontend') }}/images/icons/development.svg"
                  alt="service"
                  class="img-fluid"
                />
              </div>
              <h4>Website Design & Development</h4>
              <p>
                Our custom web applications prioritize scalability <br> and exceptional user experience.
              </p>
              <a href="javascript:void(0)"
                >Learn More <i class="fas fa-chevron-right fa-icon"></i
              ></a>
            </div>
          </div>
          <div
            class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp"
            data-wow-delay="0.6s"
          >
            <div
              class="s-block"
              data-tilt
              data-tilt-max="5"
              data-tilt-speed="1000"
            >
              <div class="s-card-icon">
                <img
                  src="{{ asset('/frontend') }}/images/icons/app.svg"
                  alt="service"
                  class="img-fluid"
                />
              </div>
              <h4>Mobile App Development</h4>
              <p>
                We build native, hybrid, and cross-platform apps that are feature-rich and designed to engage millions of users.
              </p>
              <a href="javascript:void(0)"
                >Learn More <i class="fas fa-chevron-right fa-icon"></i
              ></a>
            </div>
          </div>
          <div
            class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp"
            data-wow-delay="0.8s"
          >
            <div
              class="s-block mb0"
              data-tilt
              data-tilt-max="5"
              data-tilt-speed="1000"
            >
              <div class="s-card-icon">
                <img
                  src="{{ asset('/frontend') }}/images/icons/marketing.svg"
                  alt="service"
                  class="img-fluid"
                />
              </div>
              <h4>UI UX Design Services</h4>
              <p>
                Elevate user experience and drive business results with Quad Kernnel UI UX solutions.
              </p>
              <a href="javascript:void(0)"
                >Learn More <i class="fas fa-chevron-right fa-icon"></i
              ></a>
            </div>
          </div>
          <div
            class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp"
            data-wow-delay="0.2s"
          >
            <div
              class="s-block"
              data-tilt
              data-tilt-max="5"
              data-tilt-speed="1000"
            >
              <div class="s-card-icon">
                <img
                  src="{{ asset('/frontend') }}/images/icons/branding.svg"
                  alt="service"
                  class="img-fluid"
                />
              </div>
              <h4>Logo & Branding Service</h4>
              <p>
                Custom logo design and branding to create a unique, professional, and memorable brand identity.
              </p>
              <a href="javascript:void(0)"
                >Learn More <i class="fas fa-chevron-right fa-icon"></i
              ></a>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!--End Service-->
    <!--Start Testinomial-->
    <section class="testinomial-section pad-tb">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 v-center">
            <div class="common-heading text-l">
              <span>Clients Testimonial</span>
              <h2 class="mb0">What our clients say about our Company.</h2>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="owl-carousel testimonial-card-a pl25">
              <div class="testimonial-card">
                <div class="t-text">
                  <p>
                    I am absolutely thrilled with the service I received from Quad kernel! From the initial consultation to the final delivery, their team was professional, responsive, and dedicated to meeting my needs. 
Thank you to the entire team at Quad kernel for an outstanding experience. I look forward to continuing our partnership and exploring new ways to leverage your expertise to drive my business forward!
                  </p>
                </div>
                <div class="client-thumbs mt30">
                  <div class="media v-center">
                    <div class="user-image bdr-radius">
                      <img
                        src="{{ asset('/frontend') }}/images/user-thumb/girl.jpg"
                        alt="girl"
                        class="img-fluid"
                      />
                    </div>
                    <div class="media-body user-info v-center">
                      <h5>Moana Smile</h5>
                      <p>CEO of Niwax, <small>Jaipur, India</small></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="testimonial-card">
                <div class="t-text">
                  <p>
                    I am absolutely thrilled with the service I received from Quad kernel! From the initial consultation to the final delivery, their team was professional, responsive, and dedicated to meeting my needs. 
Thank you to the entire team at Quad kernel for an outstanding experience. I look forward to continuing our partnership and exploring new ways to leverage your expertise to drive my business forward!

                  </p>
                </div>
                <div class="client-thumbs mt30">
                  <div class="media v-center">
                    <div class="user-image bdr-radius">
                      <img
                        src="{{ asset('/frontend') }}/images/user-thumb/girl.jpg"
                        alt="girl"
                        class="img-fluid"
                      />
                    </div>
                    <div class="media-body user-info">
                      <h5>Moana Smile</h5>
                      <p>CEO of Niwax, <small>Jaipur, India</small></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="testimonial-card">
                <div class="t-text">
                  <p>
                    I am absolutely thrilled with the service I received from Quad kernel! From the initial consultation to the final delivery, their team was professional, responsive, and dedicated to meeting my needs. 
Thank you to the entire team at Quad kernel for an outstanding experience. I look forward to continuing our partnership and exploring new ways to leverage your expertise to drive my business forward!

                  </p>
                </div>
                <div class="client-thumbs mt30">
                  <div class="media v-center">
                    <div class="user-image bdr-radius">
                      <img
                        src="{{ asset('/frontend') }}/images/user-thumb/girl.jpg"
                        alt="girl"
                        class="img-fluid"
                      />
                    </div>
                    <div class="media-body user-info">
                      <h5>Moana Smile</h5>
                      <p>CEO of Niwax, <small>Jaipur, India</small></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End Testinomial-->
    <!--Start Enquire Form-->
    <section class="enquire-form pad-tb" id="contact-us">
      <div class="container">
        <div class="row light-bgs">
          <div class="col-lg-6">
            <div class="common-heading text-l">
              <span>Contact Now</span>
              <h2 class="mt0">Have Question? Write a Message</h2>
            </div>
            <div class="form-block">
              <form action="#" method="post" name="feedback-form">
                <div class="fieldsets row">
                  <div class="col-md-6">
                    <input type="text" placeholder="Full Name" name="name" />
                  </div>
                  <div class="col-md-6">
                    <input
                      type="email"
                      placeholder="Email Address"
                      name="email"
                    />
                  </div>
                </div>
                <div class="fieldsets row">
                  <div class="col-md-6">
                    <input
                      type="number"
                      placeholder="Contact Number"
                      name="phone"
                    />
                  </div>
                  <div class="col-md-6">
                    <input type="text" placeholder="Subject" name="subject" />
                  </div>
                </div>
                <div class="fieldsets">
                  <textarea placeholder="Message" name="message"></textarea>
                </div>
                <div class="custom-control custom-checkbox">
                  <input
                    type="checkbox"
                    class="custom-control-input"
                    id="customCheck"
                    name="example1"
                    checked="checked"
                  />
                  <label class="custom-control-label" for="customCheck"
                    >I agree to the
                    <a href="javascript:void(0)">Terms &amp; Conditions</a> of
                    Business Name.</label
                  >
                </div>
                <div class="fieldsets mt20">
                  <button
                    type="submit"
                    name="submit"
                    class="lnk btn-main bg-btn"
                  >
                    Submit <i class="fas fa-chevron-right fa-icon"></i
                    ><span class="circle"></span>
                  </button>
                </div>
                <p class="trm">
                  <i class="fas fa-lock"></i>We hate spam, and we respect your
                  privacy.
                </p>
              </form>
            </div>
          </div>
          <div class="col-lg-6 v-center">
            <div class="enquire-image">
              <img
                src="{{ asset('/frontend') }}/images/about/hellopic.png"
                alt="enquire"
                class="img-fluid"
              />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End Enquire Form-->
@endsection
