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