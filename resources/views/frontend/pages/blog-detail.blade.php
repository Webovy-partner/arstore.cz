<x-app-layout>
    <div class="body-wrapper">
        <div class="container-fluid">
            <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
                <div class="card-body px-4 py-3">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h4 class="fw-semibold mb-8">Správa příspěvku</h4>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a class="text-muted text-decoration-none"
                                            href="{{ route('admin.blog-posts.index') }}">Blog</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Upravit příspěvek</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-3">
                            <div class="text-center mb-n5">
                                <img src="{{ asset('/admin/assets/images/breadcrumb/ChatBc.png') }}" alt=""
                                    class="img-fluid mb-n4" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h1 class="text-center mb-5 mt-5">Upravit příspěvek</h1>

            <div class="card">
                <div class="card-body p-4">
                    <form action="{{ route('admin.blog-posts.update', $post->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group col-12">
                            <label for="image">Obrázek náhledu:</label>
                            <input type="file" class="form-control-file" id="image" name="image">
                            @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" alt="Current Image"
                                    style="max-width: 200px; margin-top: 10px;">
                            @endif
                        </div>
                        <br>
                        <div class="form-group col-12 mb-8">
                            <label for="title">Titulek:</label>
                            <input type="text" class="form-control" id="title" name="title"
                                value="{{ old('title', $post->title) }}" required>
                        </div>

                        <br>
                        <div class="col-md-12 ml-auto mr-auto">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <textarea cols="80" id="testedit2" name="content" rows="10">
                                            {{ old('content', $post->content) }}
                                        </textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-12 col-xl-6">
                                    <label for="author_id">Autor:</label>
                                    <select class="form-control" id="author_id" name="author_id" required>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}"
                                                {{ $user->id == $post->author_id ? 'selected' : '' }}>
                                                {{ $user->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-12 col-xl-6">
                                    <label for="published_at">Datum publikování:</label>
                                    <input type="datetime-local" class="form-control" id="published_at"
                                        name="published_at"
                                        value="{{ old('published_at', $post->published_at ? $post->published_at : '') }}">
                                </div>

                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Uložit</button>
                            <a href="{{ route('admin.blog-posts.index') }}" class="btn btn-secondary">Zpět na
                                seznam</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
