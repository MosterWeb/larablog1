 
    <select required name="{{ $name }}" class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
        <option disabled selected>{{ $message }}</option>
        {{ $slot }}
    </select>
 