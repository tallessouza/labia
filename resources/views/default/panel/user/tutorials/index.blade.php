@extends('panel.layout.app', ['disable_tblr' => true])
@section('title', __('Tutoriais'))

@section('content')
<div class="flex h-screen bg-gray-900 text-gray-100">
    <!-- Área principal de conteúdo -->
    <div class="flex-grow p-6 flex flex-col overflow-hidden main-content">
        <div class="mb-6 flex items-center">
            <!-- <a href="#" class="text-lg font-semibold flex items-center text-gray-300">
                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Voltar
            </a> -->
        </div>

        <div class="flex-grow flex flex-col">
            <div class="bg-black rounded-lg overflow-hidden mb-4">
                <h3 id="videoTitle" class="text-lg font-semibold p-4 bg-gray-800"></h3>
                <div class="relative" style="padding-top: 56.25%;">
                    <div id="loadingIndicator" class="absolute inset-0 flex items-center justify-center bg-gray-800 z-10 hidden">
                        <svg class="animate-spin h-10 w-10 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                    </div>
                    <iframe id="videoFrame" src="" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen class="absolute top-0 left-0 w-full h-full"></iframe>
                </div>
            </div>

            <div class="flex justify-between items-center mb-6">
                <button id="prevVideo" class="bg-gray-700 p-2 rounded-full">
                    <svg class="w-6 h-6 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                </button>
                <button id="nextVideo" class="bg-gray-700 p-2 rounded-full">
                    <svg class="w-6 h-6 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Barra lateral / Lista de conteúdos -->
    <div class="w-1/3 bg-gray-800 bg-opacity-50 flex flex-col overflow-hidden content-list">
        <h2 class="text-xl font-bold p-6 bg-gray-700">Lista de Conteúdos</h2>
        <div class="overflow-y-auto flex-grow">
            <div class="space-y-1">
                @foreach ($tutorials as $index => $tutorial)
                    <div class="group cursor-pointer" onclick="changeVideo({{ $index }})">
                        <div class="p-4 flex items-start transition-all duration-300 ease-in-out group-hover:bg-gray-700 group-hover:translate-x-2">
                            <div class="bg-gray-600 text-gray-300 rounded-full w-8 h-8 flex items-center justify-center mr-4 flex-shrink-0 mt-1">
                                {{ $index + 1 }}
                            </div>
                            <div class="flex-grow">
                                <h3 class="font-semibold text-gray-100">{{ $tutorial['title'] }}</h3>
                                <p class="text-sm text-gray-400 mt-1">{{ $tutorial['duration'] }}</p>
                            </div>
                        </div>
                        @if (!$loop->last)
                            <div class="h-px bg-gray-700 mx-4"></div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<style>
    .group:hover .group-hover\:translate-x-2 {
        transform: translateX(0.5rem);
    }

    @media (max-width: 768px) {
        .flex {
            display: block;
            overflow-y: auto;
            height: auto;
        }
        .main-content {
            width: 100%;
            height: auto;
            overflow-y: visible;
        }
        .content-list {
            width: 100%;
            height: auto;
            max-height: none;
        }
        /* Ocultar completamente o indicador de carregamento no mobile */
        #loadingIndicator {
            display: none !important;
        }
    }
</style>

<script>
    const tutorials = @json($tutorials);
    let currentVideoIndex = 0;

    function changeVideo(index) {
        if (index >= 0 && index < tutorials.length) {
            currentVideoIndex = index;
            const tutorial = tutorials[currentVideoIndex];
            const loadingIndicator = document.getElementById('loadingIndicator');
            const videoFrame = document.getElementById('videoFrame');
            
            // Verificar se é um dispositivo móvel
            const isMobile = window.innerWidth <= 768;
            
            if (!isMobile) {
                loadingIndicator.classList.remove('hidden');
            }
            videoFrame.classList.add('hidden');
            
            document.getElementById('videoTitle').textContent = tutorial.title;
            
            // Usar setTimeout para dar um breve momento antes de carregar o vídeo
            setTimeout(() => {
                videoFrame.src = tutorial.video_url;
                
                const hideLoading = () => {
                    if (!isMobile) {
                        loadingIndicator.classList.add('hidden');
                    }
                    videoFrame.classList.remove('hidden');
                };

                videoFrame.onload = hideLoading;
                videoFrame.onerror = hideLoading;

                // Timeout de segurança reduzido para dispositivos móveis
                setTimeout(hideLoading, isMobile ? 1000 : 5000);
            }, 50);
        }
    }

    document.getElementById('prevVideo').addEventListener('click', () => changeVideo(currentVideoIndex - 1));
    document.getElementById('nextVideo').addEventListener('click', () => changeVideo(currentVideoIndex + 1));

    // Inicializar com o primeiro vídeo
    changeVideo(0);
</script>
@endsection