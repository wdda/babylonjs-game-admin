<nav class="uk-flex uk-flex-between">

    <div class="">
        <div class="uk-grid">
            <!-- Logo -->
            <div class="uk-text-center">
                <a href="{{ route('dashboard') }}">
                    main
                </a>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div>


        <!-- Responsive Settings Options -->
        <div class="uk-grid">
            <div class="uk-grid">
                <div>{{ Auth::user()->name }}</div>
                <div>{{ Auth::user()->email }}</div>
            </div>

            <div>
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
