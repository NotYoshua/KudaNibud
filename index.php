<?php
// ЭТАП 7: Инициализация сессии и получение данных из БД
session_start();

// Подключаем настройки базы данных
require_once 'config/db.php';

// Делаем запрос к таблице туров
$stmt = $pdo->query('SELECT * FROM tours');
// Записываем все туры в переменную $tours
$tours = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>КудаНибудь — Туристическое агентство</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include 'includes/header.php'; ?>

<section class="hero">
  <div class="container">
    <div class="hero-content">
      <h1>Открой мир вместе с КудаНибудь</h1>
      <p>Лучшие путешествия по всему миру по выгодным ценам. Турция, Дубай, Египет, Таиланд и другие направления.</p>
      <a href="#" class="btn btn-primary">Подобрать тур</a>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <h2 class="section-title">Популярные туры</h2>

    <div class="cards">

      <?php foreach ($tours as $tour): ?>
      <div class="card">
        <img src="images/<?= htmlspecialchars($tour['image']) ?>" alt="<?= htmlspecialchars($tour['title']) ?>">
        <div class="card-body">
          <h3>
            <?= htmlspecialchars($tour['title']) ?>
          </h3>
          <p>
            <?= htmlspecialchars($tour['description']) ?>
          </p>
          <div class="price">
            от <?= number_format($tour['price'], 0, '.', ' ') ?> ₸
          </div>
          <a href="#" class="btn btn-primary">Подробнее</a>
        </div>
      </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>

<section>
  <div class="container">
    <h2 class="section-title">Почему выбирают нас</h2>

    <div class="advantages">
      <div class="advantage">
        <h3>Лучшие цены</h3>
        <p>Подбираем выгодные туры и скидки для клиентов.</p>
      </div>

      <div class="advantage">
        <h3>Поддержка 24/7</h3>
        <p>Мы всегда остаёмся на связи во время вашего путешествия.</p>
      </div>

      <div class="advantage">
        <h3>Проверенные отели</h3>
        <p>Работаем только с надёжными туристическими партнёрами.</p>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <h2 class="section-title">Отзывы клиентов</h2>

    <div class="reviews">

      <div class="review">
        <p>Отличный сервис! Отдых в Турции прошёл идеально, всё организовали очень быстро.</p>
        <div class="review-author">— Алина Смирнова</div>
      </div>

      <div class="review">
        <p>Подобрали отличный тур в Дубай по хорошей цене. Обязательно обратимся снова.</p>
        <div class="review-author">— Максим Иванов</div>
      </div>

      <div class="review">
        <p>Спасибо за отпуск в Таиланде! Всё было на высшем уровне.</p>
        <div class="review-author">— Екатерина Волкова</div>
      </div>

    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="cta">
      <h2>Готовы к путешествию?</h2>
      <p>Оставьте заявку и мы подберём лучший тур именно для вас.</p>
      <br>
      <a href="#" class="btn btn-primary">Оставить заявку</a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

</body>
</html>