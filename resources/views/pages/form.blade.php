@extends('templates.main')

@section('content')

<section
class="section hero hero-homepage hero-form-page bg-image"
style="background-image: url(img/hero-homepage.jpg); z-index: -1;"
>
<div class="content">
  <div class="title">Borneo and Dayak</div>
</div>
</section>
<section class="section section-form">
  <div class="container form-container">
    <div class="step">
      <div class="circle-container">
        <div class="circle active">
          <div class="title">Travelers</div>
        </div>
        <div class="circle">
          <div class="title">Your trip</div>
        </div>
      </div>
    </div>
    <div class="input-container">
      <div class="title">You will be travelling...</div>
      <div class="input-group radio">
        <input type="radio" name="type" id="solo" />
        <div class="circle"></div>
        <label for="solo">Solo</label>
      </div>
      <div class="input-group radio">
        <input type="radio" name="type" id="couple" />
        <div class="circle"></div>
        <label for="couple">As a couple</label>
      </div>
      <div class="input-group radio">
        <input type="radio" name="type" id="family" />
        <div class="circle"></div>
        <label for="family">As a Family</label>
      </div>
      <div class="input-group radio">
        <input type="radio" name="type" id="friends" />
        <div class="circle"></div>
        <label for="friends">With friends</label>
      </div>
      <div class="input-group radio">
        <input type="radio" name="type" id="group" />
        <div class="circle"></div>
        <label for="group">As a Group</label>
      </div>
    </div>
    <div class="input-container">
      <div class="title">Do you know the exact dates of your trip?</div>
      <div class="input-group radio">
        <input type="radio" name="exact" id="yes" />
        <div class="circle"></div>
        <label for="yes">Yes</label>
      </div>
      <div class="input-group radio">
        <input type="radio" name="exact" id="no" />
        <div class="circle"></div>
        <label for="no">No</label>
      </div>
    </div>
    <br />
    <div class="line"></div>
    <br />
    <a href="form2.html" class="btn btn-primary">Next Step</a>
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
