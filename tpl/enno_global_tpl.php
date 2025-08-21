<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$ev_is_project_live = "YES";
$ev_pagename = basename($_SERVER['PHP_SELF']);
$ev_domain_name = $_SERVER['SERVER_NAME'];

$ev_project_name = "Akshay Netra";
$ev_website_name = $ev_project_name;
$ev_website_email = $ev_project_name . ' <info@AkshayNetra.com>';
$ev_website_only_email = 'info@AkshayNetra.com';

$ev_website_domain_name = 'AkshayNetra.com';
$ev_website_domain_name_with_www = 'www.' . $ev_website_domain_name;
$ev_website_url = "https://" . $ev_website_domain_name . "/";
$ev_website_url_with_www = "https://" . $ev_website_domain_name_with_www . "/";

$ev_product_of_company_link = "https://jjfindia.com/";
$ev_product_of_company_name = "Jainam Jivika Foundation.";
$ev_product_app_url = "https://app.leadsmagix.com/";

$seo_name_array = evGenerateTitleAndHeading();
$ev_page_title = $seo_name_array['title'];
$ev_page_heading = $seo_name_array['heading'];
$ev_page_breadcrumb = $seo_name_array['breadcrumb'];

if (date('Y') == "2024") {
    $ev_copyrights_years_string = "2024";
} else {
    $ev_copyrights_years_string = "2024 - " . date('Y');
}

// Social Links
$ev_facebook_link = 'https://www.facebook.com/TeamAkshayNetra/';
$ev_instagram_link = 'https://www.instagram.com/TeamAkshayNetra/';
$ev_linkedin_link = 'https://www.linkedin.com/company/TeamAkshayNetra/';
$ev_twitter_link = 'https://x.com/TeamAkshayNetra/';
$ev_thread_link = 'https://www.threads.net/@TeamAkshayNetra/';
$ev_quora_link = 'https://www.quora.com/profile/TeamAkshayNetra';
$ev_pinterest_link = 'https://in.pinterest.com/TeamAkshayNetra/';
$ev_youtube_link = 'https://www.youtube.com/@TeamAkshayNetra';
$ev_medium_link = 'https://medium.com/@TeamAkshayNetra/';

$ev_reddit_link = '#';
$ev_discord_link = '#';
$ev_whatapp_link = '#';
$ev_google_plus_link = '#';

// Addresses
$ev_website_corporate_office_address = "Jainam Jivika Foundation 3, Jainam Tower, 3, Sai Park, <br> Belthika Nagar, Thergaon (Chinchwad), <br> Pune - 411033, Maharashtra, India.";
$ev_website_corporate_office_map_link = "https://maps.app.goo.gl/BEGUYHKZLUwgUvJC8";

$ev_website_registered_office_address = "Jainam Jivika Foundation 3, Jainam Tower, 3, Sai Park, <br> Belthika Nagar, Thergaon (Chinchwad), <br> Pune - 411033, Maharashtra, India.";
$ev_website_registered_office_map_link = "https://maps.app.goo.gl/BEGUYHKZLUwgUvJC8";

$ev_website_phone = "+91 9525022502";
$ev_page_extention = '';

// APIs
$ev_policy_generator_api_url = "https://privacies.mini91.com//policy-generator.php";
$ev_marscms_api_url = "https://marscms-api.mini91.com/api/";
$ev_marscms_api_key = "67eb9f87129fda7a090e975a";

// List of Valid Pages
$ev_pages_array = array(
    '404.php', 'about-us.php', 'index.php', 'hospitals.php', 'volunteer.php', 'organisations.php', 'influencer.php', 'eye-bank.php',
    'eye-donation.php', 'how-to-help.php', 'importance-of-eye-donation.php', 'myth-vs-fact.php', 'faqs.php', 'contact-us.php',
    'role-of-hospital.php', 'donor.php', 'encourage-families.php', 'hospital-resources.php', 'hospitals-faqs.php', 'why-become-volunteer.php',
    'volunteer-with-us.php', 'awareness-campaigns.php', 'stories-of-change.php', 'volunteer-faqs.php', 'why-organisations-should-get-involved.php',
    'csr-opportunities.php', 'organisations-success-stories.php', 'organisations-faqs.php', 'why-influencers-are-key-to-eye-donation-awareness.php',
    'campaign-guidelines.php', 'impact-stories.php', 'influencer-faqs.php', 'eye-bank-directory.php', 'register.php', 'eye-bank-resources.php',
    'eye-bank-faqs.php', 'financial-support.php', 'donation-in-kind.php', 'donor-impact-stories.php', 'donor-resources.php', 'donor-faqs.php',
	'privacy-policy.php','terms-and-conditions.php'
);

// Validate current page
$ev_pagename = strtolower(trim($ev_pagename));
$ev_pages_array = array_map('strtolower', $ev_pages_array);

if ($ev_pagename === "" || !in_array($ev_pagename, $ev_pages_array)) {
    echo "Something went wrong - page is not defined in pages array.";
    exit;
}

// Global Functions

function evGetPolicyContent($policy_url, $policy_type, $product_website, $product_email, $last_modified_date = "28th March 2025", $policy_version = "indian", $registered_country = "India", $div_id = "policy-content")
{
    ?>
    <div id="<?php echo $div_id; ?>" class="container py-50" style="margin-top: 20px; margin-bottom: 20px;">
        <h2>Loading Privacy Policy...</h2>
        <p>Please wait while we fetch the latest privacy policy.</p>
        <p>If the policy does not load, please check your internet connection or try again later.</p>
    </div>

    <script>
        (function () {
            const params = {
                policy_type: "<?php echo $policy_type; ?>",
                product_website: "<?php echo $product_website; ?>",
                product_email: "<?php echo $product_email; ?>",
                last_modified_date: "<?php echo $last_modified_date; ?>",
                policy_version: "<?php echo $policy_version; ?>",
                registered_country: "<?php echo $registered_country; ?>",
            };

            const queryString = Object.keys(params)
                .map(key => `${encodeURIComponent(key)}=${encodeURIComponent(params[key])}`)
                .join("&");

            const url = `<?php echo $policy_url; ?>?${queryString}`;

            fetch(url)
                .then(response => response.text())
                .then(data => {
                    document.getElementById("<?php echo $div_id; ?>").innerHTML = data;
                })
                .catch(error => {
                    document.getElementById("<?php echo $div_id; ?>").innerHTML = "Failed to load policy page: " + error;
                    console.error("Fetch Error:", error);
                });
        })();
    </script>
    <?php
}

function evGenerateTitleAndHeading()
{
    global $ev_project_name, $ev_pagename;

    $exploded_pagename = explode('.php', $ev_pagename);
    $page_key = $exploded_pagename[0];

    $base_title = ucwords(str_replace(['_', '-'], ' ', $page_key));
    $base_title = str_ireplace(' A ', ' a ', $base_title);
    $base_title = str_ireplace(' And ', ' & ', $base_title);
    $base_title = str_ireplace(' An ', ' an ', $base_title);
    $base_title = str_ireplace(' For ', ' for ', $base_title);

    switch ($ev_pagename) {
        case 'index.php':
            $base_title = "Home";
            break;
        default:
            break;
    }

    $heading = ($ev_pagename === 'index.php') ? "Home" : $base_title;
    $breadcrumb = ($ev_pagename === 'index.php') ? "Home" : $base_title;

    return [
        'title' => $base_title . ' || ' . $ev_project_name,
        'heading' => $heading,
        'breadcrumb' => $breadcrumb,
    ];
}

function evVisitorLogs()
{
    $page = $_SERVER['REQUEST_URI'];
    $ip = $_SERVER['REMOTE_ADDR'] ?? 'Unknown IP';
    $agent = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown Agent';
    $referer = $_SERVER['HTTP_REFERER'] ?? 'Direct';
    $datetime = date("Y-m-d H:i:s");

    $year = date("Y");
    $month_day = date("m-d");
    $hour = date("H");
    $base_dir = dirname(__DIR__) . "/visitor_logs";
    $log_dir = "$base_dir/$year/$month_day";

    if (!is_dir($log_dir)) {
        mkdir($log_dir, 0777, true);
    }

    $log_file = "$log_dir/$hour.txt";
    $log_entry = "[$datetime] IP: $ip | Page: $page | Agent: $agent | Referer: $referer" . PHP_EOL;

    file_put_contents($log_file, $log_entry, FILE_APPEND | LOCK_EX);
}

function evCleanupOldVisitorLogs($base_dir = null, $days = 10)
{
    if ($base_dir === null) {
        $base_dir = dirname(__DIR__) . '/visitor_logs';
    }

    $now = time();

    if (!is_dir($base_dir)) return;

    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($base_dir, RecursiveDirectoryIterator::SKIP_DOTS),
        RecursiveIteratorIterator::CHILD_FIRST
    );

    foreach ($iterator as $fileinfo) {
        $file_path = $fileinfo->getRealPath();
        $file_time = $fileinfo->getMTime();

        if ($now - $file_time > ($days * 86400)) {
            if ($fileinfo->isFile()) {
                unlink($file_path);
            } elseif ($fileinfo->isDir()) {
                @rmdir($file_path);
            }
        }
    }
}

// Run visitor logging
evVisitorLogs();
// Optional cleanup (move to cron)
/// evCleanupOldVisitorLogs();

?>
