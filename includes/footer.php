        <footer class="site-footer">
            <div class="container">
                <div class="row g-4 footer-main">
                    <div class="col-lg-5 col-md-6">
                        <a class="footer-brand" href="index.php#home">
                            <img class="footer-logo" src="assets/images/jeb_dev_logo_light.png" alt="Jeb-dev — Software, Web, IT">
                        </a>
                        <p class="footer-description">Web development, design, and practical digital solutions built with care.</p>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <h2 class="footer-heading">Quick links</h2>
                        <nav aria-label="Footer navigation">
                            <ul class="footer-links">
                                <li><a href="index.php#home">Home</a></li>
                                <li><a href="index.php#about">About</a></li>
                                <li><a href="index.php#projects">Projects</a></li>
                                <li><a href="index.php#services">Services</a></li>
                                <li><a href="index.php#contact">Contact</a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <h2 class="footer-heading">Get in touch with me</h2>
                        <p class="footer-contact-copy">Have a project or question? Send me an email.</p>
                        <a class="footer-email" href="mailto:hello@jeb-dev.com">
                            <i class="bi bi-envelope me-2"></i>hello@jeb-dev.com
                        </a>
                    </div>
                </div>

                <div class="footer-bottom mb-3">
                    <p>&copy; <?= date('Y') ?> Jeb-dev. All rights reserved.</p>
                </div>
            </div>
        </footer>

        <div class="chatbot" id="portfolioChatbot">
            <section class="chatbot-panel" id="chatbotPanel" aria-labelledby="chatbotTitle" hidden>
                <header class="chatbot-header">
                    <div class="chatbot-avatar" aria-hidden="true"><i class="bi bi-chat-dots-fill"></i></div>
                    <div>
                        <h2 id="chatbotTitle">Jeb assistant</h2>
                        <p>I'm<span class="chatbot-online-dot"></span> Here to help</p>
                    </div>
                    <button class="chatbot-close" id="chatbotClose" type="button" aria-label="Close chat">
                        <i class="bi bi-x-lg" aria-hidden="true"></i>
                    </button>
                </header>

                <div class="chatbot-messages" id="chatbotMessages" role="log" aria-live="polite" aria-relevant="additions text">
                    <div class="chatbot-message chatbot-message--assistant">
                        <p>Hi! I can answer questions about Emmanuel’s services, projects, experience, and how to get in touch.</p>
                    </div>
                    <div class="chatbot-suggestions" id="chatbotSuggestions" aria-label="Suggested questions">
                        <button type="button" class="chatbot-suggestion">What services do you offer?</button>
                        <button type="button" class="chatbot-suggestion">Show me your projects</button>
                        <button type="button" class="chatbot-suggestion">How can I contact you?</button>
                    </div>
                </div>

                <form class="chatbot-form" id="chatbotForm">
                    <label class="visually-hidden" for="chatbotInput">Your message</label>
                    <input id="chatbotInput" name="message" type="text" maxlength="500" autocomplete="off" placeholder="Ask me anything..." required>
                    <button type="submit" aria-label="Send message">
                        <i class="bi bi-arrow-up" aria-hidden="true"></i>
                    </button>
                </form>
                <p class="chatbot-note">Replies are based on the information on this portfolio.</p>
            </section>
            <button class="chatbot-launcher" id="chatbotLauncher" type="button" aria-controls="chatbotPanel" aria-expanded="false" aria-label="Open portfolio assistant">
                <i class="bi bi-chat-dots-fill chatbot-launcher-icon" aria-hidden="true"></i>
                <i class="bi bi-x-lg chatbot-launcher-close" aria-hidden="true"></i>
                <span class="chatbot-launcher-label">Chat with me</span>
            </button>
        </div>
        
        <script> 

            (() => {
                const roleText = document.getElementById('roleText');

                if (!roleText) {
                    return;
                }

                const roles = ['Web Developer', 'Graphic Designer'];
                const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
                let currentRole = 0;

                window.setInterval(() => {
                    if (!prefersReducedMotion) {
                        roleText.classList.add('fade');
                    }

                    window.setTimeout(() => {
                        currentRole = (currentRole + 1) % roles.length;
                        roleText.textContent = roles[currentRole];
                        roleText.classList.remove('fade');
                    }, prefersReducedMotion ? 0 : 400);
                }, 3000);
            })();

        </script>

        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
        <script src="assets/js/navbar.js" defer></script>
        <script src="assets/js/hero-role.js" defer></script>
        <script src="assets/js/assistant.js" defer></script>
    </body>
</html>