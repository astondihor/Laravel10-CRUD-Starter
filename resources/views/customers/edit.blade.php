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
      <h5 class="card-header">Edit Customer</h5>
      <div class="card-body">
        @include('includes.messages')
        <form action="/customers/{{ $customer->id }}"
              method="POST">
          @csrf
          @method('PUT')
          <div class="mb-3">
            <label class="form-label">Name</label>
            <input class="form-input w-full @error('name') is-invalid @enderror"
                   name="name"
                   type="text"
                   value="{{ $customer->name }}">
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
                   value="{{ $customer->email }}">
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
                   value="{{ $customer->phone }}">
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
                      d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                <path
                      d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
              </svg>

              <span>Update</span>

            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</x-app-layout>
