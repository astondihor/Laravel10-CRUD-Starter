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

    <div class="card mx-auto max-w-[420px]">
      <h5 class="card-header">{{ $customer->name }}</h5>
      <div class="card-body">
        <h5 class="card-title">{{ $customer->email }}</h5>
        <p class="card-text">{{ $customer->phone }}</p>
      </div>
      <div class="card-footer">

        <a class="link-btn btn-secondary"
           href="{{ route('customers.edit', $customer->id) }}">Edit this Customer</a>
      </div>
    </div>
  </div>
</x-app-layout>
