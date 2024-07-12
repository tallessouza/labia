<div class="flex flex-wrap justify-between gap-y-5">
    <x-card class="lqd-team-invite-instruction w-full lg:w-[48%]">
        <h2 class="mb-4">
            @lang('How it Works')
        </h2>
        <p>
            @lang('Adicionar e supervisionar membros da equipe é um processo simples. Aqui está um exemplo rápido para iniciar a colaboração em segundos.')
        </p>

        <hr class="my-8">

        <ol class="mb-12 flex flex-col gap-6 text-heading-foreground">
            <li>
                <span class="size-7 me-2 inline-flex items-center justify-center rounded-full bg-primary/10 font-extrabold text-primary">
                    1
                </span>
                @lang('Envie um link de <strong>convite</strong> para os membros da sua equipe.')
            </li>
            <li>
                <span class="size-7 me-2 inline-flex items-center justify-center rounded-full bg-primary/10 font-extrabold text-primary">
                    2
                </span>
                @lang('<strong>Permita que eles se registrem</strong> com o endereço de e-mail deles.')
            </li>
            <li>
                <span class="size-7 me-2 inline-flex items-center justify-center rounded-full bg-primary/10 font-extrabold text-primary">
                    3
                </span>
                @lang('Assim que <strong>eles confirmarem a conta</strong>, serão adicionados à sua equipe.')
            </li>
        </ol>
    </x-card>

    <x-card class="lqd-team-invite-form w-full lg:w-[48%]">
        <figure class="mb-7">
            <img
                class="mx-auto w-full lg:w-7/12"
                src="{{ custom_theme_url('assets/img/team/team.png') }}"
                alt="Team"
            >
        </figure>
        <p class="mb-6 text-center text-xl font-semibold">
            @lang('Adicione o endereço de e-mail dos membros da sua equipe <br> para começar a colaborar.')
            📧
        </p>
        <form
            class="flex flex-col gap-3"
            action="{{ route('dashboard.user.team.invitation.store', $team->id) }}"
            method="post"
        >
            @csrf
            <input
                type="hidden"
                name="team_id"
                value="{{ $team?->id }}"
            >
            <x-forms.input
                id="email"
                size="lg"
                type="email"
                name="email"
                placeholder="{{ __('Email address') }}"
                required
            >
                <x-slot:icon>
                    <x-tabler-mail class="size-4 size-5 absolute end-3 top-1/2 -translate-y-1/2" />
                </x-slot:icon>
            </x-forms.input>
            @if ($app_is_demo)
                <x-button onclick="return toastr.info('This feature is disabled in Demo version.')">
                    @lang('Convidar Amigos')
                </x-button>
            @else
                <x-button type="submit">
                    @lang('Convidar amigos')
                </x-button>
            @endif
        </form>
    </x-card>
</div>
