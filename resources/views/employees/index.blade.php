<h1>Employee List</h1>

@if(session('success'))
    <div>{{ session('success') }}</div>
@endif

<form action="{{ route('employees.store') }}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" required>
    <br>

    <label for="email">Email:</label>
    <input type="email" name="email" required>
    <br>

    <label for="position">Position:</label>
    <input type="text" name="position" required>
    <br>

    <label for="salary">Salary:</label>
    <input type="number" name="salary" required>
    <br>

    <button type="submit">Add Employee</button>
</form>

<hr>

<table border="1">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Position</th>
        <th>Salary</th>
        <th>Actions</th>
    </tr>

    @foreach($employees as $employee)
        <tr>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->email }}</td>
            <td>{{ $employee->position }}</td>
            <td>{{ $employee->salary }}</td>
            <td>
                <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
