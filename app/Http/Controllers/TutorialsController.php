<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutorialsController extends Controller
{
    public function index()
    {
        $tutorials = [
            [
                'title' => 'Tutorial de Introdução ao Lab',
                'description' => 'Olá pessoal! Neste vídeo, apresento o Lab[IA] e como começar a produzir nele. Explico como acessar informações, monitorar palavras disponíveis, imagens, horas economizadas e outputs. Além disso, mostro como cancelar ou fazer upgrade do plano e como favoritar documentos. Assista para começar com clareza e produtividade!',
                'video_url' => 'https://www.loom.com/embed/bf07332251084a1ba9822a4c5bedd56c',
                'duration' => '3:00', // Duração estimada, ajuste conforme necessário
            ],
            [
                'title' => 'Explorando a Plataforma: Funcionalidades e Dicas Úteis!',
                'description' => 'Neste vídeo, vou te guiar pelas funcionalidades essenciais da plataforma. Vamos explorar a lendária, os assistentes conversacionais, a IA generativa, os utilitários e muito mais. Não se esqueça de interagir com as ferramentas e aproveitar ao máximo o que a plataforma oferece!',
                'video_url' => 'https://www.loom.com/embed/728a4903145f406fa98eb9d6decaf9a6',
                'duration' => '5:00', // Duração estimada, ajuste conforme necessário
            ],
            [
                'title' => 'Explorando os Assistente de IA!',
                'description' => 'Vamos explorar juntos os assistentes de IA, incluindo os criados pela academia e setorizados pela empresa, além de clones conselheiros. Mostrarei como acessá-los, criá-los e treiná-los. Não se esqueça de conferir a interface e interagir com os assistentes para entender melhor seu funcionamento.',
                'video_url' => 'https://www.loom.com/embed/934496245e444c19a3dcb5cb29d8619a',
                'duration' => '6:00', // Duração estimada, ajuste conforme necessário
            ],
            [
                'title' => 'Modelos de IA Generativa!',
                'description' => 'Com mais de 160 opções disponíveis, você poderá criar legendas cativantes para o Instagram, descrições matadoras para anúncios do Google e muito mais. A plataforma oferece diversas configurações personalizáveis para aumentar sua produtividade profissional. Não se esqueça de explorar as opções e ver como a inteligência artificial pode impulsionar seu trabalho!',
                'video_url' => 'https://www.loom.com/embed/339f26fa685a45a593c1541cba1b8637',
                'duration' => '5:00', // Duração estimada, ajuste conforme necessário
            ],
            [
                'title' => 'Explorando Utilitários Avançados 🛠️!',
                'description' => 'Vamos explorar juntos os utilitários avançados disponíveis, como o gerador de código, gerador de imagens, transcritor do YouTube e transcritor de arquivos. Há diversas opções e configurações para aumentar a produtividade na criação de conteúdo visual e transcrições. Recomendo testar as diferentes funcionalidades para explorar ao máximo as possibilidades oferecidas.',
                'video_url' => 'https://www.loom.com/embed/6a361fa86a434e07b3b895f8de6a6715',
                'duration' => '4:00', // Duração estimada, ajuste conforme necessário
            ]
        ];

        return view('panel.user.tutorials.index', compact('tutorials'));
    }
    public function index2()
    {
        $tutorials = [
            [
                'title' => 'Tutorial de Introdução ao Lab',
                'description' => 'Olá pessoal! Neste vídeo, apresento o Lab[IA] e como começar a produzir nele. Explico como acessar informações, monitorar palavras disponíveis, imagens, horas economizadas e outputs. Além disso, mostro como cancelar ou fazer upgrade do plano e como favoritar documentos. Assista para começar com clareza e produtividade!',
                'video_url' => 'https://www.loom.com/embed/bf07332251084a1ba9822a4c5bedd56c',
                'duration' => '5:00', // Duração estimada, ajuste conforme necessário
            ],
            [
                'title' => 'Explorando a Plataforma: Funcionalidades e Dicas Úteis!',
                'description' => 'Neste vídeo, vou te guiar pelas funcionalidades essenciais da plataforma. Vamos explorar a lendária, os assistentes conversacionais, a IA generativa, os utilitários e muito mais. Não se esqueça de interagir com as ferramentas e aproveitar ao máximo o que a plataforma oferece!',
                'video_url' => 'https://www.loom.com/embed/728a4903145f406fa98eb9d6decaf9a6',
                'duration' => '7:30', // Duração estimada, ajuste conforme necessário
            ],
            [
                'title' => 'Explorando os Assistente de IA!',
                'description' => 'Vamos explorar juntos os assistentes de IA, incluindo os criados pela academia e setorizados pela empresa, além de clones conselheiros. Mostrarei como acessá-los, criá-los e treiná-los. Não se esqueça de conferir a interface e interagir com os assistentes para entender melhor seu funcionamento.',
                'video_url' => 'https://www.loom.com/embed/934496245e444c19a3dcb5cb29d8619a',
                'duration' => '6:15', // Duração estimada, ajuste conforme necessário
            ],
            [
                'title' => 'Modelos de IA Generativa!',
                'description' => 'Com mais de 160 opções disponíveis, você poderá criar legendas cativantes para o Instagram, descrições matadoras para anúncios do Google e muito mais. A plataforma oferece diversas configurações personalizáveis para aumentar sua produtividade profissional. Não se esqueça de explorar as opções e ver como a inteligência artificial pode impulsionar seu trabalho!',
                'video_url' => 'https://www.loom.com/embed/339f26fa685a45a593c1541cba1b8637',
                'duration' => '8:45', // Duração estimada, ajuste conforme necessário
            ],
            [
                'title' => 'Explorando Utilitários Avançados 🛠️!',
                'description' => 'Vamos explorar juntos os utilitários avançados disponíveis, como o gerador de código, gerador de imagens, transcritor do YouTube e transcritor de arquivos. Há diversas opções e configurações para aumentar a produtividade na criação de conteúdo visual e transcrições. Recomendo testar as diferentes funcionalidades para explorar ao máximo as possibilidades oferecidas.',
                'video_url' => 'https://www.loom.com/embed/6a361fa86a434e07b3b895f8de6a6715',
                'duration' => '9:20', // Duração estimada, ajuste conforme necessário
            ]
        ];

        return view('panel.user.tutorials.index2', compact('tutorials'));
    }
}
