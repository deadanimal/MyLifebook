@extends('layouts.static')

@section('content')
<div class="h-screen pb-14 bg-right bg-cover" style="background-image:url('bg.svg');">


	<!--Main-->
	<div class="container pt-24 md:pt-48 px-6 mx-auto flex flex-wrap flex-col md:flex-row items-center">
		
		<!--Left Col-->
		<div class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden">
			<h1 class="my-4 text-3xl md:text-5xl text-purple-800 font-bold leading-tight text-center md:text-left slide-in-bottom-h1">Supercharge your life!</h1>
			<p class="leading-normal text-base md:text-2xl mb-8 text-center md:text-left slide-in-bottom-subtitle">Use <i>memoir</i> to improve your learning, memory, work, creativity and everything else.</p>
		
			<p class="text-blue-400 font-bold pb-8 lg:pb-6 text-center md:text-left fade-in">Download our app:</p>
			<div class="flex w-full justify-center md:justify-start pb-24 lg:pb-0 fade-in">
                <a href="https://apps.apple.com/us/app/my-memoir/id6448801162">
                    <img src="/assets/images/app_store.svg" class="h-12 pr-4 bounce-top-icons">
                </a>
                <a href="https://play.google.com/store/apps/details?id=my.memoir.app">                
				    <img src="/assets/images/play_store.svg" class="h-12 bounce-top-icons">
                </a>
			</div>

		</div>
		
		<!--Right Col-->
		<div class="w-full xl:w-3/5 py-6 overflow-y-hidden">
			<img class="w-5/6 mx-auto lg:mr-0 slide-in-bottom" src="/assets/images/devices.svg">
		</div>
	
		
	</div>
	

</div>
@endsection
