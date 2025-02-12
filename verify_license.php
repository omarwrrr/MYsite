<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>التحقق من الرخصة - مدرسة المعدات الثقيلة بالإسماعيلية</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <div class="header-container">
      <h1>مدرسة المعدات الثقيلة بالإسماعيلية</h1>
      <nav>
        <ul>
          <li><a href="login.php">تسجيل الدخول</a></li>
          <li><a href="verify_license.php">التحقق من الرخصة</a></li>
          <li><a href="equipment.php">المعدات</a></li>
          <li><a href="courses.php">الدورات التدريبية</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <main>
    <div class="form-container">
      <h2>التحقق من الرخصة</h2>
      <form action="verify_process.php" method="POST">
        <label for="license_id">رقم الرخصة:</label>
        <input type="text" id="license_id" name="license_id" required>
        <button type="submit">تحقق</button>
      </form>
    </div>
  </main>
  <footer>
    <p>&copy; 2025 مدرسة المعدات الثقيلة بالإسماعيلية</p>
  </footer>
</body>
</html>
