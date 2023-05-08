<button {{ $attributes->merge(['type' => 'submit', 'class' => 'text-cyan-700 hover:text-white border border-cyan-700 hover:bg-cyan-800 focus:ring-2 focus:outline-none focus:ring-cyan-50 font-medium rounded-lg px-7 py-2 text-center mr-2 mb-2']) }}>
    {{ $slot }}
</button>

