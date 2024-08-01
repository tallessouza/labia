@extends('panel.layout.app', ['disable_tblr' => true])
@section('title', __('Tutoriais'))

@section('content')
    <div class="py-10">
        <div class="flex flex-col gap-9">
            <div class="flex justify-between items-center">
                <h1 class="text-4xl font-bold">Tutoriais</h1>
                <!-- <div class="flex gap-2">
                    <x-button variant="ghost-shadow">
                        {{ __('Gerenciar Tutoriais') }}
                    </x-button>
                    <x-button>
                        <x-tabler-plus class="size-4" />
                        {{ __('Adicionar Tutorial') }}
                    </x-button>
                </div> -->
            </div>

            <!-- <div class="mb-4">
                <input type="text" placeholder="Pesquisar tutoriais" class="w-full px-4 py-2 rounded-lg bg-background border border-border">
            </div> -->

            <!-- <div class="flex gap-2 mb-6">
                <button class="px-4 py-2 rounded-full bg-primary text-white">Todos</button>
                <button class="px-4 py-2 rounded-full bg-background">IA</button>
                <button class="px-4 py-2 rounded-full bg-background">Conteúdo</button>
                <button class="px-4 py-2 rounded-full bg-background">Edição</button>
            </div> -->

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach ($tutorials as $tutorial)
                    <x-card class="flex flex-col">
                        <div class="mb-4">
                            <div style="position: relative; padding-bottom: 56.25%; height: 0;">
                                <iframe src="{{ $tutorial['video_url'] }}" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe>
                            </div>
                        </div>
                        <div class="flex items-center mb-2">
                            <!-- <img src="{{ $tutorial['icon'] }}" alt="{{ $tutorial['title'] }}" class="w-8 h-8 mr-2"> -->
                            <h3 class="text-xl font-semibold">{{ $tutorial['title'] }}</h3>
                        </div>
                        <p class="text-sm mb-4">{{ $tutorial['description'] }}</p>
                        <!-- <div class="mt-auto flex flex-wrap gap-2">
                            @foreach ($tutorial['categories'] as $category)
                                <span class="text-xs bg-background px-2 py-1 rounded">{{ $category }}</span>
                            @endforeach
                        </div> -->
                    </x-card>
                @endforeach
            </div>
        </div>
    </div>
@endsection