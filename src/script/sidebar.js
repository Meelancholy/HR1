    const drawer = document.querySelector('.drawer');
    const toggleButton = document.querySelector('.drawer-btn');
    const navbar = document.querySelector('.navbar');
    const mainContent = document.querySelector('.main-content');
    const breadcrumbs = document.querySelector('.breadcrumbs')

    
    toggleButton.addEventListener('click', () => {
      drawer.classList.toggle('translate-x-0');
      navbar.classList.toggle('pl-64');
      mainContent.classList.toggle('ml-64');
      breadcrumbs.classList.toggle('left-64');
    });

    const departmentLink = document.querySelector('.department-link');
    const departmentList = document.getElementById('department-list');
    const employeeLink = document.querySelector('.employee-link');
    const employeeList = document.getElementById('employee-list');
    const arrowIcondep = document.getElementById('arrow-icon-department');
    const arrowIconemp = document.getElementById('arrow-icon-employee');
    
    departmentLink.addEventListener('click', () => {
      departmentList.classList.toggle('hidden');
      arrowIcondep.classList.toggle('rotate-180');
    });
    employeeLink.addEventListener('click', () => {
      employeeList.classList.toggle('hidden');
      arrowIconemp.classList.toggle('rotate-180');
    });