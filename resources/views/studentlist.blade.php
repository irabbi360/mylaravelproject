<h1>Student List</h1>
    @foreach($students as $student)
       <li>{{ $student->name }} - {{ $student->email }} -
           <a href="{{ url('editinfo', $student->id) }}">Edit</a>
          - <form id="delete-form-{{ $student->id }}" method="post" action="{{ url('delete', $student->id) }}" style="display: none">
               {{csrf_field()}}
               {{ method_field('DELETE') }}
           </form>

           <a href="" onclick="
                   if(confirm('Are you sure, You want to Delete this ??'))
                   {
                   event.preventDefault();
                   document.getElementById('delete-form-{{ $student->id }}').submit();
                   }
                   else {
                   event.preventDefault();
                   }">Delete</a>
       </li>
      @endforeach
