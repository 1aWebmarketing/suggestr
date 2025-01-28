<x-app-layout>

    <div class="mt-8 flex gap-4 items-center pb-4">
        <div>
            <x-h1 class="">Projektübersicht</x-h1>
        </div>
    </div>

    <div class="grid grid-cols-2 gap-4">
        @foreach($projects as $project)
            <div class="bg-white rounded-xl shadow p-4">
                <div class="flex gap-4 items-center">
                    <div class="bg-gray-100 rounded-full w-[50px] h-[50px] p-2">
                        <img src="{{ $project->getLogoUrl() }}">
                    </div>
                    <p class="text-2xl font-bold">{{ $project->name }}</p>
                </div>

                <p class="text-gray-400 my-2">{{ $project->description }}</p>

                <x-primary-link-button :href="route('projects.show', ['project' => $project->id])">Auswählen</x-primary-link-button>
            </div>
        @endforeach
</x-app-layout>
