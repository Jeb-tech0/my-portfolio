(() => {
    const launcher = document.getElementById('chatbotLauncher');
    const panel = document.getElementById('chatbotPanel');
    const closeButton = document.getElementById('chatbotClose');
    const form = document.getElementById('chatbotForm');
    const input = document.getElementById('chatbotInput');
    const messages = document.getElementById('chatbotMessages');
    const suggestions = document.getElementById('chatbotSuggestions');

    if (!launcher || !panel || !closeButton || !form || !input || !messages || !suggestions) {
        return;
    }

    const setOpen = (open) => {
        panel.hidden = !open;
        launcher.setAttribute('aria-expanded', String(open));
        launcher.setAttribute('aria-label', open ? 'Close portfolio assistant' : 'Open portfolio assistant');

        if (open) {
            input.focus();
        }
    };

    const addMessage = (text, sender, allowLinks = false) => {
        const message = document.createElement('div');
        message.className = `chatbot-message chatbot-message--${sender}`;
        const paragraph = document.createElement('p');

        if (allowLinks) {
            paragraph.innerHTML = text;
        } else {
            paragraph.textContent = text;
        }

        message.appendChild(paragraph);
        messages.appendChild(message);
        messages.scrollTop = messages.scrollHeight;
        return message;
    };

    const sendMessage = async (messageText) => {
        addMessage(messageText, 'user');
        suggestions.hidden = true;
        input.disabled = true;
        form.querySelector('button[type="submit"]').disabled = true;

        const typing = addMessage('Thinking…', 'assistant');
        typing.classList.add('chatbot-message--typing');

        try {
            const response = await fetch('reply.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
                body: JSON.stringify({ message: messageText })
            });
            let data;

            try {
                data = await response.json();
            } catch {
                throw new Error('The assistant returned an invalid response. Please try again.');
            }

            if (!response.ok || !data || typeof data !== 'object' || typeof data.reply !== 'string') {
                const errorMessage = data && typeof data.error === 'string'
                    ? data.error
                    : 'The assistant could not reply. Please try again.';
                throw new Error(errorMessage);
            }

            typing.remove();
            addMessage(data.reply, 'assistant', true);
        } catch (error) {
            typing.remove();
            addMessage(error instanceof Error ? error.message : 'The assistant could not reply. Please try again.', 'assistant');
        } finally {
            input.disabled = false;
            form.querySelector('button[type="submit"]').disabled = false;
            input.focus();
        }
    };

    launcher.addEventListener('click', () => setOpen(panel.hidden));
    closeButton.addEventListener('click', () => setOpen(false));

    form.addEventListener('submit', (event) => {
        event.preventDefault();
        const messageText = input.value.trim();

        if (!messageText) {
            input.focus();
            return;
        }

        input.value = '';
        sendMessage(messageText);
    });

    suggestions.addEventListener('click', (event) => {
        const button = event.target.closest('.chatbot-suggestion');

        if (button) {
            sendMessage(button.textContent.trim());
        }
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && !panel.hidden) {
            setOpen(false);
            launcher.focus();
        }
    });
})();
