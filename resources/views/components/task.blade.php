<div class="task">
    <!-- Título da Tarefa -->
    <div class="task_title">
        <input type="checkbox"
               @if($data && $data->status_id == 3) checked @endif
               id="task_{{$data->id}}">
        <label for="task_{{$data->id}}">{{$data->title ?? 'Sem título'}}</label>
    </div>

    <!-- Status da Tarefa -->
    <div class="task_status">
        <div @if($data && $data->status_id == 3) class="completed-task" @elseif ($data && $data->status_id == 2) class="alert-task" @else class="sphere" @endif></div>
        <div>
            @switch($data->status_id)
                @case(1)
                    Pendente
                    @break
                @case(2)
                    Em andamento
                    @break
                @case(3)
                    Finalizada
                    @break
                @default
                    Desconhecido
            @endswitch
        </div>
    </div>

    <!-- Ações da Tarefa -->
    <div class="task_actions">
        <a href="{{route('readById', ['id' => $data->id])}}" class="btn-task">
            Detalhes
        </a>
        <a href="{{ route('update', ['id' => $data->id]) }}" class="btn btn-edit">
            <img src="{{ asset('assets/images/icon-edit.png') }}" alt="Editar">
        </a>
        <a href="{{ route('delete', ['id' => $data->id]) }}" class="btn btn-delete">
            <img src="{{ asset('assets/images/icon-delete.png') }}" alt="Deletar">
        </a>
    </div>
</div>
