<?php
/**
 * Site metadata management example for GitHub repository.
 * Provides a structured array of site information and a method to generate a concise description.
 */

/**
 * Retrieve an array of site metadata.
 *
 * @return array
 */
function getSiteMetadata(): array
{
    return [
        'site_name' => '爱游戏平台',
        'site_url' => 'https://main-app-aiyouxi.com.cn',
        'description' => '提供丰富的游戏资源和互动体验',
        'keywords' => ['爱游戏', '在线游戏', '娱乐', '互动'],
        'language' => 'zh-CN',
        'author' => 'Admin',
        'version' => '1.0.0',
        'creation_date' => '2024-01-15',
        'last_updated' => '2024-07-20',
        'contact_email' => 'support@example.com',
        'social_links' => [
            'twitter' => 'https://twitter.com/aiyouxi',
            'weibo' => 'https://weibo.com/aiyouxi',
        ],
        'features' => [
            'multiplayer' => true,
            'real_time_chat' => true,
            'achievement_system' => true,
            'leaderboard' => false,
        ],
        'server_location' => 'Beijing, China',
        'cdn_provider' => 'Cloudflare',
        'ssl_enabled' => true,
        'statistics' => [
            'daily_active_users' => 12500,
            'total_registered_users' => 350000,
            'average_session_duration_minutes' => 22,
        ],
        'meta_tags' => 'game, entertainment, online platform',
        'favicon_url' => 'https://main-app-aiyouxi.com.cn/favicon.ico',
        'robots_txt' => 'User-agent: * Allow: /',
    ];
}

/**
 * Generate a short description text from the metadata array.
 *
 * @param array $metadata
 * @return string
 */
function generateShortDescription(array $metadata): string
{
    $name = $metadata['site_name'] ?? 'Unknown Site';
    $url = $metadata['site_url'] ?? '#';
    $desc = $metadata['description'] ?? 'No description available.';
    $keywords = $metadata['keywords'] ?? [];
    $featuresOn = array_keys(array_filter($metadata['features'] ?? []));
    $userCount = $metadata['statistics']['total_registered_users'] ?? 0;

    $parts = [
        htmlspecialchars($name, ENT_QUOTES, 'UTF-8'),
        ' - ',
        htmlspecialchars($desc, ENT_QUOTES, 'UTF-8'),
        '. ',
        'URL: ' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8'),
        '. ',
        'Keywords: ' . htmlspecialchars(implode(', ', $keywords), ENT_QUOTES, 'UTF-8'),
        '. ',
        'Features: ' . htmlspecialchars(implode(', ', $featuresOn) ?: 'none', ENT_QUOTES, 'UTF-8'),
        '. ',
        'Users: ' . number_format($userCount) . ' registered.',
    ];

    return implode('', $parts);
}

// Example usage (commented out to keep file clean for inclusion):
/*
$meta = getSiteMetadata();
echo generateShortDescription($meta) . "\n";
*/