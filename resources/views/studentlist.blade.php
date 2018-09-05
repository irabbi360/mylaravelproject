<h1>Student List</h1>
    @foreach($students as $student)
       <li>{{ $student->name }} - {{ $student->email }}</li>
      @endforeach
