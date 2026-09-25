<?php
$pageTitle = 'Shared Workspace';

require_once __DIR__ . '/includes/app-header.php';
?>

<!-- Workspace Hero -->
<section class="workspace-hero">

    <div>
        <p class="workspace-eyebrow">HUMAN × AGENT SHARED EXECUTION</p>

        <h2>
            Shared
            <span class="gradient-text">Workspace</span>
        </h2>

        <p class="workspace-description">
            Work alongside AI agents in a shared execution environment.
            Review outputs, assign tasks, and keep humans in control of every workflow.
        </p>
    </div>

    <div class="workspace-status">
        <span class="status-dot"></span>

        <div>
            <strong>Workspace Active</strong>
            <small>4 agents collaborating</small>
        </div>
    </div>

</section>


<!-- Workspace Stats -->
<section class="workspace-section">

    <div class="section-heading">

        <div>
            <h2>Workspace Overview</h2>
            <p>Current collaboration activity across your workforce.</p>
        </div>

        <span class="live-badge">● LIVE</span>

    </div>


    <div class="workspace-stats">

        <article class="workspace-stat-card">

            <div class="workspace-stat-icon purple-bg">
                AI
            </div>

            <div>
                <span class="stat-label">Active Agents</span>
                <strong class="stat-number">4</strong>
                <span class="stat-change positive">
                    All operational
                </span>
            </div>

        </article>


        <article class="workspace-stat-card">

            <div class="workspace-stat-icon blue-bg">
                ⇄
            </div>

            <div>
                <span class="stat-label">Shared Tasks</span>
                <strong class="stat-number">18</strong>
                <span class="stat-change positive">
                    6 in progress
                </span>
            </div>

        </article>


        <article class="workspace-stat-card">

            <div class="workspace-stat-icon pink-bg">
                ✓
            </div>

            <div>
                <span class="stat-label">Completed Today</span>
                <strong class="stat-number">42</strong>
                <span class="stat-change positive">
                    +18.4%
                </span>
            </div>

        </article>


        <article class="workspace-stat-card">

            <div class="workspace-stat-icon orange-bg">
                H
            </div>

            <div>
                <span class="stat-label">Human Reviews</span>
                <strong class="stat-number">7</strong>
                <span class="stat-change">
                    3 awaiting review
                </span>
            </div>

        </article>

    </div>

</section>


<!-- Main Workspace -->
<section class="workspace-section">

    <div class="workspace-main-grid">

        <!-- Shared Canvas -->
        <article class="workspace-panel canvas-panel">

            <div class="panel-header">

                <div>
                    <h3>Shared Execution Canvas</h3>
                    <p>Human and AI tasks being executed together.</p>
                </div>

                <button class="workspace-action-btn" type="button" onclick="addWorkspaceTask()">
                    + Add Task
                </button>

            </div>


            <div class="workspace-toolbar">

                <button class="workspace-filter active" type="button">
                    All
                </button>

                <button class="workspace-filter" type="button">
                    AI Tasks
                </button>

                <button class="workspace-filter" type="button">
                    Human Review
                </button>

                <button class="workspace-filter" type="button">
                    Completed
                </button>

            </div>


            <div class="workspace-task-list" id="workspaceTaskList">

                <!-- Task 1 -->
                <div class="workspace-task">

                    <div class="task-check">
                        <input type="checkbox" aria-label="Complete customer analysis task">
                    </div>

                    <div class="task-agent purple-bg">
                        AI
                    </div>

                    <div class="task-details">

                        <strong>Customer Support Analysis</strong>

                        <p>
                            Analyze recent support conversations
                            and identify recurring customer issues.
                        </p>

                        <div class="task-meta">
                            <span>AI Research Agent</span>
                            <span>•</span>
                            <span>Due in 24 min</span>
                        </div>

                        <div class="task-progress">
                            <div style="width: 78%;"></div>
                        </div>

                    </div>

                    <span class="task-status task-active">
                        In Progress
                    </span>

                </div>


                <!-- Task 2 -->
                <div class="workspace-task">

                    <div class="task-check">
                        <input type="checkbox" aria-label="Complete market intelligence task">
                    </div>

                    <div class="task-agent blue-bg">
                        AI
                    </div>

                    <div class="task-details">

                        <strong>Market Intelligence Report</strong>

                        <p>
                            Compare competitor positioning and prepare
                            an executive-level market summary.
                        </p>

                        <div class="task-meta">
                            <span>Market Intelligence Agent</span>
                            <span>•</span>
                            <span>Due in 46 min</span>
                        </div>

                        <div class="task-progress">
                            <div style="width: 56%;"></div>
                        </div>

                    </div>

                    <span class="task-status task-active">
                        In Progress
                    </span>

                </div>


                <!-- Task 3 -->
                <div class="workspace-task">

                    <div class="task-check">
                        <input type="checkbox" aria-label="Complete capability review task">
                    </div>

                    <div class="task-agent pink-bg">
                        HR
                    </div>

                    <div class="task-details">

                        <strong>Workforce Capability Review</strong>

                        <p>
                            Review AI-generated capability recommendations
                            before publishing them to the team.
                        </p>

                        <div class="task-meta">
                            <span>Human Expert</span>
                            <span>•</span>
                            <span>Awaiting review</span>
                        </div>

                        <div class="task-progress">
                            <div style="width: 91%;"></div>
                        </div>

                    </div>

                    <span class="task-status task-review">
                        Review
                    </span>

                </div>


                <!-- Task 4 -->
                <div class="workspace-task">

                    <div class="task-check">
                        <input type="checkbox" aria-label="Complete document intelligence task">
                    </div>

                    <div class="task-agent orange-bg">
                        AI
                    </div>

                    <div class="task-details">

                        <strong>Document Intelligence</strong>

                        <p>
                            Extract important information from uploaded
                            organizational documents.
                        </p>

                        <div class="task-meta">
                            <span>Document Agent</span>
                            <span>•</span>
                            <span>Due in 1 hr</span>
                        </div>

                        <div class="task-progress">
                            <div style="width: 34%;"></div>
                        </div>

                    </div>

                    <span class="task-status task-active">
                        In Progress
                    </span>

                </div>

            </div>

        </article>


        <!-- Active Agents -->
        <article class="workspace-panel agents-panel">

            <div class="panel-header">

                <div>
                    <h3>Active Agents</h3>
                    <p>Agents currently available.</p>
                </div>

            </div>


            <div class="agent-list">

                <div class="agent-card">

                    <div class="agent-avatar purple-bg">
                        MI
                    </div>

                    <div class="agent-info">

                        <strong>Market Intelligence</strong>

                        <span>
                            Research & Analysis
                        </span>

                    </div>

                    <span class="agent-online"></span>

                </div>


                <div class="agent-card">

                    <div class="agent-avatar blue-bg">
                        CS
                    </div>

                    <div class="agent-info">

                        <strong>Customer Support</strong>

                        <span>
                            Support Analysis
                        </span>

                    </div>

                    <span class="agent-online"></span>

                </div>


                <div class="agent-card">

                    <div class="agent-avatar pink-bg">
                        HR
                    </div>

                    <div class="agent-info">

                        <strong>Workforce Analyst</strong>

                        <span>
                            Capability Planning
                        </span>

                    </div>

                    <span class="agent-online"></span>

                </div>


                <div class="agent-card">

                    <div class="agent-avatar orange-bg">
                        DI
                    </div>

                    <div class="agent-info">

                        <strong>Document Intelligence</strong>

                        <span>
                            Knowledge Extraction
                        </span>

                    </div>

                    <span class="agent-online"></span>

                </div>

            </div>


            <button
                type="button"
                class="manage-agents-btn"
                onclick="showWorkspaceMessage('Agent management interface opened.')"
            >
                Manage Agents →
            </button>

        </article>

    </div>

</section>


<!-- Human Review -->
<section class="workspace-section">

    <div class="section-heading">

        <div>
            <h2>Human Review Queue</h2>

            <p>
                AI outputs waiting for expert validation.
            </p>
        </div>

        <span class="review-count">
            3 awaiting review
        </span>

    </div>


    <div class="review-grid">

        <article class="review-card">

            <div class="review-card-top">

                <div class="review-agent purple-bg">
                    AI
                </div>

                <span class="task-status task-review">
                    Needs Review
                </span>

            </div>

            <h3>Customer Response Recommendation</h3>

            <p>
                AI generated a response to a high-priority customer
                escalation and is waiting for human approval.
            </p>

            <div class="review-meta">
                Generated by Customer Support Agent
            </div>

            <div class="review-actions">

                <button
                    type="button"
                    class="review-btn approve"
                    onclick="approveReview(this)"
                >
                    ✓ Approve
                </button>

                <button
                    type="button"
                    class="review-btn edit"
                    onclick="showWorkspaceMessage('Edit mode enabled for this AI output.')"
                >
                    Edit
                </button>

            </div>

        </article>


        <article class="review-card">

            <div class="review-card-top">

                <div class="review-agent blue-bg">
                    AI
                </div>

                <span class="task-status task-review">
                    Needs Review
                </span>

            </div>

            <h3>Competitor Analysis Summary</h3>

            <p>
                Market Intelligence Agent has prepared a competitive
                analysis that requires expert verification.
            </p>

            <div class="review-meta">
                Generated by Market Intelligence Agent
            </div>

            <div class="review-actions">

                <button
                    type="button"
                    class="review-btn approve"
                    onclick="approveReview(this)"
                >
                    ✓ Approve
                </button>

                <button
                    type="button"
                    class="review-btn edit"
                    onclick="showWorkspaceMessage('Edit mode enabled for this AI output.')"
                >
                    Edit
                </button>

            </div>

        </article>


        <article class="review-card">

            <div class="review-card-top">

                <div class="review-agent pink-bg">
                    AI
                </div>

                <span class="task-status task-review">
                    Needs Review
                </span>

            </div>

            <h3>Capability Recommendation</h3>

            <p>
                Workforce Analyst created a capability recommendation
                based on recent human-agent interactions.
            </p>

            <div class="review-meta">
                Generated by Workforce Analyst
            </div>

            <div class="review-actions">

                <button
                    type="button"
                    class="review-btn approve"
                    onclick="approveReview(this)"
                >
                    ✓ Approve
                </button>

                <button
                    type="button"
                    class="review-btn edit"
                    onclick="showWorkspaceMessage('Edit mode enabled for this AI output.')"
                >
                    Edit
                </button>

            </div>

        </article>

    </div>

</section>


<!-- Activity -->
<section class="workspace-section">

    <div class="section-heading">

        <div>
            <h2>Live Collaboration Activity</h2>

            <p>
                Recent actions across the shared workspace.
            </p>
        </div>

    </div>


    <div class="workspace-activity">

        <div class="workspace-activity-item">

            <div class="activity-icon purple-bg">
                AI
            </div>

            <div>
                <strong>Customer Support Agent completed analysis</strong>

                <p>
                    24 conversations analyzed and categorized.
                </p>

                <span>2 minutes ago</span>
            </div>

        </div>


        <div class="workspace-activity-item">

            <div class="activity-icon blue-bg">
                H
            </div>

            <div>
                <strong>Human expert reviewed AI output</strong>

                <p>
                    Market intelligence summary approved with edits.
                </p>

                <span>7 minutes ago</span>
            </div>

        </div>


        <div class="workspace-activity-item">

            <div class="activity-icon pink-bg">
                +
            </div>

            <div>
                <strong>New human-agent collaboration started</strong>

                <p>
                    Workforce Analyst assigned a capability review.
                </p>

                <span>14 minutes ago</span>
            </div>

        </div>

    </div>

</section>


<!-- Collaboration CTA -->
<section class="workspace-cta">

    <div>

        <span>SHARED EXECUTION CANVAS</span>

        <h2>
            Human expertise meets
            <span class="gradient-text">AI execution.</span>
        </h2>

        <p>
            Keep people in control while AI handles repetitive
            execution, research, analysis, and workflow operations.
        </p>

    </div>

    <button
        type="button"
        class="btn-gradient"
        onclick="addWorkspaceTask()"
    >
        + Create Shared Task
    </button>

</section>


<!-- Workspace Notification -->
<div id="workspaceMessage" class="workspace-message"></div>


<script>
function showWorkspaceMessage(message) {

    const box = document.getElementById('workspaceMessage');

    if (!box) return;

    box.textContent = message;
    box.classList.add('show');

    setTimeout(() => {
        box.classList.remove('show');
    }, 2500);
}


function addWorkspaceTask() {

    const taskList = document.getElementById('workspaceTaskList');

    if (!taskList) return;

    const task = document.createElement('div');

    task.className = 'workspace-task new-task';

    task.innerHTML = `
        <div class="task-check">
            <input type="checkbox" aria-label="Complete new shared task">
        </div>

        <div class="task-agent purple-bg">
            NEW
        </div>

        <div class="task-details">
            <strong>New Shared Collaboration Task</strong>

            <p>
                A new human-agent task has been added to the shared workspace.
            </p>

            <div class="task-meta">
                <span>Human + AI</span>
                <span>•</span>
                <span>Just created</span>
            </div>

            <div class="task-progress">
                <div style="width: 5%;"></div>
            </div>
        </div>

        <span class="task-status task-active">
            New
        </span>
    `;

    taskList.prepend(task);

    showWorkspaceMessage('New shared task created successfully.');
}


function approveReview(button) {

    const card = button.closest('.review-card');

    if (!card) return;

    const status = card.querySelector('.task-status');

    if (status) {
        status.textContent = 'Approved';
        status.classList.remove('task-review');
        status.classList.add('task-approved');
    }

    button.disabled = true;
    button.textContent = '✓ Approved';

    showWorkspaceMessage('AI output approved by human expert.');
}
</script>


<?php
require_once __DIR__ . '/includes/app-footer.php';
?>