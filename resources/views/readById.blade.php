<x-layouts pageName="Detalhes da Tarefa">

    <x-slot:btn>
        <div class="btn-container">
            <a href="{{ route('home') }}" class="btn btn-primary">
                Voltar home
            </a>
        </div>
    </x-slot:btn>

    <div class="details-container">
        <div class="details-header">
            <h1>Detalhes da Tarefa</h1>
        </div>

        <div class="details-item">
            <strong>Título:</strong>
            <span>{{ $task->title }}</span>
        </div>

        <div class="details-item">
            <strong>Descrição:</strong>
            <span>{{ $task->description }}</span>
        </div>

        <div class="details-item">
            <strong>Data de Entrega:</strong>
            <span>{{ $task->dueDate }}</span>
        </div>

        <div class="details-item">
            <strong>Status:</strong>
            <span class="details-status
                @switch($task->status_id)
                    @case(1)
                        pendente
                        @break
                    @case(2)
                        andamento
                        @break
                    @case(3)
                        concluida
                        @break
                    @default
                        desconhecido
                @endswitch
            ">
                @switch($task->status_id)
                    @case(1)
                        Pendente
                        @break
                    @case(2)
                        Em andamento
                        @break
                    @case(3)
                        Concluída
                        @break
                    @default
                        Desconhecido
                @endswitch
            </span>
        </div>
    </div>

</x-layouts>
