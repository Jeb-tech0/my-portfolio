(() => {
    const navbar = document.querySelector('.portfolio-navbar');

    if (!navbar) {
        return;
    }

    const navLinks = Array.from(navbar.querySelectorAll('.nav-link[href*="#"]'));
    const navbarCollapse = navbar.querySelector('.navbar-collapse');
    const sections = navLinks
        .map((link) => {
            const section = document.getElementById(decodeURIComponent(link.hash.slice(1)));
            return section ? { link, section } : null;
        })
        .filter(Boolean);

        if (navbarCollapse) {
        navLinks.forEach((link) => {
            link.addEventListener('click', () => {
                bootstrap.Collapse.getOrCreateInstance(navbarCollapse).hide();
            });
        });
    }

    let scrollFrame = 0;

    const updateNavbar = () => {
        navbar.classList.toggle('navbar-scrolled', window.scrollY > 20);

        if (sections.length > 0) {
            const activeSection = sections.reduce((active, item) => {
                if (item.section.getBoundingClientRect().top <= navbar.offsetHeight + 100) {
                    return item;
                }

                return active;
            }, sections[0]);

            sections.forEach(({ link, section }) => {
                const isActive = section === activeSection.section;
                link.classList.toggle('active', isActive);

                if (isActive) {
                    link.setAttribute('aria-current', 'page');
                } else {
                    link.removeAttribute('aria-current');
                }
            });
        }

        scrollFrame = 0;
    };

    const scheduleUpdate = () => {
        if (!scrollFrame) {
            scrollFrame = window.requestAnimationFrame(updateNavbar);
        }
    };

    window.addEventListener('scroll', scheduleUpdate, { passive: true });
    window.addEventListener('resize', scheduleUpdate);
    window.addEventListener('hashchange', scheduleUpdate);
    updateNavbar();
})();
