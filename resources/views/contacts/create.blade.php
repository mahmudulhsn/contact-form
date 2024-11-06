<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="p-4 mx-auto max-w-xl bg-white font-[sans-serif]">
        <h1 class="text-3xl text-gray-800 font-extrabold text-center">Contact us</h1>

        @if (session('success'))
            <div class="text-center text-green-600 ">
                {{ session('success') }}
            </div>
        @endif
        <form class="mt-8 space-y-4" action="{{ route('contacts.store') }}" method="post">
            @csrf
            <input type='text' placeholder='Name' name="name" value="{{ old('name') }}"
                class="w-full rounded-md py-3 px-4 text-gray-800 bg-gray-100 focus:bg-transparent text-sm outline-blue-500" />
            @error('name')
                <div class="text-red-600 text-sm">{{ $message }}</div>
            @enderror
            <input type='email' placeholder='Email' name="email" value="{{ old('email') }}"
                class="w-full rounded-md py-3 px-4 text-gray-800 bg-gray-100 focus:bg-transparent text-sm outline-blue-500" />
            @error('email')
                <div class="text-red-600 text-sm">{{ $message }}</div>
            @enderror
            <input type='text' placeholder='Subject' name="subject" value="{{ old('subject') }}"
                class="w-full rounded-md py-3 px-4 text-gray-800 bg-gray-100 focus:bg-transparent text-sm outline-blue-500" />
            @error('subject')
                <div class="text-red-600 text-sm">{{ $message }}</div>
            @enderror
            <textarea placeholder='Message' rows="6" name="message"
                class="w-full rounded-md px-4 text-gray-800 bg-gray-100 focus:bg-transparent text-sm pt-3 outline-blue-500">{{ old('message') }}</textarea>
            @error('message')
                <div class="text-red-600 text-sm">{{ $message }}</div>
            @enderror
            <button type='submit'
                class="text-white bg-blue-500 hover:bg-blue-600 tracking-wide rounded-md text-sm px-4 py-3 w-full">Send</button>
        </form>
    </div>
</body>

</html>
