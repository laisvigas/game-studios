<form method="POST" action="{{ route('games.import', $studio) }}" enctype="multipart/form-data" class="d-flex gap-2">
    @csrf
    <label title="Import games with a CSV" aria-label="Import games with a CSV" class="btn btn-dark">
        Import several games for {{ $studio->studio_name }}
        <input type="file" name="csv_file" accept=".csv" class="d-none" onchange="this.form.submit()">
    </label>
</form>
