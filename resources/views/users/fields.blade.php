{{-- Name --}}

<div class="mb-3">
  <label class="form-label"
         for="name">Name:</label>
  <input class="form-input w-full"
         id="name"
         name="name"
         type="text"
         value="{{ (isset($user)) ? $user->name : old('name') }}"
         autofocus
         placeholder="Enter your full name" />
</div>

{{-- Email --}}

<div class="mb-3">
  <label class="form-label"
         for="email">Email:</label>
  <input class="form-input w-full"
         id="email"
         name="email"
         type="email"
         value="{{ (isset($user))  ? $user->email : old('email') }}"
         placeholder="Your E-Mail address" />
</div>

{{-- Password --}}

<div class="mb-3">
  <label class="form-label"
         for="password">Password:</label>
  <input class="form-input w-full"
         id="password"
         name="password"
         type="password"
         placeholder="password" />
</div>

{{-- Password Confirmation --}}

<div class="mb-3">
  <label class="form-label"
         for="password_confirmation">Confirm Password:</label>
  <input class="form-input w-full"
         id="password_confirmation"
         name="password_confirmation"
         type="password"
         placeholder="Retype the password" />
</div>

<div class="flex items-center justify-end space-x-3">
  <a class="link-btn btn-secondary"
     href="{{ route('users.index') }}"
     role="button">
    <svg class="w-6 h-6"
         xmlns="http://www.w3.org/2000/svg"
         viewBox="0 0 24 24"
         fill="currentColor">
      <path fill-rule="evenodd"
            d="M5.47 5.47a.75.75 0 0 1 1.06 0L12 10.94l5.47-5.47a.75.75 0 1 1 1.06 1.06L13.06 12l5.47 5.47a.75.75 0 1 1-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 0 1-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 0 1 0-1.06Z"
            clip-rule="evenodd" />
    </svg>

    <span>Cancel</span>
  </a>

  <button class="btn btn-secondary"
          type="reset">
    <svg class="w-6 h-6"
         xmlns="http://www.w3.org/2000/svg"
         viewBox="0 0 24 24"
         fill="currentColor">
      <path fill-rule="evenodd"
            d="M4.755 10.059a7.5 7.5 0 0 1 12.548-3.364l1.903 1.903h-3.183a.75.75 0 1 0 0 1.5h4.992a.75.75 0 0 0 .75-.75V4.356a.75.75 0 0 0-1.5 0v3.18l-1.9-1.9A9 9 0 0 0 3.306 9.67a.75.75 0 1 0 1.45.388Zm15.408 3.352a.75.75 0 0 0-.919.53 7.5 7.5 0 0 1-12.548 3.364l-1.902-1.903h3.183a.75.75 0 0 0 0-1.5H2.984a.75.75 0 0 0-.75.75v4.992a.75.75 0 0 0 1.5 0v-3.18l1.9 1.9a9 9 0 0 0 15.059-4.035.75.75 0 0 0-.53-.918Z"
            clip-rule="evenodd" />
    </svg>
    <span>Reset</span>
  </button>

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
    <span>Save</span>
  </button>
</div>
