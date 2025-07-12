@forelse ($sectors as $key => $sector)
<tr>
    <td>{{ ($sectors->currentPage() - 1) * $sectors->perPage() + $key + 1 }}</td>
    <td>{{ $sector->name }}</td>
    <td>
        <button class="btn btn-sm btn-primary waves-effect waves-light edit-btn"
                data-id="{{ $sector->id }}"
                data-name="{{ $sector->name }}">
            <i class="mdi mdi-pencil"></i>
        </button>
        <button class="btn btn-sm btn-danger waves-effect waves-light delete-btn"
                data-id="{{ $sector->id }}">
            <i class="mdi mdi-trash-can"></i>
        </button>
    </td>
</tr>
@empty
<tr>
    <td colspan="3" class="text-center">No sectors found.</td>
</tr>
@endforelse
