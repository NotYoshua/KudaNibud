<?php
session_start();

// Если пользователь не авторизован — выгоняем его на страницу входа
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Личный кабинет — КудаНибудь</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include 'includes/header.php'; ?>

<section class="container" style="padding: 60px 0;">
  <div style="background: white; padding: 40px; border-radius: 18px; box-shadow: 0 4px 18px rgba(0,0,0,0.08);">
    <h1 style="color: #1976d2; margin-bottom: 15px;">Добро пожаловать, <?= htmlspecialchars($_SESSION['user_name']) ?>!</h1>
    <p style="font-size: 18px; margin-bottom: 30px; opacity: 0.8;">Рады видеть вас в нашем туристическом агентстве. Здесь вы можете управлять своими подписками и турами.</p>
    
    <div style="border-top: 1px solid #dce3ea; padding-top: 25px;">
      <h3 style="margin-bottom: 15px;">Ваш профиль:</h3>
      <p style="font-size: 16px; margin-bottom: 8px;"><strong>Имя пользователя:</strong> <?= htmlspecialchars($_SESSION['user_name']) ?></p>
      <p style="font-size: 16px; margin-bottom: 20px;"><strong>Ваш Email:</strong> <?= htmlspecialchars($_SESSION['user_email']) ?></p>
      
      <span style="display: inline-block; background: #e3f2fd; color: #0d47a1; padding: 8px 16px; border-radius: 20px; font-weight: bold; font-size: 14px;">Статус: Постоянный клиент</span>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

</body>
</html>