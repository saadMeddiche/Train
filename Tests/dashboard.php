<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <link rel="stylesheet" href="../Tests/style.css">
</head>

<body>

    <div class="navbar">
        <nav id="navbar" class="navbar flex items-center p-2 text-base font-normal text-gray-900  dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 flex justify-center bg-black h-16 border-b-2">


            <button id="dropdownDefault" data-dropdown-toggle="dropdown" class=" " type="button">
                <ul class="flex items-center">
                    <iconify-icon icon="ic:round-menu" style="color: #9ca3af;" width="50" height="50"></iconify-icon>
                </ul>
            </button>
            <!-- Dropdown menu -->
            <div id="dropdown" class="hidden sidebar2 z-10 w-fit">
                <aside class="sidebar2  w-screen h-screen sticky top-0" aria-label="Sidebar" aria-labelledby="dropdownDefault">
                    <div class="overflow-y-auto py-4 px-3 bg-gray-50 rounded dark:bg-gray-800 h-screen">
                        <ul class="space-y-5">
                            <li>
                                <button type="button" class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example2">
                                    <iconify-icon icon="material-symbols:account-circle" style="color: #9ca3af;" width="25" height="25"></iconify-icon>
                                    <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Saad Meddiche</span>
                                    <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <ul id="dropdown-example2" class="py-2 space-y-2">
                                    <li>
                                        <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                            <iconify-icon icon="material-symbols:switch-account" style="color: #9ca3af;" width="25" height="25"></iconify-icon>
                                            <span class="flex-1 ml-3 whitespace-nowrap">Account</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                            <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="flex-1 ml-3 whitespace-nowrap">LogOut</span>
                                        </a>
                                    </li>


                                </ul>
                            </li>
                            <li>
                                <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                                    </svg>
                                    <span class="ml-3">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="../Station/station.php" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                                    </svg>
                                    <span class="flex-1 ml-3 whitespace-nowrap">Stations</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <iconify-icon icon="bx:train" style="color: #9ca3af;" width="25" height="25"></iconify-icon>

                                    <span class="flex-1 ml-3 whitespace-nowrap">Trains</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <!-- <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path>
                        </svg> -->
                                    <iconify-icon icon="icon-park-outline:round-trip" style="color: #9ca3af;" width="25" height="25"></iconify-icon>
                                    <span class="flex-1 ml-3 whitespace-nowrap">Trips</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <iconify-icon icon="dashicons:tickets-alt" style="color: #9ca3af;" width="25" height="25"></iconify-icon>
                                    <span class="flex-1 ml-3 whitespace-nowrap">Tickets</span>
                                </a>
                            </li>


                        </ul>
                        <ul class="pt-4 mt-4 space-y-6 border-t border-gray-200 dark:border-gray-700">

                            <li>
                                <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                                    <iconify-icon icon="ic:baseline-admin-panel-settings" style="color: #9ca3af;" width="25" height="25"></iconify-icon>
                                    <span class="ml-3">Admins</span>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">

                                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="flex-1 ml-3 whitespace-nowrap">Users</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>


        </nav>

    </div>




    <div class="flex">


        <!-- =====================Side Bare===================== -->
        <div id="sidebar" class="sidebar">
            <aside class="sidebar w-64 h-screen sticky top-0 " aria-label="Sidebar">
                <div class="overflow-y-auto py-4 px-3 bg-gray-50 rounded dark:bg-gray-800 h-screen">
                    <ul class="space-y-5">
                        <li>
                            <button type="button" class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                                <iconify-icon icon="material-symbols:account-circle" style="color: #9ca3af;" width="25" height="25"></iconify-icon>
                                <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Saad Meddiche</span>
                                <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <ul id="dropdown-example" class="py-2 space-y-2">
                                <li>
                                    <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                        <iconify-icon icon="material-symbols:switch-account" style="color: #9ca3af;" width="25" height="25"></iconify-icon>
                                        <span class="flex-1 ml-3 whitespace-nowrap">Account</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                        <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="flex-1 ml-3 whitespace-nowrap">LogOut</span>
                                    </a>
                                </li>


                            </ul>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                    <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                                </svg>
                                <span class="ml-3">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="../Station/station.php" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                                </svg>
                                <span class="flex-1 ml-3 whitespace-nowrap">Stations</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                <iconify-icon icon="bx:train" style="color: #9ca3af;" width="25" height="25"></iconify-icon>

                                <span class="flex-1 ml-3 whitespace-nowrap">Trains</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                <!-- <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path>
                        </svg> -->
                                <iconify-icon icon="icon-park-outline:round-trip" style="color: #9ca3af;" width="25" height="25"></iconify-icon>
                                <span class="flex-1 ml-3 whitespace-nowrap">Trips</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                <iconify-icon icon="dashicons:tickets-alt" style="color: #9ca3af;" width="25" height="25"></iconify-icon>
                                <span class="flex-1 ml-3 whitespace-nowrap">Tickets</span>
                            </a>
                        </li>


                    </ul>
                    <ul class="pt-4 mt-4 space-y-6 border-t border-gray-200 dark:border-gray-700">

                        <li>
                            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                                <iconify-icon icon="ic:baseline-admin-panel-settings" style="color: #9ca3af;" width="25" height="25"></iconify-icon>
                                <span class="ml-3">Admins</span>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">

                                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="flex-1 ml-3 whitespace-nowrap">Users</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>
        </div>

        <!-- =====================Cards===================== -->
        <div class="container mx-5 my-5 grid lg:grid-cols-2 gap-5 items-center" id="bla">
            <div class="cards">
                <a href="../Station/station.php" class="flex flex-col items-center bg-white border rounded-lg shadow-md md:flex-row  hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <!-- <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-40 md:rounded-none md:rounded-l-lg" src="../img/train.jpg" alt=""> -->
                    <div class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-40 md:rounded-none md:rounded-l-lg mx-3" style="height: 120px; background-position: center; background-size: cover; background-repeat: no-repeat; background-image: url(../img/station.jpg);"></div>
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Stations</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Disponible : 120</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Indisponible : 20</p>

                    </div>
                </a>
            </div>

            <div class="cards">
                <a href="#" class="flex flex-col items-center bg-white border rounded-lg shadow-md md:flex-row  hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <!-- <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-40 md:rounded-none md:rounded-l-lg" src="../img/train.jpg" alt=""> -->
                    <div class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-40 md:rounded-none md:rounded-l-lg mx-3" style="height: 120px; background-position: center; background-size: cover; background-repeat: no-repeat; background-image: url(../img/train.jpg);"></div>
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Trains</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Disponible : 120</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Indisponible : 20</p>

                    </div>
                </a>
            </div>

            <div class="cards">
                <a href="#" class="flex flex-col items-center bg-white border rounded-lg shadow-md md:flex-row  hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <!-- <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-40 md:rounded-none md:rounded-l-lg" src="../img/train.jpg" alt=""> -->
                    <div class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-40 md:rounded-none md:rounded-l-lg mx-3" style="height: 120px; background-position: center; background-size: cover; background-repeat: no-repeat; background-image: url(../img/tickets.jpg);"></div>
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tickets</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Disponible : 120</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Indisponible : 20</p>

                    </div>
                </a>
            </div>

            <div class="cards">
                <a href="#" class="flex flex-col items-center bg-white border rounded-lg shadow-md md:flex-row  hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <!-- <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-40 md:rounded-none md:rounded-l-lg" src="../img/train.jpg" alt=""> -->
                    <div class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-40 md:rounded-none md:rounded-l-lg mx-3" style="height: 120px; background-position: center; background-size: cover; background-repeat: no-repeat; background-image: url(../img/trip.jpg);"></div>
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Trips</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Disponible : 120</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Indisponible : 20</p>

                    </div>
                </a>
            </div>

            <div class="cards">
                <a href="#" class="flex flex-col items-center bg-white border rounded-lg shadow-md md:flex-row  hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <!-- <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-40 md:rounded-none md:rounded-l-lg" src="../img/train.jpg" alt=""> -->
                    <div class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-40 md:rounded-none md:rounded-l-lg mx-3" style="height: 120px; background-position: center; background-size: cover; background-repeat: no-repeat; background-image: url(../img/users.jpg);"></div>
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Users</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Disponible : 120</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Indisponible : 20</p>

                    </div>
                </a>
            </div>
            <div class="cards">
                <a href="#" class="flex flex-col items-center bg-white border rounded-lg shadow-md md:flex-row  hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <!-- <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-40 md:rounded-none md:rounded-l-lg" src="../img/train.jpg" alt=""> -->
                    <div class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-40 md:rounded-none md:rounded-l-lg mx-3" style="height: 120px; background-position: center; background-size: cover; background-repeat: no-repeat; background-image: url(../img/admin.jpg);"></div>
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Admins</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Disponible : 120</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Indisponible : 20</p>

                    </div>
                </a>
            </div>
        </div>
        <!-- md:max-w-xl -->

    </div>

</body>

<!-- <script>
    function menu() {
        var sidebar = document.getElementById("sidebar");
        var cards = document.getElementById("bla");

        if (sidebar.style.display === "none") {

            sidebar.style.display = "block";
            cards.style.display = "none";

        } else {

            sidebar.style.display = "none";
            cards.style.display = "block";


        }



    }
</script> -->
<!-- =====================Lien of scripts===================== -->
<!-- Tailwind -->
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn-tailwindcss.vercel.app/"></script>
<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
<script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>

<!-- iconify -->
<script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>

<script src="../Tests/script.js"></script>


</html>