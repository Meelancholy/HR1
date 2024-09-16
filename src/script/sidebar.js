    const drawer = document.querySelector('.drawer');
    const toggleButton = document.querySelector('.drawer-btn');
    const navbar = document.querySelector('.navbar');
    const mainContent = document.querySelector('.main-content');
    const breadcrumbs = document.querySelector('.breadcrumbs')

    
    toggleButton.addEventListener('click', () => {
      drawer.classList.toggle('translate-x-0');
      navbar.classList.toggle('pl-80');
      mainContent.classList.toggle('ml-80');
      toggleButton.classList.toggle('ml-80'); // Add this line
    });  
    const employeeLink = document.querySelector('.employee-link');
    const employeeList = document.getElementById('employee-list');
    const arrowIconemp = document.getElementById('arrow-icon-employee');

    employeeLink.addEventListener('click', () => {
      employeeList.classList.toggle('hidden');
      arrowIconemp.classList.toggle('rotate-element');
    });
    const payrollLink = document.querySelector('.payroll-link');
    const payrollList = document.getElementById('payroll-list');
    const arrowIconpayroll = document.getElementById('arrow-icon-payroll');
    
    payrollLink.addEventListener('click', () => {
      payrollList.classList.toggle('hidden');
      arrowIconpayroll.classList.toggle('rotate-element');
    });

    const compensateLink = document.querySelector('.compensate-link');
    const compensateList = document.getElementById('compensate-list');
    const arrowIconcompensate = document.getElementById('arrow-icon-compensate');
    
    compensateLink.addEventListener('click', () => {
      compensateList.classList.toggle('hidden');
      arrowIconcompensate.classList.toggle('rotate-element');
    });

    const intelLink = document.querySelector('.intel-link');
    const intelList = document.getElementById('intel-list');
    const arrowIconintel = document.getElementById('arrow-icon-intel');

    intelLink.addEventListener('click', () => {
      intelList.classList.toggle('hidden');
      arrowIconintel.classList.toggle('rotate-element');
    });