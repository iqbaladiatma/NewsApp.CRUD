<x-layout>
    <h1 class="text-start py-2">Edit Kontenmu Disini</h1>
</x-layout>
<div class="row justify-content-center mt-1">
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
    <h2>Add Postingan</h2>
    <!-- <a href="/all-posts" class=" text-primary text-decoration-underline small">&laquo; Back to all posts</a> -->
    <form class="row g-3 justify-content-center" method="POST" action="{{route('posts.store')}}">
        @csrf
        <div class="col-5">
            <input type="text" class="form-control" name="title" placeholder="Judul Postingan" autocomplete="off">
            <input type="text" class="form-control mt-4" name="author" placeholder="Author" autocomplete="off">
            <textarea class="form-control mt-4" name="postingan" placeholder="Masukkan Postinganmu" rows="4"></textarea>
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </div>
    </form>
</div>

