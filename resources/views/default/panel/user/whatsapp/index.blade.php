@extends('panel.layout.app', ['disable_tblr' => true])
@section('title', __('WhatsApp'))
@section('titlebar_title')
{{ __('WhatsApp') }}
@endsection


@section('content')




<div class="flex flex-wrap justify-center gap-4 pt-5 max-w-md mx-auto">
    <div class="py-5 mx-auto text-center">
        @if ($qrCodeBase64)
        <div class="[&_.tox-edit-area__iframe]:!bg-transparent">
            <figure>
                <img id="qrCodeImage" class="rounded-xl shadow-xl mx-auto max-w-[500px]" src="{{ $qrCodeBase64 }}" alt="QR Code" />
            </figure>
            <p id="qrCodeMessage" class="mb-2 mt-3 text-center text-sm">
                Leia o QR Code para abrir a conversa e encaminhe seu áudio.
            </p> 
        </div>
        @endif
    </div>
</div>



@endsection