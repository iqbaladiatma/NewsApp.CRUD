<x-layout>
    <div class="row justify-content-center mt-5">
        <div class="col-lg-6">
            @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
            @endif

            @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                {{$error}}
            </div>
            @endforeach
            @endif
        </div>
    </div>

    <div class="text-center mt-5">
        <h2>Edit post</h2>
    </div>

    <form method="POST" action="{{route('posts.update',['post'=>$post->id])}}">

        @csrf

        {{ method_field('PUT') }}

        <div class="row justify-content-center mt-5">

            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Title" value="{{$post->title}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Auhtor</label>
                    <input type="text" class="form-control" name="author" placeholder="author" value="{{$post->author}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Postingan</label>
                    <input type="text" class="form-control" name="postingan" placeholder="Masukkan Postinganmu" value="{{$post->postingan}}"></input>
                </div>
                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select name="is_completed" id="" class="form-control">
                        <option value="1" @if($post->is_completed==1) selected @endif>Complete</option>
                        <option value="0" @if($post->is_completed==0) selected @endif>Not Complete</option>
                    </select>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

    </form>
</x-layout>