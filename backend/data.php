<?php
$data = [
    'pieLabels' => ["Coder", "Singer", "Control Freak", "Reincarnated Raccoon"],
    'pieData' => [60, 10, 20, 10],
    'barLabels' => ["HTML/CSS", "JavaScript/React", "Tea Drinking", "PHP", "NodeJs/ExpressJS", "Bulma", "Gaming", "Swearing at /my computer"],
    'barData' => [80, 70, 95, 68, 70, 55, 85, 100]
];

// Vérification si les données sont correctes
if (empty($data['barLabels']) || empty($data['barData'])) {
    echo json_encode(['error' => 'Données manquantes']);
    exit;
}

header('Content-Type: application/json');
echo json_encode($data);
