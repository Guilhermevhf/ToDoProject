<x-layout page="Criar Task - ToDoProject">

    <x-slot:btn>
    <a href="{{route('home')}}" class="btn btn-primary">
        Voltar
    </a>
</x-slot:btn>


<section id="create_task_section">
<div class=titleCreate><h1>Criar Tarefa</h1></div>

<form method="POST" action="{{route('task.create_action')}}">
    @csrf
    <x-form.text_input name="title" label="Título da Tarefa:" required="required" placeholder="Digite o título de sua tarefa"/>
    <x-form.text_input type="date" name="due_date" label="Data da Realização:" required="required" />


    <div class="inputArea">
        <label for="title">
            Categoria:
        </label>

        
       <select id="category "name="category" required>
        <option selected disabled value=""> Selecione uma categoria </option>
        <option>Deveres</option>
        <option>Trabalho</option>
        <option>Pessoal</option>
       </select>
    </div> 
       <div class="inputArea">
        <label for="title">
        Descrição da tarefa:
        </label>
        <textarea name="description" placeholder="Digite uma descrição para sua tarefa" ></textarea>      
    </div>
    <div class="inputArea">
        <button type="reset" class="btn"> Resetar</button>
        <button type="submit" class="btn btn-primary"> Criar Tarefa</button>
    </div>
</form>
</section>
 
</x-layout>