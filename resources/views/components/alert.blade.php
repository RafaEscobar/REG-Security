@session('type')
<div class="">
	@if(session('type') == 'success')
	    <div id="session-message" class="bg-green-500 text-white p-4 message absolute top-4 right-4 hidden rounded-3xl  gap-4 justify-center items-center">
            <span class="h-6 w-6">
                <x-fas-check-circle class="h-4 w-4" />
            </span>
	        <span class="text-lg">{{ session('message') }}</span>
	    </div>
	@elseif(session('type') == 'info')
		<div id="session-message" class="bg-blue-500 text-white p-4 message absolute top-4 right-4 hidden rounded-3xl  gap-4 justify-center items-center">
            <span class="h-6 w-6">
                <x-fas-info-circle />
            </span>
	        <span class="text-lg">{{ session('message') }}</span>
	    </div>
	@elseif(session('type') == 'fail')
		<div id="session-message" class="bg-red-500 text-white p-4 message absolute top-4 right-4 hidden rounded-3xl  gap-4 justify-center items-center">
            <span class="h-6 w-6">
                <x-fas-check-circle class="h-4 w-4" />
            </span>
	        <span class="text-lg">{{ session('message') }}</span>
	    </div>
	@elseif(session('type') == 'warning')
		<div id="session-message" class="bg-red-500 text-white p-4 message absolute top-4 right-4 hidden rounded-3xl  gap-4 justify-center items-center">
            <span class="h-6 w-6">
                <x-carbon-warning-filled class="h-4 w-4" />
            </span>
	        <span class="text-lg">{{ session('message') }}</span>
	    </div>
	@endif
@endsession
</div>