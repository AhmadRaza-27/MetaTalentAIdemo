<?php

// ============================================================
// Main navigation for public website
// ============================================================

$navMain = [
    [
        'label' => 'Home',
        'href' => 'index.php'
    ],
    [
        'label' => 'Dashboard',
        'href' => 'dashboard.php'
    ],
    [
        'label' => 'Command Center',
        'href' => 'command-center.php'
    ],
    [
        'label' => 'Shared Workspace',
        'href' => 'shared-workspace.php'
    ],
];


// ============================================================
// Sidebar navigation for application pages
// ============================================================

$sidebarMain = [
    [
        'label' => 'Your Command Center',
        'icon' => 'grid',
        'href' => 'command-center.php'
    ],
    [
        'label' => 'Orchestration Dashboard',
        'icon' => 'gauge',
        'href' => 'dashboard.php'
    ],
    [
        'label' => 'Shared Workspace',
        'icon' => 'users',
        'href' => 'shared-workspace.php'
    ],
    [
        'label' => 'Intelligence Profile',
        'icon' => 'user',
        'href' => 'ai-multiplier.php'
    ],
];

$sidebarSecondary = [
    [
        'label' => 'Agentic NHI Control',
        'icon' => 'shield',
        'href' => 'orchestration.php'
    ],
    [
        'label' => 'Settings',
        'icon' => 'settings',
        'href' => 'settings.php'
    ],
];


// ============================================================
// Capability cards for landing page
// ============================================================

$capabilityCards = [
    [
        'heading' => 'Human-Agent Collaboration',
        'body' => 'Enable human experts and AI agents to work together in real time through shared workflows.',
        'gradient' => 'linear-gradient(135deg, #6a5cff, #8f6bff)',
        'href' => 'shared-workspace.php'
    ],
    [
        'heading' => 'Continuous Upskilling',
        'body' => 'Turn everyday human-agent interactions into continuous workforce learning and capability development.',
        'gradient' => 'linear-gradient(135deg, #00b4db, #0083b0)',
        'href' => 'timeline.php'
    ],
    [
        'heading' => 'Institutional Memory',
        'body' => 'Capture expert decisions, interventions, and valuable insights so organizational knowledge keeps growing.',
        'gradient' => 'linear-gradient(135deg, #ff6a88, #ff99ac)',
        'href' => 'institutional-memory.php'
    ],
];


// ============================================================
// Testimonials for landing page
// ============================================================

$testimonials = [
    [
        'quote' => 'Human expertise and AI execution work together to create a continuously improving workforce.',
        'author' => 'Workforce Transformation Team'
    ],
    [
        'quote' => 'Every interaction becomes an opportunity to improve capability, knowledge, and execution.',
        'author' => 'MetatalentAI Platform'
    ],
    [
        'quote' => 'AI handles execution while humans maintain context, judgment, and governance.',
        'author' => 'Orion X 2.0'
    ],
];


// ============================================================
// Static reference data for dashboard
// ============================================================

$taskSplit = [
    [
        'label' => 'AI Tasks',
        'value' => '12,840',
        'delta' => '+12.8% auto-resolve'
    ],
    [
        'label' => 'Shared Tasks',
        'value' => '2,100',
        'delta' => 'Seamless Handoff'
    ],
    [
        'label' => 'Human Tasks',
        'value' => '3,420',
        'delta' => '+2.4% escalation rate'
    ],
];


// ============================================================
// Ratio groups for dashboard
// ============================================================

$ratioGroups = [

    [
        'title' => 'Mean Time to Resolution (MTTR)',

        'rows' => [
            [
                'label' => 'Automated',
                'value' => '1.4s'
            ],
            [
                'label' => 'Human-in-Loop',
                'value' => '42s'
            ],
        ],
    ],

    [
        'title' => 'Handoff Efficiency',

        'rows' => [
            [
                'label' => 'Handoff Friction',
                'value' => '38s avg'
            ],
            [
                'label' => 'Takeover Rate',
                'value' => '94.2%'
            ],
        ],
    ],

    [
        'title' => 'Workforce Transformation',

        'rows' => [
            [
                'label' => 'AI-Resilience Growth',
                'value' => '+18.4% L3'
            ],
            [
                'label' => 'Automatable Task Risk',
                'value' => '-12.0%'
            ],
        ],
    ],

];


// ============================================================
// Shared Workspace reference data
// ============================================================

$workspaceAgents = [
    [
        'name' => 'Market Intelligence',
        'short_name' => 'MI',
        'description' => 'Research & Analysis',
        'status' => 'Online'
    ],
    [
        'name' => 'Customer Support',
        'short_name' => 'CS',
        'description' => 'Support Analysis',
        'status' => 'Online'
    ],
    [
        'name' => 'Workforce Analyst',
        'short_name' => 'HR',
        'description' => 'Capability Planning',
        'status' => 'Online'
    ],
    [
        'name' => 'Document Intelligence',
        'short_name' => 'DI',
        'description' => 'Knowledge Extraction',
        'status' => 'Online'
    ],
];


// ============================================================
// Shared Workspace tasks
// ============================================================

$workspaceTasks = [
    [
        'title' => 'Customer Support Analysis',
        'description' => 'Analyze recent support conversations and identify recurring customer issues.',
        'agent' => 'AI Research Agent',
        'due' => 'Due in 24 min',
        'progress' => 78,
        'status' => 'In Progress'
    ],
    [
        'title' => 'Market Intelligence Report',
        'description' => 'Compare competitor positioning and prepare an executive-level market summary.',
        'agent' => 'Market Intelligence Agent',
        'due' => 'Due in 46 min',
        'progress' => 56,
        'status' => 'In Progress'
    ],
    [
        'title' => 'Workforce Capability Review',
        'description' => 'Review AI-generated capability recommendations before publishing them to the team.',
        'agent' => 'Human Expert',
        'due' => 'Awaiting review',
        'progress' => 91,
        'status' => 'Review'
    ],
    [
        'title' => 'Document Intelligence',
        'description' => 'Extract important information from uploaded organizational documents.',
        'agent' => 'Document Agent',
        'due' => 'Due in 1 hr',
        'progress' => 34,
        'status' => 'In Progress'
    ],
];


// ============================================================
// Application metadata
// ============================================================

$workspaceStats = [
    [
        'label' => 'Active Agents',
        'value' => '4',
        'detail' => 'All operational'
    ],
    [
        'label' => 'Shared Tasks',
        'value' => '18',
        'detail' => '6 in progress'
    ],
    [
        'label' => 'Completed Today',
        'value' => '42',
        'detail' => '+18.4%'
    ],
    [
        'label' => 'Human Reviews',
        'value' => '7',
        'detail' => '3 awaiting review'
    ],
];