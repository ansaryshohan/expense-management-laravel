<button {{ $attributes->merge(['type' => 'submit', 'class' => 'd-inline-flex align-items-center px-4  py-2 bg-primary border border-transparent rounded-3 fw-semibold fs-3 text-white text-uppercase tracking-widest hover:bg-primary-subtle transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
