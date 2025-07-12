<div class="custom-select-container">
    <div class="custom-select-value" tabindex="0">{{ $prompt }}</div>
    <div class="custom-select-options">
        <input type="text" class="custom-select-search" placeholder="Search...">
        <ul class="custom-select-list">
            @foreach($list as $item)
                <li data-value="{{ $item->id }}">{{ $item->name }}</li>
            @endforeach
        </ul>
    </div>
</div>
<!-- Hidden original select for form submission -->
<select class="d-none" id="{{ $id }}" name="{{ $id }}" required>
    <option value="">{{ $prompt }}</option>
    @foreach($list as $item)
        <option value="{{ $item->id }}">{{ $item->name }}</option>
    @endforeach
</select>
<div class="invalid-feedback" id="{{ $id }}_error"></div>