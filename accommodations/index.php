<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Accomodations | Legacy Park Resort</title>
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>

	<!-- HEADER -->
	<header class="estates_header">

		<div class="container">

			<a href="/royal-legacy-park-vida-vacations" class="estates_header__logo">
				<img src="../img/logo.svg" alt="Legacy Park Resort" width="160" height="10.5">
			</a>

			<nav class="estates_header__nav"></nav>

			<button class="estates_header__button">
				MENU
				<div class="estates_header__button__toggle">
					<div class="estates_header__button__toggle__bar"></div>
				</div>
			</button>

		</div>

	</header>

	<!-- MOBILE MENU -->
	<nav class="estates_menu">
		<div class="container">
			<ul class="estates_menu__ul"></ul>
		</div>
	</nav>

	<!--HERO-->
	<div class="estates_accommodations_hotel_hero">
		<div class="container">
			<h1 class="estates_accommodations_hotel_hero__h1">Accommodations at Legacy Park Resort</h1>
		</div>
	</div>

	<!-- Legacy Loft -->
	<div class="estates_accommodations_hotel__white">

		<!-- RESPONSIVE TITLE -->
		<div class="container">
			<h2 class="estates_accommodations_hotel__h2_responsive">Legacy Loft</h2>
		</div>

		<div class="container">

			<div class="estates_accommodations_hotel__white__text">

				<h2 class="estates_accommodations_hotel__white__text__h2">Legacy Loft</h2>

				<ul class="estates_accommodations_hotel__white__text__ul">
					<li>Bed: One King-Size Bed</li>
					<li>Bedroom Furnishings: Bedside Table with Lamp, Dressing Table with Chair and Mirror, and Armchair with Table</li>
					<li>Bathroom: One Bathroom with Double Sinks</li>
					<li>Outdoor: Private Balcony</li>
					<li>Kitchen: In-Unit Kitchenette with Premium Appliances</li>
					<li>TV: Located in Bedroom</li>
				</ul>
			</div>

			<button class="estates_accommodations_hotel__white__img" id="estatesOneBedroomButton" onclick="openEstatesOneBedroomModal()">
				<img src="../img/accommodations/bedrooms/Royal 1BD/02-UNIDAD-ROYAL-1BR-AP.webp" alt="">
				<div class="estates_accommodations_hotel__white__img__button">
					<img src="../img/accommodations/plan.png" alt="">
					view floorplan
				</div>
			</button>

		</div>

	</div>

	<!-- Legacy Loft MODAL -->
	<div class="estates_accommodations_hotel__modal" id="estatesOneBedroomModal">

		<button class="estates_accommodations_hotel__modal--close" onclick="closeEstatesOneBedroomModal()">
			<i class="bi bi-x-lg"></i>
		</button>

		<div class="container">
			<h1 class="estates_accommodations_hotel__modal__title">Legacy Loft</h1>
		</div>

		<img src="../img/accommodations/floorplans/01-UNIDAD-ROYAL-1BR.webp" alt="">

	</div>

	<!-- Legacy Suite -->
	<div class="estates_accommodations_hotel__green">

		<!-- RESPONSIVE TITLE -->
		<div class="container">
			<h2 class="estates_accommodations_hotel__h2_responsive estates_accommodations_hotel__h2_responsive--white">Legacy Suite</h2>
		</div>

		<div class="container">

			<button class="estates_accommodations_hotel__green__img" onclick="openEstatesTwoBedroomModal()">
				<img src="../img/accommodations/bedrooms/Royal 2BD/03-UNIDAD-ROYAL-2BR-REC.webp" alt="">

				<div class="estates_accommodations_hotel__green__img__button">
					<img src="../img/accommodations/plan.png" alt="">
					view floorplan
				</div>
			</button>

			<div class="estates_accommodations_hotel__green__text">

				<h2 class="estates_accommodations_hotel__green__text__h2">Legacy Suite</h2>

				<ul class="estates_accommodations_hotel__green__text__ul">
					<li>Bed: One King-Size Bed</li>
					<li>Bedroom Furnishings: Two Bedside Tables with Lamps, Dressing Table with Chair and Mirror, and Armchair with Table</li>
					<li>Bathrooms: Two Bathrooms with Double Sinks</li>
					<li>Outdoor: Private Balcony</li>
					<li>Kitchen: In-Unit Kitchen with Premium Appliances</li>
					<li>Living Room: Living Area with Sofa, Coffee Table, and Two Armchairs</li>
					<li>Dining Room: Dining Area with Table for 6</li>
					<li>TVs: Located in Bedroom and Living Room</li>
				</ul>
			</div>

		</div>

	</div>

	<!-- Legacy Suite MODAL -->
	<div class="estates_accommodations_hotel__modal" id="estatesTwoBedroomModal">

		<button class="estates_accommodations_hotel__modal--close" onclick="closeEstatesTwoBedroomModal()">
			<i class="bi bi-x-lg"></i>
		</button>

		<div class="container">
			<h1 class="estates_accommodations_hotel__modal__title">Legacy Suite</h1>
		</div>

		<img src="../img/accommodations/floorplans/01-UNIDAD-ROYAL-2BR.webp" alt="">

	</div>

	<!-- Legacy Master Suite -->
	<div class="estates_accommodations_hotel__white">

		<!-- RESPONSIVE TITLE -->
		<div class="container">
			<h2 class="estates_accommodations_hotel__h2_responsive">Legacy Master Suite</h2>
		</div>

		<div class="container">

			<div class="estates_accommodations_hotel__white__text">

				<h2 class="estates_accommodations_hotel__white__text__h2">Legacy Master Suite</h2>

				<ul class="estates_accommodations_hotel__white__text__ul">
					<li>Beds: Two King-Size Beds</li>
					<li>Bedroom Furnishings: Bedside Tables with Lamps, Dressing Table with Chair and Mirror, and Armchair with Table</li>
					<li>Bathrooms: Three Bathrooms with Double Sinks</li>
					<li>Outdoor: Private Balcony</li>
					<li>Kitchen: In-Unit Kitchenette with Premium Appliances</li>
					<li>Living Room: Living Area with Sofa, Coffee Table, and Two Armchairs</li>
					<li>Dining Room: Dining Area with Table for 6</li>
					<li>TVs: Located in Bedrooms and Living Room</li>
				</ul>

			</div>

			<button class="estates_accommodations_hotel__white__img" onclick="openEstatesThreeBedroomModal()">
				<img src="../img/accommodations/bedrooms/Royal 3BD/03-UNIDAD-ROYAL-3BR-REC.webp" alt="">

				<div class="estates_accommodations_hotel__white__img__button">
					<img src="../img/accommodations/plan.png" alt="">
					view floorplan
				</div>
			</button>

		</div>

	</div>

	<!-- Legacy Master Suite MODAL -->
	<div class="estates_accommodations_hotel__modal" id="estatesThreeBedroomModal">

		<button class="estates_accommodations_hotel__modal--close" onclick="closeEstatesThreeBedroomModal()">
			<i class="bi bi-x-lg"></i>
		</button>

		<div class="container">
			<h1 class="estates_accommodations_hotel__modal__title">Legacy Master Suite</h1>
		</div>

		<img src="../img/accommodations/floorplans/01-UNIDAD-ROYAL-3BR.webp" alt="">

	</div>

	<!-- Grand Legacy Junior Suite -->
	<div class="estates_accommodations_hotel__green">

		<!-- RESPONSIVE TITLE -->
		<div class="container">
			<h2 class="estates_accommodations_hotel__h2_responsive estates_accommodations_hotel__h2_responsive--white">Grand Legacy Junior Suite</h2>
		</div>

		<div class="container">

			<button class="estates_accommodations_hotel__green__img" onclick="openVillaLegacyModal()">
				<img src="../img/accommodations/bedrooms/Royal 4BD/03-UNIDAD-ROYAL-4BR-REC-KS.webp" alt="">

				<div class="estates_accommodations_hotel__green__img__button">
					<img src="../img/accommodations/plan.png" alt="">
					view floorplan
				</div>
			</button>

			<div class="estates_accommodations_hotel__green__text">

				<h2 class="estates_accommodations_hotel__green__text__h2">Grand Legacy Junior Suite</h2>

				<ul class="estates_accommodations_hotel__green__text__ul">
					<li>Bed: One King-Size Bed</li>
					<li>Bedroom Furnishings: Bedside Tables with Lamps and Dressing Table with Chair and Mirror</li>
					<li>Bathroom: One Bathroom with Double Sinks</li>
					<li>Outdoor: Private Terrace with Lounge Seating and Views</li>
					<li>Kitchen: In-Unit Kitchenette with Premium Appliances</li>
					<li>Living Room: Living Area with Sofa, Coffee Table, and Two Armchairs</li>
					<li>TV: Located in Living Room</li>
				</ul>
			</div>

		</div>

	</div>

	<!-- Grand Legacy Junior Suite MODAL -->
	<div class="estates_accommodations_hotel__modal" id="villaLegacyModal">

		<button class="estates_accommodations_hotel__modal--close" onclick="closeVillaLegacyModal()">
			<i class="bi bi-x-lg"></i>
		</button>

		<div class="container">
			<h1 class="estates_accommodations_hotel__modal__title">Grand Legacy Junior Suite</h1>
		</div>

		<img src="../img/accommodations/floorplans/01-UNIDAD-ROYAL-4BR.webp" alt="">

	</div>

	<!-- Grand Legacy Suite -->
	<div class="estates_accommodations_hotel__white">

		<!-- RESPONSIVE TITLE -->
		<div class="container">
			<h2 class="estates_accommodations_hotel__h2_responsive">Grand Legacy Suite</h2>
		</div>

		<div class="container">

			<div class="estates_accommodations_hotel__white__text">

				<h2 class="estates_accommodations_hotel__white__text__h2">Grand Legacy Suite</h2>

				<ul class="estates_accommodations_hotel__white__text__ul">
					<li>Beds: One King-Size Bed</li>
					<li>Bedroom Furnishings: Bedside Tables with Lamps, Dressing Table with Chair and Mirror, and Armchair with Table</li>
					<li>Bathrooms: Two Bathrooms with Double Sinks</li>
					<li>Outdoor: Large Private Terrace with Dining Area, Lounge Seating, and Views</li>
					<li>Kitchen: In-Unit Kitchen with Premium Appliances and Breakfast Bar</li>
					<li>Living Room: Living Area with Sofa, Coffee Table, and Two Armchairs</li>
					<li>Dining Room: Dining Area with Table for 6</li>
					<li>TVs: Located in Bedroom and Living Room</li>
				</ul>

			</div>

			<button class="estates_accommodations_hotel__white__img" onclick="openEstatesThreeBedroomModal()">
				<img src="../img/accommodations/bedrooms/Royal 3BD/03-UNIDAD-ROYAL-3BR-REC.webp" alt="">

				<div class="estates_accommodations_hotel__white__img__button">
					<img src="../img/accommodations/plan.png" alt="">
					view floorplan
				</div>
			</button>

		</div>

	</div>

	<!-- Grand Legacy Suite MODAL -->
	<div class="estates_accommodations_hotel__modal" id="estatesThreeBedroomModal">

		<button class="estates_accommodations_hotel__modal--close" onclick="closeEstatesThreeBedroomModal()">
			<i class="bi bi-x-lg"></i>
		</button>

		<div class="container">
			<h1 class="estates_accommodations_hotel__modal__title">Grand Legacy Suite</h1>
		</div>

		<img src="../img/accommodations/floorplans/01-UNIDAD-ROYAL-3BR.webp" alt="">

	</div>


	<!-- FOOTER -->
	<footer class="estates_footer">
		<img src="../img/logo-vida.svg" alt="">
	</footer>

</body>

<script src="../js/menu.js"></script>
<script src="../js/accommodations/nv.js"></script>

</html>