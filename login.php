<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>تسجيل الدخول - مدرسة المعدات الثقيلة بالإسماعيلية</title>
  <link rel="stylesheet" href="style.css">
  <!-- تضمين خط Cairo من Google Fonts -->
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
      <h2>تسجيل الدخول</h2>
      <form action="login_process.php" method="POST">
        <label for="username">اسم المستخدم:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">كلمة المرور:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">دخول</button>
      </form>
    </div>
  </main>
  <footer>
    <p>&copy; 2025 مدرسة المعدات الثقيلة بالإسماعيلية</p>
  </footer>
</body>
</html>
