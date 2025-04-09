<x-layouts>

    <x-slot:btn>
        <a href="{{ route('create') }}" class="btn btn-primary">
            Adicionar tarefa
        </a>
    </x-slot:btn>


    <section class="graph">
        <header class="graph_header">
            <h2>Progresso do dia</h2>
            <hr>
            <div class="graph_header_date">
                <img src="./assets/images/icon-prev.png" alt="">
                <p>Hoje</p>
                <img src="./assets/images/icon-next.png" alt="">

            </div>
        </header>
        <div class="graph_details">
            <h3>Tarefas: 3/9</h3>
            <div class="graph_placeholder"></div>
        </div>
        <div class="tasks_left_footer">
            <img src="./assets/images/icon-info.png" alt="">
            <p class="graph_header_tasks_left">Faltam 3 tarefas para a meta diaria</p>
        </div>
    </section>

    <!-- Task List Section -->
    <section class="list">
        <div class="task_list">
            @foreach ($tasks as $task)
                <x-task :data=$task />
            @endforeach
        </div>
    </section>

</x-layouts>
