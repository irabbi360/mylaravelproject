<h1>Student List</h1>
    @foreach($students as $student)
       <li>{{ $student->name }} - {{ $student->email }} - <a href="{{ url('editinfo', $student->id) }}">Edit</a> </li>
      @endforeach
