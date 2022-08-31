<x-layout page="Login - ToDoProject">

    <x-slot:btn>
    <a href="{{route('register')}}" class="btn btn-primary">
        Registrar-se
    </a>
</x-slot:btn>

    <section id="login_section">
    <div class=titleCreate><h1>Login</h1></div>
    
    <form method="POST" action="{{route('task.create_action')}}">
        @csrf
        <x-form.text_input name="title" label="Título da Tarefa:" required="required" placeholder="Digite o título de sua tarefa"/>
        <x-form.text_input type="date" name="due_date" label="Data da Realização:" required="required" />
    
    
       
        <div class="inputArea">
            <button href="{{route('home')}}" type="submit" class="btn btn-primary"> Entrar</button>
        </div>
    </form>
    </section>

 
</x-layout>