@extends('panel.layout.app', ['disable_tblr' => true])
@section('title', __('Tutoriais'))

@section('content')
    <div class="py-10">
        <div class="flex flex-col gap-9">
            <div class="flex justify-between items-center">
                <h1 class="text-4xl font-bold">Tutoriais</h1>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach ($tutorials as $tutorial)
                    <x-card class="flex flex-col overflow-hidden"> <!-- Adicionado overflow-hidden aqui -->
                        <div class="mb-4">
                            <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; border-radius: 0.5rem;"> <!-- Adicionado border-radius e overflow: hidden aqui -->
                                <iframe src="{{ $tutorial['video_url'] }}" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 0.5rem;"></iframe> <!-- Adicionado border-radius aqui também -->
                            </div>
                        </div>
                        <div class="flex items-center mb-2">
                            <h3 class="text-xl font-semibold">{{ $tutorial['title'] }}</h3>
                        </div>
                        <p class="text-sm mb-4">{{ $tutorial['description'] }}</p>
                    </x-card>
                @endforeach
            </div>
        </div>
    </div>
@endsection