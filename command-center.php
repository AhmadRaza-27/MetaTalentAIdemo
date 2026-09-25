<?php
$pageTitle = 'Your Command Center';

require_once __DIR__ . '/includes/app-header.php';
?>

<!-- Command Center Hero -->
<section class="command-hero">

    <div>
        <p class="command-eyebrow">HUMAN × AGENT COLLABORATION</p>

        <h2>
            Your Workforce
            <span class="gradient-text">Command Center</span>
        </h2>

        <p class="command-description">
            Monitor human-agent collaboration, manage active workflows,
            and see how your workforce capability is evolving in real time.
        </p>
    </div>

    <div class="command-status">
        <span class="status-dot"></span>
        <div>
            <strong>System Online</strong>
            <small>All systems operational</small>
        </div>
    </div>

</section>


<!-- Overview Cards -->
<section class="command-section">

    <div class="section-heading">
        <div>
            <h2>Workforce Overview</h2>
            <p>Real-time view of your human-agent workforce.</p>
        </div>

        <span class="live-badge">
            ● LIVE
        </span>
    </div>


    <div class="command-stats">

        <article class="command-stat-card">

            <div class="stat-icon purple">
                ◉
            </div>

            <div>
                <span class="stat-label">Active Agents</span>
                <strong class="stat-number">12</strong>
                <span class="stat-change positive">
                    ↑ 14.2% this week
                </span>
            </div>

        </article>


        <article class="command-stat-card">

            <div class="stat-icon blue">
                ⇄
            </div>

            <div>
                <span class="stat-label">Active Collaborations</span>
                <strong class="stat-number">38</strong>
                <span class="stat-change positive">
                    ↑ 8.6% today
                </span>
            </div>

        </article>


        <article class="command-stat-card">

            <div class="stat-icon pink">
                ✓
            </div>

            <div>
                <span class="stat-label">Tasks Completed</span>
                <strong class="stat-number">1,284</strong>
                <span class="stat-change positive">
                    ↑ 18.4% this month
                </span>
            </div>

        </article>


        <article class="command-stat-card">

            <div class="stat-icon orange">
                ⚡
            </div>

            <div>
                <span class="stat-label">Capability Multiplier</span>
                <strong class="stat-number">8.4x</strong>
                <span class="stat-change positive">
                    ↑ 1.2x improvement
                </span>
            </div>

        </article>

    </div>

</section>


<!-- Main Command Grid -->
<section class="command-section">

    <div class="command-grid">

        <!-- Active Workflows -->
        <article class="command-panel workflows-panel">

            <div class="panel-header">

                <div>
                    <h3>Active Workflows</h3>
                    <p>Current human-agent executions</p>
                </div>

                <a href="dashboard.php" class="panel-link">
                    View Dashboard →
                </a>

            </div>


            <div class="workflow-list">

                <div class="workflow-item">

                    <div class="workflow-avatar purple-bg">
                        AI
                    </div>

                    <div class="workflow-info">

                        <strong>Customer Support Analysis</strong>

                        <span>
                            AI Agent → Human Expert
                        </span>

                        <div class="progress-track">
                            <div class="progress-bar purple-progress" style="width: 78%;"></div>
                        </div>

                    </div>

                    <div class="workflow-status active-status">
                        Active
                    </div>

                </div>


                <div class="workflow-item">

                    <div class="workflow-avatar blue-bg">
                        AI
                    </div>

                    <div class="workflow-info">

                        <strong>Market Intelligence Report</strong>

                        <span>
                            AI Agent → AI Agent
                        </span>

                        <div class="progress-track">
                            <div class="progress-bar blue-progress" style="width: 56%;"></div>
                        </div>

                    </div>

                    <div class="workflow-status active-status">
                        Active
                    </div>

                </div>


                <div class="workflow-item">

                    <div class="workflow-avatar pink-bg">
                        HR
                    </div>

                    <div class="workflow-info">

                        <strong>Workforce Capability Review</strong>

                        <span>
                            Human Expert → AI Agent
                        </span>

                        <div class="progress-track">
                            <div class="progress-bar pink-progress" style="width: 91%;"></div>
                        </div>

                    </div>

                    <div class="workflow-status review-status">
                        Review
                    </div>

                </div>


                <div class="workflow-item">

                    <div class="workflow-avatar orange-bg">
                        AI
                    </div>

                    <div class="workflow-info">

                        <strong>Document Intelligence</strong>

                        <span>
                            AI Agent → Human Expert
                        </span>

                        <div class="progress-track">
                            <div class="progress-bar orange-progress" style="width: 34%;"></div>
                        </div>

                    </div>

                    <div class="workflow-status active-status">
                        Active
                    </div>

                </div>

            </div>

        </article>


        <!-- Workforce Health -->
        <article class="command-panel health-panel">

            <div class="panel-header">

                <div>
                    <h3>Workforce Health</h3>
                    <p>Capability and workload indicators</p>
                </div>

            </div>


            <div class="health-score">

                <div class="score-circle">
                    <span>94</span>
                    <small>/100</small>
                </div>

                <div>
                    <strong>Optimal</strong>
                    <p>
                        Workforce collaboration is performing
                        above the current baseline.
                    </p>
                </div>

            </div>


            <div class="health-metrics">

                <div class="health-row">
                    <span>Agent Utilization</span>

                    <div class="health-progress">
                        <div style="width: 86%;"></div>
                    </div>

                    <strong>86%</strong>
                </div>


                <div class="health-row">
                    <span>Human Capacity</span>

                    <div class="health-progress">
                        <div style="width: 72%;"></div>
                    </div>

                    <strong>72%</strong>
                </div>


                <div class="health-row">
                    <span>Handoff Efficiency</span>

                    <div class="health-progress">
                        <div style="width: 94%;"></div>
                    </div>

                    <strong>94%</strong>
                </div>

            </div>

        </article>

    </div>

</section>


<!-- Collaboration Feed -->
<section class="command-section">

    <div class="section-heading">

        <div>
            <h2>Collaboration Activity</h2>
            <p>Recent events across your human-agent workforce.</p>
        </div>

        <a href="timeline.php" class="panel-link">
            View Timeline →
        </a>

    </div>


    <div class="activity-card">

        <div class="activity-item">

            <div class="activity-icon purple-bg">
                AI
            </div>

            <div class="activity-content">
                <strong>AI Agent completed a research task</strong>

                <p>
                    Market Intelligence Agent generated a
                    12-source competitive analysis.
                </p>

                <span>2 minutes ago</span>
            </div>

        </div>


        <div class="activity-item">

            <div class="activity-icon blue-bg">
                H
            </div>

            <div class="activity-content">
                <strong>Human expert reviewed an AI output</strong>

                <p>
                    Sarah approved the customer-support
                    response with minor edits.
                </p>

                <span>8 minutes ago</span>
            </div>

        </div>


        <div class="activity-item">

            <div class="activity-icon pink-bg">
                +
            </div>

            <div class="activity-content">
                <strong>New collaboration started</strong>

                <p>
                    Workforce Analyst assigned an AI agent
                    to assist with capability assessment.
                </p>

                <span>16 minutes ago</span>
            </div>

        </div>


        <div class="activity-item">

            <div class="activity-icon orange-bg">
                ✓
            </div>

            <div class="activity-content">
                <strong>Workflow completed successfully</strong>

                <p>
                    Document Intelligence workflow completed
                    with human verification.
                </p>

                <span>24 minutes ago</span>
            </div>

        </div>

    </div>

</section>


<!-- Quick Actions -->
<section class="command-section">

    <div class="section-heading">

        <div>
            <h2>Quick Actions</h2>
            <p>Jump directly into your workforce tools.</p>
        </div>

    </div>


    <div class="quick-actions">

        <a href="shared-workspace.php" class="quick-action-card">

            <div class="quick-action-icon purple-bg">
                ⇄
            </div>

            <div>
                <strong>Open Shared Workspace</strong>
                <p>Collaborate with AI agents in real time.</p>
            </div>

            <span>→</span>

        </a>


        <a href="dashboard.php" class="quick-action-card">

            <div class="quick-action-icon blue-bg">
                ◈
            </div>

            <div>
                <strong>View Orchestration Dashboard</strong>
                <p>Monitor tasks, agents, and workforce metrics.</p>
            </div>

            <span>→</span>

        </a>


        <a href="institutional-memory.php" class="quick-action-card">

            <div class="quick-action-icon pink-bg">
                ✦
            </div>

            <div>
                <strong>Explore Institutional Memory</strong>
                <p>Review captured organizational knowledge.</p>
            </div>

            <span>→</span>

        </a>

    </div>

</section>


<!-- Bottom CTA -->
<section class="command-cta">

    <div>

        <span>METATALENT.AI</span>

        <h2>
            Turn every interaction into
            <span class="gradient-text">greater capability.</span>
        </h2>

        <p>
            Human expertise and AI execution working together
            to create a continuously improving workforce.
        </p>

    </div>

    <a href="shared-workspace.php" class="btn-gradient">
        Start Collaboration →
    </a>

</section>


<?php
require_once __DIR__ . '/includes/app-footer.php';
?>