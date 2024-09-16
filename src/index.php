<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../css/output.css" rel="stylesheet">
  <link href="../css/styles.css" rel="stylesheet">
</head>
<body class="bg-white">
  <div class="fixed top-0 left-0 w-screen h-12 bg-white navbar">
    <div class="flex-1 ">
      <label for="my-drawer" class="btn btn-ghost btn-circle drawer-btn bg-blue-100 hover:bg-blue-200">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current text-blue-600 transition duration-300">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" class="drawer-btn-icon"></path>
        </svg>
      </label>
      <a class="btn btn-ghost text-2xl font-bold text-blue-600" href="index.php">Movers</a>
    </div>
    <div class="fixed top-0 left-0 w-64 h-screen bg-white font-bold text-blue-600 transform -translate-x-full transition-transform duration-300 ease-in-out drawer">
      <input id="my-drawer" type="checkbox" class="drawer-toggle" />
      <div class="drawer-side">
        <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay bg-blue-100 bg-opacity-50"></label>
        <ul class="menu bg-white text-blue-600 min-h-full w-64 p-4">
          <!-- Sidebar content here -->
          <br><li><a href="index.php"><img alt="Movers Logo" src="../assets/logo.png"/></a></li><br>
          <li><a class="hover:text-blue-800" href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" class="movers movers-layout-dashboard"><rect width="7" height="9" x="3" y="3" rx="1"/><rect width="7" height="5" x="14" y="3" rx="1"/><rect width="7" height="9" x="14" y="12" rx="1"/><rect width="7" height="5" x="3" y="16" rx="1"/></svg>
            Dashboard</a>
          </li>
          <li>
            <a class="department-link hover:text-blue-800"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-building-2"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"/><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"/><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"/><path d="M10 6h4"/><path d="M10 10h4"/><path d="M10 14h4"/><path d="M10 18h4"/></svg>
              Company
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="movers movers-chevron-right" id="arrow-icon-department"><path d="m9 18 6-6-6-6"/></svg></a>
            <ul id="department-list" class="hidden">
              <li><a class="hover:text-blue-800"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" class="movers movers-building"><rect width="16" height="20" x="4" y="2" rx="2" ry="2"/><path d="M9 22v-4h6v4"/><path d="M8 6h.01"/><path d="M16 6h.01"/><path d="M12 6h.01"/><path d="M12 10h.01"/><path d="M12 14h.01"/><path d="M16 10h.01"/><path d="M16 14h.01"/><path d="M8 10h.01"/><path d="M8 14h.01"/></svg>
                Manage Departments
              </a>
              </li>
              <li><a class="hover:text-blue-800"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" class="movers movers-house-plus"><path d="M13.22 2.416a2 2 0 0 0-2.511.057l-7 5.999A2 2 0 0 0 3 10v9a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7.354"/><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/><path d="M15 6h6"/><path d="M18 3v6"/></svg>
                Manage Positions
              </a>
              </li>
            </ul>
          </li>
          <li>
            <a class="employee-link hover:text-blue-800"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" class="movers movers-book-user"><path d="M15 13a3 3 0 1 0-6 0"/><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20"/><circle cx="12" cy="8" r="2"/></svg>
              Employees
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="movers movers-chevron-right" id="arrow-icon-employee"><path d="m9 18 6-6-6-6"/></svg></a>
            <ul id="employee-list" class="hidden">
            <li><a class="hover:text-blue-800"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-car-taxi-front"><path d="M10 2h4"/><path d="m21 8-2 2-1.5-3.7A2 2 0 0 0 15.646 5H8.4a2 2 0 0 0-1.903 1.257L5 10 3 8"/><path d="M7 14h.01"/><path d="M17 14h.01"/><rect width="18" height="8" x="3" y="10" rx="2"/><path d="M5 18v2"/><path d="M19 18v2"/></svg>
               Driver & Vehicles
              </a>
              <li><a class="hover:text-blue-800"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" class="movers movers-users"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                Manage Employees
              </a>
            </li>
              <li><a class="hover:text-blue-800"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" class="movers movers-user-plus"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><line x1="19" x2="19" y1="8" y2="14"/><line x1="22" x2="16" y1="11" y2="11"/></svg>
                Add Employee
              </a>
            </li>
            </ul>
          </li> 
          <li><a class="hover:text-blue-800"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" class="movers movers-banknote"><rect width="20" height="12" x="2" y="6" rx="2"/><circle cx="12" cy="12" r="2"/><path d="M6 12h.01M18 12h.01"/></svg>
            Payroll</a></li>
          <li><a class="hover:text-blue-800"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" class="movers movers-hand-coins"><path d="M11 15h2a2 2 0 1 0 0-4h-3c-.6 0-1.1.2-1.4.6L3 17"/><path d="m7 21 1.6-1.4c.3-.4.8-.6 1.4-.6h4c1.1 0 2.1-.4 2.8-1.2l4.6-4.4a2 2 0 0 0-2.75-2.91l-4.2 3.9"/><path d="m2 16 6 6"/><circle cx="16" cy="9" r="2.9"/><circle cx="6" cy="5" r="3"/></svg>
            Benefits</a></li>
          <li><a class="hover:text-blue-800"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" class="movers movers-flag"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"/><line x1="4" x2="4" y1="22" y2="15"/></svg>
            Report</a></li>
        </ul>
      </div>
    </div>

    <div class="flex-none">
      <div class="dropdown dropdown-end">
        <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar bg-blue-100 hover:bg-blue-200">
          <div class="w-10 rounded-full">
            <img
              alt="Profile Picture"
              src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
          </div>
        </div>
        <ul
          tabindex="0"
          class="menu menu-sm dropdown-content bg-white text-blue-600 rounded-box z-[1] mt-3 w-52 p-2 shadow">
          <li>
            <a class="justify-between hover:text-blue-800">
              Profile
            </a>
          </li>
          <li><a class="hover:text-blue-800">Settings</a></li>
          <li><a class="hover:text-blue-800">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="pt-12">
    <main class="main-content bg-blue-100">
      <div class="breadcrumbs text-xl text-blue-600 relative pl-20 pt-5">
        <ul>
          <li><a href="index.php" class="hover:text-blue-800">
            <svg width="40px" height="40px" viewBox="-286.72 -286.72 1597.44 1597.44" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M981.4 502.3c-9.1 0-18.3-2.9-26-8.9L539 171.7c-15.3-11.8-36.7-11.8-52 0L70.7 493.4c-18.6 14.4-45.4 10.9-59.7-7.7-14.4-18.6-11-45.4 7.7-59.7L435 104.3c46-35.5 110.2-35.5 156.1 0L1007.5 426c18.6 14.4 22 41.1 7.7 59.7-8.5 10.9-21.1 16.6-33.8 16.6z" fill="#5F6379"></path><path d="M810.4 981.3H215.7c-70.8 0-128.4-57.6-128.4-128.4V534.2c0-23.5 19.1-42.6 42.6-42.6s42.6 19.1 42.6 42.6v318.7c0 23.8 19.4 43.2 43.2 43.2h594.8c23.8 0 43.2-19.4 43.2-43.2V534.2c0-23.5 19.1-42.6 42.6-42.6s42.6 19.1 42.6 42.6v318.7c-0.1 70.8-57.7 128.4-128.5 128.4z" fill="#1e40ae"></path></g></svg>
          </a></li>
          <li><a class="hover:text-blue-800">Dashboard</a></li>
          <li>Ewan</li>
        </ul>
      </div>
    </main>
  </div>
  <script src="script/sidebar.js"></script>
</body>
</html>