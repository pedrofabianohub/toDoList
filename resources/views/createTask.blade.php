<x-layouts pageName="Create Task">

    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">
            Voltar home
        </a>
    </x-slot:btn>
    <nav class="create-nav">
        <h1>Criar task</h1>
        <form action="{{ route('createPost') }}" method="POST" class="form-container">
            @csrf
            <x-form.input label="Título da task" type="text" name="title" placeholder="Digite o título da sua task"
                class="form-control" />
            <x-form.textArea name="description"></x-form.textArea>
            <x-form.input label="Data de entrega" type="datetime-local" name="dueDate"
                placeholder="Digite a data de entrega da sua task" class="form-control" />
            <div class="form-group">
                <x-form.button type="reset">Resetar</x-form.button>
                <x-form.button type="submit">Criar task</x-form.button>
            </div>
        </form>
    </nav>

</x-layouts>
