<div class="task_list"> 
    <div class="task">
    <div class="title">
        <input type="checkbox" 
            @if ($data && $data['is_done'])
                checked
            @endif
        />
        <div class="task_title"> {{$data['title'] ?? ''}} </div>
    </div>
    <div class="priority">
        <div>{{$data['description'] ?? ''}}</div>
    </div>
    <div class="actions">
        <a href="{{route('task.edit', ['id' => $data['id']])}}">
            <img src="/assets/images/icon-edit.png">
            </a> 
            <a href="{{route('task.delete', ['id' => $data['id']])}}">
                <img src="/assets/images/icon-delete.png">
                </a>
    </div>
</div>