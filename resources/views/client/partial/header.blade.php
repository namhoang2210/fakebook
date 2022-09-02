<header class="sticky top-0 z-50">
    <nav class="flex flex-wrap items-center justify-between w-full py-4 md:py-0 px-4 md:px-6 xl:px-10 text-lg text-gray-700 bg-white">
        <div class="text-blue-500 text-3xl font-semibold flex items-center gap-2 md:pt-2 md:pb-3">
            <a href="{{ route('home') }}">
                <span class="text-[#65c3c8]">Fake</span><span class="text-[#291334]">Book</span>
            </a>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" id="menu-button" class="md:hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
        <div class="hidden w-full md:flex md:items-center md:w-auto" id="menu">
            <ul class="pt-4 text-base text-gray-700 md:flex md:justify-between md:pt-0 md:items-center">
                <li>
                    <a class="md:p-4 py-2 block hover:text-blue-400" href="#">Trang chủ</a>
                </li>
                <li>
                    <a class="md:p-4 py-2 block hover:text-blue-400" href="#">Blog cá nhân</a>
                </li>
                <li>
                    <a class="md:p-4 py-2 block hover:text-blue-400" href="#">Thông báo</a>
                </li>
                <li class="dropdown dropdown-end">
                    <img tabindex="0" class="w-8 h-8 border md:ml-4 rounded-full" src="https://scontent.fhan2-1.fna.fbcdn.net/v/t39.30808-6/278977042_1048639492396686_3061867402817289586_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=prabwrLaXDsAX_weQr6&_nc_ht=scontent.fhan2-1.fna&oh=00_AT-zJXR2CbbWDHKjMm391mMLyAPsmB3ZMycodJrshfOUuQ&oe=6308F70A">
                    <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52 bg-white mt-4">
                        <li><a>Trang cá nhân</a></li>
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('frm-logout').submit();">Đăng xuất</a>
                            <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>

<script>
    const button = document.querySelector('#menu-button');
    const menu = document.querySelector('#menu');
    button.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>
