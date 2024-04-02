<x-app-layout>
  <div class="container mx-auto px-2 sm:px-4 md:px-6 lg:px-8 py-6">
    <div class="flex flex-row justify-between items-center mb-5">
      <h1 class="text-lg font-bold">Manage User <small class="font-normal text-slate-500">Preview all
          users</small>
      </h1>

      <a class="link-btn btn-success"
         href="{{ route('users.create') }}"
         role="button">
        <svg class="w-5 h-5"
             xmlns="http://www.w3.org/2000/svg"
             viewBox="0 0 24 24"
             fill="currentColor">
          <path fill-rule="evenodd"
                d="M12 3.75a.75.75 0 0 1 .75.75v6.75h6.75a.75.75 0 0 1 0 1.5h-6.75v6.75a.75.75 0 0 1-1.5 0v-6.75H4.5a.75.75 0 0 1 0-1.5h6.75V4.5a.75.75 0 0 1 .75-.75Z"
                clip-rule="evenodd" />
        </svg>
        <span>Add New User</span>
      </a>
    </div>

    <div class="bg-white rounded-lg shadow-md my-6 py-2">
      <div class="overflow-hidden">
        <div class="overflow-x-auto relative">
          <table class="table-auto my-table">
            <thead>
              <tr>
                <th width="1%">ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created</th>
                <th>Verified</th>
                <th width="1%">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
                <tr>
                  <td class="!text-right">{{ $user->id }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->created_at }}</td>
                  <td>
                    @if ($user->email_verified_at)
                      {{ $user->email_verified_at }}
                    @else
                      <div class="text-center">
                        <i class="fas fa-times text-danger"></i>
                      </div>
                    @endif
                  </td>
                  <td>
                    <form action="{{ route('users.destroy', $user->id) }}"
                          method="POST">
                      @method('DELETE')
                      @csrf
                      <div class="flex items-center justify-end space-x-0.5">
                        <a class="btn-icon btn-primary"
                           href="{{ route('users.edit', $user->id) }}">
                          <svg class="w-4 h-4"
                               xmlns="http://www.w3.org/2000/svg"
                               viewBox="0 0 16 16"
                               fill="currentColor">
                            <path
                                  d="M13.488 2.513a1.75 1.75 0 0 0-2.475 0L6.75 6.774a2.75 2.75 0 0 0-.596.892l-.848 2.047a.75.75 0 0 0 .98.98l2.047-.848a2.75 2.75 0 0 0 .892-.596l4.261-4.262a1.75 1.75 0 0 0 0-2.474Z" />
                            <path
                                  d="M4.75 3.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h6.5c.69 0 1.25-.56 1.25-1.25V9A.75.75 0 0 1 14 9v2.25A2.75 2.75 0 0 1 11.25 14h-6.5A2.75 2.75 0 0 1 2 11.25v-6.5A2.75 2.75 0 0 1 4.75 2H7a.75.75 0 0 1 0 1.5H4.75Z" />
                          </svg>

                        </a>
                        <a class="btn-icon btn-success"
                           href="{{ route('users.show', $user->id) }}">
                          <svg xmlns="http://www.w3.org/2000/svg"
                               viewBox="0 0 16 16"
                               fill="currentColor">
                            <path
                                  d="M6.25 8.75v-1h-1a.75.75 0 0 1 0-1.5h1v-1a.75.75 0 0 1 1.5 0v1h1a.75.75 0 0 1 0 1.5h-1v1a.75.75 0 0 1-1.5 0Z" />
                            <path fill-rule="evenodd"
                                  d="M7 12c1.11 0 2.136-.362 2.965-.974l2.755 2.754a.75.75 0 1 0 1.06-1.06l-2.754-2.755A5 5 0 1 0 7 12Zm0-1.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Z"
                                  clip-rule="evenodd" />
                          </svg>

                        </a>
                        <button class="btn-icon btn-danger"
                                type="submit">
                          <svg xmlns="http://www.w3.org/2000/svg"
                               viewBox="0 0 16 16"
                               fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M5 3.25V4H2.75a.75.75 0 0 0 0 1.5h.3l.815 8.15A1.5 1.5 0 0 0 5.357 15h5.285a1.5 1.5 0 0 0 1.493-1.35l.815-8.15h.3a.75.75 0 0 0 0-1.5H11v-.75A2.25 2.25 0 0 0 8.75 1h-1.5A2.25 2.25 0 0 0 5 3.25Zm2.25-.75a.75.75 0 0 0-.75.75V4h3v-.75a.75.75 0 0 0-.75-.75h-1.5ZM6.05 6a.75.75 0 0 1 .787.713l.275 5.5a.75.75 0 0 1-1.498.075l-.275-5.5A.75.75 0 0 1 6.05 6Zm3.9 0a.75.75 0 0 1 .712.787l-.275 5.5a.75.75 0 0 1-1.498-.075l.275-5.5a.75.75 0 0 1 .786-.711Z"
                                  clip-rule="evenodd" />
                          </svg>

                        </button>
                      </div>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <div class="px-4 py-2">
        {{ $users->links() }}
      </div>
    </div>
  </div>

  @push('scripts-after')
    {{-- <script>
      const swalWithBootstrapButtons = Swal.mixin({
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-danger',
        buttonsStyling: false,
      });
      $('.delete-button').click(function(e) {
        e.preventDefault();
        var url = $(this).attr('data-href');
        swalWithBootstrapButtons.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.value) {
            $.ajax({
              method: 'POST',
              url: url,
              data: {
                // 'id': id,
                '_token': '{{ csrf_token() }}',
                '_method': 'DELETE'
              },
              success: function() {
                swalWithBootstrapButtons.fire(
                  'Deleted!',
                  'Your user record has been deleted.',
                  'success'
                ).then((result) => {
                  location.reload();
                });
              },
              error: function(jqXHR, textStatus, errorThrown) {
                alert(jqXHR.status);
                alert(textStatus);
                alert(errorThrown);
              }
            });
          } else if (result.dismiss === Swal.DismissReason.cancel) {
            swalWithBootstrapButtons.fire(
              'Cancelled',
              'Your user record is safe :)',
              'error'
            );
          }
        });
      });
    </script> --}}
  @endpush

</x-app-layout>
