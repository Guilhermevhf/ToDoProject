<x-layout page="Início - ToDoProject">

<x-slot:btn>
    <a href="{{route('task.create')}}" class="btn btn-primary">
        Criar Tarefa
    </a>

    <a href="{{route('login')}}" class="btn btn-primary">
        Sair
    </a>
</x-slot:btn>



    <section class="graph">
        <div class="graph_header">
                <h2>Progresso do Dia</h2>
                <div class="LinhaHeader">  </div>
                <div class="date-component"> 
                
                    <img src="assets/images/icon-prev.png">
                            26 de Ago
                    <img src="assets/images/icon-next.png">

                </div>
        </div>
        <div class="graph_header_subtitle">
            Tarefas: <b>3/6</b>
        </div>

        <div class="graph-placeholder">
        </div>

        <div class="graph_header-tasks_left">
            <img src="/assets/images/icon-info.png"/>  
            Faltam 3 tarefas para serem realizadas 
        </div>

        </section>

        <section class="list">
            <div class="list_header">
                <select class="list_header-select">
                    <option value="1">Todas as tarefas</option>
                </select>
            </div>

        <div class="all_list">

            @if(!count($tasks)>0) 
            <div class=error_tasks><h4>Você não possui nenhuma tarefa criada. <br> Clique acima no botão <u>CRIAR TAREFA</u> e crie sua primeira tarefa.</h4></div>
            @endif

             @foreach ($tasks as $task)
            <x-task :data=$task />
            @endforeach
        </div>
              
            </div>


        
</x-layout>
