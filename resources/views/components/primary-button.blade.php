<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn bg-sango normal-case btn-sm inline-flex items-center px-4 py-2 tracking-widest transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
