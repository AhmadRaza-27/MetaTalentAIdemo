<?php
$pageTitle = 'Orchestration Dashboard';
require_once __DIR__ . '/includes/app-header.php';
?>

<!-- Live metrics, pulled from system_metrics via api/get-metrics.php -->
<div class="metrics-grid" id="metricsGrid" data-reveal>
    <p>Loading live metrics…</p>
</div>

<!-- Task split -->
<div class="panel" data-reveal>
    <h2 class="panel-title">Task Split</h2>
    <div class="task-split-grid">
        <?php foreach ($taskSplit as $t): ?>
            <div class="task-split-card">
                <p class="task-value"><?php echo htmlspecialchars($t['value']); ?></p>
                <p class="task-label"><?php echo htmlspecialchars($t['label']); ?></p>
                <p class="task-delta"><?php echo htmlspecialchars($t['delta']); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Ratio groups -->
<div class="panel-grid" data-reveal>
    <?php foreach ($ratioGroups as $group): ?>
        <div class="panel">
            <h3 class="panel-subtitle"><?php echo htmlspecialchars($group['title']); ?></h3>
            <ul class="ratio-list">
                <?php foreach ($group['rows'] as $row): ?>
                    <li>
                        <span><?php echo htmlspecialchars($row['label']); ?></span>
                        <strong><?php echo htmlspecialchars($row['value']); ?></strong>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endforeach; ?>
</div>

<?php require_once __DIR__ . '/includes/app-footer.php'; ?>