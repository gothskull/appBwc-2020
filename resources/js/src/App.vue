<template>

	<div>
		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
		
				<!-- begin:: Aside -->
				<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
				<Sidebar/>
				<!-- end:: Aside -->
		
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
		
					<!-- begin:: Header -->
						<Header/>
					<!-- end:: Header -->
		
					<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
		
						<!-- <Subheader/>				 -->
		
						<!-- begin:: Content -->
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<router-view></router-view>
						</div>
		
					</div>
					<!-- begin:: Footer -->
					<Footer/>
					<!-- end:: Footer -->
				
				</div>
			</div>
		</div>

		<!-- begin::Quick Panel -->
		<QuickPanel/>
		<!-- end::Quick Panel -->

		<!-- begin::Scrolltop -->
		<Scrolltop/>
		<!-- end::Scrolltop -->

		<!-- begin::Sticky Toolbar -->
		<Toolbar/>
		<!-- end::Sticky Toolbar -->

		<!-- begin::Demo Panel -->
		<Demopanel/>
		<!-- end::Demo Panel -->

		<!--Begin:: Chat-->
		<Chat/>
		<!--ENd:: Chat-->
	</div>
</template>

	