<x-layouts pageName="Edit Task">

    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">
            Voltar home
        </a>
    </x-slot:btn>
    <nav class="create-nav">

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h1>Editar task</h1>
        <form action="{{ route('updatePost', ['id' => $task->id]) }}" method="POST" class="form-container">
            @csrf
            <x-form.input label="Título da task" type="text" name="title" placeholder="Digite o título da sua task"
                class="form-control" value="{{ $task->title }}" />
            <x-form.textArea name="description" value="{{ $task->description }}"></x-form.textArea>
            <x-form.input label="Data de entrega" type="datetime-local" name="dueDate" value="{{ $task->dueDate }}"
                placeholder="Digite a data de entrega da sua task" class="form-control" />

            <div class="form-group">
                <label for="status_id">Status</label>
                <select id="status_id" name="status_id" class="form-control">
                    <option value="1" @if ($task->status_id == 1) selected @endif>Pendente</option>
                    <option value="2" @if ($task->status_id == 2) selected @endif>Em andamento</option>
                    <option value="3" @if ($task->status_id == 3) selected @endif>Finalizada</option>
                </select>
            </div>
            <div class="form-group">
                <x-form.button type="reset">Resetar</x-form.button>
                <x-form.button type="submit">Editar task</x-form.button>
            </div>
        </form>
    </nav>


</x-layouts>
