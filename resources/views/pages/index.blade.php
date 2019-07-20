@extends('templates.landing')

@section('content')

<section
class="hero hero-homepage bg-image"
style="background-image: url(img/hero-homepage.jpg)"
>
<div class="content">
	<div class="title">There's Nothing Like Indonesia</div>
	<div class="input">
		<input type="text" placeholder="Where Would you like to go?" />
		<button type="button" class="btn-submit">Discover</button>
	</div>
	<a href="#">Not sure yet? Try our Trip Finder</a>
</div>
</section>

<!---->
<!---->
<section class="section section-agencies">
	<div class="container">
		<div class="section__header">
			<div class="title">Agencies</div>
			<!-- <hr /> -->
			<a href="#" class="see-more">Learn More About Our Agents</a>
		</div>
		<div class="slider-agencies swiper-container">
			<div class="swiper-wrapper">
				<div
				class="card-team swiper-slide"
				style="background-image: url(img/img-people1.jpg)"
				>
				<div class="details">
					<div class="desc">
						Specialist in classic and Luxury tours in Madura
					</div>
					<div class="name">SRI MARELINA</div>
				</div>
			</div>
			<div
			class="card-team swiper-slide"
			style="background-image: url(img/img-people2.jpg)"
			>
			<div class="details">
				<div class="desc">
					Specialist in classic and Luxury tours in Madura
				</div>
				<div class="name">BAJURI AHMAD</div>
			</div>
		</div>
		<div
		class="card-team swiper-slide"
		style="background-image: url(img/img-people3.jpeg)"
		>
		<div class="details">
			<div class="desc">
				Specialist in classic and Luxury tours in Madura
			</div>
			<div class="name">SRI MARELINA</div>
		</div>
	</div>
	<div
	class="card-team swiper-slide"
	style="background-image: url(img/img-people2.jpg)"
	>
	<div class="details">
		<div class="desc">
			Specialist in classic and Luxury tours in Madura
		</div>
		<div class="name">BAJURI AHMAD</div>
	</div>
</div>
</div>
</div>
</div>
</section>

<!---->
<!---->
<section class="section section-offers">
	<div class="container">
		<div class="section__header">
			<div class="title">Popular Offers</div>
			<!-- <hr /> -->
			<a href="#" class="see-more">See More Offers</a>
		</div>
		<div class="grid-offers">
			<div
			class="card-offers bg-image"
			style="background-image: url(https://via.placeholder.com/320x160.png);"
			></div>
			<div
			class="card-offers bg-image"
			style="background-image: url(https://via.placeholder.com/320x160.png);"
			></div>
			<div
			class="card-offers bg-image"
			style="background-image: url(https://via.placeholder.com/320x160.png);"
			></div>
			<div
			class="card-offers bg-image"
			style="background-image: url(https://via.placeholder.com/320x160.png);"
			></div>
			<div
			class="card-offers bg-image"
			style="background-image: url(https://via.placeholder.com/320x160.png);"
			></div>
			<div
			class="card-offers bg-image"
			style="background-image: url(https://via.placeholder.com/320x160.png);"
			></div>
		</div>
	</div>
</section>

<!---->
<!---->
<section class="section section-places">
	<div class="container">
		<div class="section__header">
			<div class="title">Popular Place</div>
			<!-- <hr /> -->
			<a href="#" class="see-more">Learn More About Our Agents</a>
		</div>
		<div class="grid-places">
			<div
			class="card-places bg-image"
			style="background-image: url(https://via.placeholder.com/320x320.png)"
			>
			<div class="text">Madura</div>
		</div>
		<div
		class="card-places bg-image"
		style="background-image: url(https://via.placeholder.com/320x320.png)"
		>
		<div class="text">Kalimantan</div>
	</div>
	<div
	class="card-places bg-image"
	style="background-image: url(https://via.placeholder.com/320x320.png)"
	>
	<div class="text">Borneo</div>
</div>
<div
class="card-places bg-image"
style="background-image: url(https://via.placeholder.com/320x320.png)"
>
<div class="text">Jogja</div>
</div>
<div
class="card-places bg-image"
style="background-image: url(https://via.placeholder.com/320x320.png)"
>
<div class="text">Solo</div>
</div>
<div
class="card-places bg-image"
style="background-image: url(https://via.placeholder.com/320x320.png)"
>
<div class="text">Jakarta</div>
</div>
</div>
</div>
</section>

<!---->
<!---->
<section class="section section-offers-2">
	<div class="container">
		<div class="section__header">
			<div class="title">Popular Offers</div>
			<!-- <hr /> -->
			<a href="#" class="see-more">See More Offers</a>
		</div>
		<div class="row">
			<div class="block">
				<div
				class="card-fluid bg-image"
				style="background-image: url(https://via.placeholder.com/540x320.png)"
				>
				<div class="title">Explore Indonesia by Map</div>
			</div>
		</div>
		<div class="block">
			<div
			class="card-fluid bg-image"
			style="background-image: url(https://via.placeholder.com/320.png)"
			>
			<div class="title">Find a travel agent</div>
		</div>
	</div>
	<div class="block">
		<div
		class="card-fluid bg-image"
		style="background-image: url(https://via.placeholder.com/320.png)"
		>
		<div class="title">Visa, Customs, and Quarantine FAQ</div>
	</div>
</div>
<div class="block">
	<div
	class="card-fluid bg-image"
	style="background-image: url(https://via.placeholder.com/540x320.png)"
	>
	<div class="title">Must-Do Tour for Animal Lover</div>
</div>
</div>
</div>
</div>
</section>

<!---->
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

