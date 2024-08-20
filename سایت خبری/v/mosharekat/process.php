<?php
// this is bog 
// دریافت داده‌های JSON
$data = json_decode(file_get_contents('php://input'), true);

// بررسی اینکه آیا کلاس‌ها وجود دارند یا خیر
if (isset($data['className'])) {
    $className = $data['className'];
    // اینجا می‌توانید از $className استفاده کنید
    // به عنوان مثال، می‌توانید آن را در یک متغیر PHP ذخیره کنید
    echo json_encode(['message' => 'کلاس دریافت شد: ' . $className]);
} else {
    echo json_encode(['message' => 'کلاس دریافت نشد.']);
}

