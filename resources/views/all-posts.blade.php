<x-layout>
    <h1>All Posts</h1>
</x-layout>


<div class="container">
    <div class="row">
        <div class="col-12 col-md-10 col-lg-8">
            <h3 class="fs-5 mb-2 text-secondary text-uppercase">Blog</h3>
        </div>
    </div>
</div>
<div class="container overflow-hidden">
    <div class="row gy-4 gy-lg-0">
        @foreach ($posts as $post )
        <div class="col-12 col-lg-4">
            <article>
                <div class="card border-0">
                    <div class="card-body border bg-white p-4">
                        <div class="entry-header mb-3">
                            <ul class="entry-meta list-unstyled d-flex mb-2">
                                <li>
                                    <a class="link-primary text-decoration-none" href="#!">{{ $post->title }}</a>
                                </li>
                            </ul>
                            <h2 class="card-title entry-title h4 mb-0">
                                <a class="link-dark text-decoration-none" href="#!">{{ $post->blog }}</a>
                            </h2>
                        </div>
                        <p class="card-text entry-summary text-secondary mb-3">
                            {{ $post->postingan }}
                        </p>
                        <a href="/postals" class="btn btn-primary m-0 text-nowrap entry-more">Read More</a>
                    </div>
                    <div class="card-footer border border-top-0 bg-light p-4">
                        <ul class="entry-meta list-unstyled d-flex align-items-center justify-content-between m-0">
                            <li class="d-flex align-items-center">
                                <a class="fs-7 link-secondary text-decoration-none d-flex align-items-center" href="#!">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                                        <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                                        <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                    </svg>
                                    <span class="ms-2 fs-7">{{ $post->created_at }}</span>
                                </a>
                            </li>
                            <li>
                                <a class="link-secondary text-decoration-none d-flex align-items-center" href="#!">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
                                        <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                        <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z" />
                                    </svg>
                                    <span class="ms-2 fs-7 ml-0">70</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>
<div class="text-center">
    <h2>All Posts</h2>
    <div class="row justify-content-center">
        <div class="col-lg-6">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Postingan</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Status</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>

                    @php $counter=1 @endphp

                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->postingan }}</td>
                        <td>{{ $post->created_at }}</td>
                        <td>
                            @if($post->is_completed)
                            <div class="badge bg-success">Completed</div>
                            @else
                            <div class="badge bg-warning">Not Completed</div>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info">Edit</a>
                            <a href="{{ route('posts.destroy', ['post' => $post->id]) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>