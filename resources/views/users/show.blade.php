<x-app-layout>
  <div class="container mx-auto px-2 sm:px-4 md:px-6 lg:px-8 py-6">
    <div class="page-header flex flex-row items-center justify-between">
      <h1>Show User
        <small>{{ $user->name }}</small>
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


    <div class="bg-white rounded-lg shadow-md py-4 max-w-lg mx-auto">
      <div class="px-8">
        <table class="my-4 table table-sm table-nonfluid table-bordered">
          <tr>
            <td class="text-xs text-slate-400/75 font-medium text-right">ID</td>
            <th class="text-left px-2">{{ $user->id }}</th>
          </tr>
          <tr>
            <td class="text-xs text-slate-400/75 font-medium text-right">Name</td>
            <th class="text-left px-2">{{ $user->name }}</th>
          </tr>
          <tr>
            <td class="text-xs text-slate-400/75 font-medium text-right">Email</td>
            <th class="text-left px-2">{{ $user->email }}</th>
          </tr>
          <tr>
            <td class="text-xs text-slate-400/75 font-medium text-right">Created At</td>
            <th class="text-left px-2">{{ $user->created_at }}</th>
          </tr>
          <tr>
            <td class="text-xs text-slate-400/75 font-medium text-right">Updated At</td>
            <th class="text-left px-2">{{ $user->updated_at }}</th>
          </tr>
          <tr>
            <td class="text-xs text-slate-400/75 font-medium text-right">Verified</td>
            <th class="text-left px-2">
              @if ($user->email_verified_at)
                {{ $user->email_verified_at }}
              @else
                <i class="fas fa-times text-danger"></i>
              @endif
            </th>
          </tr>
        </table>

        <a href="{{ route('users.edit', $user) }}" class="link-btn btn-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
  <path d="m5.433 13.917 1.262-3.155A4 4 0 0 1 7.58 9.42l6.92-6.918a2.121 2.121 0 0 1 3 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 0 1-.65-.65Z" />
  <path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0 0 10 3H4.75A2.75 2.75 0 0 0 2 5.75v9.5A2.75 2.75 0 0 0 4.75 18h9.5A2.75 2.75 0 0 0 17 15.25V10a.75.75 0 0 0-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5Z" />
</svg>

        <span>Edit this User</span>
        </a>
      </div>
    </div>
  </div>
</x-app-layout>
