@forelse ($vesselOrWorkPlaces as $key => $vesselOrWorkPlace)
<tr>
    <td>{{ ($vesselOrWorkPlaces->currentPage() - 1) * $vesselOrWorkPlaces->perPage() + $key + 1 }}</td>
    <td>{{ $vesselOrWorkPlace->name }}</td>
    <td>
        <button class="btn btn-sm btn-primary waves-effect waves-light edit-btn"
                data-id="{{ $vesselOrWorkPlace->id }}"
                data-name="{{ $vesselOrWorkPlace->name }}">
            <i class="mdi mdi-pencil"></i>
        </button>
        <button class="btn btn-sm btn-danger waves-effect waves-light delete-btn"
                data-id="{{ $vesselOrWorkPlace->id }}">
            <i class="mdi mdi-trash-can"></i>
        </button>
    </td>
</tr>
@empty
<tr>
    <td colspan="3" class="text-center">No vesselOrWorkPlaces found.</td>
</tr>
@endforelse
