<x-layout>
	<x-alert />

	@forelse($blogs as $blog)
		<x-card :$blog />
	@empty
		<center>No record found.</center>
	@endforelse
</x-layout>