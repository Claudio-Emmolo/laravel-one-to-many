<form action="{{ route($route, $project->id) }}" method="POST" class="container" enctype="multipart/form-data">
    @csrf
    @method($method)

    <div class="mb-3">
        <label for="title" class="form-label">Project Title*</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
            value="{{ old('title', $project->title) }}">
        <div class="text-danger">
            @error('title')
                {{ $message }}
            @enderror
        </div>
    </div>

    <div class="mb-3">
        <label for="title" class="form-label">Project Type*</label>
        <select name="type_id" id="name" class="text-uppercase">
            @foreach ($typeList as $type)
                <option value="{{ $type->id }}">{{ $type->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="title" class="form-label">Project URL*</label>
        <input type="text" class="form-control @error('url') is-invalid @enderror" id="title" name="url"
            value="{{ old('url', $project->url) }}">
        <div class="text-danger">
            @error('url')
                {{ $message }}
            @enderror
        </div>
    </div>

    <div class="mb-3">
        <label for="date" class="form-label">Project Date*</label>
        <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date"
            value="{{ old('date', $project->date) }}">
        <div class="text-danger">
            @error('date')
                {{ $message }}
            @enderror
        </div>
    </div>

    <div class="mb-3">
        <label for="preview_img" class="form-label">Upload Preview Img</label>
        <input type="file" class="form-control @error('preview_img') is-invalid @enderror" id="preview_img"
            name="preview_img" value="{{ old('preview_img', $project->preview_img) }}">
        <div class="text-danger">
            @error('preview_img')
                {{ $message }}
            @enderror
        </div>
    </div>

    <div class="mb-3">
        <label for="difficulty" class="form-label">Project Difficulty*</label>
        <input type="number" class="form-control @error('difficulty') is-invalid @enderror" id="difficulty"
            name="difficulty" value="{{ old('difficulty', $project->difficulty) }}">
        <div class="text-danger">
            @error('difficulty')
                {{ $message }}
            @enderror
        </div>
    </div>

    <div class="mb-3">
        <label for="tecnologies" class="form-label">Tecnologies*</label>
        <input type="text" class="form-control @error('tecnologies') is-invalid @enderror" id="tecnologies"
            name="tecnologies" value="{{ old('tecnologies', $project->tecnologies) }}">
        <div class="text-danger">
            @error('tecnologies')
                {{ $message }}
            @enderror
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Send</button>
</form>
