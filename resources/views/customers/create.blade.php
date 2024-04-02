<x-app-layout>
  <div class="container mx-auto py-6 px-4 md:px-5 lg:px-6">
    <div class="mb-6">
      <a class="link-btn btn-white"
         href="{{ route('customers.index') }}">
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
    <div class="card mx-auto max-w-[360px]">
      <h5 class="card-header">Add Customer</h5>
      <div class="card-body">
        @include('includes.messages')
        <form action="/customers"
              method="POST">
          @csrf
          <div class="mb-3">
            <label class="form-label">Name</label>
            <input class="form-input w-full @error('name') is-invalid @enderror"
                   name="name"
                   type="text"
                   value="{{ old('name') }}">
            @error('name')
              <span class="error-text">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

          <div class="mb-3">
            <label class="form-label">Email</label>
            <input class="form-input w-full @error('email') is-invalid @enderror"
                   name="email"
                   type="email"
                   value="{{ old('email') }}">
            @error('email')
              <span class="error-text">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="mb-3">
            <label class="form-label">Phone</label>
            <input class="form-input w-full @error('phone') is-invalid @enderror"
                   name="phone"
                   type="text"
                   value="{{ old('phone') }}">
            @error('phone')
              <span class="error-text">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="mb-3">
            <button class="btn btn-primary"
                    type="submit">
              <svg class="w-6 h-6"
                   xmlns="http://www.w3.org/2000/svg"
                   viewBox="0 0 24 24"
                   fill="currentColor">
                <path
                      d="M3.478 2.404a.75.75 0 0 0-.926.941l2.432 7.905H13.5a.75.75 0 0 1 0 1.5H4.984l-2.432 7.905a.75.75 0 0 0 .926.94 60.519 60.519 0 0 0 18.445-8.986.75.75 0 0 0 0-1.218A60.517 60.517 0 0 0 3.478 2.404Z" />
              </svg>
              <span>Submit</span>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</x-app-layout>
