<table>
    <form action="/person/del" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $form->id }}">
        <tr>
            <th>name: </th>
            <td>{{ $form->name }}</td>
        </tr>
        <tr>
            <th>mail: </th>
            <td>{{ $form->mail }}</td>
        </tr>
        <tr>
            <th>age: </th>
            <td>{{ $form->age }}</td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="remove"></td>
        </tr>
    </form>
</table>
