<?php
header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store, max-age=0');
header('X-Content-Type-Options: nosniff');

function chatbotRespond(int $status, array $payload): void
{
    http_response_code($status);
    echo json_encode($payload, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    exit;
}

function chatbotContainsAny(string $message, array $keywords): bool
{
    foreach ($keywords as $keyword) {
        $pattern = '/(?<![\p{L}\p{N}])' . preg_quote($keyword, '/') . '(?![\p{L}\p{N}])/iu';
        if (preg_match($pattern, $message) === 1) {
            return true;
        }
    }

    return false;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Allow: POST');
    chatbotRespond(405, ['error' => 'Send a message using POST.']);
}

$requestBody = file_get_contents('php://input');
if ($requestBody === false || strlen($requestBody) > 4096) {
    chatbotRespond(413, ['error' => 'Your message is too long. Please shorten it and try again.']);
}

$request = json_decode($requestBody, true);
if (!is_array($request) || !isset($request['message']) || !is_string($request['message'])) {
    chatbotRespond(400, ['error' => 'Please enter a message to send.']);
}

$message = trim($request['message']);
if ($message === '' || strlen($message) > 2000) {
    chatbotRespond(400, ['error' => 'Please enter a message between 1 and 500 characters.']);
}

$message = strtolower($message);
$reply = null;

if (preg_match('/^(hi|hello|hey|good morning|good afternoon|good evening)[!. ]*$/', $message)) {
    $reply = 'Hello! I can tell you about Emmanuel’s services, projects, experience, or contact details. What would you like to know?';
} elseif (chatbotContainsAny($message, ['price', 'pricing', 'cost', 'how much', 'quote', 'budget', 'rate'])) {
    $reply = 'Pricing depends on the project’s scope. Share what you have in mind through the contact form or email jibuinemmanuelb@gmail.com to discuss a quote.';
} elseif (chatbotContainsAny($message, ['business dashboard', 'dashboard'])) {
    $reply = 'The Business Dashboard is a responsive analytics web app for tracking sales, performance, customer engagement, and KPIs. <a href="index.php#projects">See it in the project list</a>.';
} elseif (chatbotContainsAny($message, ['brand storefront', 'storefront', 'e-commerce', 'ecommerce', 'online store', 'shop'])) {
    $reply = 'The Brand Storefront is an e-commerce concept focused on product discovery, clean user experience, and conversions. <a href="index.php#projects">See it in the project list</a>.';
} elseif (chatbotContainsAny($message, ['creative portfolio', 'portfolio project', 'portfolio site'])) {
    $reply = 'The Creative Portfolio is a platform concept for presenting visual work and client case studies. <a href="index.php#projects">See it in the project list</a>.';
} elseif (chatbotContainsAny($message, ['client portal', 'saas'])) {
    $reply = 'The Client Portal is a SaaS concept with user access, reports, and structured task tracking. <a href="index.php#projects">See it in the project list</a>.';
} elseif (chatbotContainsAny($message, ['mobile interface', 'ui/ux', 'ui ux', 'user interface'])) {
    $reply = 'The Mobile Interface is a clean, mobile-first UI/UX concept designed for usability and accessibility. <a href="index.php#projects">See it in the project list</a>.';
} elseif (chatbotContainsAny($message, ['network monitor', 'network monitoring'])) {
    $reply = 'The Network Monitor is a system dashboard concept for visualizing traffic, device performance, and system health. <a href="index.php#projects">See it in the project list</a>.';
} elseif (chatbotContainsAny($message, ['available', 'availability', 'accepting', 'taking projects', 'taking new projects', 'taking on projects', 'taking on new projects', 'hire you'])) {
    $reply = 'The portfolio indicates Emmanuel is available for projects. Tell him about your idea using the <a href="index.php#contact">contact form</a> or email jibuinemmanuelb@gmail.com.';
} elseif (chatbotContainsAny($message, ['project', 'projects', 'work', 'works', 'case study', 'case studies', 'show me'])) {
    $reply = 'Featured work includes a Business Dashboard, Brand Storefront, Creative Portfolio, Client Portal, Mobile Interface, and Network Monitor. <a href="index.php#projects">Browse all projects</a>.';
} elseif (chatbotContainsAny($message, ['service', 'services', 'what do you do', 'offer', 'offers', 'web design', 'website', 'websites', 'web development', 'graphic', 'branding', 'network', 'networking', 'diagnostic', 'installation'])) {
    $reply = 'Emmanuel offers web development and design, graphic design and branding, network diagnostics, and network installation. UI/UX services are listed as upcoming. <a href="index.php#services">See the services</a>.';
} elseif (chatbotContainsAny($message, ['resume', 'résumé', 'cv', 'curriculum'])) {
    $reply = 'You can download Emmanuel’s resume from the <a href="assets/jibuin-emmanuel.pdf" download>resume link</a> on the About section.';
} elseif (chatbotContainsAny($message, ['experience', 'background', 'skill', 'skills', 'about', 'who are you', 'who is emmanuel', 'education'])) {
    $reply = 'Emmanuel Jibuin is a multidisciplinary technology professional with experience in web development, graphic design, and IT/network support. Skills include HTML, CSS, PHP, JavaScript, responsive design, and network troubleshooting. <a href="index.php#about">Read more about Emmanuel</a>.';
} elseif (chatbotContainsAny($message, ['contact', 'email', 'phone', 'call', 'reach', 'location', 'where'])) {
    $reply = 'You can reach Emmanuel at <a href="mailto:jibuinemmanuelb@gmail.com">jibuinemmanuelb@gmail.com</a> or call (+237) 652 280 826 / 621 740 776. He is based in Douala Bonaberi, Cameroon. <a href="index.php#contact">Go to the contact section</a>.';
} elseif (chatbotContainsAny($message, ['thank', 'thanks', 'thank you'])) {
    $reply = 'You’re welcome! If you have another question, I’m happy to help.';
} else {
    $reply = 'I’m not sure about that yet. I can help with Emmanuel’s services, projects, experience, resume, pricing enquiries, and contact details. You can also <a href="index.php#contact">send a message directly</a>.';
}

chatbotRespond(200, ['reply' => $reply]);
