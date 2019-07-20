@extends('templates.main')

@section('content')

<section
class="hero hero-destination bg-image"
style="background-image: url(img/hero-homepage.jpg)"
></section>
<section class="section section-destination-filter">
  <div class="container">
    <div class="title">Pick a destination with our trip finder</div>
    <div class="tab-list">
      <span class="label">I WANT TO SET OFF IN ...</span>
      <div class="row-flex wrap space-between link">
        <a href="javascript:;">Jan</a>
        <a href="javascript:;">Feb</a>
        <a href="javascript:;">Mar</a>
        <a href="javascript:;">Apr</a>
        <a href="javascript:;">May</a>
        <a href="javascript:;">Jun</a>
        <a href="javascript:;">Jul</a>
        <a href="javascript:;">Aug</a>
        <a href="javascript:;">Sept</a>
        <a href="javascript:;">Oct</a>
        <a href="javascript:;">Nov</a>
        <a href="javascript:;">Dec</a>
      </div>
    </div>
    <div class="row-flex space-between">
      <div class="block">
        <div class="tab-list with-icon">
          <span class="label">I WANT MY TRIP TO INCLUDE ...</span>
          <div class="row-flex space-between link">
            <a href="javascript:;">
              <img src="https://via.placeholder.com/50" alt="" srcset="" />
              Relaxation
            </a>
            <a href="javascript:;">
              <img src="https://via.placeholder.com/50" alt="" srcset="" />
              Sport/Activities
            </a>
            <a href="javascript:;">
              <img src="https://via.placeholder.com/50" alt="" srcset="" />
              Historical Site
            </a>
            <a href="javascript:;">
              <img
              src="https://via.placeholder.com/50"
              alt=""
              srcset=""
              />Local Culture</a
              >
              <a href="javascript:;">
                <img
                src="https://via.placeholder.com/50"
                alt=""
                srcset=""
                />Local Cuisine</a
                >
              </div>
            </div>
          </div>
          <div class="block">
            <div class="tab-list with-icon">
              <span class="label">I AM MOST INTERSETED IN ...</span>
              <div class="row-flex space-between link">
                <a href="javascript:;">
                  <img
                  src="https://via.placeholder.com/50"
                  alt=""
                  srcset=""
                  />The Americas</a
                  >
                  <a href="javascript:;">
                    <img
                    src="https://via.placeholder.com/50"
                    alt=""
                    srcset=""
                    />The Europe</a
                    >
                    <a href="javascript:;">
                      <img
                      src="https://via.placeholder.com/50"
                      alt=""
                      srcset=""
                      />Asia</a
                      >
                      <a href="javascript:;">
                        <img
                        src="https://via.placeholder.com/50"
                        alt=""
                        srcset=""
                        />Africa</a
                        >
                        <a href="javascript:;">
                          <img
                          src="https://via.placeholder.com/50"
                          alt=""
                          srcset=""
                          />Oceania</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-number-list wrap row-flex space-between">
                    <div class="card-number">
                      <div
                      class="block-image bg-image"
                      style="background-image: url(img/240x160.png)"
                      >
                      <div class="number">1</div>
                    </div>
                    <div class="block-info">
                      <div class="card-title">Indonesia</div>
                      <span>
                        <img src="img/24.png" alt="" />
                        Ideal
                      </span>
                    </div>
                  </div>
                  <div class="card-number">
                    <div
                    class="block-image bg-image"
                    style="background-image: url(img/240x160.png)"
                    >
                    <div class="number">2</div>
                  </div>
                  <div class="block-info">
                    <div class="card-title">Africa</div>
                    <span>
                      <img src="img/24.png" alt="" />
                      Ideal
                    </span>
                  </div>
                </div>
                <div class="card-number">
                  <div
                  class="block-image bg-image"
                  style="background-image: url(img/240x160.png)"
                  >
                  <div class="number">3</div>
                </div>
                <div class="block-info">
                  <div class="card-title">India</div>
                  <span>
                    <img src="img/24.png" alt="" />
                    Ideal
                  </span>
                </div>
              </div>
              <div class="card-number">
                <div
                class="block-image bg-image"
                style="background-image: url(img/240x160.png)"
                >
                <div class="number">4</div>
              </div>
              <div class="block-info">
                <div class="card-title">Portugal</div>
                <span>
                  <img src="img/24.png" alt="" />
                  Ideal
                </span>
              </div>
            </div>
            <div class="card-number">
              <div
              class="block-image bg-image"
              style="background-image: url(img/240x160.png)"
              >
              <div class="number">5</div>
            </div>
            <div class="block-info">
              <div class="card-title">Jepang</div>
              <span>
                <img src="img/24.png" alt="" />
                Ideal
              </span>
            </div>
          </div>
          <div class="card-number">
            <div
            class="block-image bg-image"
            style="background-image: url(img/240x160.png)"
            >
            <div class="number">6</div>
          </div>
          <div class="block-info">
            <div class="card-title">Australia</div>
            <span>
              <img src="img/24.png" alt="" />
              Ideal
            </span>
          </div>
        </div>
        <div class="card-number">
          <div
          class="block-image bg-image"
          style="background-image: url(img/240x160.png)"
          >
          <div class="number">7</div>
        </div>
        <div class="block-info">
          <div class="card-title">England</div>
          <span>
            <img src="img/24.png" alt="" />
            Ideal
          </span>
        </div>
      </div>
      <div class="card-number">
        <div
        class="block-image bg-image"
        style="background-image: url(img/240x160.png)"
        >
        <div class="number">8</div>
      </div>
      <div class="block-info">
        <div class="card-title">Brazil</div>
        <span>
          <img src="img/24.png" alt="" />
          Ideal
        </span>
      </div>
    </div>
  </div>
  
  <button class="btn btn-border margin-center" role="button">
    More Destination
  </button>
  
</div>
</section>
<!---->
<section class="section section-popular-trip">
  <div class="container">
    <div class="section-title">Our Popular Trip</div>
    <div class="card-trip-list row-flex wrap space-between">
      <div class="card-trip">
        <div
        class="block-image bg-image"
        style="background-image:url(img/240x160.png)"
        ></div>
        <div class="block-detail">Self-Drive Vacarions</div>
      </div>
      <div class="card-trip">
        <div
        class="block-image bg-image"
        style="background-image:url(img/240x160.png)"
        ></div>
        <div class="block-detail">Where to go in February</div>
      </div>
      <div class="card-trip">
        <div
        class="block-image bg-image"
        style="background-image:url(img/240x160.png)"
        ></div>
        <div class="block-detail">Vacations of solo Travelers</div>
      </div>
      <div class="card-trip">
        <div
        class="block-image bg-image"
        style="background-image:url(img/240x160.png)"
        ></div>
        <div class="block-detail">Learning Vacations</div>
      </div>
      <div class="card-trip">
        <div
        class="block-image bg-image"
        style="background-image:url(img/240x160.png)"
        ></div>
        <div class="block-detail">Hooneymoons</div>
      </div>
      <div class="card-trip">
        <div
        class="block-image bg-image"
        style="background-image:url(img/240x160.png)"
        ></div>
        <div class="block-detail">Trekking and Walking Vacations</div>
      </div>
      <div class="card-trip">
        <div
        class="block-image bg-image"
        style="background-image:url(img/240x160.png)"
        ></div>
        <div class="block-detail">Sport and Adventure Vacations</div>
      </div>
      <div class="card-trip">
        <div
        class="block-image bg-image"
        style="background-image:url(img/240x160.png)"
        ></div>
        <div class="block-detail">Off the beaten track Vacarions</div>
      </div>
    </div>
  </div>
</section>

<!---->
<section class="section section-tnc">
  <div class="container">
    <div class="section-title">Terms and Condition</div>
    <ol>
      <li>
        Discount coupon of 14% (maximum value of IDR 600.000) with no
        minimum transaction in one Booking ID.
      </li>
      <li>
        Valid for reservations through Traveloka App minimum version 2.15.0
        (Android/iOS) or through Traveloka desktop and mobile web.
      </li>
      <li>
        Valid for all domestic flight with Garuda Indonesia, Sriwijaya Air,
        NAM Air, Citilink, TransNusa, Trigana Air, and Express Air.
      </li>
      <li>
        Only applicable with insurance purchase.
      </li>
      <li>
        Not valid for Flight + Hotel package reservations.
      </li>
      <li>
        Valid for all payment methods.
      </li>
      <li>
        Only valid for one-time per day use during the promo period.
      </li>
      <li>
        Booking period: 6 - 12 Feb 2019.
      </li>
      <li>
        Travel period: anytime.
      </li>
      <li>
        Reservations made with discount coupon are not eligible to earn
        Traveloka point.
      </li>
      <li>
        This discount coupon cannot be combined with other discount, not the
        initial price.
      </li>
      <li>
        Traveloka reserves the right to change the terms and conditions
        without prior notice.
      </li>
      <li>
        Learn more on Traveloka coupon terms and condition
        <a href="#">here</a>
      </li>
    </ol>
  </div>
</section>
<!---->
<section class="section section-subscribe">
  <div class="container">
    <div class="row">
      <p>
        Subscribe to our newsletter now and be the first to know about
        Traveloka's promos!
      </p>
      <div class="field-group">
        <div class="icon-envelope"></div>
        <input type="text" placeholder="Enter your email here" />
        <button class="btn-submit">Subscribe !</button>
      </div>
    </div>
  </div>
</section>

@endsection