<nav class="flex items-center gap-x-7">
    @guest
        <x-nav-link href="{{ route('user') }}" :active="request()->routeIs('user')">Home</x-nav-link>
        <x-nav-link href="{{ route('profile') }}" :active="request()->routeIs('profile')">About</x-nav-link>
        <x-nav-link href="{{ route('user') }}" :active="request()->routeIs('user')">Features</x-nav-link>
        <x-nav-link href="{{ route('profile') }}" :active="request()->routeIs('profile')">Program</x-nav-link>
    @endguest
    @auth
    @can('user-only')
        <x-nav-link href="{{ route('user.food-logs.index') }}" :active="request()->routeIs('user.food-logs.index')">Dashboard</x-nav-link>
        <x-nav-link href="{{ route('profile') }}" :active="request()->routeIs('profile')">Profile</x-nav-link>
    @endcan
    @can('admin-only')
        <x-nav-link href="{{ route('admin.dashboard') }}" :active="request()->routeIs('admin.dashboard')">Dashboard</x-nav-link>
        <x-nav-link href="{{ route('admin.manage-user.index') }}" :active="request()->routeIs('admin.manage-user.index')">Manage User</x-nav-link>
        <x-nav-link href="{{ route('admin.manage-food.index') }}" :active="request()->routeIs('admin.manage-food.index')">Manage Food</x-nav-link>
    @endcan
    @endauth
</nav>