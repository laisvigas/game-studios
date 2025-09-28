<form action="{{ route('studios.import') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label title="Import studios with a CSV" aria-label="Import studios with a CSV" class="btn btn-dark">
        Import several studios
        <input type="file" name="csv_file" accept=".csv" class="d-none" onchange="this.form.submit()">
    </label>
</form>
