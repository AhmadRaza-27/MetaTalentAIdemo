<?php
$pageTitle = 'Settings';

require_once __DIR__ . '/includes/app-header.php';
?>

<!-- ============================================================
     SETTINGS HERO
============================================================ -->

<section class="settings-hero">

    <div>
        <p class="settings-eyebrow">PLATFORM CONFIGURATION</p>

        <h2>
            Workspace
            <span class="gradient-text">Settings</span>
        </h2>

        <p class="settings-description">
            Configure your MetatalentAI workspace, appearance, notifications,
            and collaboration preferences.
        </p>
    </div>

    <div class="settings-status">
        <span class="settings-status-dot"></span>

        <div>
            <strong>System Preferences</strong>
            <small>Changes are saved automatically</small>
        </div>
    </div>

</section>


<!-- ============================================================
     APPEARANCE
============================================================ -->

<section class="settings-section">

    <div class="settings-section-heading">
        <div>
            <h2>Appearance</h2>
            <p>Customize how the MetatalentAI workspace looks.</p>
        </div>
    </div>

    <div class="settings-panel">

        <!-- Dark Mode -->

        <div class="settings-row">

            <div class="settings-row-icon purple-bg">
                ☼
            </div>

            <div class="settings-row-content">

                <strong>Dark Mode</strong>

                <p>
                    Switch between the light and dark workspace interface.
                    Your preference will be remembered on this device.
                </p>

            </div>

            <label class="theme-switch">

                <input
                    type="checkbox"
                    id="darkModeToggle"
                    aria-label="Toggle dark mode"
                >

                <span class="theme-slider"></span>

            </label>

        </div>


        <!-- Compact Interface -->

        <div class="settings-row">

            <div class="settings-row-icon blue-bg">
                ◐
            </div>

            <div class="settings-row-content">

                <strong>Compact Interface</strong>

                <p>
                    Use a more compact layout to display additional
                    information on your screen.
                </p>

            </div>

            <label class="theme-switch">

                <input
                    type="checkbox"
                    id="compactModeToggle"
                >

                <span class="theme-slider"></span>

            </label>

        </div>

    </div>

</section>


<!-- ============================================================
     WORKSPACE PREFERENCES
============================================================ -->

<section class="settings-section">

    <div class="settings-section-heading">

        <div>

            <h2>Workspace Preferences</h2>

            <p>
                Configure how your collaboration workspace behaves.
            </p>

        </div>

    </div>

    <div class="settings-panel">

        <!-- AI Activity -->

        <div class="settings-row">

            <div class="settings-row-icon pink-bg">
                AI
            </div>

            <div class="settings-row-content">

                <strong>AI Activity Updates</strong>

                <p>
                    Receive activity updates when agents complete,
                    start, or hand off tasks.
                </p>

            </div>

            <label class="theme-switch">

                <input
                    type="checkbox"
                    id="aiActivityToggle"
                    checked
                >

                <span class="theme-slider"></span>

            </label>

        </div>


        <!-- Human Review -->

        <div class="settings-row">

            <div class="settings-row-icon orange-bg">
                H
            </div>

            <div class="settings-row-content">

                <strong>Human Review Notifications</strong>

                <p>
                    Notify you when an AI output requires human validation.
                </p>

            </div>

            <label class="theme-switch">

                <input
                    type="checkbox"
                    id="humanReviewToggle"
                    checked
                >

                <span class="theme-slider"></span>

            </label>

        </div>


        <!-- Automatic Handoff -->

        <div class="settings-row">

            <div class="settings-row-icon purple-bg">
                ⇄
            </div>

            <div class="settings-row-content">

                <strong>Automatic Task Handoff</strong>

                <p>
                    Allow eligible tasks to move between agents and
                    human experts automatically.
                </p>

            </div>

            <label class="theme-switch">

                <input
                    type="checkbox"
                    id="taskHandoffToggle"
                    checked
                >

                <span class="theme-slider"></span>

            </label>

        </div>

    </div>

</section>


<!-- ============================================================
     NOTIFICATIONS
============================================================ -->

<section class="settings-section">

    <div class="settings-section-heading">

        <div>

            <h2>Notifications</h2>

            <p>
                Choose which workspace events should generate notifications.
            </p>

        </div>

    </div>

    <div class="notification-grid">

        <!-- Agent Completed -->

        <article class="notification-card">

            <div class="notification-card-icon purple-bg">
                AI
            </div>

            <div>

                <strong>Agent Completed Task</strong>

                <p>
                    Notify when an AI agent completes an assigned task.
                </p>

            </div>

            <span class="notification-enabled">
                Enabled
            </span>

        </article>


        <!-- Task Handoff -->

        <article class="notification-card">

            <div class="notification-card-icon blue-bg">
                ⇄
            </div>

            <div>

                <strong>Task Handoff</strong>

                <p>
                    Notify when work moves between human and AI.
                </p>

            </div>

            <span class="notification-enabled">
                Enabled
            </span>

        </article>


        <!-- Review Required -->

        <article class="notification-card">

            <div class="notification-card-icon pink-bg">
                !
            </div>

            <div>

                <strong>Review Required</strong>

                <p>
                    Notify when an AI result requires human approval.
                </p>

            </div>

            <span class="notification-enabled">
                Enabled
            </span>

        </article>

    </div>

</section>


<!-- ============================================================
     SYSTEM INFORMATION
============================================================ -->

<section class="settings-section">

    <div class="settings-section-heading">

        <div>

            <h2>System Information</h2>

            <p>
                Information about this MetatalentAI workspace.
            </p>

        </div>

    </div>

    <div class="system-info-grid">

        <!-- Platform -->

        <div class="system-info-card">

            <span>PLATFORM</span>

            <strong>MetatalentAI</strong>

            <small>Orion X 2.0</small>

        </div>


        <!-- Workspace -->

        <div class="system-info-card">

            <span>WORKSPACE</span>

            <strong>Human × Agent</strong>

            <small>Shared Execution Environment</small>

        </div>


        <!-- Status -->

        <div class="system-info-card">

            <span>SYSTEM STATUS</span>

            <strong class="system-online">
                ● Operational
            </strong>

            <small>
                All workspace services available
            </small>

        </div>


        <!-- Memory -->

        <div class="system-info-card">

            <span>MEMORY</span>

            <strong>1,284 Insights</strong>

            <small>
                Captured across 6 teams
            </small>

        </div>

    </div>

</section>


<!-- ============================================================
     RESET SETTINGS
============================================================ -->

<section class="settings-danger-section">

    <div>

        <span>RESET PREFERENCES</span>

        <h3>Restore Default Settings</h3>

        <p>
            Reset appearance and workspace preferences to their
            default configuration.
        </p>

    </div>

    <button
        type="button"
        class="reset-settings-btn"
        onclick="resetWorkspaceSettings()"
    >
        Reset Settings
    </button>

</section>


<!-- ============================================================
     SETTINGS MESSAGE
============================================================ -->

<div
    id="settingsMessage"
    class="settings-message"
></div>


<!-- ============================================================
     SETTINGS JAVASCRIPT
============================================================ -->

<script>

document.addEventListener('DOMContentLoaded', function () {

    /*
     * Remove the temporary dark-mode preload class.
     */
    document.documentElement.classList.remove('dark-preload');


    /*
     * Get appearance controls.
     */

    const darkModeToggle =
        document.getElementById('darkModeToggle');

    const compactModeToggle =
        document.getElementById('compactModeToggle');


    /*
     * Load saved Dark Mode preference.
     */

    const darkMode =
        localStorage.getItem('metatalent-dark-mode') === 'true';

    if (darkMode) {

        document.body.classList.add('dark-mode');

        if (darkModeToggle) {
            darkModeToggle.checked = true;
        }

    }


    /*
     * Load saved Compact Mode preference.
     */

    const compactMode =
        localStorage.getItem('metatalent-compact-mode') === 'true';

    if (compactMode) {

        document.body.classList.add('compact-mode');

        if (compactModeToggle) {
            compactModeToggle.checked = true;
        }

    }


    /*
     * Dark Mode switch.
     */

    if (darkModeToggle) {

        darkModeToggle.addEventListener('change', function () {

            const enabled = this.checked;

            document.body.classList.toggle(
                'dark-mode',
                enabled
            );

            localStorage.setItem(
                'metatalent-dark-mode',
                enabled
            );

            showSettingsMessage(
                enabled
                    ? 'Dark mode enabled.'
                    : 'Light mode enabled.'
            );

        });

    }


    /*
     * Compact Mode switch.
     */

    if (compactModeToggle) {

        compactModeToggle.addEventListener('change', function () {

            const enabled = this.checked;

            document.body.classList.toggle(
                'compact-mode',
                enabled
            );

            localStorage.setItem(
                'metatalent-compact-mode',
                enabled
            );

            showSettingsMessage(
                enabled
                    ? 'Compact interface enabled.'
                    : 'Standard interface enabled.'
            );

        });

    }


    /*
     * Workspace preference switches.
     */

    const preferenceToggles = [
        'aiActivityToggle',
        'humanReviewToggle',
        'taskHandoffToggle'
    ];


    preferenceToggles.forEach(function (id) {

        const toggle = document.getElementById(id);

        if (!toggle) return;

        toggle.addEventListener('change', function () {

            showSettingsMessage(
                this.checked
                    ? 'Preference enabled.'
                    : 'Preference disabled.'
            );

        });

    });

});


/*
 * Display a temporary settings notification.
 */

function showSettingsMessage(message) {

    const box =
        document.getElementById('settingsMessage');

    if (!box) return;

    box.textContent = message;

    box.classList.add('show');


    setTimeout(function () {

        box.classList.remove('show');

    }, 2200);

}


/*
 * Reset all workspace appearance preferences.
 */

function resetWorkspaceSettings() {

    /*
     * Remove saved preferences.
     */

    localStorage.removeItem(
        'metatalent-dark-mode'
    );

    localStorage.removeItem(
        'metatalent-compact-mode'
    );


    /*
     * Remove active classes.
     */

    document.body.classList.remove(
        'dark-mode'
    );

    document.body.classList.remove(
        'compact-mode'
    );


    /*
     * Reset Dark Mode switch.
     */

    const darkModeToggle =
        document.getElementById('darkModeToggle');

    if (darkModeToggle) {
        darkModeToggle.checked = false;
    }


    /*
     * Reset Compact Mode switch.
     */

    const compactModeToggle =
        document.getElementById('compactModeToggle');

    if (compactModeToggle) {
        compactModeToggle.checked = false;
    }


    /*
     * Reset workspace preference switches.
     */

    const aiActivityToggle =
        document.getElementById('aiActivityToggle');

    const humanReviewToggle =
        document.getElementById('humanReviewToggle');

    const taskHandoffToggle =
        document.getElementById('taskHandoffToggle');


    if (aiActivityToggle) {
        aiActivityToggle.checked = true;
    }

    if (humanReviewToggle) {
        humanReviewToggle.checked = true;
    }

    if (taskHandoffToggle) {
        taskHandoffToggle.checked = true;
    }


    /*
     * Show confirmation.
     */

    showSettingsMessage(
        'Workspace settings restored to default.'
    );

}

</script>


<?php
require_once __DIR__ . '/includes/app-footer.php';
?>