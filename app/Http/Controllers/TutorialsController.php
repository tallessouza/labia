<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutorialsController extends Controller
{
    public function index()
    {
        $tutorials = [
            [
                'title' => 'Como usar o AI Writer Templates',
                'description' => 'Aprenda a utilizar os modelos de escrita com IA para criar conteúdo de alta qualidade.',
                'categories' => ['Conteúdo', 'IA', 'Produtividade'],
                'video_url' => 'https://www.loom.com/embed/bf07332251084a1ba9822a4c5bedd56c',
                'icon' => '/path/to/ai-writer-icon.png',
            ],
            [
                'title' => 'Guia do AI Photo Studio',
                'description' => 'Descubra como criar e editar imagens incríveis com nosso estúdio de fotos com IA.',
                'categories' => ['Foto', 'Edição', 'IA'],
                'video_url' => 'https://www.loom.com/embed/728a4903145f406fa98eb9d6decaf9a6',
                'icon' => '/path/to/ai-photo-studio-icon.png',
            ],
            // Adicione mais tutoriais conforme necessário
        ];

        return view('panel.user.tutorials.index', compact('tutorials'));
    }
}