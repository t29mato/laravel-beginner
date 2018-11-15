<table>
    <tr><th>Person</th><th>Board</th></tr>
    @foreach ($hasItems as $item)
        <tr>
            <td>{{ $item->getData() }}</td>
            <td>
                @if ($item->board != null)
                    {{-- {{ $item->board->getData() }} --}}
                    @foreach ($item->boards as $obj)
                        {{ $obj->getData() }}
                    @endforeach
                @endif
            </td>
        </tr>
    @endforeach
</table>
<table>
    <tr><th>Person</th></tr>
    @foreach ($noItems as $item)
        <tr>
            <td>{{ $item->getData() }}</td>
        </tr>
    @endforeach
</table>