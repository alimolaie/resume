@extends('layouts.master')
@section('content')
@include('partials.preloader')

<main class="main">
	<!-- Menu -->
	@include('partials.menu')

	<div class="wrapper">

		<!-- Sidebar -->
        @include('partials.sidebar')


		<!-- Content -->
		<div class="content js-scroll">
			<div class="section mt-0">
				<h1 class="title title--h1 title__separate">رزومه</h1>
			</div>

			<!-- Experience -->
			<div class="section">
				<h2 class="title title--h2"><img class="title-icon" src="http://netgon.net/artstyles/v-card2/assets/icons/icon-education.svg" alt=""> تحصیلات</h2>
				<div class="timeline">
					<!-- Item -->
					<article class="timeline__item">
						<h5 class="title title--h3 timeline__title">دانشکده هنر </h5>
						<span class="timeline__period">1397 — 1395</span>
						<p class="timeline__description">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
						</p>
					</article>

					<!-- Item -->
					<article class="timeline__item">
						<h5 class="title title--h3 timeline__title">آکادمی هنر تهران</h5>
						<span class="timeline__period">1398 — 1394</span>
						<p class="timeline__description">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
						</p>
					</article>

					<!-- Item -->
					<article class="timeline__item">
						<h5 class="title title--h3 timeline__title">دبیرستان هنر و طراحی</h5>
						<span class="timeline__period">1399 — 1396</span>
						<p class="timeline__description">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
						</p>
					</article>
				</div>
			</div>

			<div class="section">
				<h2 class="title title--h2"><img class="title-icon" src="http://netgon.net/artstyles/v-card2/assets/icons/icon-experience.svg" alt=""> تجربه</h2>
				<div class="timeline">
					<!-- Item -->
					<article class="timeline__item">
						<h5 class="title title--h3 timeline__title">طراح و توسعه دهنده وب</h5>
						<span class="timeline__period">1399 - حال</span>
						<p class="timeline__description">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
						</p>
					</article>

					<!-- Item -->
					<article class="timeline__item">
						<h5 class="title title--h3 timeline__title">کارگردان هنری</h5>
						<span class="timeline__period">1398 — 1397</span>
						<p class="timeline__description">هیچ کس، برای آن که این لذت، لذت بردن از دارای مجوز و، خراب شده توسط و تملق از وجود داشته باشد، از این دردها، و برای او که مشکلات خود را دریافت کرد.</p>
					</article>

					<!-- Item -->
					<article class="timeline__item">
						<h5 class="title title--h3 timeline__title">طراح وب</h5>
						<span class="timeline__period">1399 — 1398</span>
						<p class="timeline__description">هیچ کس، برای آن که این لذت، لذت بردن از دارای مجوز و، خراب شده توسط و تملق از وجود داشته باشد، از این دردها، و برای او که مشکلات خود را دریافت کرد.</p>
					</article>
				</div>
			</div>

			<!-- Skills -->
			<div class="section">
				<h2 class="title title--h2">مهارت های من</h2>
				<div class="box-gray">
					<!-- Progress -->
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
							<div class="progress-text"><span>طراحی وب </span><span>80٪</span></div>
						</div>
						<div class="progress-text"><span>طراحی وب سایت</span></div>
					</div>

					<!-- Progress -->
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
							<div class="progress-text"><span>طراحی گرافیکی </span><span>75٪</span></div>
						</div>
						<div class="progress-text"><span>طراحی گرافیک</span></div>
					</div>

					<!-- Progress -->
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
							<div class="progress-text"><span>فتوشاپ </span><span>90٪</span></div>
						</div>
						<div class="progress-text"><span>فتوشاپ</span></div>
					</div>

					<!-- Progress -->
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
							<div class="progress-text"><span>تصویرگر </span><span>50٪</span></div>
						</div>
						<div class="progress-text"><span>تصویرگر</span></div>
					</div>
				</div>
			</div>
		</div><!-- Content End -->
	</div><!-- Wrapper End -->
</main>

<!-- SVG masks -->
<svg class="svg-defs">
	<clipPath id="avatar-box">
		<path d="M1.85379 38.4859C2.9221 18.6653 18.6653 2.92275 38.4858 1.85453 56.0986.905299 77.2792 0 94 0c16.721 0 37.901.905299 55.514 1.85453 19.821 1.06822 35.564 16.81077 36.632 36.63137C187.095 56.0922 188 77.267 188 94c0 16.733-.905 37.908-1.854 55.514-1.068 19.821-16.811 35.563-36.632 36.631C131.901 187.095 110.721 188 94 188c-16.7208 0-37.9014-.905-55.5142-1.855-19.8205-1.068-35.5637-16.81-36.63201-36.631C.904831 131.908 0 110.733 0 94c0-16.733.904831-37.9078 1.85379-55.5141z"></path>
	</clipPath>
	<clipPath id="avatar-hexagon">
		<path d="M0 27.2891c0-4.6662 2.4889-8.976 6.52491-11.2986L31.308 1.72845c3.98-2.290382 8.8697-2.305446 12.8637-.03963l25.234 14.31558C73.4807 18.3162 76 22.6478 76 27.3426V56.684c0 4.6805-2.5041 9.0013-6.5597 11.3186L44.4317 82.2915c-3.9869 2.278-8.8765 2.278-12.8634 0L6.55974 68.0026C2.50414 65.6853 0 61.3645 0 56.684V27.2891z"></path>
	</clipPath>
</svg>



<!-- JavaScripts -->
<script src="../assets/js/jquery-3.4.1.min.js"></script>
<script src="../assets/js/plugins.min.js"></script>
<script src="../assets/js/common.js"></script>

<script src="../assets/demo/plugins-demo.js"></script>

</body>
</html>


