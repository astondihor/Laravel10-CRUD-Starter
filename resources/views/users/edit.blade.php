<x-app-layout>
  <div class="container mx-auto px-2 sm:px-4 md:px-6 lg:px-8 py-6">
    <div class="page-header flex flex-row items-center justify-between">
      <h1>New User
        <small>Create a new user record</small>
      </h1>
      <a class="link-btn btn-white"
         href="{{ route('users.index') }}">
        <svg class="w-6 h-6"
             xmlns="http://www.w3.org/2000/svg"
             viewBox="0 0 24 24"
             fill="currentColor">
          <path fill-rule="evenodd"
                d="M9.53 2.47a.75.75 0 0 1 0 1.06L4.81 8.25H15a6.75 6.75 0 0 1 0 13.5h-3a.75.75 0 0 1 0-1.5h3a5.25 5.25 0 1 0 0-10.5H4.81l4.72 4.72a.75.75 0 1 1-1.06 1.06l-6-6a.75.75 0 0 1 0-1.06l6-6a.75.75 0 0 1 1.06 0Z"
                clip-rule="evenodd" />
        </svg>
        <span>Back to List</span>
      </a>
    </div>

    <div class="row my-5">
      <div class="mx-auto max-w-lg">
        <div>
          <div class="card">
            <div class="card-header">
              <h3 class="mb-0 h4">User Form</h3>
            </div>
            <div class="card-body">
              @if ($errors->any())
                <div class="alert alert-danger">
                  <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif
              <form action="{{ route('users.update', $user->id) }}"
                    method="POST">
                @method('patch')
                @csrf
                @include('users.fields')
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
